<?php

namespace Webit\DPDClient\DPDAppServices\CollectionOrder;

use JMS\Serializer\Annotation as JMS;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\OrderedPackage;

/**
 * Class CollectionOrderResponse
 * @package Webit\DPDClient\DPDAppServices\CollectionOrder
 * @JMS\XmlRoot("PackagesImportResponse")
 */
class CollectionOrderResponse implements \IteratorAggregate
{
    /**
     * @var int
     * @JMS\SerializedName("sessionId")
     * @JMS\Type("integer")
     */
    private $sessionId;

    /**
     * @var \DateTime
     * @JMS\SerializedName("beginTime")
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     */
    private $beginTime;

    /**
     * @var \DateTime
     * @JMS\SerializedName("endTime")
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     */
    private $endTime;

    /**
     * @var array
     * @JMS\SerializedName("StatusInfo")
     * @JMS\XmlKeyValuePairs()
     * @JMS\Type("array<string, string>")
     */
    private $statusInfo;

    /**
     * @var OrderedPackage[]
     * @JMS\SerializedName("Packages")
     * @JMS\XmlList(entry="Package")
     * @JMS\Type("array<Webit\DPDClient\DPDAppServices\Common\OpenUMLF\OrderedPackage>")
     */
    private $packages;

    /**
     * @param int $sessionId
     * @param \DateTime $beginTime
     * @param \DateTime $endTime
     * @param string $status
     * @param OrderedPackage[] $packages
     */
    public function __construct($sessionId, $status, array $packages = array(), \DateTime $beginTime = null, \DateTime $endTime = null)
    {
        $this->sessionId = $sessionId;
        $this->beginTime = $beginTime;
        $this->endTime = $endTime;
        $this->status = $status;
        $this->packages = $packages;
    }

    /**
     * @return int
     */
    public function sessionId()
    {
        return $this->sessionId;
    }

    /**
     * @return \DateTime
     */
    public function beginTime()
    {
        return $this->beginTime;
    }

    /**
     * @return \DateTime
     */
    public function endTime()
    {
        return $this->endTime;
    }

    /**
     * @return array
     */
    public function statusInfo()
    {
        return $this->statusInfo;
    }

    public function status()
    {
        return isset($this->statusInfo['Status']) ? $this->statusInfo['Status'] : '';
    }

    /**
     * @return OrderedPackage[]
     */
    public function packages()
    {
        return $this->packages;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->packages);
    }
}