<?php

namespace Webit\DPDClient\DPDAppServices\Client;

use Webit\DPDClient\Common\Client\SerializerFactory as BaseSerializerFactory;

class SerializerFactory extends BaseSerializerFactory
{
    /**
     * @inheritdoc
     */
    protected function enums()
    {
        return array(
            'Webit\DPDClient\DPDAppServices\Common\OpenUMLF\PayerType',
        );
    }
}
