<?php
use Wsdl2php\AbstractIntegrationTest;

/**
 * Checks if the generated code has the correct namespace compared to the expected output result by psr4 rules
 */
class Psr4Test extends AbstractIntegrationTest{
    /**
     * @dataProvider wsdlDataProvider
     */
    public function testPsr4($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle\\\\Hostnet\\\\Namesp -g Sub4\\\\Complex -4');
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/psr-4/', $this->output_directory);
    }
}