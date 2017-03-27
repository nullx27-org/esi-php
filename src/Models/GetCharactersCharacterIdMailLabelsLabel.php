<?php
/**
 * GetCharactersCharacterIdMailLabelsLabel
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
 * OpenAPI spec version: 0.4.2.dev16
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
 * GetCharactersCharacterIdMailLabelsLabel Class Doc Comment
 *
 * @category    Class */
 // @description label object
/**
 * @package     nullx27\ESI
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdMailLabelsLabel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_mail_labels_label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'color' => 'string',
        'labelId' => 'int',
        'name' => 'string',
        'unreadCount' => 'int'
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
        'color' => 'color',
        'labelId' => 'label_id',
        'name' => 'name',
        'unreadCount' => 'unread_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor',
        'labelId' => 'setLabelId',
        'name' => 'setName',
        'unreadCount' => 'setUnreadCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor',
        'labelId' => 'getLabelId',
        'name' => 'getName',
        'unreadCount' => 'getUnreadCount'
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

    const COLOR_FFFFFF = '#ffffff';
    const COLOR_FFFF01 = '#ffff01';
    const COLOR_FF6600 = '#ff6600';
    const COLOR_FE0000 = '#fe0000';
    const COLOR__9A0000 = '#9a0000';
    const COLOR__660066 = '#660066';
    const COLOR__0000FE = '#0000fe';
    const COLOR__0099FF = '#0099ff';
    const COLOR__01FFFF = '#01ffff';
    const COLOR__00FF33 = '#00ff33';
    const COLOR__349800 = '#349800';
    const COLOR__006634 = '#006634';
    const COLOR__666666 = '#666666';
    const COLOR__999999 = '#999999';
    const COLOR_E6E6E6 = '#e6e6e6';
    const COLOR_FFFFCD = '#ffffcd';
    const COLOR__99FFFF = '#99ffff';
    const COLOR_CCFF9A = '#ccff9a';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getColorAllowableValues()
    {
        return [
            self::COLOR_FFFFFF,
            self::COLOR_FFFF01,
            self::COLOR_FF6600,
            self::COLOR_FE0000,
            self::COLOR__9A0000,
            self::COLOR__660066,
            self::COLOR__0000FE,
            self::COLOR__0099FF,
            self::COLOR__01FFFF,
            self::COLOR__00FF33,
            self::COLOR__349800,
            self::COLOR__006634,
            self::COLOR__666666,
            self::COLOR__999999,
            self::COLOR_E6E6E6,
            self::COLOR_FFFFCD,
            self::COLOR__99FFFF,
            self::COLOR_CCFF9A,
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : '#ffffff';
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['unreadCount'] = isset($data['unreadCount']) ? $data['unreadCount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["#ffffff", "#ffff01", "#ff6600", "#fe0000", "#9a0000", "#660066", "#0000fe", "#0099ff", "#01ffff", "#00ff33", "#349800", "#006634", "#666666", "#999999", "#e6e6e6", "#ffffcd", "#99ffff", "#ccff9a"];
        if (!in_array($this->container['color'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'color', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['labelId']) && ($this->container['labelId'] < 0)) {
            $invalid_properties[] = "invalid value for 'labelId', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 40)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['unreadCount']) && ($this->container['unreadCount'] < 0)) {
            $invalid_properties[] = "invalid value for 'unreadCount', must be bigger than or equal to 0.";
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
        $allowed_values = ["#ffffff", "#ffff01", "#ff6600", "#fe0000", "#9a0000", "#660066", "#0000fe", "#0099ff", "#01ffff", "#00ff33", "#349800", "#006634", "#666666", "#999999", "#e6e6e6", "#ffffcd", "#99ffff", "#ccff9a"];
        if (!in_array($this->container['color'], $allowed_values)) {
            return false;
        }
        if ($this->container['labelId'] < 0) {
            return false;
        }
        if (strlen($this->container['name']) > 40) {
            return false;
        }
        if ($this->container['unreadCount'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color color string
     * @return $this
     */
    public function setColor($color)
    {
        $allowed_values = array('#ffffff', '#ffff01', '#ff6600', '#fe0000', '#9a0000', '#660066', '#0000fe', '#0099ff', '#01ffff', '#00ff33', '#349800', '#006634', '#666666', '#999999', '#e6e6e6', '#ffffcd', '#99ffff', '#ccff9a');
        if (!is_null($color) && (!in_array($color, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'color', must be one of '#ffffff', '#ffff01', '#ff6600', '#fe0000', '#9a0000', '#660066', '#0000fe', '#0099ff', '#01ffff', '#00ff33', '#349800', '#006634', '#666666', '#999999', '#e6e6e6', '#ffffcd', '#99ffff', '#ccff9a'");
        }
        $this->container['color'] = $color;

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
     * @param int $labelId label_id integer
     * @return $this
     */
    public function setLabelId($labelId)
    {

        if (!is_null($labelId) && ($labelId < 0)) {
            throw new \InvalidArgumentException('invalid value for $labelId when calling GetCharactersCharacterIdMailLabelsLabel., must be bigger than or equal to 0.');
        }

        $this->container['labelId'] = $labelId;

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
     * @param string $name name string
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling GetCharactersCharacterIdMailLabelsLabel., must be smaller than or equal to 40.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unreadCount
     * @return int
     */
    public function getUnreadCount()
    {
        return $this->container['unreadCount'];
    }

    /**
     * Sets unreadCount
     * @param int $unreadCount unread_count integer
     * @return $this
     */
    public function setUnreadCount($unreadCount)
    {

        if (!is_null($unreadCount) && ($unreadCount < 0)) {
            throw new \InvalidArgumentException('invalid value for $unreadCount when calling GetCharactersCharacterIdMailLabelsLabel., must be bigger than or equal to 0.');
        }

        $this->container['unreadCount'] = $unreadCount;

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


