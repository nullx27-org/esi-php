# GetCorporationsCorporationIdBlueprints200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **int** | Unique ID for this item. | 
**typeId** | **int** | type_id integer | 
**locationId** | **int** | References a solar system, station or item_id if this blueprint is located within a container. | 
**locationFlag** | **string** | Type of the location_id | 
**quantity** | **int** | A range of numbers with a minimum of -2 and no maximum value where -1 is an original and -2 is a copy. It can be a positive integer if it is a stack of blueprint originals fresh from the market (e.g. no activities performed on them yet). | 
**timeEfficiency** | **int** | Time Efficiency Level of the blueprint. | 
**materialEfficiency** | **int** | Material Efficiency Level of the blueprint. | 
**runs** | **int** | Number of runs remaining if the blueprint is a copy, -1 if it is an original. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


