<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemQuantity extends BaseDto
{
    /**
     * @param  int  $amount Quantity of units shipped for a specific item at a shipment level. If the item is present only in certain packages or pallets within the shipment, please provide this at the appropriate package or pallet level.
     * @param  string  $unitOfMeasure Unit of measure for the shipped quantity.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly int $amount,
        public readonly string $unitOfMeasure,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}