<?php

namespace Webit\DPDClient\DPDAppServices\Hydrator;

use JMS\Serializer\SerializerBuilder;
use Webit\DPDClient\DPDAppServices\Client\SoapFunctions;
use Webit\DPDClient\DPDAppServices\CollectionOrder\CollectionOrderResponse;
use Webit\SoapApi\Hydrator\Hydrator;
use Webit\SoapApi\Hydrator\VoidHydrator;

class XmlHydrator implements Hydrator
{
    /**
     * Converts XML sring to array
     * @param $result
     * @param $soapFunction
     * @return mixed
     */
    public function hydrateResult($result, $soapFunction)
    {
        if (!in_array($soapFunction, [SoapFunctions::COLLECTION_ORDER])) {
            return $result;
        }

        $serializer = SerializerBuilder::create()->build();

        $result = $serializer->deserialize($result, CollectionOrderResponse::class, 'xml');

        return $result;
    }
}
