<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;

class OrderedPackage
{
    /**
     * @var int
     * @JMS\SerializedName("PackageId")
     * @JMS\Type("integer")
     */
    private $packageId;

    /**
     * @var string
     * @JMS\SerializedName("Reference")
     * @JMS\Type("string")
     */
    private $reference;

    /**
     * @var OrderedParcel[]
     * @JMS\SerializedName("Parcels")
     * @JMS\XmlList(entry="Parcel")
     * @JMS\Type("array<Webit\DPDClient\DPDAppServices\Common\OpenUMLF\OrderedParcel>")
     */
    private $parcels;

    /**
     * @var array
     * @JMS\SerializedName("StatusInfo")
     * @JMS\XmlKeyValuePairs()
     * @JMS\Type("array<string, string>")
     */
    private $statusInfo;

    /**
     * @var string
     * @JMS\SerializedName("OrderNumber")
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