<?php
/**
 * GetCharactersCharacterIdAssets200Ok
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
 * GetCharactersCharacterIdAssets200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     nullx27\ESI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdAssets200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_assets_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'isSingleton' => 'bool',
        'itemId' => 'int',
        'locationFlag' => 'string',
        'locationId' => 'int',
        'locationType' => 'string',
        'quantity' => 'int',
        'typeId' => 'int'
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
        'isSingleton' => 'is_singleton',
        'itemId' => 'item_id',
        'locationFlag' => 'location_flag',
        'locationId' => 'location_id',
        'locationType' => 'location_type',
        'quantity' => 'quantity',
        'typeId' => 'type_id'
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
        'isSingleton' => 'setIsSingleton',
        'itemId' => 'setItemId',
        'locationFlag' => 'setLocationFlag',
        'locationId' => 'setLocationId',
        'locationType' => 'setLocationType',
        'quantity' => 'setQuantity',
        'typeId' => 'setTypeId'
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
        'isSingleton' => 'getIsSingleton',
        'itemId' => 'getItemId',
        'locationFlag' => 'getLocationFlag',
        'locationId' => 'getLocationId',
        'locationType' => 'getLocationType',
        'quantity' => 'getQuantity',
        'typeId' => 'getTypeId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const LOCATION_FLAG_AUTO_FIT = 'AutoFit';
    const LOCATION_FLAG_CARGO = 'Cargo';
    const LOCATION_FLAG_CORPSE_BAY = 'CorpseBay';
    const LOCATION_FLAG_DRONE_BAY = 'DroneBay';
    const LOCATION_FLAG_FLEET_HANGAR = 'FleetHangar';
    const LOCATION_FLAG_DELIVERIES = 'Deliveries';
    const LOCATION_FLAG_HIDDEN_MODIFIERS = 'HiddenModifiers';
    const LOCATION_FLAG_HANGAR = 'Hangar';
    const LOCATION_FLAG_HANGAR_ALL = 'HangarAll';
    const LOCATION_FLAG_LO_SLOT0 = 'LoSlot0';
    const LOCATION_FLAG_LO_SLOT1 = 'LoSlot1';
    const LOCATION_FLAG_LO_SLOT2 = 'LoSlot2';
    const LOCATION_FLAG_LO_SLOT3 = 'LoSlot3';
    const LOCATION_FLAG_LO_SLOT4 = 'LoSlot4';
    const LOCATION_FLAG_LO_SLOT5 = 'LoSlot5';
    const LOCATION_FLAG_LO_SLOT6 = 'LoSlot6';
    const LOCATION_FLAG_LO_SLOT7 = 'LoSlot7';
    const LOCATION_FLAG_MED_SLOT0 = 'MedSlot0';
    const LOCATION_FLAG_MED_SLOT1 = 'MedSlot1';
    const LOCATION_FLAG_MED_SLOT2 = 'MedSlot2';
    const LOCATION_FLAG_MED_SLOT3 = 'MedSlot3';
    const LOCATION_FLAG_MED_SLOT4 = 'MedSlot4';
    const LOCATION_FLAG_MED_SLOT5 = 'MedSlot5';
    const LOCATION_FLAG_MED_SLOT6 = 'MedSlot6';
    const LOCATION_FLAG_MED_SLOT7 = 'MedSlot7';
    const LOCATION_FLAG_HI_SLOT0 = 'HiSlot0';
    const LOCATION_FLAG_HI_SLOT1 = 'HiSlot1';
    const LOCATION_FLAG_HI_SLOT2 = 'HiSlot2';
    const LOCATION_FLAG_HI_SLOT3 = 'HiSlot3';
    const LOCATION_FLAG_HI_SLOT4 = 'HiSlot4';
    const LOCATION_FLAG_HI_SLOT5 = 'HiSlot5';
    const LOCATION_FLAG_HI_SLOT6 = 'HiSlot6';
    const LOCATION_FLAG_HI_SLOT7 = 'HiSlot7';
    const LOCATION_FLAG_ASSET_SAFETY = 'AssetSafety';
    const LOCATION_FLAG_LOCKED = 'Locked';
    const LOCATION_FLAG_UNLOCKED = 'Unlocked';
    const LOCATION_FLAG_IMPLANT = 'Implant';
    const LOCATION_FLAG_QUAFE_BAY = 'QuafeBay';
    const LOCATION_FLAG_RIG_SLOT0 = 'RigSlot0';
    const LOCATION_FLAG_RIG_SLOT1 = 'RigSlot1';
    const LOCATION_FLAG_RIG_SLOT2 = 'RigSlot2';
    const LOCATION_FLAG_RIG_SLOT3 = 'RigSlot3';
    const LOCATION_FLAG_RIG_SLOT4 = 'RigSlot4';
    const LOCATION_FLAG_RIG_SLOT5 = 'RigSlot5';
    const LOCATION_FLAG_RIG_SLOT6 = 'RigSlot6';
    const LOCATION_FLAG_RIG_SLOT7 = 'RigSlot7';
    const LOCATION_FLAG_SHIP_HANGAR = 'ShipHangar';
    const LOCATION_FLAG_SPECIALIZED_FUEL_BAY = 'SpecializedFuelBay';
    const LOCATION_FLAG_SPECIALIZED_ORE_HOLD = 'SpecializedOreHold';
    const LOCATION_FLAG_SPECIALIZED_GAS_HOLD = 'SpecializedGasHold';
    const LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD = 'SpecializedMineralHold';
    const LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD = 'SpecializedSalvageHold';
    const LOCATION_FLAG_SPECIALIZED_SHIP_HOLD = 'SpecializedShipHold';
    const LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD = 'SpecializedSmallShipHold';
    const LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD = 'SpecializedMediumShipHold';
    const LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD = 'SpecializedLargeShipHold';
    const LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD = 'SpecializedIndustrialShipHold';
    const LOCATION_FLAG_SPECIALIZED_AMMO_HOLD = 'SpecializedAmmoHold';
    const LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD = 'SpecializedCommandCenterHold';
    const LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD = 'SpecializedPlanetaryCommoditiesHold';
    const LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY = 'SpecializedMaterialBay';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT4 = 'SubSystemSlot4';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT5 = 'SubSystemSlot5';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT6 = 'SubSystemSlot6';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT7 = 'SubSystemSlot7';
    const LOCATION_FLAG_FIGHTER_BAY = 'FighterBay';
    const LOCATION_FLAG_FIGHTER_TUBE0 = 'FighterTube0';
    const LOCATION_FLAG_FIGHTER_TUBE1 = 'FighterTube1';
    const LOCATION_FLAG_FIGHTER_TUBE2 = 'FighterTube2';
    const LOCATION_FLAG_FIGHTER_TUBE3 = 'FighterTube3';
    const LOCATION_FLAG_FIGHTER_TUBE4 = 'FighterTube4';
    const LOCATION_FLAG_MODULE = 'Module';
    const LOCATION_TYPE_STATION = 'station';
    const LOCATION_TYPE_SOLAR_SYSTEM = 'solar_system';
    const LOCATION_TYPE_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLocationFlagAllowableValues()
    {
        return [
            self::LOCATION_FLAG_AUTO_FIT,
            self::LOCATION_FLAG_CARGO,
            self::LOCATION_FLAG_CORPSE_BAY,
            self::LOCATION_FLAG_DRONE_BAY,
            self::LOCATION_FLAG_FLEET_HANGAR,
            self::LOCATION_FLAG_DELIVERIES,
            self::LOCATION_FLAG_HIDDEN_MODIFIERS,
            self::LOCATION_FLAG_HANGAR,
            self::LOCATION_FLAG_HANGAR_ALL,
            self::LOCATION_FLAG_LO_SLOT0,
            self::LOCATION_FLAG_LO_SLOT1,
            self::LOCATION_FLAG_LO_SLOT2,
            self::LOCATION_FLAG_LO_SLOT3,
            self::LOCATION_FLAG_LO_SLOT4,
            self::LOCATION_FLAG_LO_SLOT5,
            self::LOCATION_FLAG_LO_SLOT6,
            self::LOCATION_FLAG_LO_SLOT7,
            self::LOCATION_FLAG_MED_SLOT0,
            self::LOCATION_FLAG_MED_SLOT1,
            self::LOCATION_FLAG_MED_SLOT2,
            self::LOCATION_FLAG_MED_SLOT3,
            self::LOCATION_FLAG_MED_SLOT4,
            self::LOCATION_FLAG_MED_SLOT5,
            self::LOCATION_FLAG_MED_SLOT6,
            self::LOCATION_FLAG_MED_SLOT7,
            self::LOCATION_FLAG_HI_SLOT0,
            self::LOCATION_FLAG_HI_SLOT1,
            self::LOCATION_FLAG_HI_SLOT2,
            self::LOCATION_FLAG_HI_SLOT3,
            self::LOCATION_FLAG_HI_SLOT4,
            self::LOCATION_FLAG_HI_SLOT5,
            self::LOCATION_FLAG_HI_SLOT6,
            self::LOCATION_FLAG_HI_SLOT7,
            self::LOCATION_FLAG_ASSET_SAFETY,
            self::LOCATION_FLAG_LOCKED,
            self::LOCATION_FLAG_UNLOCKED,
            self::LOCATION_FLAG_IMPLANT,
            self::LOCATION_FLAG_QUAFE_BAY,
            self::LOCATION_FLAG_RIG_SLOT0,
            self::LOCATION_FLAG_RIG_SLOT1,
            self::LOCATION_FLAG_RIG_SLOT2,
            self::LOCATION_FLAG_RIG_SLOT3,
            self::LOCATION_FLAG_RIG_SLOT4,
            self::LOCATION_FLAG_RIG_SLOT5,
            self::LOCATION_FLAG_RIG_SLOT6,
            self::LOCATION_FLAG_RIG_SLOT7,
            self::LOCATION_FLAG_SHIP_HANGAR,
            self::LOCATION_FLAG_SPECIALIZED_FUEL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_ORE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_GAS_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_AMMO_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT0,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT1,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT2,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT3,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT4,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT5,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT6,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT7,
            self::LOCATION_FLAG_FIGHTER_BAY,
            self::LOCATION_FLAG_FIGHTER_TUBE0,
            self::LOCATION_FLAG_FIGHTER_TUBE1,
            self::LOCATION_FLAG_FIGHTER_TUBE2,
            self::LOCATION_FLAG_FIGHTER_TUBE3,
            self::LOCATION_FLAG_FIGHTER_TUBE4,
            self::LOCATION_FLAG_MODULE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLocationTypeAllowableValues()
    {
        return [
            self::LOCATION_TYPE_STATION,
            self::LOCATION_TYPE_SOLAR_SYSTEM,
            self::LOCATION_TYPE_OTHER,
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
        $this->container['isSingleton'] = isset($data['isSingleton']) ? $data['isSingleton'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['locationFlag'] = isset($data['locationFlag']) ? $data['locationFlag'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['locationType'] = isset($data['locationType']) ? $data['locationType'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['isSingleton'] === null) {
            $invalid_properties[] = "'isSingleton' can't be null";
        }
        if ($this->container['itemId'] === null) {
            $invalid_properties[] = "'itemId' can't be null";
        }
        if ($this->container['locationFlag'] === null) {
            $invalid_properties[] = "'locationFlag' can't be null";
        }
        $allowed_values = array("AutoFit", "Cargo", "CorpseBay", "DroneBay", "FleetHangar", "Deliveries", "HiddenModifiers", "Hangar", "HangarAll", "LoSlot0", "LoSlot1", "LoSlot2", "LoSlot3", "LoSlot4", "LoSlot5", "LoSlot6", "LoSlot7", "MedSlot0", "MedSlot1", "MedSlot2", "MedSlot3", "MedSlot4", "MedSlot5", "MedSlot6", "MedSlot7", "HiSlot0", "HiSlot1", "HiSlot2", "HiSlot3", "HiSlot4", "HiSlot5", "HiSlot6", "HiSlot7", "AssetSafety", "Locked", "Unlocked", "Implant", "QuafeBay", "RigSlot0", "RigSlot1", "RigSlot2", "RigSlot3", "RigSlot4", "RigSlot5", "RigSlot6", "RigSlot7", "ShipHangar", "SpecializedFuelBay", "SpecializedOreHold", "SpecializedGasHold", "SpecializedMineralHold", "SpecializedSalvageHold", "SpecializedShipHold", "SpecializedSmallShipHold", "SpecializedMediumShipHold", "SpecializedLargeShipHold", "SpecializedIndustrialShipHold", "SpecializedAmmoHold", "SpecializedCommandCenterHold", "SpecializedPlanetaryCommoditiesHold", "SpecializedMaterialBay", "SubSystemSlot0", "SubSystemSlot1", "SubSystemSlot2", "SubSystemSlot3", "SubSystemSlot4", "SubSystemSlot5", "SubSystemSlot6", "SubSystemSlot7", "FighterBay", "FighterTube0", "FighterTube1", "FighterTube2", "FighterTube3", "FighterTube4", "Module");
        if (!in_array($this->container['locationFlag'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'locationFlag', must be one of #{allowed_values}.";
        }

        if ($this->container['locationId'] === null) {
            $invalid_properties[] = "'locationId' can't be null";
        }
        if ($this->container['locationType'] === null) {
            $invalid_properties[] = "'locationType' can't be null";
        }
        $allowed_values = array("station", "solar_system", "other");
        if (!in_array($this->container['locationType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'locationType', must be one of #{allowed_values}.";
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
        if ($this->container['isSingleton'] === null) {
            return false;
        }
        if ($this->container['itemId'] === null) {
            return false;
        }
        if ($this->container['locationFlag'] === null) {
            return false;
        }
        $allowed_values = array("AutoFit", "Cargo", "CorpseBay", "DroneBay", "FleetHangar", "Deliveries", "HiddenModifiers", "Hangar", "HangarAll", "LoSlot0", "LoSlot1", "LoSlot2", "LoSlot3", "LoSlot4", "LoSlot5", "LoSlot6", "LoSlot7", "MedSlot0", "MedSlot1", "MedSlot2", "MedSlot3", "MedSlot4", "MedSlot5", "MedSlot6", "MedSlot7", "HiSlot0", "HiSlot1", "HiSlot2", "HiSlot3", "HiSlot4", "HiSlot5", "HiSlot6", "HiSlot7", "AssetSafety", "Locked", "Unlocked", "Implant", "QuafeBay", "RigSlot0", "RigSlot1", "RigSlot2", "RigSlot3", "RigSlot4", "RigSlot5", "RigSlot6", "RigSlot7", "ShipHangar", "SpecializedFuelBay", "SpecializedOreHold", "SpecializedGasHold", "SpecializedMineralHold", "SpecializedSalvageHold", "SpecializedShipHold", "SpecializedSmallShipHold", "SpecializedMediumShipHold", "SpecializedLargeShipHold", "SpecializedIndustrialShipHold", "SpecializedAmmoHold", "SpecializedCommandCenterHold", "SpecializedPlanetaryCommoditiesHold", "SpecializedMaterialBay", "SubSystemSlot0", "SubSystemSlot1", "SubSystemSlot2", "SubSystemSlot3", "SubSystemSlot4", "SubSystemSlot5", "SubSystemSlot6", "SubSystemSlot7", "FighterBay", "FighterTube0", "FighterTube1", "FighterTube2", "FighterTube3", "FighterTube4", "Module");
        if (!in_array($this->container['locationFlag'], $allowed_values)) {
            return false;
        }
        if ($this->container['locationId'] === null) {
            return false;
        }
        if ($this->container['locationType'] === null) {
            return false;
        }
        $allowed_values = array("station", "solar_system", "other");
        if (!in_array($this->container['locationType'], $allowed_values)) {
            return false;
        }
        if ($this->container['typeId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets isSingleton
     * @return bool
     */
    public function getIsSingleton()
    {
        return $this->container['isSingleton'];
    }

    /**
     * Sets isSingleton
     * @param bool $isSingleton is_singleton boolean
     * @return $this
     */
    public function setIsSingleton($isSingleton)
    {
        $this->container['isSingleton'] = $isSingleton;

        return $this;
    }

    /**
     * Gets itemId
     * @return int
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     * @param int $itemId item_id integer
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets locationFlag
     * @return string
     */
    public function getLocationFlag()
    {
        return $this->container['locationFlag'];
    }

    /**
     * Sets locationFlag
     * @param string $locationFlag location_flag string
     * @return $this
     */
    public function setLocationFlag($locationFlag)
    {
        $allowed_values = array('AutoFit', 'Cargo', 'CorpseBay', 'DroneBay', 'FleetHangar', 'Deliveries', 'HiddenModifiers', 'Hangar', 'HangarAll', 'LoSlot0', 'LoSlot1', 'LoSlot2', 'LoSlot3', 'LoSlot4', 'LoSlot5', 'LoSlot6', 'LoSlot7', 'MedSlot0', 'MedSlot1', 'MedSlot2', 'MedSlot3', 'MedSlot4', 'MedSlot5', 'MedSlot6', 'MedSlot7', 'HiSlot0', 'HiSlot1', 'HiSlot2', 'HiSlot3', 'HiSlot4', 'HiSlot5', 'HiSlot6', 'HiSlot7', 'AssetSafety', 'Locked', 'Unlocked', 'Implant', 'QuafeBay', 'RigSlot0', 'RigSlot1', 'RigSlot2', 'RigSlot3', 'RigSlot4', 'RigSlot5', 'RigSlot6', 'RigSlot7', 'ShipHangar', 'SpecializedFuelBay', 'SpecializedOreHold', 'SpecializedGasHold', 'SpecializedMineralHold', 'SpecializedSalvageHold', 'SpecializedShipHold', 'SpecializedSmallShipHold', 'SpecializedMediumShipHold', 'SpecializedLargeShipHold', 'SpecializedIndustrialShipHold', 'SpecializedAmmoHold', 'SpecializedCommandCenterHold', 'SpecializedPlanetaryCommoditiesHold', 'SpecializedMaterialBay', 'SubSystemSlot0', 'SubSystemSlot1', 'SubSystemSlot2', 'SubSystemSlot3', 'SubSystemSlot4', 'SubSystemSlot5', 'SubSystemSlot6', 'SubSystemSlot7', 'FighterBay', 'FighterTube0', 'FighterTube1', 'FighterTube2', 'FighterTube3', 'FighterTube4', 'Module');
        if (!in_array($locationFlag, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'locationFlag', must be one of 'AutoFit', 'Cargo', 'CorpseBay', 'DroneBay', 'FleetHangar', 'Deliveries', 'HiddenModifiers', 'Hangar', 'HangarAll', 'LoSlot0', 'LoSlot1', 'LoSlot2', 'LoSlot3', 'LoSlot4', 'LoSlot5', 'LoSlot6', 'LoSlot7', 'MedSlot0', 'MedSlot1', 'MedSlot2', 'MedSlot3', 'MedSlot4', 'MedSlot5', 'MedSlot6', 'MedSlot7', 'HiSlot0', 'HiSlot1', 'HiSlot2', 'HiSlot3', 'HiSlot4', 'HiSlot5', 'HiSlot6', 'HiSlot7', 'AssetSafety', 'Locked', 'Unlocked', 'Implant', 'QuafeBay', 'RigSlot0', 'RigSlot1', 'RigSlot2', 'RigSlot3', 'RigSlot4', 'RigSlot5', 'RigSlot6', 'RigSlot7', 'ShipHangar', 'SpecializedFuelBay', 'SpecializedOreHold', 'SpecializedGasHold', 'SpecializedMineralHold', 'SpecializedSalvageHold', 'SpecializedShipHold', 'SpecializedSmallShipHold', 'SpecializedMediumShipHold', 'SpecializedLargeShipHold', 'SpecializedIndustrialShipHold', 'SpecializedAmmoHold', 'SpecializedCommandCenterHold', 'SpecializedPlanetaryCommoditiesHold', 'SpecializedMaterialBay', 'SubSystemSlot0', 'SubSystemSlot1', 'SubSystemSlot2', 'SubSystemSlot3', 'SubSystemSlot4', 'SubSystemSlot5', 'SubSystemSlot6', 'SubSystemSlot7', 'FighterBay', 'FighterTube0', 'FighterTube1', 'FighterTube2', 'FighterTube3', 'FighterTube4', 'Module'");
        }
        $this->container['locationFlag'] = $locationFlag;

        return $this;
    }

    /**
     * Gets locationId
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     * @param int $locationId location_id integer
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets locationType
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['locationType'];
    }

    /**
     * Sets locationType
     * @param string $locationType location_type string
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $allowed_values = array('station', 'solar_system', 'other');
        if (!in_array($locationType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'locationType', must be one of 'station', 'solar_system', 'other'");
        }
        $this->container['locationType'] = $locationType;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity quantity integer
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param int $typeId type_id integer
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

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


