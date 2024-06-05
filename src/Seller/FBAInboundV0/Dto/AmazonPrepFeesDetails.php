<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class AmazonPrepFeesDetails extends Dto
{
    protected static array $attributeMap = ['prepInstruction' => 'PrepInstruction', 'feePerUnit' => 'FeePerUnit'];

    /**
     * @param  ?string  $prepInstruction  Preparation instructions for shipping an item to Amazon's fulfillment network. For more information about preparing items for shipment to Amazon's fulfillment network, see the Seller Central Help for your marketplace.
     * @param  ?Amount  $feePerUnit  The monetary value.
     */
    public function __construct(
        public readonly ?string $prepInstruction = null,
        public readonly ?Amount $feePerUnit = null,
    ) {
    }
}