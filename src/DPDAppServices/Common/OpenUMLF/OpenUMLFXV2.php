<?php

namespace Webit\DPDClient\DPDAppServices\Common\OpenUMLF;

use JMS\Serializer\Annotation as JMS;

class OpenUMLFXV2 implements \IteratorAggregate
{
    /**
     * @var Package[]
     * @JMS\SerializedName("Packages")
     * @JMS\XmlList(entry="Package")
     * @JMS\Type("array<Webit\DPDClient\DPDAppServices\Common\OpenUMLF\Package>")
     */
    private $packages;

    /**
     * @param Package[] $packages
     */
    public function __construct(array $packages = array())
    {
        $this->packages = $packages;
    }

    /**
     * @return Package[]
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
