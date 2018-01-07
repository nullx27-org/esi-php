# GetCharactersCharacterIdIndustryJobs200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobId** | **int** | Unique job ID | 
**installerId** | **int** | ID of the character which installed this job | 
**facilityId** | **int** | ID of the facility where this job is running | 
**stationId** | **int** | ID of the station where industry facility is located | 
**activityId** | **int** | Job activity ID | 
**blueprintId** | **int** | blueprint_id integer | 
**blueprintTypeId** | **int** | blueprint_type_id integer | 
**blueprintLocationId** | **int** | Location ID of the location from which the blueprint was installed. Normally a station ID, but can also be an asset (e.g. container) or corporation facility | 
**outputLocationId** | **int** | Location ID of the location to which the output of the job will be delivered. Normally a station ID, but can also be a corporation facility | 
**runs** | **int** | Number of runs for a manufacturing job, or number of copies to make for a blueprint copy | 
**cost** | **double** | The sume of job installation fee and industry facility tax | [optional] 
**licensedRuns** | **int** | Number of runs blueprint is licensed for | [optional] 
**probability** | **float** | Chance of success for invention | [optional] 
**productTypeId** | **int** | Type ID of product (manufactured, copied or invented) | [optional] 
**status** | **string** | status string | 
**duration** | **int** | Job duration in seconds | 
**startDate** | [**\DateTime**](\DateTime.md) | Date and time when this job started | 
**endDate** | [**\DateTime**](\DateTime.md) | Date and time when this job finished | 
**pauseDate** | [**\DateTime**](\DateTime.md) | Date and time when this job was paused (i.e. time when the facility where this job was installed went offline) | [optional] 
**completedDate** | [**\DateTime**](\DateTime.md) | Date and time when this job was completed | [optional] 
**completedCharacterId** | **int** | ID of the character which completed this job | [optional] 
**successfulRuns** | **int** | Number of successful runs for this job. Equal to runs unless this is an invention job | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


