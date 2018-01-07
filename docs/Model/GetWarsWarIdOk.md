# GetWarsWarIdOk

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the specified war | 
**declared** | [**\DateTime**](\DateTime.md) | Time that the war was declared | 
**started** | [**\DateTime**](\DateTime.md) | Time when the war started and both sides could shoot each other | [optional] 
**retracted** | [**\DateTime**](\DateTime.md) | Time the war was retracted but both sides could still shoot each other | [optional] 
**finished** | [**\DateTime**](\DateTime.md) | Time the war ended and shooting was no longer allowed | [optional] 
**mutual** | **bool** | Was the war declared mutual by both parties | 
**openForAllies** | **bool** | Is the war currently open for allies or not | 
**aggressor** | [**\nullx27\ESI\nullx27\ESI\Models\GetWarsWarIdAggressor**](GetWarsWarIdAggressor.md) |  | 
**defender** | [**\nullx27\ESI\nullx27\ESI\Models\GetWarsWarIdDefender**](GetWarsWarIdDefender.md) |  | 
**allies** | [**\nullx27\ESI\nullx27\ESI\Models\GetWarsWarIdAlly[]**](GetWarsWarIdAlly.md) | allied corporations or alliances, each object contains either corporation_id or alliance_id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


