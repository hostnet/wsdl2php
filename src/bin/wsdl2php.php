<?php
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Float_;
use phpDocumentor\Reflection\Types\String_;

// +------------------------------------------------------------------------+
// | wsdl2php                                                               |
// +------------------------------------------------------------------------+
// | Copyright (C) 2005 Knut Urdalen <knut.urdalen@gmail.com>               |
// +------------------------------------------------------------------------+
// | Contributors:                                                          |
// | AustP <https://github.com/AustP>                                       |
// +------------------------------------------------------------------------+
// | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS    |
// | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT      |
// | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR  |
// | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT   |
// | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,  |
// | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT       |
// | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,  |
// | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY  |
// | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT    |
// | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE  |
// | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.   |
// +------------------------------------------------------------------------+
// | This software is licensed under the LGPL license. For more information |
// | see http://wsdl2php.sf.net                                             |
// +------------------------------------------------------------------------+

$options = getOptions('i:n:o:pg:sdvt4');
/**
 * -i <path_to_wsdl>  | path to the wsdl file (can also be an accessible URL)
 * -o <output_dir>    | directory used for output
 * -n <namespace>     | namespace to use
 * -g <sub_namespace> | sub-namespace to use
 * -p                 | use pear style Namespace - defaults to PSR-0
 * -s                 | generate code for server side
 * -d                 | turn off documentation generation
 * -v                 | generate all code (docs and unused)
 * -t                 | turn off tab generated code, use '4 spaces' (PSR-2) instead
 * -4                 | psr 4 namespace and spaces instead of tabs (using -t)
 */

$psr4= isset($options['4']);

if(!isset($options['i']))
	die("usage: php wsdl2php.php -i <path_to_wsdl> [-n <namespace>] [-o <output_path>] [-g <sub_namespace>] [-p] [-s] [-d] [-v] [-t] [-4]\n");

$wsdl = $options['i'];
$namespace = '';
$pear_style = isset($options['p']);
if(isset($options['n']))
	$namespace = $options['n'];

if(isset($options['o']))
	chdir($options['o']);

$sub_namespace = $namespace;
if(isset($options['g']))
	$sub_namespace = $namespace.($pear_style? ('_'.$options['g']): ('\\'.$options['g']));


//var for alligning generated code fast
$ident_char = "\t";
$ident2="        ";
$ident3="            ";
$ident4="            ";

if(isset($options['t']) || $psr4){
  $ident_char = "    ";
}

$server = isset($options['s']);
$verbose = isset($options['v']);
$documentation = $verbose? true: !isset($options['d']);

//Predefined keyswords as of php 5.4 - http://www.php.net/manual/en/reserved.keywords.php
$keywords = array(
	'__halt_compiler', 'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch',
	'class', 'clone', 'const', 'continue', 'declare', 'dateTime', 'default', 'die', 'do', 'echo', 'else',
	'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit',
	'extends', 'final', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include',
	'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'namespace', 'new',
	'or', 'print', 'private', 'protected', 'public', 'require', 'require_once', 'return', 'static',
	'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor'
);
$primitive_types = array(
	'ArrayOfFloat', 'ArrayOfInt', 'ArrayOfString', 'base64Binary', 'boolean', 'date', 'dateTime',
	'decimal', 'double', 'float', 'hexBinary', 'int', 'long', 'short', 'string', 'UNKOWN', 'void'
);


print("\nConnecting to WSDL.");
try{
	$client = new SoapClient($wsdl);
}catch(SoapFault $e){
	print("[ERROR]\n");
	die($e);
}
print("[OK]\n");

print("Loading WSDL".$wsdl);
$dom = loadWSDL($wsdl);
print(".");

$doc = array(
	'service'=>'',
	'types'=>array(),
	'operations'=>array(),
	'members'=>array()
);

if($documentation){
	$nodes = $dom->getElementsByTagName('documentation');
	foreach($nodes as $node){
		$parent = $node->parentNode;
		if($parent->localName == 'annotation')
			$parent = $parent->parentNode;

		$name = $parent->getAttribute('name');
		$value = $node->nodeValue;

		if($parent->localName == 'service'){
			$doc['service'] = trim($node->nodeValue);
		}elseif($parent->localName == 'operation'){
			$doc['operations'][$name] = trim($value);
		}elseif($parent->localName == 'element'){
			$doc['members'][$name] = trim($value);
		}elseif($parent->localName == 'complexType'){
			$doc['types'][$name] = trim($value);
		}
	}
}
print(".");

