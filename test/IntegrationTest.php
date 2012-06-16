<?php
namespace Wsdl2php;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Full Integration test, test every given wsdl file against a given expected output result.
 */
class IntegrationTest extends TestCase
{
    /**
     * The full path to the directory used for this unit-test.
     *
     * @var string
     */
    private $output_directory;

    /**
     * Prepare the temporary output directory to use.
     *
     * {@inheritDoc}
     */
    protected function setUp(){
        $fs = new Filesystem();
        $this->output_directory = $fs->tempnam(sys_get_temp_dir(), 'wsdl2php-test');
        $fs->remove($this->output_directory);
        $fs->mkdir($this->output_directory);
    }

    /**
     * Cleanup the temporary output directory.
     *
     * {@inheritDoc}
     */
    protected  function tearDown(){
         $fs = new Filesystem();
         $fs->remove($this->output_directory);
    }

    /**
     * @dataProvider wsdlDataProvider
     */
    public function testDefault($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory);
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/singlefile/', $this->output_directory);
    }

    /**
     * @dataProvider wsdlDataProvider
     */
    public function testPsr2($input_wsdl_file){
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle -t');
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/psr-2/', $this->output_directory);
    }

    /**
     * @dataProvider wsdlDataProvider
     */
    public function testPsr0($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle');
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/psr-0/', $this->output_directory);
    }

    /**
     * @dataProvider wsdlDataProvider
     */
    public function testSubNameSpace($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle -g sub1\\\\sub2' );
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/subnamespaces/', $this->output_directory);
    }

    /**
     * Dataprovider to test the wsdl files generated code.
     *
     * @return string[][] the list of wsdl files to examine
     */
    public function wsdlDataProvider()
    {
        return [
            [
                __DIR__ . '/resource/ascio/AscioService.wsdl'
            ],
            [
                __DIR__ . '/resource/ColdFusion/ComicsWebServiceTest.wsdl'
            ],
            [
                __DIR__ . '/resource/Axis/TemperatureConvertTest.wsdl'
            ],
            [
                __DIR__ . '/resource/DotNet/EmailVerifyTest.wsdl'
            ],
            [
                __DIR__ . '/resource/Providers/Amazon/AmazonWebServicesTest.wsdl'
            ],
            [
                __DIR__ . '/resource/Providers/EBay/eBayTest.wsdl'
            ],
            [
                __DIR__ . '/resource/Providers/Google/GoogleSearchTest.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/AspDotNetRound1/AspDotNetRound1Test.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/AspDotNetRound2/AspDotNetRound2Test.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/EmtySA/EmptySATest.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/InteropBTyped/InteropBtyped.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/InteropTyped/InteropTyped.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/MiscrosoftSoapToolkit/MicrosoftSoapToolkitV3RoundBTypedTest.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/SoapLiteRound1/SoapLiteRound1Test.wsdl'
            ]
        ];
    }

    /**
     * Compare two directories:
     *  1. Check the number of files are equal
     *  2. Recursive check the contents of files in both directories.
     *
     * @param string $source_directory the orignional directory to compare to
     * @param string $output_directory the directory holding the generated code.
     */
    private function compareDirectories($source_directory, $output_directory){
        $origineel_scan = scandir($source_directory);
        $output_scan = scandir($output_directory);
        self::assertEquals(count($origineel_scan), count($output_scan));
        foreach($origineel_scan as $file){
            if($file == '.' || $file == '..'){
                continue;
            }
            if(is_dir($source_directory . '/' . $file)){
                self::assertDirectoryExists($output_directory . '/' . $file);
                $this->compareDirectories($source_directory . '/' . $file, $output_directory . '/' . $file);
            }else{
                self::assertFileExists($output_directory . '/' . $file);
                self::assertFileEquals($source_directory . '/' . $file, $output_directory . '/' . $file);
            }
        }
    }

    /**
     * Excute the WSDL2php command given the wsdl file to generate code for in the given directory with optiona flags.
     *
     * @param string $wsdl_file_location full filepath to the wsdl file, if absolute;
     *      resolved from $output_directory as cwd.
     * @param string $output_directory the location for the output, used as cwd
     * @param string $flags the optional flag for the wsdl2php command.
     * @throws ProcessFailedException when the wsdl2php command fails.
     */
    private function executeWsdl2php($wsdl_file_location, $output_directory, $flags = ''){
        $command = sprintf(
            'php %s/../src/bin/wsdl2php.php -i %s -o %s %s',
            __DIR__,
            $wsdl_file_location,
            $output_directory,
            $flags
        );
        $process = new Process($command);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }
}