<?php
use Wsdl2php\AbstractIntegrationTest;

/**
 * Checks if the generated code with namespace and subnamespace is the same as the expected output result
 */
class NamespaceTest extends AbstractIntegrationTest{
    /**
     * @dataProvider wsdlDataProvider
     */
    public function testSubNameSpace($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory, '-n Controle -g sub1\\\\sub2' );
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/subnamespaces/', $this->output_directory);
    }
}