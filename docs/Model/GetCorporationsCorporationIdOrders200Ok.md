# GetCorporationsCorporationIdOrders200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **int** | Unique order ID | 
**typeId** | **int** | The type ID of the item transacted in this order | 
**regionId** | **int** | ID of the region where order was placed | 
**locationId** | **int** | ID of the location where order was placed | 
**range** | **string** | Valid order range, numbers are ranges in jumps | 
**isBuyOrder** | **bool** | True for a bid (buy) order. False for an offer (sell) order | 
**price** | **double** | Cost per unit for this order | 
**volumeTotal** | **int** | Quantity of items required or offered at time order was placed | 
**volumeRemain** | **int** | Quantity of items still required or offered | 
**issued** | [**\DateTime**](\DateTime.md) | Date and time when this order was issued | 
**state** | **string** | Current order state | 
**minVolume** | **int** | For bids (buy orders), the minimum quantity that will be accepted in a matching offer (sell order) | 
**walletDivision** | **int** | Wallet division of which this order used | 
**duration** | **int** | Numer of days for which order is valid (starting from the issued date). An order expires at time issued + duration | 
**escrow** | **double** | For buy orders, the amount of ISK in escrow | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


