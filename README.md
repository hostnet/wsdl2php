wsdl2php
--------
wsdl2php is a tool for generating SoapServer/SoapClient classes from a WSDL file.

Installation
------------
1. Copy src\bin\wsdl2php.php to a folder.
2. Open a command prompt in that folder location.
3. Use wsdl2php as described below.

For Linux users, src\bin\wsdl2php is a wrapper for easier usage, copy that as well

Usage
-----
	php wsdl2php.php -i C:\path\to\WSDL

For Linux users, you can just do

	wsdl2php -i /path/to/WSDL
Note: the WSDL path can also be an accessible URL.

Options
-------
+ -o <output_dir>    | directory used for output
+ -n <namespace>     | namespace to use
+ -g <sub_namespace> | sub-namespace to use
+ -p                 | use pear style Namespace - defaults to PSR-0
+ -s                 | generate code for server side
+ -d                 | turn off documentation generation
+ -v                 | generate all code (docs and unused)

Credits
-------
+ Knut Urdalen - author
+ AustP - contributor
+ Joel Barciauskas - contributor
+ John Lindal - contributor

Originally cloned from http://www.urdalen.no/wsdl2php/