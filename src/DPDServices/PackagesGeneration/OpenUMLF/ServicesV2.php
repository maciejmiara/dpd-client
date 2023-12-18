<?php

namespace Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF;

use JMS\Serializer\Annotation as JMS;
use Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services\Cod;
use Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services\DeclaredValue;
use Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services\DpdPickup;
use Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services\Guarantee;
use Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services\SelfCol;

class ServicesV2 extends Services
{
    // @todo implement other services - when needed
    // RequestedDelivDate
    // DedicatedDelivery
    // Tires
    // TiresExport
    // DpdPickup

    /**
     * @var DpdPickup
     * @JMS\SerializedName("dpdPickup")
     * @JMS\Type("Webit\DPDClient\DPDServices\PackagesGeneration\OpenUMLF\Services\DpdPickup")
     */
    private $dpdPickup;

    /**
     * @param DeclaredValue $declaredValue
     * @param Guarantee|null $guarantee
     * @param bool $cud
     * @param bool $dox
     * @param bool $rod
     * @param Cod $cod
     * @param bool $inPers
     * @param SelfCol $selfCol
     * @param bool $privPers
     * @param bool $carryIn
     * @param bool $duty
     * @param bool $pallet
     * @param DpdPickup $dpdPickup
     */
    public function __construct(
        DeclaredValue $declaredValue = null,
        Guarantee $guarantee = null,
        $cud = false,
        $dox = false,
        $rod = false,
        Cod $cod = null,
        $inPers = false,
        SelfCol $selfCol = null,
        $privPers = false,
        $carryIn = false,
        $duty = false,
        $pallet = false,
        DpdPickup $dpdPickup = null
    ) {
        parent::__construct($declaredValue, $guarantee, $cud, $dox, $rod, $cod, $inPers, $selfCol, $privPers, $carryIn, $duty, $pallet);
        $this->dpdPickup = $dpdPickup ?: null;
    }

    /**
     * @return DpdPickup
     */
    public function dpdPickup()
    {
        return $this->dpdPickup;
    }
}
