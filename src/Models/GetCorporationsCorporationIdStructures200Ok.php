<?php
/**
 * GetCorporationsCorporationIdStructures200Ok
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
 * GetCorporationsCorporationIdStructures200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     nullx27\ESI
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStructures200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'corporationId' => 'int',
        'currentVul' => '\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[]',
        'fuelExpires' => '\DateTime',
        'nextVul' => '\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[]',
        'profileId' => 'int',
        'services' => '\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[]',
        'stateTimerEnd' => '\DateTime',
        'stateTimerStart' => '\DateTime',
        'structureId' => 'int',
        'systemId' => 'int',
        'typeId' => 'int',
        'unanchorsAt' => '\DateTime'
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
        'corporationId' => 'corporation_id',
        'currentVul' => 'current_vul',
        'fuelExpires' => 'fuel_expires',
        'nextVul' => 'next_vul',
        'profileId' => 'profile_id',
        'services' => 'services',
        'stateTimerEnd' => 'state_timer_end',
        'stateTimerStart' => 'state_timer_start',
        'structureId' => 'structure_id',
        'systemId' => 'system_id',
        'typeId' => 'type_id',
        'unanchorsAt' => 'unanchors_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'corporationId' => 'setCorporationId',
        'currentVul' => 'setCurrentVul',
        'fuelExpires' => 'setFuelExpires',
        'nextVul' => 'setNextVul',
        'profileId' => 'setProfileId',
        'services' => 'setServices',
        'stateTimerEnd' => 'setStateTimerEnd',
        'stateTimerStart' => 'setStateTimerStart',
        'structureId' => 'setStructureId',
        'systemId' => 'setSystemId',
        'typeId' => 'setTypeId',
        'unanchorsAt' => 'setUnanchorsAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'corporationId' => 'getCorporationId',
        'currentVul' => 'getCurrentVul',
        'fuelExpires' => 'getFuelExpires',
        'nextVul' => 'getNextVul',
        'profileId' => 'getProfileId',
        'services' => 'getServices',
        'stateTimerEnd' => 'getStateTimerEnd',
        'stateTimerStart' => 'getStateTimerStart',
        'structureId' => 'getStructureId',
        'systemId' => 'getSystemId',
        'typeId' => 'getTypeId',
        'unanchorsAt' => 'getUnanchorsAt'
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
        $this->container['corporationId'] = isset($data['corporationId']) ? $data['corporationId'] : null;
        $this->container['currentVul'] = isset($data['currentVul']) ? $data['currentVul'] : null;
        $this->container['fuelExpires'] = isset($data['fuelExpires']) ? $data['fuelExpires'] : null;
        $this->container['nextVul'] = isset($data['nextVul']) ? $data['nextVul'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['stateTimerEnd'] = isset($data['stateTimerEnd']) ? $data['stateTimerEnd'] : null;
        $this->container['stateTimerStart'] = isset($data['stateTimerStart']) ? $data['stateTimerStart'] : null;
        $this->container['structureId'] = isset($data['structureId']) ? $data['structureId'] : null;
        $this->container['systemId'] = isset($data['systemId']) ? $data['systemId'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['unanchorsAt'] = isset($data['unanchorsAt']) ? $data['unanchorsAt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['corporationId'] === null) {
            $invalid_properties[] = "'corporationId' can't be null";
        }
        if ($this->container['currentVul'] === null) {
            $invalid_properties[] = "'currentVul' can't be null";
        }
        if ($this->container['nextVul'] === null) {
            $invalid_properties[] = "'nextVul' can't be null";
        }
        if ($this->container['profileId'] === null) {
            $invalid_properties[] = "'profileId' can't be null";
        }
        if ($this->container['structureId'] === null) {
            $invalid_properties[] = "'structureId' can't be null";
        }
        if ($this->container['systemId'] === null) {
            $invalid_properties[] = "'systemId' can't be null";
        }
        if ($this->container['typeId'] === null) {
            $invalid_properties[] = "'typeId' can't be null";
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
        if ($this->container['corporationId'] === null) {
            return false;
        }
        if ($this->container['currentVul'] === null) {
            return false;
        }
        if ($this->container['nextVul'] === null) {
            return false;
        }
        if ($this->container['profileId'] === null) {
            return false;
        }
        if ($this->container['structureId'] === null) {
            return false;
        }
        if ($this->container['systemId'] === null) {
            return false;
        }
        if ($this->container['typeId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets corporationId
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporationId'];
    }

    /**
     * Sets corporationId
     * @param int $corporationId ID of the corporation that owns the structure
     * @return $this
     */
    public function setCorporationId($corporationId)
    {
        $this->container['corporationId'] = $corporationId;

        return $this;
    }

    /**
     * Gets currentVul
     * @return \nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[]
     */
    public function getCurrentVul()
    {
        return $this->container['currentVul'];
    }

    /**
     * Sets currentVul
     * @param \nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[] $currentVul This week's vulnerability windows, Monday is day 0
     * @return $this
     */
    public function setCurrentVul($currentVul)
    {
        $this->container['currentVul'] = $currentVul;

        return $this;
    }

    /**
     * Gets fuelExpires
     * @return \DateTime
     */
    public function getFuelExpires()
    {
        return $this->container['fuelExpires'];
    }

    /**
     * Sets fuelExpires
     * @param \DateTime $fuelExpires Date on which the structure will run out of fuel
     * @return $this
     */
    public function setFuelExpires($fuelExpires)
    {
        $this->container['fuelExpires'] = $fuelExpires;

        return $this;
    }

    /**
     * Gets nextVul
     * @return \nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[]
     */
    public function getNextVul()
    {
        return $this->container['nextVul'];
    }

    /**
     * Sets nextVul
     * @param \nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[] $nextVul Next week's vulnerability windows, Monday is day 0
     * @return $this
     */
    public function setNextVul($nextVul)
    {
        $this->container['nextVul'] = $nextVul;

        return $this;
    }

    /**
     * Gets profileId
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     * @param int $profileId The id of the ACL profile for this citadel
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets services
     * @return \nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param \nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[] $services Contains a list of service upgrades, and their state
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets stateTimerEnd
     * @return \DateTime
     */
    public function getStateTimerEnd()
    {
        return $this->container['stateTimerEnd'];
    }

    /**
     * Sets stateTimerEnd
     * @param \DateTime $stateTimerEnd Date at which the structure will move to it's next state
     * @return $this
     */
    public function setStateTimerEnd($stateTimerEnd)
    {
        $this->container['stateTimerEnd'] = $stateTimerEnd;

        return $this;
    }

    /**
     * Gets stateTimerStart
     * @return \DateTime
     */
    public function getStateTimerStart()
    {
        return $this->container['stateTimerStart'];
    }

    /**
     * Sets stateTimerStart
     * @param \DateTime $stateTimerStart Date at which the structure entered it's current state
     * @return $this
     */
    public function setStateTimerStart($stateTimerStart)
    {
        $this->container['stateTimerStart'] = $stateTimerStart;

        return $this;
    }

    /**
     * Gets structureId
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structureId'];
    }

    /**
     * Sets structureId
     * @param int $structureId The Item ID of the structure
     * @return $this
     */
    public function setStructureId($structureId)
    {
        $this->container['structureId'] = $structureId;

        return $this;
    }

    /**
     * Gets systemId
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['systemId'];
    }

    /**
     * Sets systemId
     * @param int $systemId The solar system the structure is in
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->container['systemId'] = $systemId;

        return $this;
    }

    /**
     * Gets typeId
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     * @param int $typeId The type id of the structure
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets unanchorsAt
     * @return \DateTime
     */
    public function getUnanchorsAt()
    {
        return $this->container['unanchorsAt'];
    }

    /**
     * Sets unanchorsAt
     * @param \DateTime $unanchorsAt Date at which the structure will unanchor
     * @return $this
     */
    public function setUnanchorsAt($unanchorsAt)
    {
        $this->container['unanchorsAt'] = $unanchorsAt;

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


