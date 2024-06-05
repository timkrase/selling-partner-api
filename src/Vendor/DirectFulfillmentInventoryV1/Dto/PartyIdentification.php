<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use SellingPartnerApi\Dto;

final class PartyIdentification extends Dto
{
    /**
     * @param  string  $partyId  Assigned identification for the party.
     */
    public function __construct(
        public readonly string $partyId,
    ) {
    }
}