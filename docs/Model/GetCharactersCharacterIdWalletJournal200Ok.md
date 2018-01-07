# GetCharactersCharacterIdWalletJournal200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Date and time of transaction | 
**refId** | **int** | Unique journal reference ID | 
**refType** | **string** | Transaction type, different type of transaction will populate different fields in &#x60;extra_info&#x60; Note: If you have an existing XML API application that is using ref_types, you will need to know which string ESI ref_type maps to which integer. You can use the following gist to see string-&gt;int mappings: https://gist.github.com/ccp-zoetrope/c03db66d90c2148724c06171bc52e0ec | 
**firstPartyId** | **int** | first_party_id integer | [optional] 
**firstPartyType** | **string** | first_party_type string | [optional] 
**secondPartyId** | **int** | second_party_id integer | [optional] 
**secondPartyType** | **string** | second_party_type string | [optional] 
**amount** | **double** | Transaction amount. Positive when value transferred to the first party. Negative otherwise | [optional] 
**balance** | **double** | Wallet balance after transaction occurred | [optional] 
**reason** | **string** | reason string | [optional] 
**taxReceiverId** | **int** | the corporation ID receiving any tax paid | [optional] 
**tax** | **double** | Tax amount received for tax related transactions | [optional] 
**extraInfo** | [**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletJournalExtraInfo**](GetCharactersCharacterIdWalletJournalExtraInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


