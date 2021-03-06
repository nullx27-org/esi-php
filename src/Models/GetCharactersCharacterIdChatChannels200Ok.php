<?php
/**
 * GetCharactersCharacterIdChatChannels200Ok
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
 * GetCharactersCharacterIdChatChannels200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     nullx27\ESI
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdChatChannels200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_chat_channels_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed' => '\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsAllowed[]',
        'blocked' => '\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsBlocked[]',
        'channelId' => 'int',
        'comparisonKey' => 'string',
        'hasPassword' => 'bool',
        'motd' => 'string',
        'muted' => '\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsMuted[]',
        'name' => 'string',
        'operators' => '\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsOperator[]',
        'ownerId' => 'int'
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
        'allowed' => 'allowed',
        'blocked' => 'blocked',
        'channelId' => 'channel_id',
        'comparisonKey' => 'comparison_key',
        'hasPassword' => 'has_password',
        'motd' => 'motd',
        'muted' => 'muted',
        'name' => 'name',
        'operators' => 'operators',
        'ownerId' => 'owner_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allowed' => 'setAllowed',
        'blocked' => 'setBlocked',
        'channelId' => 'setChannelId',
        'comparisonKey' => 'setComparisonKey',
        'hasPassword' => 'setHasPassword',
        'motd' => 'setMotd',
        'muted' => 'setMuted',
        'name' => 'setName',
        'operators' => 'setOperators',
        'ownerId' => 'setOwnerId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allowed' => 'getAllowed',
        'blocked' => 'getBlocked',
        'channelId' => 'getChannelId',
        'comparisonKey' => 'getComparisonKey',
        'hasPassword' => 'getHasPassword',
        'motd' => 'getMotd',
        'muted' => 'getMuted',
        'name' => 'getName',
        'operators' => 'getOperators',
        'ownerId' => 'getOwnerId'
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
        $this->container['allowed'] = isset($data['allowed']) ? $data['allowed'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['comparisonKey'] = isset($data['comparisonKey']) ? $data['comparisonKey'] : null;
        $this->container['hasPassword'] = isset($data['hasPassword']) ? $data['hasPassword'] : null;
        $this->container['motd'] = isset($data['motd']) ? $data['motd'] : null;
        $this->container['muted'] = isset($data['muted']) ? $data['muted'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operators'] = isset($data['operators']) ? $data['operators'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['allowed'] === null) {
            $invalid_properties[] = "'allowed' can't be null";
        }
        if ($this->container['blocked'] === null) {
            $invalid_properties[] = "'blocked' can't be null";
        }
        if ($this->container['channelId'] === null) {
            $invalid_properties[] = "'channelId' can't be null";
        }
        if ($this->container['comparisonKey'] === null) {
            $invalid_properties[] = "'comparisonKey' can't be null";
        }
        if ($this->container['hasPassword'] === null) {
            $invalid_properties[] = "'hasPassword' can't be null";
        }
        if ($this->container['motd'] === null) {
            $invalid_properties[] = "'motd' can't be null";
        }
        if ($this->container['muted'] === null) {
            $invalid_properties[] = "'muted' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['operators'] === null) {
            $invalid_properties[] = "'operators' can't be null";
        }
        if ($this->container['ownerId'] === null) {
            $invalid_properties[] = "'ownerId' can't be null";
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
        if ($this->container['allowed'] === null) {
            return false;
        }
        if ($this->container['blocked'] === null) {
            return false;
        }
        if ($this->container['channelId'] === null) {
            return false;
        }
        if ($this->container['comparisonKey'] === null) {
            return false;
        }
        if ($this->container['hasPassword'] === null) {
            return false;
        }
        if ($this->container['motd'] === null) {
            return false;
        }
        if ($this->container['muted'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['operators'] === null) {
            return false;
        }
        if ($this->container['ownerId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allowed
     * @return \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsAllowed[]
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     * @param \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsAllowed[] $allowed allowed array
     * @return $this
     */
    public function setAllowed($allowed)
    {
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets blocked
     * @return \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsBlocked[]
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsBlocked[] $blocked blocked array
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets channelId
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
     * Sets channelId
     * @param int $channelId Unique channel ID. Always negative for player-created channels. Permanent (CCP created) channels have a positive ID, but don't appear in the API
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;

        return $this;
    }

    /**
     * Gets comparisonKey
     * @return string
     */
    public function getComparisonKey()
    {
        return $this->container['comparisonKey'];
    }

    /**
     * Sets comparisonKey
     * @param string $comparisonKey Normalized, unique string used to compare channel names
     * @return $this
     */
    public function setComparisonKey($comparisonKey)
    {
        $this->container['comparisonKey'] = $comparisonKey;

        return $this;
    }

    /**
     * Gets hasPassword
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['hasPassword'];
    }

    /**
     * Sets hasPassword
     * @param bool $hasPassword Whether this is a password protected channel
     * @return $this
     */
    public function setHasPassword($hasPassword)
    {
        $this->container['hasPassword'] = $hasPassword;

        return $this;
    }

    /**
     * Gets motd
     * @return string
     */
    public function getMotd()
    {
        return $this->container['motd'];
    }

    /**
     * Sets motd
     * @param string $motd Message of the day for this channel
     * @return $this
     */
    public function setMotd($motd)
    {
        $this->container['motd'] = $motd;

        return $this;
    }

    /**
     * Gets muted
     * @return \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsMuted[]
     */
    public function getMuted()
    {
        return $this->container['muted'];
    }

    /**
     * Sets muted
     * @param \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsMuted[] $muted muted array
     * @return $this
     */
    public function setMuted($muted)
    {
        $this->container['muted'] = $muted;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Displayed name of channel
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operators
     * @return \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsOperator[]
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     * @param \nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsOperator[] $operators operators array
     * @return $this
     */
    public function setOperators($operators)
    {
        $this->container['operators'] = $operators;

        return $this;
    }

    /**
     * Gets ownerId
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     * @param int $ownerId owner_id integer
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

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


