# GetCorporationsCorporationIdCustomsOffices200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**officeId** | **int** | unique ID of this customs office | 
**systemId** | **int** | ID of the solar system this customs office is located in | 
**reinforceExitStart** | **int** | Together with reinforce_exit_end, marks a 2-hour period where this customs office could exit reinforcement mode during the day after initial attack | 
**reinforceExitEnd** | **int** | reinforce_exit_end integer | 
**corporationTaxRate** | **float** | corporation_tax_rate number | [optional] 
**allowAllianceAccess** | **bool** | allow_alliance_access boolean | 
**allianceTaxRate** | **float** | Only present if alliance access is allowed | [optional] 
**allowAccessWithStandings** | **bool** | standing_level and any standing related tax rate only present when this is true | 
**standingLevel** | **string** | Access is allowed only for entities with this level of standing or better | [optional] 
**excellentStandingTaxRate** | **float** | Tax rate for entities with excellent level of standing, only present if this level is allowed, same for all other standing related tax rates | [optional] 
**goodStandingTaxRate** | **float** | good_standing_tax_rate number | [optional] 
**neutralStandingTaxRate** | **float** | neutral_standing_tax_rate number | [optional] 
**badStandingTaxRate** | **float** | bad_standing_tax_rate number | [optional] 
**terribleStandingTaxRate** | **float** | terrible_standing_tax_rate number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


