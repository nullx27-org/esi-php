<?php
/**
 * GetFleetsFleetIdMembers200Ok
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
 * GetFleetsFleetIdMembers200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     nullx27\ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFleetsFleetIdMembers200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_fleets_fleet_id_members_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'characterId' => 'int',
        'joinTime' => '\DateTime',
        'role' => 'string',
        'roleName' => 'string',
        'shipTypeId' => 'int',
        'solarSystemId' => 'int',
        'squadId' => 'int',
        'stationId' => 'int',
        'takesFleetWarp' => 'bool',
        'wingId' => 'int'
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
        'characterId' => 'character_id',
        'joinTime' => 'join_time',
        'role' => 'role',
        'roleName' => 'role_name',
        'shipTypeId' => 'ship_type_id',
        'solarSystemId' => 'solar_system_id',
        'squadId' => 'squad_id',
        'stationId' => 'station_id',
        'takesFleetWarp' => 'takes_fleet_warp',
        'wingId' => 'wing_id'
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
        'characterId' => 'setCharacterId',
        'joinTime' => 'setJoinTime',
        'role' => 'setRole',
        'roleName' => 'setRoleName',
        'shipTypeId' => 'setShipTypeId',
        'solarSystemId' => 'setSolarSystemId',
        'squadId' => 'setSquadId',
        'stationId' => 'setStationId',
        'takesFleetWarp' => 'setTakesFleetWarp',
        'wingId' => 'setWingId'
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
        'characterId' => 'getCharacterId',
        'joinTime' => 'getJoinTime',
        'role' => 'getRole',
        'roleName' => 'getRoleName',
        'shipTypeId' => 'getShipTypeId',
        'solarSystemId' => 'getSolarSystemId',
        'squadId' => 'getSquadId',
        'stationId' => 'getStationId',
        'takesFleetWarp' => 'getTakesFleetWarp',
        'wingId' => 'getWingId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ROLE_FLEET_COMMANDER = 'fleet_commander';
    const ROLE_WING_COMMANDER = 'wing_commander';
    const ROLE_SQUAD_COMMANDER = 'squad_commander';
    const ROLE_SQUAD_MEMBER = 'squad_member';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_FLEET_COMMANDER,
            self::ROLE_WING_COMMANDER,
            self::ROLE_SQUAD_COMMANDER,
            self::ROLE_SQUAD_MEMBER,
        ];
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
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['shipTypeId'] = isset($data['shipTypeId']) ? $data['shipTypeId'] : null;
        $this->container['solarSystemId'] = isset($data['solarSystemId']) ? $data['solarSystemId'] : null;
        $this->container['squadId'] = isset($data['squadId']) ? $data['squadId'] : null;
        $this->container['stationId'] = isset($data['stationId']) ? $data['stationId'] : null;
        $this->container['takesFleetWarp'] = isset($data['takesFleetWarp']) ? $data['takesFleetWarp'] : null;
        $this->container['wingId'] = isset($data['wingId']) ? $data['wingId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['characterId'] === null) {
            $invalid_properties[] = "'characterId' can't be null";
        }
        if ($this->container['joinTime'] === null) {
            $invalid_properties[] = "'joinTime' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalid_properties[] = "'role' can't be null";
        }
        $allowed_values = array("fleet_commander", "wing_commander", "squad_commander", "squad_member");
        if (!in_array($this->container['role'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'role', must be one of #{allowed_values}.";
        }

        if ($this->container['roleName'] === null) {
            $invalid_properties[] = "'roleName' can't be null";
        }
        if ($this->container['shipTypeId'] === null) {
            $invalid_properties[] = "'shipTypeId' can't be null";
        }
        if ($this->container['solarSystemId'] === null) {
            $invalid_properties[] = "'solarSystemId' can't be null";
        }
        if ($this->container['squadId'] === null) {
            $invalid_properties[] = "'squadId' can't be null";
        }
        if ($this->container['takesFleetWarp'] === null) {
            $invalid_properties[] = "'takesFleetWarp' can't be null";
        }
        if ($this->container['wingId'] === null) {
            $invalid_properties[] = "'wingId' can't be null";
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
        if ($this->container['characterId'] === null) {
            return false;
        }
        if ($this->container['joinTime'] === null) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        $allowed_values = array("fleet_commander", "wing_commander", "squad_commander", "squad_member");
        if (!in_array($this->container['role'], $allowed_values)) {
            return false;
        }
        if ($this->container['roleName'] === null) {
            return false;
        }
        if ($this->container['shipTypeId'] === null) {
            return false;
        }
        if ($this->container['solarSystemId'] === null) {
            return false;
        }
        if ($this->container['squadId'] === null) {
            return false;
        }
        if ($this->container['takesFleetWarp'] === null) {
            return false;
        }
        if ($this->container['wingId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets characterId
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['characterId'];
    }

    /**
     * Sets characterId
     * @param int $characterId character_id integer
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets joinTime
     * @return \DateTime
     */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
     * Sets joinTime
     * @param \DateTime $joinTime join_time string
     * @return $this
     */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role Member’s role in fleet
     * @return $this
     */
    public function setRole($role)
    {
        $allowed_values = array('fleet_commander', 'wing_commander', 'squad_commander', 'squad_member');
        if (!in_array($role, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'role', must be one of 'fleet_commander', 'wing_commander', 'squad_commander', 'squad_member'");
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets roleName
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['roleName'];
    }

    /**
     * Sets roleName
     * @param string $roleName Localized role names
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;

        return $this;
    }

    /**
     * Gets shipTypeId
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['shipTypeId'];
    }

    /**
     * Sets shipTypeId
     * @param int $shipTypeId ship_type_id integer
     * @return $this
     */
    public function setShipTypeId($shipTypeId)
    {
        $this->container['shipTypeId'] = $shipTypeId;

        return $this;
    }

    /**
     * Gets solarSystemId
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solarSystemId'];
    }

    /**
     * Sets solarSystemId
     * @param int $solarSystemId Solar system the member is located in
     * @return $this
     */
    public function setSolarSystemId($solarSystemId)
    {
        $this->container['solarSystemId'] = $solarSystemId;

        return $this;
    }

    /**
     * Gets squadId
     * @return int
     */
    public function getSquadId()
    {
        return $this->container['squadId'];
    }

    /**
     * Sets squadId
     * @param int $squadId ID of the squad the member is in. If not applicable, will be set to -1
     * @return $this
     */
    public function setSquadId($squadId)
    {
        $this->container['squadId'] = $squadId;

        return $this;
    }

    /**
     * Gets stationId
     * @return int
     */
    public function getStationId()
    {
        return $this->container['stationId'];
    }

    /**
     * Sets stationId
     * @param int $stationId Station in which the member is docked in, if applicable
     * @return $this
     */
    public function setStationId($stationId)
    {
        $this->container['stationId'] = $stationId;

        return $this;
    }

    /**
     * Gets takesFleetWarp
     * @return bool
     */
    public function getTakesFleetWarp()
    {
        return $this->container['takesFleetWarp'];
    }

    /**
     * Sets takesFleetWarp
     * @param bool $takesFleetWarp Whether the member take fleet warps
     * @return $this
     */
    public function setTakesFleetWarp($takesFleetWarp)
    {
        $this->container['takesFleetWarp'] = $takesFleetWarp;

        return $this;
    }

    /**
     * Gets wingId
     * @return int
     */
    public function getWingId()
    {
        return $this->container['wingId'];
    }

    /**
     * Sets wingId
     * @param int $wingId ID of the wing the member is in. If not applicable, will be set to -1
     * @return $this
     */
    public function setWingId($wingId)
    {
        $this->container['wingId'] = $wingId;

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


