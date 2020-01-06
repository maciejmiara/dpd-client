<?php

namespace Webit\DPDClient\DPDAppServices\Client;

use Webit\DPDClient\Common\Client\HydratorFactory as BaseHydratorFactory;
use Webit\SoapApi\Hydrator\Serializer\ResultTypeMap;

class HydratorFactory extends BaseHydratorFactory
{
    /**
     * @inheritdoc
     */
    protected function resultTypeMap()
    {
        return new ResultTypeMap(
            array(
                SoapFunctions::COLLECTION_ORDER => 'Webit\DPDClient\DPDAppServices\CollectionOrder\CollectionOrderResponse',
            )
        );
    }
}