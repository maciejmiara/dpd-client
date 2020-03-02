<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;

class OrderedParcel
{
    /**
     * @var int
     * @JMS\SerializedName("ParcelId")
     * @JMS\Type("integer")
     */
    private $parcelId;

    /**
     * @var string
     * @JMS\SerializedName("Waybill")
     * @JMS\Type("string")
     */
    private $waybill;

    /**
     * OrderedParcel constructor.
     * @param int $parcelId
     * @param string $waybill
     */
    public function __construct($parcelId, $waybill)
    {
        $this->parcelId = $parcelId;
        $this->waybill = $waybill;
    }

    /**
     * @return int
     */
    public function parcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return string
     */
    public function waybill()
    {
        return $this->waybill;
    }
}