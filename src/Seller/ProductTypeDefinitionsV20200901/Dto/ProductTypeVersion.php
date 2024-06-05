<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use SellingPartnerApi\Dto;

final class ProductTypeVersion extends Dto
{
    /**
     * @param  string  $version  Version identifier.
     * @param  bool  $latest  When true, the version indicated by the version identifier is the latest available for the Amazon product type.
     * @param  ?bool  $releaseCandidate  When true, the version indicated by the version identifier is the prerelease (release candidate) for the Amazon product type.
     */
    public function __construct(
        public readonly string $version,
        public readonly bool $latest,
        public readonly ?bool $releaseCandidate = null,
    ) {
    }
}