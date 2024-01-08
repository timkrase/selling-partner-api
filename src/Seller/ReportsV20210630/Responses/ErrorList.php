<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ErrorList extends BaseResponse
{
    /**
     * @param  Error[]  $errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}