$nodes = $dom->getElementsByTagName('definitions');
$uri = $nodes->length? $nodes->item(0)->getAttribute('targetNamespace'): '';
print(".");

//If the $wsdl is a local file, remove the full path
//If it's a URL keep the URL.
$wsdl_location = $wsdl;
if(is_file($wsdl_location)){
	$wsdl_location = (new SplFileInfo($wsdl))->getBasename();
}

$service = array(
	'class'=>$dom->getElementsByTagNameNS('*', 'service')->item(0)->getAttribute('name'),
	'wsdl'=>$wsdl_location,
	'doc'=>$doc['service'],
	'functions'=>array()
);
print("[OK]\n");

//ensure legal class name (I don't think using . and whitespace is allowed in terms of the SOAP standard, should check this out...)
$service['class'] = str_replace(array(' ','.','-'), '_', $service['class']);

if(in_array(strtolower($service['class']), $keywords))
	$service['class'] .= 'Service';

$service['class'] .= $server? 'Server': 'Client';

print("Getting Functions.");
$type_references = array();
$parameters = array();
$operations = $client->__getFunctions();
foreach($operations as $operation){
	$matches = array();
	if(preg_match('/^(\w[\w\d_]*) (\w[\w\d_]*)\(([\w\$\d,_ ]*)\)$/', $operation, $matches)){
		$return = $matches[1];
		$method = $matches[2];
		$args = $matches[3];
	}elseif(preg_match('/^(list\([\w\$\d,_ ]*\)) (\w[\w\d_]*)\(([\w\$\d,_ ]*)\)$/', $operation, $matches)){
		$return = $matches[1];
		$method = $matches[2];
		$args = $matches[3];
	}else{
		print("\n\tInvalid function call: ".$operation." -- Skipping\n");
		continue;
	}

	$params = array();
	$args = explode(', ', $args);
	foreach($args as $arg){
		$param = explode(' ', $arg);

		$hint = '';
		if(count($param) == 2){
			$hint = $param[0];

			if(isHint($hint, $primitive_types)){
				if($namespace){
					$hint = $pear_style?
						$sub_namespace.$hint:
						suppressKeywords('\\'.$sub_namespace.'\\'.str_replace('_', '\\', $hint), $keywords);
				}
			}else{
				$hint = '';
			}

			$name = $param[1];
		}else{
			$hint = '';
			$name = $param[0];
		}

		if($hint)
			$parameters[] = $hint;

		$params[] = $hint.($hint? ' ': '').$name;
	}

	$function = array(
		'name'=>$method,
		'method'=>$method,
		'return'=>$return,
		'doc'=>isset($doc['operations'][$method])? $doc['operations'][$method]: '',
		'params'=>$params
	);

	if(!in_array($return, $keywords) && !in_array($return, $primitive_types))
		$type_references[] = $return;

	if(in_array(strtolower($function['method']), $keywords))
		$function['name'] = '_'.$function['method'];

		if(preg_match('/_/', $function['name']))
		{
			$function['name']=str_replace("_", "", $function['name']);
		}

	if(strtolower($service['class']) == strtolower($function['method']))
		$function['name'] = '_'.$function['method'];

	$service['functions'][$function['name']] = $function;
	print(".");
}
print("[OK]\n");

print("Getting Extensions.");
$extensions = array();
$nodes = $dom->getElementsByTagName('extension');
foreach($nodes as $node){
	$parent = $node->parentNode;
	while(!empty($parent) && $parent->localName !== 'complexType')
		$parent = $parent->parentNode;

	if(!empty($parent)){
		$name = $parent->attributes->getNamedItem('name')->nodeValue;
		$base = explode(':', $node->attributes->getNamedItem('base')->nodeValue);
		$base = end($base);

		if(!in_array($base, $primitive_types) && !in_array($name, $primitive_types))
			$extensions[$name] = $base;
	}
	print(".");
}
print("[OK]\n");

