<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class DocumentSize extends Dto
{
    /**
     * @param  float  $width  The width of the document measured in the units specified.
     * @param  float  $length  The length of the document measured in the units specified.
     * @param  string  $unit  The unit of measurement.
     */
    public function __construct(
        public readonly float $width,
        public readonly float $length,
        public readonly string $unit,
    ) {
    }
}