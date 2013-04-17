<?php
require_once 'WSDL/WSDLCreator.php';

if (isset($_GET['wsdl'])) {
    $wsdl = new \WSDL\WSDLCreator('ExampleSoapServer');
    $wsdl->renderWSDL();
}

class ExampleSoapServer
{
    private function _toLog($message)
    {
        file_put_contents('/tmp/logs_soap.log', $message);
    }

    /**
     * @param array $arr1
     * @param string $name
     * @return array
     */
    public function arrayTest(array $arr1, $name)
    {
        return array('name' => $name);
    }
}