print("Getting Substitutions & Occurrences.");
$max_occurs = array();
$substitutions = array();
$nodes = $dom->getElementsByTagName('element');
foreach($nodes as $node){
	$type = $node->getAttribute('type');
	if(strpos($type, ':'))
		list($tmp, $type) = explode(':', $type);

	$sub = $node->getAttribute('substitutionGroup');
	if(strpos($sub, ':'))
		list($tmp, $sub) = explode(':', $sub);

	if($type && $sub){
		$substitutions[$sub] = $type;
		print(".");
	}

	$ref = $node->getAttribute('ref');
	if(strpos($ref, ':'))
		list($tmp, $ref) = explode(':', $ref);

	if($node->hasAttribute('maxOccurs') && $node->getAttribute('maxOccurs') != 1){
		$max_occurs[$ref] = $ref;
		print(".");
	}
}
print("[OK]\n");

print("Getting Types.");
$service['types'] = array();
$types = $client->__getTypes();
foreach($types as $type){
	$parts = explode("\n", $type);
	$class = explode(" ", $parts[0]);
	$class = suppressKeywords(trim($class[1]), $keywords);

	if(substr($class, -2, 2) == '[]' || substr($class, 0, 7) == 'ArrayOf' || in_array($class, $primitive_types))
		continue;

	$members = array();
	for($i=1, $l=count($parts)-1; $i<$l; $i++){
		$parts[$i] = trim($parts[$i]);
		list($type, $member) = explode(" ", substr($parts[$i], 0, strlen($parts[$i])-1));

		if($type == 'anyType' && isset($substitutions[$member]))
			$type = $substitutions[$member];

		if(preg_match('/^$\w[\w\d_]*$/', $member)){
			print("\n\tIllegal syntax for member variable: ".$member." -- Skipping\n");
			continue;
		}

		if(strpos($member, ':'))
			list($tmp, $member) = explode(':', $member);

		//OBS: Skip member if already presented (this shouldn't happen, but I've actually seen it in a WSDL-file)
		foreach($members as $m){
			if($m['member'] == $member)
				continue 2;
		}
		$array = array(
			'member'=>$member,
			'type'=>$type
		);

		if(isset($max_occurs[$member]))
			$array['multiple'] = true;

		$members[] = $array;

		if(substr($type, -2, 2) == '[]')
			$type = substr($type, 0, -2);
		if(substr($type, 0, 7) == 'ArrayOf')
			$type = substr($type, 7);

		if(!in_array($type, $keywords) && !in_array($type, $primitive_types) && !in_array($type, array('anyType', 'ID', 'IDREF', 'IDREFS')))
			$type_references[] = $type;
	}

	$values = array();
	if(count($members) == 0)
		$values = checkForEnum($dom, $class);

	$full_class = $php_class = $class;
	if($namespace){
		$full_class = $pear_style?
			$sub_namespace.$class:
			suppressKeywords('\\'.$sub_namespace.'\\'.str_replace('_', '\\', $class), $keywords);

		//makes last word of full path first char uppercase (classname)
		$arr = explode('\\', $full_class);
		$arr[sizeof($arr)-1]=ucfirst($arr[sizeof($arr)-1]);
		$full_class=implode("\\", $arr);
		$full_class = makePascalCase($full_class);

		$parts = explode($pear_style? '_': '\\', $full_class);
		$php_class = $parts[count($parts)-1];
	}

	$service['types'][$class] = array(
		'php_class'=>$php_class,
		'class'=>$class,
		'full_class'=>$full_class,
		'members'=>$members,
		'values'=>$values
	);
	print(".");
}

//ensure that if we are extending a class, we are not overwriting parent members
foreach($service['types'] as $class=>$type){
	if(isset($extensions[$class])){
		$parent_members = array();
		$_members = $service['types'][$extensions[$class]]['members'];

		foreach($_members as $member){
			$parent_members[] = $member['member'];
		}

		foreach($type['members'] as $i=>$member){
			if(in_array($member['member'], $parent_members))
				unset($type['members'][$i]);
		}

		$service['types'][$class] = $type;
	}
}
print(".");

$types = array();
sortTypes($service['types'], $types);
print("[OK]\n");

