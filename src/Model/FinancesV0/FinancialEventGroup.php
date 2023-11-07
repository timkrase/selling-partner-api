<?php declare(strict_types=1);
/**
 * FinancialEventGroup
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FinancialEventGroup Class Doc Comment
 *
 * @category Class
 * @description Information related to a financial event group.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FinancialEventGroup extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinancialEventGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'financial_event_group_id' => 'string',
        'processing_status' => 'string',
        'fund_transfer_status' => 'string',
        'original_total' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'converted_total' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'fund_transfer_date' => 'string',
        'trace_id' => 'string',
        'account_tail' => 'string',
        'beginning_balance' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'financial_event_group_start' => 'string',
        'financial_event_group_end' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'financial_event_group_id' => null,
        'processing_status' => null,
        'fund_transfer_status' => null,
        'original_total' => null,
        'converted_total' => null,
        'fund_transfer_date' => null,
        'trace_id' => null,
        'account_tail' => null,
        'beginning_balance' => null,
        'financial_event_group_start' => null,
        'financial_event_group_end' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'financial_event_group_id' => 'FinancialEventGroupId',
        'processing_status' => 'ProcessingStatus',
        'fund_transfer_status' => 'FundTransferStatus',
        'original_total' => 'OriginalTotal',
        'converted_total' => 'ConvertedTotal',
        'fund_transfer_date' => 'FundTransferDate',
        'trace_id' => 'TraceId',
        'account_tail' => 'AccountTail',
        'beginning_balance' => 'BeginningBalance',
        'financial_event_group_start' => 'FinancialEventGroupStart',
        'financial_event_group_end' => 'FinancialEventGroupEnd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'financial_event_group_id' => 'setFinancialEventGroupId',
        'processing_status' => 'setProcessingStatus',
        'fund_transfer_status' => 'setFundTransferStatus',
        'original_total' => 'setOriginalTotal',
        'converted_total' => 'setConvertedTotal',
        'fund_transfer_date' => 'setFundTransferDate',
        'trace_id' => 'setTraceId',
        'account_tail' => 'setAccountTail',
        'beginning_balance' => 'setBeginningBalance',
        'financial_event_group_start' => 'setFinancialEventGroupStart',
        'financial_event_group_end' => 'setFinancialEventGroupEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'financial_event_group_id' => 'getFinancialEventGroupId',
        'processing_status' => 'getProcessingStatus',
        'fund_transfer_status' => 'getFundTransferStatus',
        'original_total' => 'getOriginalTotal',
        'converted_total' => 'getConvertedTotal',
        'fund_transfer_date' => 'getFundTransferDate',
        'trace_id' => 'getTraceId',
        'account_tail' => 'getAccountTail',
        'beginning_balance' => 'getBeginningBalance',
        'financial_event_group_start' => 'getFinancialEventGroupStart',
        'financial_event_group_end' => 'getFinancialEventGroupEnd'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['financial_event_group_id'] = $data['financial_event_group_id'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['fund_transfer_status'] = $data['fund_transfer_status'] ?? null;
        $this->container['original_total'] = $data['original_total'] ?? null;
        $this->container['converted_total'] = $data['converted_total'] ?? null;
        $this->container['fund_transfer_date'] = $data['fund_transfer_date'] ?? null;
        $this->container['trace_id'] = $data['trace_id'] ?? null;
        $this->container['account_tail'] = $data['account_tail'] ?? null;
        $this->container['beginning_balance'] = $data['beginning_balance'] ?? null;
        $this->container['financial_event_group_start'] = $data['financial_event_group_start'] ?? null;
        $this->container['financial_event_group_end'] = $data['financial_event_group_end'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets financial_event_group_id
     *
     * @return string|null
     */
    public function getFinancialEventGroupId()
    {
        return $this->container['financial_event_group_id'];
    }

    /**
     * Sets financial_event_group_id
     *
     * @param string|null $financial_event_group_id A unique identifier for the financial event group.
     *
     * @return self
     */
    public function setFinancialEventGroupId($financial_event_group_id)
    {
        $this->container['financial_event_group_id'] = $financial_event_group_id;

        return $this;
    }
    /**
     * Gets processing_status
     *
     * @return string|null
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string|null $processing_status The processing status of the financial event group indicates whether the balance of the financial event group is settled.
     *   Possible values:
     *   * Open
     *   * Closed
     *
     * @return self
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }
    /**
     * Gets fund_transfer_status
     *
     * @return string|null
     */
    public function getFundTransferStatus()
    {
        return $this->container['fund_transfer_status'];
    }

    /**
     * Sets fund_transfer_status
     *
     * @param string|null $fund_transfer_status The status of the fund transfer.
     *
     * @return self
     */
    public function setFundTransferStatus($fund_transfer_status)
    {
        $this->container['fund_transfer_status'] = $fund_transfer_status;

        return $this;
    }
    /**
     * Gets original_total
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getOriginalTotal()
    {
        return $this->container['original_total'];
    }

    /**
     * Sets original_total
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $original_total original_total
     *
     * @return self
     */
    public function setOriginalTotal($original_total)
    {
        $this->container['original_total'] = $original_total;

        return $this;
    }
    /**
     * Gets converted_total
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getConvertedTotal()
    {
        return $this->container['converted_total'];
    }

    /**
     * Sets converted_total
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $converted_total converted_total
     *
     * @return self
     */
    public function setConvertedTotal($converted_total)
    {
        $this->container['converted_total'] = $converted_total;

        return $this;
    }
    /**
     * Gets fund_transfer_date
     *
     * @return string|null
     */
    public function getFundTransferDate()
    {
        return $this->container['fund_transfer_date'];
    }

    /**
     * Sets fund_transfer_date
     *
     * @param string|null $fund_transfer_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setFundTransferDate($fund_transfer_date)
    {
        $this->container['fund_transfer_date'] = $fund_transfer_date;

        return $this;
    }
    /**
     * Gets trace_id
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string|null $trace_id The trace identifier used by sellers to look up transactions externally.
     *
     * @return self
     */
    public function setTraceId($trace_id)
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }
    /**
     * Gets account_tail
     *
     * @return string|null
     */
    public function getAccountTail()
    {
        return $this->container['account_tail'];
    }

    /**
     * Sets account_tail
     *
     * @param string|null $account_tail The account tail of the payment instrument.
     *
     * @return self
     */
    public function setAccountTail($account_tail)
    {
        $this->container['account_tail'] = $account_tail;

        return $this;
    }
    /**
     * Gets beginning_balance
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getBeginningBalance()
    {
        return $this->container['beginning_balance'];
    }

    /**
     * Sets beginning_balance
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $beginning_balance beginning_balance
     *
     * @return self
     */
    public function setBeginningBalance($beginning_balance)
    {
        $this->container['beginning_balance'] = $beginning_balance;

        return $this;
    }
    /**
     * Gets financial_event_group_start
     *
     * @return string|null
     */
    public function getFinancialEventGroupStart()
    {
        return $this->container['financial_event_group_start'];
    }

    /**
     * Sets financial_event_group_start
     *
     * @param string|null $financial_event_group_start A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setFinancialEventGroupStart($financial_event_group_start)
    {
        $this->container['financial_event_group_start'] = $financial_event_group_start;

        return $this;
    }
    /**
     * Gets financial_event_group_end
     *
     * @return string|null
     */
    public function getFinancialEventGroupEnd()
    {
        return $this->container['financial_event_group_end'];
    }

    /**
     * Sets financial_event_group_end
     *
     * @param string|null $financial_event_group_end A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setFinancialEventGroupEnd($financial_event_group_end)
    {
        $this->container['financial_event_group_end'] = $financial_event_group_end;

        return $this;
    }
}

