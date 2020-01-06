<?php

namespace Webit\DPDClient\DPDAppServices\Client;

final class SoapFunctions
{
    const COLLECTION_ORDER = 'importPackagesXV1';

    /**
     * @return string[]
     */
    public static function all()
    {
        return array(
            self::COLLECTION_ORDER,
        );
    }
}