$diff = array_diff($type_references, array_keys($types));
if(count($diff)){
	$diff = array_unique($diff);
	print("\nWARNING:\n");
	foreach($diff as $d){
		print("\tA variable was hinted as an instance of '".$d."' but no class was found with that name.\n");
	}
}

print("\n");
$code = "";
foreach($types as $index=>$type){
	if($namespace){
		$dirname = $sub_namespace;
		$filename = '';

		if($pear_style){
			$dirname = str_replace('_', '/', $dirname);
			$filename = $type['full_class'] . '.php';
		}else{
			$dirname = dirname(str_replace('\\', '/', $type['full_class']));
			if($dirname[0] == '/')
				$dirname = substr($dirname, 1);

			$filename = ucfirst($type['php_class']) . '.php';
		}

		if($psr4){
			$ns_dirname = trim(str_replace('\\', '/', $namespace));
			$dirname = ltrim(trim(str_replace($ns_dirname, '', $dirname)), '/');
		}

		if($dirname != '' && !is_dir($dirname)){
			$dirname=makePascalCase($dirname);
			mkdir($dirname, 0777, true);
		}

		if($dirname != ''){
			if(!$psr4)
			  $filename = $dirname . '/' .$filename;
			else
			{
				$tempfilename = makePascalCase(ucfirst($filename));
				$filename = $dirname . '/' .$tempfilename;
			}
		}
		$file = fopen($filename, 'w');
	}

	$parent_type = null;
	if(!empty($extensions[$type['class']]))
		foreach($service['types'] as $t){
			if($t['class'] === $extensions[$type['class']]){
				$parent_type = $t;
				break;
			}
		}

	$class = $type['full_class'];
	if($namespace && !$pear_style){
		$ns = str_replace('/', '\\', dirname(str_replace('\\', '/', $type['full_class'])));
		if($ns[0] == '\\')
			$ns = substr($ns, 1);
		$code = "\nnamespace ".$ns.";\n";
		$class = $type['php_class'];
	}

	if(!$verbose && !in_array($class, $extensions) && !in_array($class, $parameters) && !in_array($class, $type_references)){
		unset($service['types'][$index]);
		continue;
	}
	if($psr4)
		$class = ucfirst($class);
	if($documentation && isset($doc['types'][$class])){
		$code .= "\n/**";
		$code .= "\n * ".$class;
		$code .= "\n".parseDoc(" * ", $doc['types'][$class]);
		$code .= " */";
	}

	$class = makePascalCase($class);

	$code .= "\nclass ".$class.(!empty($parent_type)? " extends\n ".$parent_type['full_class']: "")."\n{";

	if(!$verbose && !count($type['values']) && !count($type['members'])){
		$code .= "}\n";
		continue;
	}

	$longestconstname='';
	$longestconstchars=0;
	foreach($type['values'] as $value){
		$value=generatePHPSymbol($value);
		if(strlen($value)>$longestconstchars){
			$longestconstname=$value;
			$longestconstchars = strlen($value);
		}
	}
	if($longestconstname!='')
	foreach($type['values'] as $value){
		$value=generatePHPSymbol($value);
		$lengthdiff = strlen($longestconstname)-strlen($value);
		$alligner='';
	   for($i=0;$i<$lengthdiff;$i++)
	   {
			$alligner.=" ";
	   }
		$code .= "\n" . $ident_char . "const ".strtoupper(generatePHPSymbol($value)).$alligner." = '".$value."';";
   }
	if(count($type['members'])>0)
	    $code .= "\n".$ident_char."// @codingStandardsIgnoreStart";
	foreach($type['members'] as $member){

		if($documentation){
			$code .= "\n" . $ident_char . "/**\n";
			if(!in_array($member['type'], $primitive_types) && $namespace){
				$hint = $pear_style?
					$sub_namespace.$member['type']:
					'\\'.$sub_namespace.'\\'.str_replace('_', '\\', $member['type']);

				if(strpos($hint, 'ArrayOf') !== false)
					$hint = 'array '.str_replace('ArrayOf', '', $hint);

				$code .= $ident_char . ' * @var '.$hint;
			}else{
				$code .= $ident_char. ' * @var '.(strpos($member['type'], 'ArrayOf') === 0?
					str_replace('ArrayOf', '', $member['type']).'[]':
					$member['type']);
			}

			if(isset($member['multiple']))
				$code .= ' or '.$member['type'].'[]';

			if(isset($doc['members'][$member['member']])){
				$code .= " | ".  substr(parseDoc($ident_char . " * ", $doc['members'][$member['member']]), strlen($ident_char . " * "));
				$code .= $ident_char . " */";
			}else{
				 $code .= "\n" . $ident_char . " */";
			}
		}
		$code .= "\n" . $ident_char . "public \$".$member['member'].";";
	}
	if(count($type['members'])>0)
	   $code .= "\n".$ident_char."// @codingStandardsIgnoreEnd\n";
	// add access method

	foreach($type['members'] as $member) {

	$codestylefunctionname = ucfirst(str_replace("_", "", $member['member']));
		$code .= sprintf("\n" .
		$ident_char . "/**\n".
		$ident_char . " * @param %s \$val\n" .
		$ident_char . " * @throws Exception\n" .
		$ident_char . " */\n" .
		$ident_char ."public function set%s(\$val)\n".$ident_char."{\n" .
		"%s" .
		$ident2 . "\$this->%s = \$val;\n" .
		$ident_char ."}\n", $member['type'], $codestylefunctionname, accessMethodCaster($member['type'], $member['member']), $member['member']);
	}
	rtrim($code);
	if(substr($code, -1)===';'||substr($code, -1)==='{'){
		$code .= "\n";
	}
	$code .= "}\n";

	if(isset($file)){
		fwrite($file, "<?php\n".$code);
		fclose($file);
		$code = "";
		print("[OK]\n");
	}
}

