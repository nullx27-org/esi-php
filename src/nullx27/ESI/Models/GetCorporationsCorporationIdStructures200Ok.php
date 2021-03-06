<?php
/**
 * GetCorporationsCorporationIdStructures200Ok
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
 * GetCorporationsCorporationIdStructures200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdStructures200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'structureId' => 'int',
        'typeId' => 'int',
        'corporationId' => 'int',
        'systemId' => 'int',
        'profileId' => 'int',
        'currentVul' => '\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[]',
        'nextVul' => '\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[]',
        'fuelExpires' => '\DateTime',
        'services' => '\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[]',
        'stateTimerStart' => '\DateTime',
        'stateTimerEnd' => '\DateTime',
        'unanchorsAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'structureId' => 'int64',
        'typeId' => 'int32',
        'corporationId' => 'int32',
        'systemId' => 'int32',
        'profileId' => 'int32',
        'currentVul' => null,
        'nextVul' => null,
        'fuelExpires' => 'date-time',
        'services' => null,
        'stateTimerStart' => 'date-time',
        'stateTimerEnd' => 'date-time',
        'unanchorsAt' => 'date-time'
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
        'structureId' => 'structure_id',
        'typeId' => 'type_id',
        'corporationId' => 'corporation_id',
        'systemId' => 'system_id',
        'profileId' => 'profile_id',
        'currentVul' => 'current_vul',
        'nextVul' => 'next_vul',
        'fuelExpires' => 'fuel_expires',
        'services' => 'services',
        'stateTimerStart' => 'state_timer_start',
        'stateTimerEnd' => 'state_timer_end',
        'unanchorsAt' => 'unanchors_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'structureId' => 'setStructureId',
        'typeId' => 'setTypeId',
        'corporationId' => 'setCorporationId',
        'systemId' => 'setSystemId',
        'profileId' => 'setProfileId',
        'currentVul' => 'setCurrentVul',
        'nextVul' => 'setNextVul',
        'fuelExpires' => 'setFuelExpires',
        'services' => 'setServices',
        'stateTimerStart' => 'setStateTimerStart',
        'stateTimerEnd' => 'setStateTimerEnd',
        'unanchorsAt' => 'setUnanchorsAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'structureId' => 'getStructureId',
        'typeId' => 'getTypeId',
        'corporationId' => 'getCorporationId',
        'systemId' => 'getSystemId',
        'profileId' => 'getProfileId',
        'currentVul' => 'getCurrentVul',
        'nextVul' => 'getNextVul',
        'fuelExpires' => 'getFuelExpires',
        'services' => 'getServices',
        'stateTimerStart' => 'getStateTimerStart',
        'stateTimerEnd' => 'getStateTimerEnd',
        'unanchorsAt' => 'getUnanchorsAt'
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
        $this->container['structureId'] = isset($data['structureId']) ? $data['structureId'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['corporationId'] = isset($data['corporationId']) ? $data['corporationId'] : null;
        $this->container['systemId'] = isset($data['systemId']) ? $data['systemId'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['currentVul'] = isset($data['currentVul']) ? $data['currentVul'] : null;
        $this->container['nextVul'] = isset($data['nextVul']) ? $data['nextVul'] : null;
        $this->container['fuelExpires'] = isset($data['fuelExpires']) ? $data['fuelExpires'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['stateTimerStart'] = isset($data['stateTimerStart']) ? $data['stateTimerStart'] : null;
        $this->container['stateTimerEnd'] = isset($data['stateTimerEnd']) ? $data['stateTimerEnd'] : null;
        $this->container['unanchorsAt'] = isset($data['unanchorsAt']) ? $data['unanchorsAt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['structureId'] === null) {
            $invalidProperties[] = "'structureId' can't be null";
        }
        if ($this->container['typeId'] === null) {
            $invalidProperties[] = "'typeId' can't be null";
        }
        if ($this->container['corporationId'] === null) {
            $invalidProperties[] = "'corporationId' can't be null";
        }
        if ($this->container['systemId'] === null) {
            $invalidProperties[] = "'systemId' can't be null";
        }
        if ($this->container['profileId'] === null) {
            $invalidProperties[] = "'profileId' can't be null";
        }
        if ($this->container['currentVul'] === null) {
            $invalidProperties[] = "'currentVul' can't be null";
        }
        if ($this->container['nextVul'] === null) {
            $invalidProperties[] = "'nextVul' can't be null";
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

        if ($this->container['structureId'] === null) {
            return false;
        }
        if ($this->container['typeId'] === null) {
            return false;
        }
        if ($this->container['corporationId'] === null) {
            return false;
        }
        if ($this->container['systemId'] === null) {
            return false;
        }
        if ($this->container['profileId'] === null) {
            return false;
        }
        if ($this->container['currentVul'] === null) {
            return false;
        }
        if ($this->container['nextVul'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets structureId
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structureId'];
    }

    /**
     * Sets structureId
     *
     * @param int $structureId The Item ID of the structure
     *
     * @return $this
     */
    public function setStructureId($structureId)
    {
        $this->container['structureId'] = $structureId;

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
     * @param int $typeId The type id of the structure
     *
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets corporationId
     *
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporationId'];
    }

    /**
     * Sets corporationId
     *
     * @param int $corporationId ID of the corporation that owns the structure
     *
     * @return $this
     */
    public function setCorporationId($corporationId)
    {
        $this->container['corporationId'] = $corporationId;

        return $this;
    }

    /**
     * Gets systemId
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['systemId'];
    }

    /**
     * Sets systemId
     *
     * @param int $systemId The solar system the structure is in
     *
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->container['systemId'] = $systemId;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int $profileId The id of the ACL profile for this citadel
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets currentVul
     *
     * @return \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[]
     */
    public function getCurrentVul()
    {
        return $this->container['currentVul'];
    }

    /**
     * Sets currentVul
     *
     * @param \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[] $currentVul This week's vulnerability windows, Monday is day 0
     *
     * @return $this
     */
    public function setCurrentVul($currentVul)
    {
        $this->container['currentVul'] = $currentVul;

        return $this;
    }

    /**
     * Gets nextVul
     *
     * @return \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[]
     */
    public function getNextVul()
    {
        return $this->container['nextVul'];
    }

    /**
     * Sets nextVul
     *
     * @param \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[] $nextVul Next week's vulnerability windows, Monday is day 0
     *
     * @return $this
     */
    public function setNextVul($nextVul)
    {
        $this->container['nextVul'] = $nextVul;

        return $this;
    }

    /**
     * Gets fuelExpires
     *
     * @return \DateTime
     */
    public function getFuelExpires()
    {
        return $this->container['fuelExpires'];
    }

    /**
     * Sets fuelExpires
     *
     * @param \DateTime $fuelExpires Date on which the structure will run out of fuel
     *
     * @return $this
     */
    public function setFuelExpires($fuelExpires)
    {
        $this->container['fuelExpires'] = $fuelExpires;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[] $services Contains a list of service upgrades, and their state
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets stateTimerStart
     *
     * @return \DateTime
     */
    public function getStateTimerStart()
    {
        return $this->container['stateTimerStart'];
    }

    /**
     * Sets stateTimerStart
     *
     * @param \DateTime $stateTimerStart Date at which the structure entered it's current state
     *
     * @return $this
     */
    public function setStateTimerStart($stateTimerStart)
    {
        $this->container['stateTimerStart'] = $stateTimerStart;

        return $this;
    }

    /**
     * Gets stateTimerEnd
     *
     * @return \DateTime
     */
    public function getStateTimerEnd()
    {
        return $this->container['stateTimerEnd'];
    }

    /**
     * Sets stateTimerEnd
     *
     * @param \DateTime $stateTimerEnd Date at which the structure will move to it's next state
     *
     * @return $this
     */
    public function setStateTimerEnd($stateTimerEnd)
    {
        $this->container['stateTimerEnd'] = $stateTimerEnd;

        return $this;
    }

    /**
     * Gets unanchorsAt
     *
     * @return \DateTime
     */
    public function getUnanchorsAt()
    {
        return $this->container['unanchorsAt'];
    }

    /**
     * Sets unanchorsAt
     *
     * @param \DateTime $unanchorsAt Date at which the structure will unanchor
     *
     * @return $this
     */
    public function setUnanchorsAt($unanchorsAt)
    {
        $this->container['unanchorsAt'] = $unanchorsAt;

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


