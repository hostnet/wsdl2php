<?php
namespace Wsdl2php;

/**
 * Checks if the generated code without extra flags is the same as the expected output result
 */
class DefaultTest extends AbstractIntegrationTest
{
    /**
     * @dataProvider wsdlDataProvider
     */
    public function testDefault($input_wsdl_file)
    {
        $this->executeWsdl2php($input_wsdl_file, $this->output_directory);
        $this->compareDirectories(dirname($input_wsdl_file). '/generated/singlefile/', $this->output_directory);
    }
}