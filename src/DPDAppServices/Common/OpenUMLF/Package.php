<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;

class Package
{
    /**
     * @var string
     * @JMS\SerializedName("Reference")
     * @JMS\Type("string")
     */
    private $reference;

    /**
     * @var Receiver
     * @JMS\SerializedName("Receiver")
     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Receiver")
     */
    private $receiver;

    /**
     * @var Sender
     * @JMS\SerializedName("Sender")
     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Sender")
     */
    private $sender;

    /**
     * @var string
     * @JMS\SerializedName("PayerType")
     * @JMS\Type("string")
     */
    private $payerType;

    /**
     * @var int
     * @JMS\SerializedName("ThirdPartyFID")
     * @JMS\Type("integer")
     */
    private $thirdPartyFID;

    /**
     * @var string
     * @JMS\SerializedName("Ref1")
     * @JMS\Type("string")
     */
    private $ref1;

    /**
     * @var string
     * @JMS\SerializedName("Ref2")
     * @JMS\Type("string")
     */
    private $ref2;

    /**
     * @var string
     * @JMS\SerializedName("Ref3")
     * @JMS\Type("string")
     */
    private $ref3;

    /**
     * @var Services
     * @JMS\SerializedName("Services")
     * @JMS\Type("Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Services")
     */
    private $services;

    /**
     * @var Parcel[]
     * @JMS\SerializedName("Parcels")
     * @JMS\XmlList(entry="Parcel")
     * @JMS\Type("array<Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Parcel>")
     */
    private $parcels;

    /**
     * @param Receiver $receiver
     * @param Sender $sender
     * @param PayerType $payerType
     * @param Parcel[] $parcels
     * @param Services $services
     * @param string $reference
     * @param int $thirdPartyFID
     * @param string $ref1
     * @param string $ref2
     * @param string $ref3
     */
    public function __construct(
        Receiver $receiver,
        Sender $sender,
        PayerType $payerType = null,
        array $parcels = array(),
        Services $services = null,
        $reference = null,
        $thirdPartyFID = null,
        $ref1 = null,
        $ref2 = null,
        $ref3 = null
    )
    {
        $this->reference = $reference;
        $this->receiver = $receiver;
        $this->sender = $sender;
        $this->payerType = $payerType ?: PayerType::sender();
        $this->thirdPartyFID = $thirdPartyFID;
        $this->ref1 = $ref1;
        $this->ref2 = $ref2;
        $this->ref3 = $ref3;
        $this->services = $services ?: new Services();
        $this->parcels = $parcels;
    }

    /**
     * @return string
     */
    public function reference()
    {
        return $this->reference;
    }

    /**
     * @return Receiver
     */
    public function receiver()
    {
        return $this->receiver;
    }

    /**
     * @return Sender
     */
    public function sender()
    {
        return $this->sender;
    }

    /**
     * @return PayerType
     */
    public function payerType()
    {
        switch ($this->payerType) {
            case 'SENDER':
                return PayerType::sender();

        }

        return $this->payerType;
    }

    /**
     * @return int
     */
    public function thirdPartyFID()
    {
        return $this->thirdPartyFID;
    }

    /**
     * @return string
     */
    public function ref1()
    {
        return $this->ref1;
    }

    /**
     * @return string
     */
    public function ref2()
    {
        return $this->ref2;
    }

    /**
     * @return string
     */
    public function ref3()
    {
        return $this->ref3;
    }

    /**
     * @return Services
     */
    public function services()
    {
        return $this->services;
    }

    /**
     * @return Parcel[]
     */
    public function parcels()
    {
        return $this->parcels;
    }

    /**
     * @return array
     * @JMS\VirtualProperty(name="Customer")
     * @JMS\SerializedName("Customer")
     * @JMS\XmlKeyValuePairs()
     */
    public function customer()
    {
        return ['FID' => $this->thirdPartyFID];
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator((array)$this->parcels);
    }
}
