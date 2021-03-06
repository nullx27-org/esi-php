<?php
/**
 * GetDogmaEffectsEffectIdModifier
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
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

namespace nullx27\ESI\nullx27\ESI\Models;

use \ArrayAccess;
use \nullx27\ESI\ObjectSerializer;

/**
 * GetDogmaEffectsEffectIdModifier Class Doc Comment
 *
 * @category Class
 * @description modifier object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDogmaEffectsEffectIdModifier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_dogma_effects_effect_id_modifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'func' => 'string',
        'domain' => 'string',
        'modifiedAttributeId' => 'int',
        'modifyingAttributeId' => 'int',
        'effectId' => 'int',
        'operator' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'func' => null,
        'domain' => null,
        'modifiedAttributeId' => 'int32',
        'modifyingAttributeId' => 'int32',
        'effectId' => 'int32',
        'operator' => 'int32'
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
        'func' => 'func',
        'domain' => 'domain',
        'modifiedAttributeId' => 'modified_attribute_id',
        'modifyingAttributeId' => 'modifying_attribute_id',
        'effectId' => 'effect_id',
        'operator' => 'operator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'func' => 'setFunc',
        'domain' => 'setDomain',
        'modifiedAttributeId' => 'setModifiedAttributeId',
        'modifyingAttributeId' => 'setModifyingAttributeId',
        'effectId' => 'setEffectId',
        'operator' => 'setOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'func' => 'getFunc',
        'domain' => 'getDomain',
        'modifiedAttributeId' => 'getModifiedAttributeId',
        'modifyingAttributeId' => 'getModifyingAttributeId',
        'effectId' => 'getEffectId',
        'operator' => 'getOperator'
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
        $this->container['func'] = isset($data['func']) ? $data['func'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['modifiedAttributeId'] = isset($data['modifiedAttributeId']) ? $data['modifiedAttributeId'] : null;
        $this->container['modifyingAttributeId'] = isset($data['modifyingAttributeId']) ? $data['modifyingAttributeId'] : null;
        $this->container['effectId'] = isset($data['effectId']) ? $data['effectId'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['func'] === null) {
            $invalidProperties[] = "'func' can't be null";
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

        if ($this->container['func'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets func
     *
     * @return string
     */
    public function getFunc()
    {
        return $this->container['func'];
    }

    /**
     * Sets func
     *
     * @param string $func func string
     *
     * @return $this
     */
    public function setFunc($func)
    {
        $this->container['func'] = $func;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain string
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets modifiedAttributeId
     *
     * @return int
     */
    public function getModifiedAttributeId()
    {
        return $this->container['modifiedAttributeId'];
    }

    /**
     * Sets modifiedAttributeId
     *
     * @param int $modifiedAttributeId modified_attribute_id integer
     *
     * @return $this
     */
    public function setModifiedAttributeId($modifiedAttributeId)
    {
        $this->container['modifiedAttributeId'] = $modifiedAttributeId;

        return $this;
    }

    /**
     * Gets modifyingAttributeId
     *
     * @return int
     */
    public function getModifyingAttributeId()
    {
        return $this->container['modifyingAttributeId'];
    }

    /**
     * Sets modifyingAttributeId
     *
     * @param int $modifyingAttributeId modifying_attribute_id integer
     *
     * @return $this
     */
    public function setModifyingAttributeId($modifyingAttributeId)
    {
        $this->container['modifyingAttributeId'] = $modifyingAttributeId;

        return $this;
    }

    /**
     * Gets effectId
     *
     * @return int
     */
    public function getEffectId()
    {
        return $this->container['effectId'];
    }

    /**
     * Sets effectId
     *
     * @param int $effectId effect_id integer
     *
     * @return $this
     */
    public function setEffectId($effectId)
    {
        $this->container['effectId'] = $effectId;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return int
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param int $operator operator integer
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

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


