<?php
namespace Wsdl2php;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Full Integration test, test every given wsdl file against a given expected output result.
 */
abstract class AbstractIntegrationTest extends TestCase{
    /**
     * The full path to the directory used for this unit-test.
     *
     * @var string
     */
    protected $output_directory;
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
                __DIR__ . '/resource/Nmbrs/Company/CompanyService.wsdl'
            ],
            [
                __DIR__ . '/resource/Nmbrs/Debtor/DebtorService.wsdl'
            ],
            [
                __DIR__ . '/resource/Nmbrs/Employee/EmployeeService.wsdl'
            ],
            [
                __DIR__ . '/resource/Nmbrs/SingleSignOn/SingleSignOn.wsdl'
            ],
            [
                __DIR__ . '/resource/Interop/SoapLiteRound1/SoapLiteRound1Test.wsdl'
            ],
            [
                __DIR__ . '/resource/Trigon/Trigon.wsdl'
            ],
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
    protected function compareDirectories($source_directory, $output_directory){
        $origineel_scan = scandir($source_directory);
        $output_scan = scandir($output_directory);
        self::assertEquals(count($origineel_scan), count($output_scan), implode(',', $origineel_scan) . ' vs ' . implode(',', $output_scan));
        foreach($origineel_scan as $file){
            if($file == '.' || $file == '..'){
                continue;
            }
            if(is_dir($source_directory . '/' . $file)){
                self::assertDirectoryExists($output_directory . '/' . $file);
                $this->compareDirectories($source_directory . '/' . $file, $output_directory . '/' . $file);
            }else{
                self::assertFileExists($output_directory . '/' . $file);
                self::assertFileEquals($source_directory . '/' . $file, $output_directory . '/' . $file, $output_directory . '/' .$file);
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
    protected function executeWsdl2php($wsdl_file_location, $output_directory, $flags = ''){
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
