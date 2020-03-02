<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\Cod;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\DeclaredValue;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\Guarantee;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\SelfCol;

class Services
{
    /**
     * @var DeclaredValue
     * @JMS\SerializedName("DeclaredValue")
     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\DeclaredValue")
     */
    private $declaredValue;

//    /**
//     * @var Guarantee
//     * @JMS\SerializedName("Guarantee")
//     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\Guarantee")
//     */
//    private $guarantee;

    /**
     * @var Cod
     * @JMS\SerializedName("COD")
     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\Cod")
     */
    private $cod;


//    /**
//     * @var SelfCol
//     * @JMS\SerializedName("SelfCol")
//     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services\SelfCol")
//     */
//    private $selfCol;

    /**
     * @var bool
     * @JMS\SerializedName("CUD")
     * @JMS\Type("boolean")
     */
    private $cud;

    /**
     * @var bool
     * @JMS\SerializedName("ROD")
     * @JMS\Type("boolean")
     */
    private $rod;

    /**
     * @var bool
     * @JMS\SerializedName("InPers")
     * @JMS\Type("boolean")
     */
    private $inPers;

    /**
     * @var bool
     * @JMS\SerializedName("PrivPers")
     * @JMS\Type("boolean")
     */
    private $privPers;

    /**
     * @var bool
     * @JMS\SerializedName("CarryIn")
     * @JMS\Type("boolean")
     */
    private $carryIn;

    /**
     * @var bool
     * @JMS\SerializedName("Duty")
     * @JMS\Type("boolean")
     */
    private $duty;

    /**
     * @var bool
     * @JMS\SerializedName("Pallet")
     * @JMS\Type("boolean")
     */
    private $pallet;

    /**
     * @var bool
     * @JMS\SerializedName("DOX")
     * @JMS\Type("boolean")
     */
    private $dox;

    /**
     * @param DeclaredValue|null $declaredValue
     * @param Cod|null $cod
     * @param bool $cud
     * @param bool $dox
     * @param bool $rod
     * @param bool $inPers
     * @param bool $privPers
     * @param bool $carryIn
     * @param bool $duty
     * @param bool $pallet
     */
    public function __construct(
        DeclaredValue $declaredValue = null,
        Cod $cod = null,
        $cud = false,
        $dox = false,
        $rod = false,
        $inPers = false,
        $privPers = false,
        $carryIn = false,
        $duty = false,
        $pallet = false
    ) {
        $this->declaredValue = $declaredValue ?: null;
        $this->cud = $cud ?: null;
        $this->dox = $dox ?: null;
        $this->rod = $rod ?: null;
        $this->cod = $cod ?: null;
        $this->inPers = $inPers ?: null;
        $this->privPers = $privPers ?: null;
        $this->carryIn = $carryIn ?: null;
        $this->duty = $duty ?: null;
        $this->pallet = $pallet ?: null;
    }

//    /**
//     * @return DeclaredValue
//     */
//    public function declaredValue()
//    {
//        return $this->declaredValue;
//    }
//
//    /**
//     * @return Guarantee
//     */
//    public function guarantee()
//    {
//        return $this->guarantee;
//    }

    /**
     * @return bool
     */
    public function cud()
    {
        return $this->cud;
    }

    /**
     * @return bool
     */
    public function dox()
    {
        return $this->dox;
    }

    /**
     * @return bool
     */
    public function rod()
    {
        return $this->rod;
    }
//
//    /**
//     * @return Cod
//     */
//    public function cod()
//    {
//        return $this->cod;
//    }

    /**
     * @return bool
     */
    public function inPers()
    {
        return $this->inPers;
    }

//    /**
//     * @return SelfCol
//     */
//    public function selfCol()
//    {
//        return $this->selfCol;
//    }

    /**
     * @return bool
     */
    public function privPers()
    {
        return $this->privPers;
    }

    /**
     * @return bool
     */
    public function carryIn()
    {
        return $this->carryIn;
    }

    /**
     * @return bool
     */
    public function duty()
    {
        return $this->duty;
    }

    /**
     * @return bool
     */
    public function pallet()
    {
        return $this->pallet;
    }
}
