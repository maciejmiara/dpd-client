<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

final class Sender extends AddressData
{
    /**
     * @param int $fid
     * @return Sender
     */
    public static function fromFid($fid)
    {
        return new self(
            null,
            null,
            null,
            null,
            null,
            $fid
        );
    }
}