if(!$code && $namespace)
	$code .= "\nnamespace ".$namespace.";\n";

$code .= "\n";
$code .= "/**\n";
$code .= " * ".$service['class']."\n";
$code .= $documentation && $service['doc']? parseDoc(" * ", $service['doc']): '';
$code .= " */\n";

if(!$psr4){
	$code .= "class ".$service['class']." extends ".($namespace? "\\": "")."Soap".($server? 'Server': 'Client')." {\n\n";
	$code .= $ident_char . "const WSDL_FILE = \"".str_replace('\\', '\\\\', $service['wsdl'])."\";\n";
}
else{
	$code .= "class ".$service['class']." extends ".($namespace? "\\": "")."Soap".($server? 'Server': 'Client')."\n{\n";
	$code .= $ident_char . "const WSDL_FILE = \"".str_replace('\\', '\\\\', $service['wsdl'])."\";\n\n";
}



if(count($service['types'])){
	$code .= $ident_char. "private \$classmap = array(\n";
	foreach($service['types'] as $type){
		$code .= $ident2 . "'".$type['class']."' =>\n            '".$type['full_class']."',\n";
	}
	$code .= $ident_char . ");\n\n";
}else{
	$code .= "\n";
}

if(!$psr4)
{
	$code .= $ident_char . "public function __construct(\$wsdl = null, \$options = array()".($server? ", \$exit = false": "").") {\n";
}
else
{
	$code .= $ident_char . "public function __construct(\n".$ident2.
	"\$wsdl = null,\n".$ident2."\$options = array()".($server? ", \$exit = false": "")."\n".$ident_char.") {\n";
}


if($server){
	$code .= $ident2 . "if (\$exit)\n";
	$code .= $ident3 . "return;\n\n";
}

if(count($service['types'])){
	$temp = $psr4? 'foreach ' : 'foreach';
	$if4  = $psr4? 'if ' : 'if';
	$code .= $ident2 . $temp."(\$this->classmap as \$key => \$value) {\n";
	$code .= $ident3 .$if4. "(!isset(\$options['classmap'][\$key])) {\n";
	$code .= $ident4 . $ident_char ."\$options['classmap'][\$key] = \$value;\n";
	$code .= $ident3 . "}\n";
	$code .= $ident2 . "}\n";
}

if(!$server){
	$code .= $ident2 . $if4."(isset(\$options['headers'])) {\n";
	$code .= $ident3 . "\$this->__setSoapHeaders(\$options['headers']);\n";
	$code .= $ident2 . "}\n";
}

