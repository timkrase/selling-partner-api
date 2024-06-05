<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class PartneredLtlDataInput extends Dto
{
    protected static array $attributeMap = [
        'contact' => 'Contact',
        'boxCount' => 'BoxCount',
        'sellerFreightClass' => 'SellerFreightClass',
        'freightReadyDate' => 'FreightReadyDate',
        'palletList' => 'PalletList',
        'totalWeight' => 'TotalWeight',
        'sellerDeclaredValue' => 'SellerDeclaredValue',
    ];

    protected static array $complexArrayTypes = ['palletList' => [Pallet::class]];

    /**
     * @param  ?Contact  $contact  Contact information for the person in the seller's organization who is responsible for a Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  ?int  $boxCount  Contains an unsigned integer
     * @param  ?string  $sellerFreightClass  The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  ?DateTime  $freightReadyDate  Type containing date in string format
     * @param  Pallet[]|null  $palletList  A list of pallet information.
     * @param  ?Weight  $totalWeight  The weight of the package.
     * @param  ?Amount  $sellerDeclaredValue  The monetary value.
     */
    public function __construct(
        public readonly ?Contact $contact = null,
        public readonly ?int $boxCount = null,
        public readonly ?string $sellerFreightClass = null,
        public readonly ?\DateTime $freightReadyDate = null,
        public readonly ?array $palletList = null,
        public readonly ?Weight $totalWeight = null,
        public readonly ?Amount $sellerDeclaredValue = null,
    ) {
    }
}