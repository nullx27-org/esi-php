<?php
/**
 * GetCharactersCharacterIdContacts200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.4.9.dev1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27\ESI\Models;

use \ArrayAccess;

/**
 * GetCharactersCharacterIdContacts200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     nullx27\ESI
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdContacts200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_contacts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contactId' => 'int',
        'contactType' => 'string',
        'isBlocked' => 'bool',
        'isWatched' => 'bool',
        'labelId' => 'int',
        'standing' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'contactId' => 'contact_id',
        'contactType' => 'contact_type',
        'isBlocked' => 'is_blocked',
        'isWatched' => 'is_watched',
        'labelId' => 'label_id',
        'standing' => 'standing'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contactId' => 'setContactId',
        'contactType' => 'setContactType',
        'isBlocked' => 'setIsBlocked',
        'isWatched' => 'setIsWatched',
        'labelId' => 'setLabelId',
        'standing' => 'setStanding'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contactId' => 'getContactId',
        'contactType' => 'getContactType',
        'isBlocked' => 'getIsBlocked',
        'isWatched' => 'getIsWatched',
        'labelId' => 'getLabelId',
        'standing' => 'getStanding'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const CONTACT_TYPE_CHARACTER = 'character';
    const CONTACT_TYPE_CORPORATION = 'corporation';
    const CONTACT_TYPE_ALLIANCE = 'alliance';
    const CONTACT_TYPE_FACTION = 'faction';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getContactTypeAllowableValues()
    {
        return [
            self::CONTACT_TYPE_CHARACTER,
            self::CONTACT_TYPE_CORPORATION,
            self::CONTACT_TYPE_ALLIANCE,
            self::CONTACT_TYPE_FACTION,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['contactId'] = isset($data['contactId']) ? $data['contactId'] : null;
        $this->container['contactType'] = isset($data['contactType']) ? $data['contactType'] : null;
        $this->container['isBlocked'] = isset($data['isBlocked']) ? $data['isBlocked'] : null;
        $this->container['isWatched'] = isset($data['isWatched']) ? $data['isWatched'] : null;
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['standing'] = isset($data['standing']) ? $data['standing'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['contactId'] === null) {
            $invalid_properties[] = "'contactId' can't be null";
        }
        if ($this->container['contactType'] === null) {
            $invalid_properties[] = "'contactType' can't be null";
        }
        $allowed_values = ["character", "corporation", "alliance", "faction"];
        if (!in_array($this->container['contactType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'contactType', must be one of #{allowed_values}.";
        }

        if ($this->container['standing'] === null) {
            $invalid_properties[] = "'standing' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['contactId'] === null) {
            return false;
        }
        if ($this->container['contactType'] === null) {
            return false;
        }
        $allowed_values = ["character", "corporation", "alliance", "faction"];
        if (!in_array($this->container['contactType'], $allowed_values)) {
            return false;
        }
        if ($this->container['standing'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets contactId
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     * @param int $contactId contact_id integer
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->container['contactId'] = $contactId;

        return $this;
    }

    /**
     * Gets contactType
     * @return string
     */
    public function getContactType()
    {
        return $this->container['contactType'];
    }

    /**
     * Sets contactType
     * @param string $contactType contact_type string
     * @return $this
     */
    public function setContactType($contactType)
    {
        $allowed_values = array('character', 'corporation', 'alliance', 'faction');
        if ((!in_array($contactType, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'contactType', must be one of 'character', 'corporation', 'alliance', 'faction'");
        }
        $this->container['contactType'] = $contactType;

        return $this;
    }

    /**
     * Gets isBlocked
     * @return bool
     */
    public function getIsBlocked()
    {
        return $this->container['isBlocked'];
    }

    /**
     * Sets isBlocked
     * @param bool $isBlocked Whether this contact is in the blocked list. Note a missing value denotes unknown, not true or false
     * @return $this
     */
    public function setIsBlocked($isBlocked)
    {
        $this->container['isBlocked'] = $isBlocked;

        return $this;
    }

    /**
     * Gets isWatched
     * @return bool
     */
    public function getIsWatched()
    {
        return $this->container['isWatched'];
    }

    /**
     * Sets isWatched
     * @param bool $isWatched Whether this contact is being watched
     * @return $this
     */
    public function setIsWatched($isWatched)
    {
        $this->container['isWatched'] = $isWatched;

        return $this;
    }

    /**
     * Gets labelId
     * @return int
     */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
     * Sets labelId
     * @param int $labelId Custom label of the contact
     * @return $this
     */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;

        return $this;
    }

    /**
     * Gets standing
     * @return float
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     * @param float $standing Standing of the contact
     * @return $this
     */
    public function setStanding($standing)
    {
        $this->container['standing'] = $standing;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\nullx27\ESI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\nullx27\ESI\ObjectSerializer::sanitizeForSerialization($this));
    }
}


