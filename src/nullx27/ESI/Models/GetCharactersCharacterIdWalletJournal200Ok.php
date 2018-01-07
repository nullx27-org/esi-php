<?php
/**
 * GetCharactersCharacterIdWalletJournal200Ok
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
 * GetCharactersCharacterIdWalletJournal200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdWalletJournal200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_wallet_journal_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'refId' => 'int',
        'refType' => 'string',
        'firstPartyId' => 'int',
        'firstPartyType' => 'string',
        'secondPartyId' => 'int',
        'secondPartyType' => 'string',
        'amount' => 'double',
        'balance' => 'double',
        'reason' => 'string',
        'taxReceiverId' => 'int',
        'tax' => 'double',
        'extraInfo' => '\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletJournalExtraInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'refId' => 'int64',
        'refType' => null,
        'firstPartyId' => 'int32',
        'firstPartyType' => null,
        'secondPartyId' => 'int32',
        'secondPartyType' => null,
        'amount' => 'double',
        'balance' => 'double',
        'reason' => null,
        'taxReceiverId' => 'int32',
        'tax' => 'double',
        'extraInfo' => null
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
        'date' => 'date',
        'refId' => 'ref_id',
        'refType' => 'ref_type',
        'firstPartyId' => 'first_party_id',
        'firstPartyType' => 'first_party_type',
        'secondPartyId' => 'second_party_id',
        'secondPartyType' => 'second_party_type',
        'amount' => 'amount',
        'balance' => 'balance',
        'reason' => 'reason',
        'taxReceiverId' => 'tax_receiver_id',
        'tax' => 'tax',
        'extraInfo' => 'extra_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'refId' => 'setRefId',
        'refType' => 'setRefType',
        'firstPartyId' => 'setFirstPartyId',
        'firstPartyType' => 'setFirstPartyType',
        'secondPartyId' => 'setSecondPartyId',
        'secondPartyType' => 'setSecondPartyType',
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'reason' => 'setReason',
        'taxReceiverId' => 'setTaxReceiverId',
        'tax' => 'setTax',
        'extraInfo' => 'setExtraInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'refId' => 'getRefId',
        'refType' => 'getRefType',
        'firstPartyId' => 'getFirstPartyId',
        'firstPartyType' => 'getFirstPartyType',
        'secondPartyId' => 'getSecondPartyId',
        'secondPartyType' => 'getSecondPartyType',
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'reason' => 'getReason',
        'taxReceiverId' => 'getTaxReceiverId',
        'tax' => 'getTax',
        'extraInfo' => 'getExtraInfo'
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

    const REF_TYPE_ACCELERATION_GATE_FEE = 'acceleration_gate_fee';
    const REF_TYPE_ADVERTISEMENT_LISTING_FEE = 'advertisement_listing_fee';
    const REF_TYPE_AGENT_DONATION = 'agent_donation';
    const REF_TYPE_AGENT_LOCATION_SERVICES = 'agent_location_services';
    const REF_TYPE_AGENT_MISCELLANEOUS = 'agent_miscellaneous';
    const REF_TYPE_AGENT_MISSION_COLLATERAL_PAID = 'agent_mission_collateral_paid';
    const REF_TYPE_AGENT_MISSION_COLLATERAL_REFUNDED = 'agent_mission_collateral_refunded';
    const REF_TYPE_AGENT_MISSION_REWARD = 'agent_mission_reward';
    const REF_TYPE_AGENT_MISSION_REWARD_CORPORATION_TAX = 'agent_mission_reward_corporation_tax';
    const REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD = 'agent_mission_time_bonus_reward';
    const REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD_CORPORATION_TAX = 'agent_mission_time_bonus_reward_corporation_tax';
    const REF_TYPE_AGENT_SECURITY_SERVICES = 'agent_security_services';
    const REF_TYPE_AGENT_SERVICES_RENDERED = 'agent_services_rendered';
    const REF_TYPE_AGENTS_PREWARD = 'agents_preward';
    const REF_TYPE_ALLIANCE_MAINTAINANCE_FEE = 'alliance_maintainance_fee';
    const REF_TYPE_ALLIANCE_REGISTRATION_FEE = 'alliance_registration_fee';
    const REF_TYPE_ASSET_SAFETY_RECOVERY_TAX = 'asset_safety_recovery_tax';
    const REF_TYPE_BOUNTY = 'bounty';
    const REF_TYPE_BOUNTY_PRIZE = 'bounty_prize';
    const REF_TYPE_BOUNTY_PRIZE_CORPORATION_TAX = 'bounty_prize_corporation_tax';
    const REF_TYPE_BOUNTY_PRIZES = 'bounty_prizes';
    const REF_TYPE_BOUNTY_REIMBURSEMENT = 'bounty_reimbursement';
    const REF_TYPE_BOUNTY_SURCHARGE = 'bounty_surcharge';
    const REF_TYPE_BROKERS_FEE = 'brokers_fee';
    const REF_TYPE_CLONE_ACTIVATION = 'clone_activation';
    const REF_TYPE_CLONE_TRANSFER = 'clone_transfer';
    const REF_TYPE_CONTRABAND_FINE = 'contraband_fine';
    const REF_TYPE_CONTRACT_AUCTION_BID = 'contract_auction_bid';
    const REF_TYPE_CONTRACT_AUCTION_BID_CORP = 'contract_auction_bid_corp';
    const REF_TYPE_CONTRACT_AUCTION_BID_REFUND = 'contract_auction_bid_refund';
    const REF_TYPE_CONTRACT_AUCTION_SOLD = 'contract_auction_sold';
    const REF_TYPE_CONTRACT_BROKERS_FEE = 'contract_brokers_fee';
    const REF_TYPE_CONTRACT_BROKERS_FEE_CORP = 'contract_brokers_fee_corp';
    const REF_TYPE_CONTRACT_COLLATERAL = 'contract_collateral';
    const REF_TYPE_CONTRACT_COLLATERAL_DEPOSITED_CORP = 'contract_collateral_deposited_corp';
    const REF_TYPE_CONTRACT_COLLATERAL_PAYOUT = 'contract_collateral_payout';
    const REF_TYPE_CONTRACT_COLLATERAL_REFUND = 'contract_collateral_refund';
    const REF_TYPE_CONTRACT_DEPOSIT = 'contract_deposit';
    const REF_TYPE_CONTRACT_DEPOSIT_CORP = 'contract_deposit_corp';
    const REF_TYPE_CONTRACT_DEPOSIT_REFUND = 'contract_deposit_refund';
    const REF_TYPE_CONTRACT_DEPOSIT_SALES_TAX = 'contract_deposit_sales_tax';
    const REF_TYPE_CONTRACT_PRICE = 'contract_price';
    const REF_TYPE_CONTRACT_PRICE_PAYMENT_CORP = 'contract_price_payment_corp';
    const REF_TYPE_CONTRACT_REVERSAL = 'contract_reversal';
    const REF_TYPE_CONTRACT_REWARD = 'contract_reward';
    const REF_TYPE_CONTRACT_REWARD_DEPOSITED = 'contract_reward_deposited';
    const REF_TYPE_CONTRACT_REWARD_DEPOSITED_CORP = 'contract_reward_deposited_corp';
    const REF_TYPE_CONTRACT_REWARD_REFUND = 'contract_reward_refund';
    const REF_TYPE_CONTRACT_SALES_TAX = 'contract_sales_tax';
    const REF_TYPE_COPYING = 'copying';
    const REF_TYPE_CORPORATE_REWARD_PAYOUT = 'corporate_reward_payout';
    const REF_TYPE_CORPORATE_REWARD_TAX = 'corporate_reward_tax';
    const REF_TYPE_CORPORATION_ACCOUNT_WITHDRAWAL = 'corporation_account_withdrawal';
    const REF_TYPE_CORPORATION_BULK_PAYMENT = 'corporation_bulk_payment';
    const REF_TYPE_CORPORATION_DIVIDEND_PAYMENT = 'corporation_dividend_payment';
    const REF_TYPE_CORPORATION_LIQUIDATION = 'corporation_liquidation';
    const REF_TYPE_CORPORATION_LOGO_CHANGE_COST = 'corporation_logo_change_cost';
    const REF_TYPE_CORPORATION_PAYMENT = 'corporation_payment';
    const REF_TYPE_CORPORATION_REGISTRATION_FEE = 'corporation_registration_fee';
    const REF_TYPE_COURIER_MISSION_ESCROW = 'courier_mission_escrow';
    const REF_TYPE_CSPA = 'cspa';
    const REF_TYPE_CSPAOFFLINEREFUND = 'cspaofflinerefund';
    const REF_TYPE_DATACORE_FEE = 'datacore_fee';
    const REF_TYPE_DNA_MODIFICATION_FEE = 'dna_modification_fee';
    const REF_TYPE_DOCKING_FEE = 'docking_fee';
    const REF_TYPE_DUEL_WAGER_ESCROW = 'duel_wager_escrow';
    const REF_TYPE_DUEL_WAGER_PAYMENT = 'duel_wager_payment';
    const REF_TYPE_DUEL_WAGER_REFUND = 'duel_wager_refund';
    const REF_TYPE_FACTORY_SLOT_RENTAL_FEE = 'factory_slot_rental_fee';
    const REF_TYPE_GM_CASH_TRANSFER = 'gm_cash_transfer';
    const REF_TYPE_INDUSTRY_JOB_TAX = 'industry_job_tax';
    const REF_TYPE_INFRASTRUCTURE_HUB_MAINTENANCE = 'infrastructure_hub_maintenance';
    const REF_TYPE_INHERITANCE = 'inheritance';
    const REF_TYPE_INSURANCE = 'insurance';
    const REF_TYPE_JUMP_CLONE_ACTIVATION_FEE = 'jump_clone_activation_fee';
    const REF_TYPE_JUMP_CLONE_INSTALLATION_FEE = 'jump_clone_installation_fee';
    const REF_TYPE_KILL_RIGHT_FEE = 'kill_right_fee';
    const REF_TYPE_LP_STORE = 'lp_store';
    const REF_TYPE_MANUFACTURING = 'manufacturing';
    const REF_TYPE_MARKET_ESCROW = 'market_escrow';
    const REF_TYPE_MARKET_FINE_PAID = 'market_fine_paid';
    const REF_TYPE_MARKET_TRANSACTION = 'market_transaction';
    const REF_TYPE_MEDAL_CREATION = 'medal_creation';
    const REF_TYPE_MEDAL_ISSUED = 'medal_issued';
    const REF_TYPE_MISSION_COMPLETION = 'mission_completion';
    const REF_TYPE_MISSION_COST = 'mission_cost';
    const REF_TYPE_MISSION_EXPIRATION = 'mission_expiration';
    const REF_TYPE_MISSION_REWARD = 'mission_reward';
    const REF_TYPE_OFFICE_RENTAL_FEE = 'office_rental_fee';
    const REF_TYPE_OPERATION_BONUS = 'operation_bonus';
    const REF_TYPE_OPPORTUNITY_REWARD = 'opportunity_reward';
    const REF_TYPE_PLANETARY_CONSTRUCTION = 'planetary_construction';
    const REF_TYPE_PLANETARY_EXPORT_TAX = 'planetary_export_tax';
    const REF_TYPE_PLANETARY_IMPORT_TAX = 'planetary_import_tax';
    const REF_TYPE_PLAYER_DONATION = 'player_donation';
    const REF_TYPE_PLAYER_TRADING = 'player_trading';
    const REF_TYPE_PROJECT_DISCOVERY_REWARD = 'project_discovery_reward';
    const REF_TYPE_PROJECT_DISCOVERY_TAX = 'project_discovery_tax';
    const REF_TYPE_REACTION = 'reaction';
    const REF_TYPE_RELEASE_OF_IMPOUNDED_PROPERTY = 'release_of_impounded_property';
    const REF_TYPE_REPAIR_BILL = 'repair_bill';
    const REF_TYPE_REPROCESSING_TAX = 'reprocessing_tax';
    const REF_TYPE_RESEARCHING_MATERIAL_PRODUCTIVITY = 'researching_material_productivity';
    const REF_TYPE_RESEARCHING_TECHNOLOGY = 'researching_technology';
    const REF_TYPE_RESEARCHING_TIME_PRODUCTIVITY = 'researching_time_productivity';
    const REF_TYPE_RESOURCE_WARS_REWARD = 'resource_wars_reward';
    const REF_TYPE_REVERSE_ENGINEERING = 'reverse_engineering';
    const REF_TYPE_SECURITY_PROCESSING_FEE = 'security_processing_fee';
    const REF_TYPE_SHARES = 'shares';
    const REF_TYPE_SOVEREIGNITY_BILL = 'sovereignity_bill';
    const REF_TYPE_STORE_PURCHASE = 'store_purchase';
    const REF_TYPE_STORE_PURCHASE_REFUND = 'store_purchase_refund';
    const REF_TYPE_TRANSACTION_TAX = 'transaction_tax';
    const REF_TYPE_UPKEEP_ADJUSTMENT_FEE = 'upkeep_adjustment_fee';
    const REF_TYPE_WAR_ALLY_CONTRACT = 'war_ally_contract';
    const REF_TYPE_WAR_FEE = 'war_fee';
    const REF_TYPE_WAR_FEE_SURRENDER = 'war_fee_surrender';
    const FIRST_PARTY_TYPE_CHARACTER = 'character';
    const FIRST_PARTY_TYPE_CORPORATION = 'corporation';
    const FIRST_PARTY_TYPE_ALLIANCE = 'alliance';
    const FIRST_PARTY_TYPE_FACTION = 'faction';
    const FIRST_PARTY_TYPE_SYSTEM = 'system';
    const SECOND_PARTY_TYPE_CHARACTER = 'character';
    const SECOND_PARTY_TYPE_CORPORATION = 'corporation';
    const SECOND_PARTY_TYPE_ALLIANCE = 'alliance';
    const SECOND_PARTY_TYPE_FACTION = 'faction';
    const SECOND_PARTY_TYPE_SYSTEM = 'system';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefTypeAllowableValues()
    {
        return [
            self::REF_TYPE_ACCELERATION_GATE_FEE,
            self::REF_TYPE_ADVERTISEMENT_LISTING_FEE,
            self::REF_TYPE_AGENT_DONATION,
            self::REF_TYPE_AGENT_LOCATION_SERVICES,
            self::REF_TYPE_AGENT_MISCELLANEOUS,
            self::REF_TYPE_AGENT_MISSION_COLLATERAL_PAID,
            self::REF_TYPE_AGENT_MISSION_COLLATERAL_REFUNDED,
            self::REF_TYPE_AGENT_MISSION_REWARD,
            self::REF_TYPE_AGENT_MISSION_REWARD_CORPORATION_TAX,
            self::REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD,
            self::REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD_CORPORATION_TAX,
            self::REF_TYPE_AGENT_SECURITY_SERVICES,
            self::REF_TYPE_AGENT_SERVICES_RENDERED,
            self::REF_TYPE_AGENTS_PREWARD,
            self::REF_TYPE_ALLIANCE_MAINTAINANCE_FEE,
            self::REF_TYPE_ALLIANCE_REGISTRATION_FEE,
            self::REF_TYPE_ASSET_SAFETY_RECOVERY_TAX,
            self::REF_TYPE_BOUNTY,
            self::REF_TYPE_BOUNTY_PRIZE,
            self::REF_TYPE_BOUNTY_PRIZE_CORPORATION_TAX,
            self::REF_TYPE_BOUNTY_PRIZES,
            self::REF_TYPE_BOUNTY_REIMBURSEMENT,
            self::REF_TYPE_BOUNTY_SURCHARGE,
            self::REF_TYPE_BROKERS_FEE,
            self::REF_TYPE_CLONE_ACTIVATION,
            self::REF_TYPE_CLONE_TRANSFER,
            self::REF_TYPE_CONTRABAND_FINE,
            self::REF_TYPE_CONTRACT_AUCTION_BID,
            self::REF_TYPE_CONTRACT_AUCTION_BID_CORP,
            self::REF_TYPE_CONTRACT_AUCTION_BID_REFUND,
            self::REF_TYPE_CONTRACT_AUCTION_SOLD,
            self::REF_TYPE_CONTRACT_BROKERS_FEE,
            self::REF_TYPE_CONTRACT_BROKERS_FEE_CORP,
            self::REF_TYPE_CONTRACT_COLLATERAL,
            self::REF_TYPE_CONTRACT_COLLATERAL_DEPOSITED_CORP,
            self::REF_TYPE_CONTRACT_COLLATERAL_PAYOUT,
            self::REF_TYPE_CONTRACT_COLLATERAL_REFUND,
            self::REF_TYPE_CONTRACT_DEPOSIT,
            self::REF_TYPE_CONTRACT_DEPOSIT_CORP,
            self::REF_TYPE_CONTRACT_DEPOSIT_REFUND,
            self::REF_TYPE_CONTRACT_DEPOSIT_SALES_TAX,
            self::REF_TYPE_CONTRACT_PRICE,
            self::REF_TYPE_CONTRACT_PRICE_PAYMENT_CORP,
            self::REF_TYPE_CONTRACT_REVERSAL,
            self::REF_TYPE_CONTRACT_REWARD,
            self::REF_TYPE_CONTRACT_REWARD_DEPOSITED,
            self::REF_TYPE_CONTRACT_REWARD_DEPOSITED_CORP,
            self::REF_TYPE_CONTRACT_REWARD_REFUND,
            self::REF_TYPE_CONTRACT_SALES_TAX,
            self::REF_TYPE_COPYING,
            self::REF_TYPE_CORPORATE_REWARD_PAYOUT,
            self::REF_TYPE_CORPORATE_REWARD_TAX,
            self::REF_TYPE_CORPORATION_ACCOUNT_WITHDRAWAL,
            self::REF_TYPE_CORPORATION_BULK_PAYMENT,
            self::REF_TYPE_CORPORATION_DIVIDEND_PAYMENT,
            self::REF_TYPE_CORPORATION_LIQUIDATION,
            self::REF_TYPE_CORPORATION_LOGO_CHANGE_COST,
            self::REF_TYPE_CORPORATION_PAYMENT,
            self::REF_TYPE_CORPORATION_REGISTRATION_FEE,
            self::REF_TYPE_COURIER_MISSION_ESCROW,
            self::REF_TYPE_CSPA,
            self::REF_TYPE_CSPAOFFLINEREFUND,
            self::REF_TYPE_DATACORE_FEE,
            self::REF_TYPE_DNA_MODIFICATION_FEE,
            self::REF_TYPE_DOCKING_FEE,
            self::REF_TYPE_DUEL_WAGER_ESCROW,
            self::REF_TYPE_DUEL_WAGER_PAYMENT,
            self::REF_TYPE_DUEL_WAGER_REFUND,
            self::REF_TYPE_FACTORY_SLOT_RENTAL_FEE,
            self::REF_TYPE_GM_CASH_TRANSFER,
            self::REF_TYPE_INDUSTRY_JOB_TAX,
            self::REF_TYPE_INFRASTRUCTURE_HUB_MAINTENANCE,
            self::REF_TYPE_INHERITANCE,
            self::REF_TYPE_INSURANCE,
            self::REF_TYPE_JUMP_CLONE_ACTIVATION_FEE,
            self::REF_TYPE_JUMP_CLONE_INSTALLATION_FEE,
            self::REF_TYPE_KILL_RIGHT_FEE,
            self::REF_TYPE_LP_STORE,
            self::REF_TYPE_MANUFACTURING,
            self::REF_TYPE_MARKET_ESCROW,
            self::REF_TYPE_MARKET_FINE_PAID,
            self::REF_TYPE_MARKET_TRANSACTION,
            self::REF_TYPE_MEDAL_CREATION,
            self::REF_TYPE_MEDAL_ISSUED,
            self::REF_TYPE_MISSION_COMPLETION,
            self::REF_TYPE_MISSION_COST,
            self::REF_TYPE_MISSION_EXPIRATION,
            self::REF_TYPE_MISSION_REWARD,
            self::REF_TYPE_OFFICE_RENTAL_FEE,
            self::REF_TYPE_OPERATION_BONUS,
            self::REF_TYPE_OPPORTUNITY_REWARD,
            self::REF_TYPE_PLANETARY_CONSTRUCTION,
            self::REF_TYPE_PLANETARY_EXPORT_TAX,
            self::REF_TYPE_PLANETARY_IMPORT_TAX,
            self::REF_TYPE_PLAYER_DONATION,
            self::REF_TYPE_PLAYER_TRADING,
            self::REF_TYPE_PROJECT_DISCOVERY_REWARD,
            self::REF_TYPE_PROJECT_DISCOVERY_TAX,
            self::REF_TYPE_REACTION,
            self::REF_TYPE_RELEASE_OF_IMPOUNDED_PROPERTY,
            self::REF_TYPE_REPAIR_BILL,
            self::REF_TYPE_REPROCESSING_TAX,
            self::REF_TYPE_RESEARCHING_MATERIAL_PRODUCTIVITY,
            self::REF_TYPE_RESEARCHING_TECHNOLOGY,
            self::REF_TYPE_RESEARCHING_TIME_PRODUCTIVITY,
            self::REF_TYPE_RESOURCE_WARS_REWARD,
            self::REF_TYPE_REVERSE_ENGINEERING,
            self::REF_TYPE_SECURITY_PROCESSING_FEE,
            self::REF_TYPE_SHARES,
            self::REF_TYPE_SOVEREIGNITY_BILL,
            self::REF_TYPE_STORE_PURCHASE,
            self::REF_TYPE_STORE_PURCHASE_REFUND,
            self::REF_TYPE_TRANSACTION_TAX,
            self::REF_TYPE_UPKEEP_ADJUSTMENT_FEE,
            self::REF_TYPE_WAR_ALLY_CONTRACT,
            self::REF_TYPE_WAR_FEE,
            self::REF_TYPE_WAR_FEE_SURRENDER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFirstPartyTypeAllowableValues()
    {
        return [
            self::FIRST_PARTY_TYPE_CHARACTER,
            self::FIRST_PARTY_TYPE_CORPORATION,
            self::FIRST_PARTY_TYPE_ALLIANCE,
            self::FIRST_PARTY_TYPE_FACTION,
            self::FIRST_PARTY_TYPE_SYSTEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecondPartyTypeAllowableValues()
    {
        return [
            self::SECOND_PARTY_TYPE_CHARACTER,
            self::SECOND_PARTY_TYPE_CORPORATION,
            self::SECOND_PARTY_TYPE_ALLIANCE,
            self::SECOND_PARTY_TYPE_FACTION,
            self::SECOND_PARTY_TYPE_SYSTEM,
        ];
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['refId'] = isset($data['refId']) ? $data['refId'] : null;
        $this->container['refType'] = isset($data['refType']) ? $data['refType'] : null;
        $this->container['firstPartyId'] = isset($data['firstPartyId']) ? $data['firstPartyId'] : null;
        $this->container['firstPartyType'] = isset($data['firstPartyType']) ? $data['firstPartyType'] : null;
        $this->container['secondPartyId'] = isset($data['secondPartyId']) ? $data['secondPartyId'] : null;
        $this->container['secondPartyType'] = isset($data['secondPartyType']) ? $data['secondPartyType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['taxReceiverId'] = isset($data['taxReceiverId']) ? $data['taxReceiverId'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['refId'] === null) {
            $invalidProperties[] = "'refId' can't be null";
        }
        if ($this->container['refType'] === null) {
            $invalidProperties[] = "'refType' can't be null";
        }
        $allowedValues = $this->getRefTypeAllowableValues();
        if (!in_array($this->container['refType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'refType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFirstPartyTypeAllowableValues();
        if (!in_array($this->container['firstPartyType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'firstPartyType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSecondPartyTypeAllowableValues();
        if (!in_array($this->container['secondPartyType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'secondPartyType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['refId'] === null) {
            return false;
        }
        if ($this->container['refType'] === null) {
            return false;
        }
        $allowedValues = $this->getRefTypeAllowableValues();
        if (!in_array($this->container['refType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFirstPartyTypeAllowableValues();
        if (!in_array($this->container['firstPartyType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSecondPartyTypeAllowableValues();
        if (!in_array($this->container['secondPartyType'], $allowedValues)) {
            return false;
        }
        return true;
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
     * Gets refId
     *
     * @return int
     */
    public function getRefId()
    {
        return $this->container['refId'];
    }

    /**
     * Sets refId
     *
     * @param int $refId Unique journal reference ID
     *
     * @return $this
     */
    public function setRefId($refId)
    {
        $this->container['refId'] = $refId;

        return $this;
    }

    /**
     * Gets refType
     *
     * @return string
     */
    public function getRefType()
    {
        return $this->container['refType'];
    }

    /**
     * Sets refType
     *
     * @param string $refType Transaction type, different type of transaction will populate different fields in `extra_info` Note: If you have an existing XML API application that is using ref_types, you will need to know which string ESI ref_type maps to which integer. You can use the following gist to see string->int mappings: https://gist.github.com/ccp-zoetrope/c03db66d90c2148724c06171bc52e0ec
     *
     * @return $this
     */
    public function setRefType($refType)
    {
        $allowedValues = $this->getRefTypeAllowableValues();
        if (!in_array($refType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'refType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refType'] = $refType;

        return $this;
    }

    /**
     * Gets firstPartyId
     *
     * @return int
     */
    public function getFirstPartyId()
    {
        return $this->container['firstPartyId'];
    }

    /**
     * Sets firstPartyId
     *
     * @param int $firstPartyId first_party_id integer
     *
     * @return $this
     */
    public function setFirstPartyId($firstPartyId)
    {
        $this->container['firstPartyId'] = $firstPartyId;

        return $this;
    }

    /**
     * Gets firstPartyType
     *
     * @return string
     */
    public function getFirstPartyType()
    {
        return $this->container['firstPartyType'];
    }

    /**
     * Sets firstPartyType
     *
     * @param string $firstPartyType first_party_type string
     *
     * @return $this
     */
    public function setFirstPartyType($firstPartyType)
    {
        $allowedValues = $this->getFirstPartyTypeAllowableValues();
        if (!is_null($firstPartyType) && !in_array($firstPartyType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'firstPartyType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['firstPartyType'] = $firstPartyType;

        return $this;
    }

    /**
     * Gets secondPartyId
     *
     * @return int
     */
    public function getSecondPartyId()
    {
        return $this->container['secondPartyId'];
    }

    /**
     * Sets secondPartyId
     *
     * @param int $secondPartyId second_party_id integer
     *
     * @return $this
     */
    public function setSecondPartyId($secondPartyId)
    {
        $this->container['secondPartyId'] = $secondPartyId;

        return $this;
    }

    /**
     * Gets secondPartyType
     *
     * @return string
     */
    public function getSecondPartyType()
    {
        return $this->container['secondPartyType'];
    }

    /**
     * Sets secondPartyType
     *
     * @param string $secondPartyType second_party_type string
     *
     * @return $this
     */
    public function setSecondPartyType($secondPartyType)
    {
        $allowedValues = $this->getSecondPartyTypeAllowableValues();
        if (!is_null($secondPartyType) && !in_array($secondPartyType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'secondPartyType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['secondPartyType'] = $secondPartyType;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Transaction amount. Positive when value transferred to the first party. Negative otherwise
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance Wallet balance after transaction occurred
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason string
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets taxReceiverId
     *
     * @return int
     */
    public function getTaxReceiverId()
    {
        return $this->container['taxReceiverId'];
    }

    /**
     * Sets taxReceiverId
     *
     * @param int $taxReceiverId the corporation ID receiving any tax paid
     *
     * @return $this
     */
    public function setTaxReceiverId($taxReceiverId)
    {
        $this->container['taxReceiverId'] = $taxReceiverId;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return double
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double $tax Tax amount received for tax related transactions
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets extraInfo
     *
     * @return \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletJournalExtraInfo
     */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
     * Sets extraInfo
     *
     * @param \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletJournalExtraInfo $extraInfo extraInfo
     *
     * @return $this
     */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;

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

