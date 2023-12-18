<?php

namespace Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services;

use JMS\Serializer\Annotation as JMS;

class DpdPickup
{
    /**
     * @var string
     * @JMS\SerializedName("pudo")
     * @JMS\Type("string")
     */
    private $pudo;

    /**
     * @param string $pudo
     */
    public function __construct($pudo)
    {
        $this->pudo = $pudo;
    }

    public function pudo()
    {
        return $this->pudo;
    }

    /**
     * @param string $pudo
     * @return DpdPickup
     */
    public static function create($pudo)
    {
        return new self($pudo);
    }
}