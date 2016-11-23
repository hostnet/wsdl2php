<?php
use Wsdl2php\AbstractIntegrationTest;

class Psr4HnStyleTest extends AbstractIntegrationTest{
    /**
     * @dataProvider wsdlDataProvider
     */
    public function testPsr4($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-v -n Controle\\\\Hostnet\\\\Namesp -g Sub4\\\\Complex -4');
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/HnStyle/', $this->output_directory);
    }
}