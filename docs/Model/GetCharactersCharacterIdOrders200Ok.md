# GetCharactersCharacterIdOrders200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | Wallet division for the buyer or seller of this order. Always 1000 for characters. Currently 1000 through 1006 for corporations | 
**duration** | **int** | Numer of days for which order is valid (starting from the issued date). An order expires at time issued + duration | 
**escrow** | **float** | For buy orders, the amount of ISK in escrow | 
**isBuyOrder** | **bool** | True for a bid (buy) order. False for an offer (sell) order | 
**isCorp** | **bool** | is_corp boolean | 
**issued** | [**\DateTime**](\DateTime.md) | Date and time when this order was issued | 
**locationId** | **int** | ID of the location where order was placed | 
**minVolume** | **int** | For bids (buy orders), the minimum quantity that will be accepted in a matching offer (sell order) | 
**orderId** | **int** | Unique order ID | 
**price** | **float** | Cost per unit for this order | 
**range** | **string** | Valid order range, numbers are ranges in jumps | 
**regionId** | **int** | ID of the region where order was placed | 
**state** | **string** | Current order state | 
**typeId** | **int** | The type ID of the item transacted in this order | 
**volumeRemain** | **int** | Quantity of items still required or offered | 
**volumeTotal** | **int** | Quantity of items required or offered at time order was placed | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


