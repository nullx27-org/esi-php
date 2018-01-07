# GetCharactersCharacterIdContractsContractIdItems200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recordId** | **int** | Unique ID for the item | 
**typeId** | **int** | Type ID for item | 
**quantity** | **int** | Number of items in the stack | 
**rawQuantity** | **int** | -1 indicates that the item is a singleton (non-stackable). If the item happens to be a Blueprint, -1 is an Original and -2 is a Blueprint Copy | [optional] 
**isSingleton** | **bool** | is_singleton boolean | 
**isIncluded** | **bool** | true if the contract issuer has submitted this item with the contract, false if the isser is asking for this item in the contract. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


