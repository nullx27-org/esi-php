<?php
/**
 * GetCharactersCharacterIdBookmarks200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.3.10.dev17
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27\ESI\Models;

use \ArrayAccess;

/**
 * GetCharactersCharacterIdBookmarks200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     nullx27\ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdBookmarks200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_bookmarks_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'bookmarkId' => 'int',
        'createDate' => '\DateTime',
        'creatorId' => 'int',
        'folderId' => 'int',
        'memo' => 'string',
        'note' => 'string',
        'ownerId' => 'int',
        'target' => '\nullx27\ESI\Models\CharacterscharacterIdbookmarksTarget'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'bookmarkId' => 'bookmark_id',
        'createDate' => 'create_date',
        'creatorId' => 'creator_id',
        'folderId' => 'folder_id',
        'memo' => 'memo',
        'note' => 'note',
        'ownerId' => 'owner_id',
        'target' => 'target'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'bookmarkId' => 'setBookmarkId',
        'createDate' => 'setCreateDate',
        'creatorId' => 'setCreatorId',
        'folderId' => 'setFolderId',
        'memo' => 'setMemo',
        'note' => 'setNote',
        'ownerId' => 'setOwnerId',
        'target' => 'setTarget'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'bookmarkId' => 'getBookmarkId',
        'createDate' => 'getCreateDate',
        'creatorId' => 'getCreatorId',
        'folderId' => 'getFolderId',
        'memo' => 'getMemo',
        'note' => 'getNote',
        'ownerId' => 'getOwnerId',
        'target' => 'getTarget'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bookmarkId'] = isset($data['bookmarkId']) ? $data['bookmarkId'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['bookmarkId'] === null) {
            $invalid_properties[] = "'bookmarkId' can't be null";
        }
        if ($this->container['createDate'] === null) {
            $invalid_properties[] = "'createDate' can't be null";
        }
        if ($this->container['creatorId'] === null) {
            $invalid_properties[] = "'creatorId' can't be null";
        }
        if ($this->container['memo'] === null) {
            $invalid_properties[] = "'memo' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalid_properties[] = "'note' can't be null";
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
        if ($this->container['bookmarkId'] === null) {
            return false;
        }
        if ($this->container['createDate'] === null) {
            return false;
        }
        if ($this->container['creatorId'] === null) {
            return false;
        }
        if ($this->container['memo'] === null) {
            return false;
        }
        if ($this->container['note'] === null) {
            return false;
        }
        if ($this->container['ownerId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bookmarkId
     * @return int
     */
    public function getBookmarkId()
    {
        return $this->container['bookmarkId'];
    }

    /**
     * Sets bookmarkId
     * @param int $bookmarkId bookmark_id integer
     * @return $this
     */
    public function setBookmarkId($bookmarkId)
    {
        $this->container['bookmarkId'] = $bookmarkId;

        return $this;
    }

    /**
     * Gets createDate
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
     * Sets createDate
     * @param \DateTime $createDate create_date string
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;

        return $this;
    }

    /**
     * Gets creatorId
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     * @param int $creatorId creator_id integer
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets folderId
     * @return int
     */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     * @param int $folderId folder_id integer
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     * @param string $memo memo string
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note note string
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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
     * Gets target
     * @return \nullx27\ESI\Models\CharacterscharacterIdbookmarksTarget
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param \nullx27\ESI\Models\CharacterscharacterIdbookmarksTarget $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

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

