# GetSovereigntyCampaigns200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignId** | **int** | Unique ID for this campaign. | 
**structureId** | **int** | The structure item ID that is related to this campaign. | 
**solarSystemId** | **int** | The solar system the structure is located in. | 
**constellationId** | **int** | The constellation in which the campaign will take place. | 
**eventType** | **string** | Type of event this campaign is for. tcu_defense, ihub_defense and station_defense are referred to as \&quot;Defense Events\&quot;, station_freeport as \&quot;Freeport Events\&quot;. | 
**startTime** | [**\DateTime**](\DateTime.md) | Time the event is scheduled to start. | 
**defenderId** | **int** | Defending alliance, only present in Defense Events | [optional] 
**defenderScore** | **float** | Score for the defending alliance, only present in Defense Events. | [optional] 
**attackersScore** | **float** | Score for all attacking parties, only present in Defense Events. | [optional] 
**participants** | [**\nullx27ESI\nullx27\ESI\Models\GetSovereigntyCampaignsParticipant[]**](GetSovereigntyCampaignsParticipant.md) | Alliance participating and their respective scores, only present in Freeport Events. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


