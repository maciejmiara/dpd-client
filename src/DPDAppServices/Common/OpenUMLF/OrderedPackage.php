<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;

class OrderedPackage
{
    /**
     * @var int
     * @JMS\SerializedName("packageId")
     * @JMS\Type("integer")
     */
    private $packageId;

    /**
     * @var string
     * @JMS\SerializedName("reference")
     * @JMS\Type("string")
     */
    private $reference;

    /**
     * @var OrderedParcel[]
     * @JMS\SerializedName("parcels")
     * @JMS\Type("array<Webit\DPDClient\DPDServices\PackagesGeneration\OrderedParcel>")
     */
    private $parcels;

    /**
     * @var string
     * @JMS\SerializedName("statusInfo")
     * @JMS\Type("string")
     */
    private $statusInfo;

    /**
     * @var string
     * @JMS\SerializedName("orderNumber")
     * @JMS\Type("string")
     */
    private $orderNumber;

    /**
     * OrderedPackage constructor.
     * @param int $packageId
     * @param string $reference
     * @param OrderedParcel[] $parcels
     * @param string $statusInfo
     * @param string $orderNumber
     */
    //    public function __construct($packageId, $reference, $statusInfo, array $invalidFields, array $parcels)
    public function __construct($packageId, $reference, array $parcels, $statusInfo, $orderNumber)
    {
        $this->packageId = $packageId;
        $this->reference = $reference;
        $this->parcels = $parcels;
        $this->statusInfo = $statusInfo;
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return int
     */
    public function packageId()
    {
        return $this->packageId;
    }

    /**
     * @return string
     */
    public function reference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function statusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @return string
     */
    public function orderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return OrderedParcel[]
     */
    public function parcels()
    {
        return $this->parcels;
    }
}