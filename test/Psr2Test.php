<?php
use Wsdl2php\AbstractIntegrationTest;

/**
 * Checks if the generated code has no tabs and has the correct namespace compared to the expected output result
 */
class Psr2Test extends AbstractIntegrationTest{
    /**
     * @dataProvider wsdlDataProvider
     */
    public function testPsr2($input_wsdl_file){
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle -t');
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/psr-2/', $this->output_directory);
    }
}