<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;

class Parcel
{
    /**
     * Weight in kilograms
     * @var float|null
     * @JMS\SerializedName("Weight")
     * @JMS\Type("double")
     */
    private $weight;

    /**
     * @var string|null
     * @JMS\SerializedName("Content")
     * @JMS\Type("string")
     */
    private $content;

    /**
     * Size in centimeters
     * @var float|null
     * @JMS\SerializedName("SizeX")
     * @JMS\Type("double")
     */
    private $sizeX;

    /**
     * Size in centimeters
     * @var float|null
     * @JMS\SerializedName("SizeY")
     * @JMS\Type("double")
     */
    private $sizeY;

    /**
     * Size in centimeters
     * @var float|null
     * @JMS\SerializedName("SizeZ")
     * @JMS\Type("double")
     */
    private $sizeZ;

    /**
     * @var string|null
     * @JMS\SerializedName("CustomerNotes")
     * @JMS\Type("string")
     */
    private $customerNotes;

    /**
     * @var string|null
     * @JMS\SerializedName("Reference")
     * @JMS\Type("string")
     */
    private $reference;

    /**
     * @param int $weight
     * @param string $content
     * @param float $sizeX
     * @param float $sizeY
     * @param float $sizeZ
     */
    public function __construct($weight, $content = null, $sizeX = null, $sizeY = null, $sizeZ = null)
    {
        $this->weight = $weight;
        $this->content = $content;
        $this->sizeX = $sizeX;
        $this->sizeY = $sizeY;
        $this->sizeZ = $sizeZ;
    }

    /**
     * @return int
     */
    public function weight()
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function content()
    {
        return $this->content;
    }

    /**
     * @return float
     */
    public function sizeX()
    {
        return $this->sizeX;
    }

    /**
     * @return float
     */
    public function sizeY()
    {
        return $this->sizeY;
    }

    /**
     * @return float
     */
    public function sizeZ()
    {
        return $this->sizeZ;
    }

    /**
     * @return string
     */
    public function customerNotes()
    {
        return $this->customerNotes;
    }

    /**
     * @return string
     */
    public function reference()
    {
        return $this->reference;
    }
}
