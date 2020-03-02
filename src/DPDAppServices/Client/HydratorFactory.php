<?php

namespace Webit\DPDClient\DPDAppServices\Client;

use JMS\Serializer\Serializer;
use Webit\DPDClient\Common\Client\HydratorFactory as BaseHydratorFactory;
use Webit\DPDClient\DPDAppServices\Hydrator\XmlHydrator;
use Webit\SoapApi\Hydrator\ArrayHydrator;
use Webit\SoapApi\Hydrator\ChainHydrator;
use Webit\SoapApi\Hydrator\Hydrator;
use Webit\SoapApi\Hydrator\HydratorSerializerBased;
use Webit\SoapApi\Hydrator\KeyExtractingHydrator;
use Webit\SoapApi\Hydrator\ResultDumpingHydrator;
use Webit\SoapApi\Hydrator\Serializer\ResultTypeMap;
use Webit\SoapApi\Util\StdClassToArray;

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

    /**
     * @param Serializer $serializer
     * @return Hydrator
     */
    public function create(Serializer $serializer)
    {
        return
            new ChainHydrator(
                array(
                    new ArrayHydrator(new StdClassToArray()),
                    new KeyExtractingHydrator('return'),
                    new XmlHydrator(),
                )
            );
    }
}