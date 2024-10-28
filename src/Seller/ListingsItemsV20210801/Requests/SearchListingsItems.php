<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Responses\ErrorList;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Responses\ItemSearchResults;

/**
 * searchListingsItems
 */
class SearchListingsItems extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account or vendor code.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $identifiers  A comma-delimited list of product identifiers to search for listings items by.
     *
     * **Note**:
     * 1. Required when `identifiersType` is provided.
     * @param  ?string  $identifiersType  Type of product identifiers to search for listings items by.
     *
     * **Note**:
     * 1. Required when `identifiers` is provided.
     * @param  ?int  $pageSize  Number of results to be returned per page.
     * @param  ?string  $pageToken  A token to fetch a certain page when there are multiple pages worth of results.
     * @param  ?array  $includedData  A comma-delimited list of data sets to include in the response. Default: summaries.
     * @param  ?string  $issueLocale  A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     */
    public function __construct(
        protected string $sellerId,
        protected array $marketplaceIds,
        protected ?array $identifiers = null,
        protected ?string $identifiersType = null,
        protected ?int $pageSize = null,
        protected ?string $pageToken = null,
        protected ?array $includedData = null,
        protected ?string $issueLocale = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/listings/2021-08-01/items/{$this->sellerId}";
    }

    public function createDtoFromResponse(Response $response): ItemSearchResults|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ItemSearchResults::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceIds' => $this->marketplaceIds,
            'identifiers' => $this->identifiers,
            'identifiersType' => $this->identifiersType,
            'pageSize' => $this->pageSize,
            'pageToken' => $this->pageToken,
            'includedData' => $this->includedData,
            'issueLocale' => $this->issueLocale,
        ]);
    }
}