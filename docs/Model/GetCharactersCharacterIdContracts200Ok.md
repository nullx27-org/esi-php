# GetCharactersCharacterIdContracts200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contractId** | **int** | contract_id integer | 
**issuerId** | **int** | Character ID for the issuer | 
**issuerCorporationId** | **int** | Character&#39;s corporation ID for the issuer | 
**assigneeId** | **int** | ID to whom the contract is assigned, can be corporation or character ID | 
**acceptorId** | **int** | Who will accept the contract | 
**startLocationId** | **int** | Start location ID (for Couriers contract) | [optional] 
**endLocationId** | **int** | End location ID (for Couriers contract) | [optional] 
**type** | **string** | Type of the contract | 
**status** | **string** | Status of the the contract | 
**title** | **string** | Title of the contract | [optional] 
**forCorporation** | **bool** | true if the contract was issued on behalf of the issuer&#39;s corporation | 
**availability** | **string** | To whom the contract is available | 
**dateIssued** | [**\DateTime**](\DateTime.md) | Сreation date of the contract | 
**dateExpired** | [**\DateTime**](\DateTime.md) | Expiration date of the contract | 
**dateAccepted** | [**\DateTime**](\DateTime.md) | Date of confirmation of contract | [optional] 
**daysToComplete** | **int** | Number of days to perform the contract | [optional] 
**dateCompleted** | [**\DateTime**](\DateTime.md) | Date of completed of contract | [optional] 
**price** | **double** | Price of contract (for ItemsExchange and Auctions) | [optional] 
**reward** | **double** | Remuneration for contract (for Couriers only) | [optional] 
**collateral** | **double** | Collateral price (for Couriers only) | [optional] 
**buyout** | **double** | Buyout price (for Auctions only) | [optional] 
**volume** | **float** | Volume of items in the contract | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


