<?php
/**
 * GetCorporationsCorporationIdWalletsDivisionTransactions200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27ESI\nullx27\ESI\Models;

use \ArrayAccess;
use \nullx27ESI\ObjectSerializer;

/**
 * GetCorporationsCorporationIdWalletsDivisionTransactions200Ok Class Doc Comment
 *
 * @category Class
 * @description wallet transaction
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdWalletsDivisionTransactions200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_wallets_division_transactions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'int',
        'date' => '\DateTime',
        'typeId' => 'int',
        'locationId' => 'int',
        'unitPrice' => 'double',
        'quantity' => 'int',
        'clientId' => 'int',
        'isBuy' => 'bool',
        'journalRefId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => 'int64',
        'date' => 'date-time',
        'typeId' => 'int32',
        'locationId' => 'int64',
        'unitPrice' => 'double',
        'quantity' => 'int32',
        'clientId' => 'int32',
        'isBuy' => null,
        'journalRefId' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transactionId' => 'transaction_id',
        'date' => 'date',
        'typeId' => 'type_id',
        'locationId' => 'location_id',
        'unitPrice' => 'unit_price',
        'quantity' => 'quantity',
        'clientId' => 'client_id',
        'isBuy' => 'is_buy',
        'journalRefId' => 'journal_ref_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'date' => 'setDate',
        'typeId' => 'setTypeId',
        'locationId' => 'setLocationId',
        'unitPrice' => 'setUnitPrice',
        'quantity' => 'setQuantity',
        'clientId' => 'setClientId',
        'isBuy' => 'setIsBuy',
        'journalRefId' => 'setJournalRefId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'date' => 'getDate',
        'typeId' => 'getTypeId',
        'locationId' => 'getLocationId',
        'unitPrice' => 'getUnitPrice',
        'quantity' => 'getQuantity',
        'clientId' => 'getClientId',
        'isBuy' => 'getIsBuy',
        'journalRefId' => 'getJournalRefId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['isBuy'] = isset($data['isBuy']) ? $data['isBuy'] : null;
        $this->container['journalRefId'] = isset($data['journalRefId']) ? $data['journalRefId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['typeId'] === null) {
            $invalidProperties[] = "'typeId' can't be null";
        }
        if ($this->container['locationId'] === null) {
            $invalidProperties[] = "'locationId' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
        if ($this->container['isBuy'] === null) {
            $invalidProperties[] = "'isBuy' can't be null";
        }
        if ($this->container['journalRefId'] === null) {
            $invalidProperties[] = "'journalRefId' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['transactionId'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['typeId'] === null) {
            return false;
        }
        if ($this->container['locationId'] === null) {
            return false;
        }
        if ($this->container['unitPrice'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['clientId'] === null) {
            return false;
        }
        if ($this->container['isBuy'] === null) {
            return false;
        }
        if ($this->container['journalRefId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets transactionId
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param int $transactionId Unique transaction ID
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Date and time of transaction
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets typeId
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     *
     * @param int $typeId type_id integer
     *
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets locationId
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param int $locationId location_id integer
     *
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param double $unitPrice Amount paid per unit
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity integer
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param int $clientId client_id integer
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets isBuy
     *
     * @return bool
     */
    public function getIsBuy()
    {
        return $this->container['isBuy'];
    }

    /**
     * Sets isBuy
     *
     * @param bool $isBuy is_buy boolean
     *
     * @return $this
     */
    public function setIsBuy($isBuy)
    {
        $this->container['isBuy'] = $isBuy;

        return $this;
    }

    /**
     * Gets journalRefId
     *
     * @return int
     */
    public function getJournalRefId()
    {
        return $this->container['journalRefId'];
    }

    /**
     * Sets journalRefId
     *
     * @param int $journalRefId journal_ref_id integer
     *
     * @return $this
     */
    public function setJournalRefId($journalRefId)
    {
        $this->container['journalRefId'] = $journalRefId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

