<?php

namespace Webit\DPDClient\DPDAppServices\CollectionOrder;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\AuthDataV1;
use Webit\DPDClient\DPDAppServices\Common\OpenUMLF\OpenUMLFXV2;
use Webit\SoapApi\AbstractApi;

class CollectionOrderRequest extends AbstractApi
{
    /**
     * @param OpenUMLFXV2 $openUmlf
     * @param AuthDataV1 $authData
     * @return CollectionOrderResponse
     */
    public function __invoke(OpenUMLFXV2 $openUmlf, AuthDataV1 $authData)
    {
        $serializer = SerializerBuilder::create()->build();
        $openUmlf = $serializer->serialize($openUmlf->packages(), 'xml');

        // TODO find better way for that
        $openUmlf = str_replace('result', 'Packages', $openUmlf);
        $openUmlf = str_replace('entry', 'Package', $openUmlf);

        /** @var CollectionOrderResponse $response */
        $response = $this->doRequest(
            'importPackagesXV1',
            array(
                'openUMLFXV2' => $openUmlf,
                'pkgNumsGenerationPolicyV1' => null,
                'authDataV1' => $authData
            )
        );

        return $response;
    }
}
