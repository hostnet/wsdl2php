<?php
use Wsdl2php\AbstractIntegrationTest;

/**
 * Checks if the generated code with namespace is the same as the expected output result
 */
class Psr0Test extends AbstractIntegrationTest{
    /**
     * @dataProvider wsdlDataProvider
     */
    public function testPsr0($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle');
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/psr-0/', $this->output_directory);
    }
}