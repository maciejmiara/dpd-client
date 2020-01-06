<?php

namespace Webit\DPDClient\DPDAppServices;

use Webit\DPDClient\DPDAppServices\CollectionOrder\CollectionOrderRequest;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\AuthDataV1;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\OpenUMLFXV2;

class Client
{
    /** @var CollectionOrderRequest */
    private $collectionOrderRequest;

    /** @var AuthDataV1 */
    private $authDataV1;

    /**
     * Client constructor.
     * @param CollectionOrderRequest $collectionOrderRequest
     * @param AuthDataV1 $authDataV1
     */
    public function __construct(CollectionOrderRequest $collectionOrderRequest, AuthDataV1 $authDataV1)
    {
        $this->collectionOrderRequest = $collectionOrderRequest;
        $this->authDataV1 = $authDataV1;
    }

    /**
     * @param OpenUMLFXV2 $openUMLF
     * @return CollectionOrder\CollectionOrderResponse $response
     */
    public function collectionOrder(
        OpenUMLFXV2 $openUMLF
    ) {
        return $this->collectionOrderRequest->__invoke(
            $openUMLF,
            $this->authDataV1
        );
    }

}
