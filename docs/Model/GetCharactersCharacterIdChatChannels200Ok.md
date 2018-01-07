# GetCharactersCharacterIdChatChannels200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelId** | **int** | Unique channel ID. Always negative for player-created channels. Permanent (CCP created) channels have a positive ID, but don&#39;t appear in the API | 
**name** | **string** | Displayed name of channel | 
**ownerId** | **int** | owner_id integer | 
**comparisonKey** | **string** | Normalized, unique string used to compare channel names | 
**hasPassword** | **bool** | If this is a password protected channel | 
**motd** | **string** | Message of the day for this channel | 
**allowed** | [**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsAllowed[]**](GetCharactersCharacterIdChatChannelsAllowed.md) | allowed array | 
**operators** | [**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsOperator[]**](GetCharactersCharacterIdChatChannelsOperator.md) | operators array | 
**blocked** | [**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsBlocked[]**](GetCharactersCharacterIdChatChannelsBlocked.md) | blocked array | 
**muted** | [**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdChatChannelsMuted[]**](GetCharactersCharacterIdChatChannelsMuted.md) | muted array | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