$code .= $ident2 . "parent::__construct(\$wsdl ? \$wsdl : self::WSDL_FILE, \$options);\n";

if($server)
	$code .= $ident2 . "\$this->setClass('".$service['class']."', null, null, true);\n";

$code .= $ident_char . "}\n\n";

foreach($service['functions'] as $function){
	$doc_code = '';
	$doc_code .= $ident_char . "/**\n";
	$doc_code .= $ident_char . " * ".$function['name']."\n";
	$doc_code .= $function['doc']? parseDoc($ident_char . " * ", $function['doc']): '';
	$doc_code .= $ident_char . " *\n";

	$signature = array();
	if(count($function['params']) > 0){
		foreach($function['params'] as $param){
			$doc_code .= $ident_char . " * @param ".$param."\n";
			$signature[] = $param;
		}
	}

	$hint = $function['return'];
	if(isHint($hint, $primitive_types))
		if($namespace)
			$hint = $pear_style?
				$sub_namespace.$hint:
				suppressKeywords('\\'.$sub_namespace.'\\'.str_replace('_', '\\', $hint), $keywords);

	$doc_code .= $ident_char . " * @return ".$hint."\n";
	$doc_code .= $ident_char . " */\n";

	if($documentation)
		$code .= $doc_code;

	//function names in head class
	if(!$psr4)
	{
		$code .= $ident_char . "public function ".$function['name']."(".implode(', ', $signature).") {\n";
	}
	else
	{
		$code .= $ident_char . "public function ".lcfirst($function['name'])."(\n".$ident2.implode(', ', $signature)."\n".$ident_char.") {\n";
	}

	if($server){
		$code .= $ident2 . "//Your code that handles ".$function['name']." goes here.\n";
	}else{
		$code .= $ident2. "return \$this->__soapCall(\n";
		$code .= $ident3 . "'".$function['method']."',\n";
		$code .= $ident3 ."array(";

		$params = array();
		if(count($signature) > 1){
			$code .= "\n" . $ident4;
			foreach($signature as $param){
				if(strpos($param, ' '))
					list($tmp, $param) = explode(' ', $param);

				$params[] = $param;
			}
			$code .= implode(",\n" . $ident4, $params)."\n" . $ident_char . $ident3;
		}elseif(count($signature) == 1){
			if(strpos($signature[0], ' '))
				list($tmp, $signature[0]) = explode(' ', $signature[0]);

			$code .= $signature[0];
		}
		$code .= "),\n";
		$code .= $ident3 . "array('uri'=>'".$uri."')\n";
		$code .= $ident2 . ");\n";
	}
	$code .= $ident_char . "}\n\n";
}
$code = rtrim($code);
$code .= "\n}\n";

print("Writing ".ucfirst($service['class']).".php.");
$filename = ucfirst($service['class']).".php";

if($namespace && !$pear_style){
	$dirname = str_replace('\\', '/', $namespace);
	if(!is_dir($dirname)){
		if(!$psr4){
		  mkdir($dirname, 0777, true);
		}
	}

	if(!$psr4){
	   $filename = $dirname . '/' . $filename;
	}
}

$fp = fopen($filename, 'w');
fwrite($fp, "<?php\n".$code);
fclose($fp);
print("[OK]\n");

/*
 * Functions
 */
function suppressKeywords($txt, $keywords){
	foreach($keywords as $keyword){
		if(preg_match('~(^|\\\\)'.$keyword.'($|\\\\)~i', $txt))
		{
			$arr = explode('\\', $txt);
			$txt = str_ireplace($keyword, $arr[1].$keyword, $txt);
		}
	}
	return $txt;
}

function parseDoc($prefix, $doc) {
	$code = "";
	$words = explode(' ', $doc);
	$line = $prefix;

	foreach($words as $word){
		$word = implode('', array_filter(explode("\t", implode(' ', explode("\n", $word))), function ($el){ if (trim($el) != ''){ return true;}return  false;}));
		$line .=  trim($word) . ' ';
		if(strlen($line) > 90){
			$code .= rtrim($line)."\n";
			$line = $prefix;
		}
	}
	if($line != $prefix)
		$code .= rtrim($line)."\n";

		return $code;
}

