<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PrepDetails extends BaseDto
{
    /**
     * @param  string  $prepInstruction Preparation instructions for shipping an item to Amazon's fulfillment network. For more information about preparing items for shipment to Amazon's fulfillment network, see the Seller Central Help for your marketplace.
     * @param  string  $prepOwner Indicates who will prepare the item.
     */
    public function __construct(
        public readonly ?string $prepInstruction = null,
        public readonly ?string $prepOwner = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}