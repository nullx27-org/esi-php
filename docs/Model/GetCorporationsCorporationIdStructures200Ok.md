# GetCorporationsCorporationIdStructures200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**corporationId** | **int** | ID of the corporation that owns the structure | 
**currentVul** | [**\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresCurrentVul[]**](GetCorporationsCorporationIdStructuresCurrentVul.md) | This week&#39;s vulnerability windows, Monday is day 0 | 
**fuelExpires** | [**\DateTime**](Date.md) | Date on which the structure will run out of fuel | [optional] 
**nextVul** | [**\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresNextVul[]**](GetCorporationsCorporationIdStructuresNextVul.md) | Next week&#39;s vulnerability windows, Monday is day 0 | 
**profileId** | **int** | The id of the ACL profile for this citadel | 
**services** | [**\nullx27\ESI\Models\GetCorporationsCorporationIdStructuresService[]**](GetCorporationsCorporationIdStructuresService.md) | Contains a list of service upgrades, and their state | [optional] 
**stateTimerEnd** | [**\DateTime**](Date.md) | Date at which the structure will move to it&#39;s next state | [optional] 
**stateTimerStart** | [**\DateTime**](Date.md) | Date at which the structure entered it&#39;s current state | [optional] 
**structureId** | **int** | The Item ID of the structure | 
**systemId** | **int** | The solar system the structure is in | 
**typeId** | **int** | The type id of the structure | 
**unanchorsAt** | [**\DateTime**](Date.md) | Date at which the structure will unanchor | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