function checkForEnum(&$dom, $class){
	$values = array();

	$node = findType($dom, $class);
	if(!$node)
		return $values;

		$value_list = $node->getElementsByTagName('enumeration');
		if($value_list->length == 0)
			return $values;

			for($i=0, $l=$value_list->length; $i<$l; $i++)
				$values[] = $value_list->item($i)->attributes->getNamedItem('value')->nodeValue;

				return $values;
}

function findType(&$dom, $class){
	$types_node = $dom->getElementsByTagName('types')->item(0);
	$schema_list = $types_node->getElementsByTagName('schema');

	for($i=0, $l=$schema_list->length; $i<$l; $i++){
		$children = $schema_list->item($i)->childNodes;
		for($j=0, $l2=$children->length; $j<$l2; $j++){
			$node = $children->item($j);
			if($node instanceof DOMElement &&
				$node->hasAttributes() &&
				$node->attributes->getNamedItem('name') &&
				$node->attributes->getNamedItem('name')->nodeValue == $class)
				return $node;
		}
	}

	return null;
}

function generatePHPSymbol($s){
	global $keywords;

	if(!preg_match('/^[A-Za-z_]/', $s))
		$s = 'value_'.$s;

		if(in_array(strtolower($s), $keywords))
			$s = '_'.$s;

			return preg_replace('/[-.\s]/', '_', $s);
}

function isHint($hint, array $primitive_types) {
	return !in_array($hint, $primitive_types) && !(substr($hint, 0, 7) == 'ArrayOf');
}

function loadWSDL($path){
	$dom = new DOMDocument();
	$dom->load($path);

	$nodes = toArray($dom->getElementsByTagName('import'));
	foreach($nodes as $node){
		$location = $node->getAttribute('schemaLocation');

		if($location){
			$dirname = dirname($path);

			$newdom = loadWSDL($dirname.DIRECTORY_SEPARATOR.$location);
			foreach($newdom->childNodes as $n){
				$import = $dom->importNode($n, true);
				$node->parentNode->appendChild($import);
			}
		}
	}

	print(".");
	return $dom;
}

function toArray($nodes){
	$array = array();
	foreach($nodes as $node){
		$array[] = $node;
	}

	return $array;
}

function getOptions($string){
	if(function_exists('getopt'))
		return getopt($string);

		global $argv;

		$options = array();
		$l = strlen($string);

		if(!$l)
			return $options;
			for($i=0; $i<$l; $i++){
				$char = $string[$i];
				$next = $i+1<$l? $string[$i+1]: '';

				$index = array_search('-'.$char, $argv);
				if($index)
					$options[$char] = $next != ':'? true: $argv[$index+1];
			}
			return $options;
}

function sortTypes($types, &$sorted){
	global $service, $extensions;

	foreach($types as $class=>$type){
		if(isset($extensions[$class])){
			$parent_class = $extensions[$class];
			if($parent_class && !isset($sorted[$parent_class]) && isset($service['types'][$parent_class])){
				sortTypes(array($parent_class=>$service['types'][$parent_class]), $sorted);
			}

			$sorted[$class] = $type;
			continue;
		}
		$sorted[$class] = $type;
	}
	return $sorted;
}

/**
 * Makes sure there is not 2 Capital letters after each other
 * @param $text the input string to make PascalCase
 * @return string in PascalCase
 */
function makePascalCase($text)
{
	for($i=0;$i<=strlen($text);$i++)
	{
		if(ctype_upper($text[$i])&&ctype_upper($text[($i+1)]))
			{
				$text[$i+1] =lcfirst($text[$i+1]);
			}
			else if(!ctype_upper($text[($i+1)]))$i++;
	}
	return $text;
}

function accessMethodCaster($type, $fieldname) {
	switch($type) {
		case 'string':
			return '        if (!is_string($val)) '."{\n".'            throw new Exception(\'POJO Proxy need a string for '.$fieldname.'\');'."\n".'        }'."\n";
		case 'int':
			return '        if (!is_int($val)) '."{\n".'            throw new Exception(\'POJO Proxy need a integer\');'."\n".'        }'."\n";
	}
}