<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class ScheduledDeliveryInfo extends Dto
{
    protected static array $complexArrayTypes = ['deliveryWindows' => [DeliveryWindow::class]];

    /**
     * @param  string  $deliveryTimeZone  The time zone of the destination address for the fulfillment order preview. Must be an IANA time zone name. Example: Asia/Tokyo.
     * @param  DeliveryWindow[]  $deliveryWindows  An array of delivery windows.
     */
    public function __construct(
        public readonly string $deliveryTimeZone,
        public readonly array $deliveryWindows,
    ) {
    }
}