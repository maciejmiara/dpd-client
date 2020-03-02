<?php

namespace Webit\DPDClient\DPDAppServices\Client;

use Webit\DPDClient\DPDAppServices\Client;
use Webit\DPDClient\DPDAppServices\CollectionOrder\CollectionOrderRequest;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\AuthDataV1;

class ClientFactory
{
    /** @var SoapExecutorFactory */
    private $soapExecutorFactory;

    /**
     * @param SoapExecutorFactory $soapExecutorFactory
     */
    public function __construct(SoapExecutorFactory $soapExecutorFactory = null)
    {
        $this->soapExecutorFactory = $soapExecutorFactory ?: new SoapExecutorFactory();
    }

    /**
     * @param AuthDataV1 $authDataV1
     * @param string $wsdl
     * @return Client
     */
    public function create(AuthDataV1 $authDataV1, $wsdl = null)
    {
        $wsdl = $wsdl ?: ClientEnvironments::wsdl(ClientEnvironments::PROD);
        $soapExecutor = $this->soapExecutorFactory->create($wsdl);

        return new Client(
            new CollectionOrderRequest($soapExecutor),
            $authDataV1
        );
    }
}
