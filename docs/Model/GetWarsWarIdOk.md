# GetWarsWarIdOk

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggressor** | [**\nullx27\ESI\Models\GetWarsWarIdAggressor**](GetWarsWarIdAggressor.md) |  | [optional] 
**allies** | [**\nullx27\ESI\Models\GetWarsWarIdAlly[]**](GetWarsWarIdAlly.md) | allied corporations or alliances, each object contains either corporation_id or alliance_id | [optional] 
**declared** | [**\DateTime**](\DateTime.md) | Time that the war was declared | 
**defender** | [**\nullx27\ESI\Models\GetWarsWarIdDefender**](GetWarsWarIdDefender.md) |  | [optional] 
**finished** | [**\DateTime**](\DateTime.md) | Time the war ended and shooting was no longer allowed | [optional] 
**id** | **int** | ID of the specified war | 
**mutual** | **bool** | Was the war declared mutual by both parties | 
**openForAllies** | **bool** | Is the war currently open for allies or not | 
**retracted** | [**\DateTime**](\DateTime.md) | Time the war was retracted but both sides could still shoot each other | [optional] 
**started** | [**\DateTime**](\DateTime.md) | Time when the war started and both sides could shoot each other | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


