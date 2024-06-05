<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class LanguageType extends Dto
{
    protected static array $attributeMap = ['name' => 'Name', 'type' => 'Type', 'audioFormat' => 'AudioFormat'];

    /**
     * @param  ?string  $name  The name attribute of the item.
     * @param  ?string  $type  The type attribute of the item.
     * @param  ?string  $audioFormat  The audio format attribute of the item.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $type = null,
        public readonly ?string $audioFormat = null,
    ) {
    }
}