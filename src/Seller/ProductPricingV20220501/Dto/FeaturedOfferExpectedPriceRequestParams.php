<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class FeaturedOfferExpectedPriceRequestParams extends Dto
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  string  $sku  The seller SKU of the item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $sku,
    ) {
    }
}