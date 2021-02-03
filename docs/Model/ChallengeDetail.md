# ChallengeDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | [optional] 
**public_id** | **string** |  | [optional] 
**title** | **string** |  | 
**slogan** | **string** |  | [optional] 
**start** | [**\DateTime**](\DateTime.md) |  | 
**end** | [**\DateTime**](\DateTime.md) |  | [optional] 
**type** | **string** |  | 
**goal** | **string** |  | 
**goal_value** | **int** |  | [optional] 
**goal_type** | **string** |  | 
**visibility** | **string** |  | 
**num_members** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**calculation_method** | **string** |  | 
**goal_progress** | **float** | Progress towards the goal, from perspective of profile whose bearer is used for authentication: can be an individual/team/global score. When goal is duration, this is the duration in seconds. When an admin token is used, returns 0.0. | [optional] 
**enrollment_method** | **string** |  | 
**members** | [**\WeFitter\Client\Model\ProfileListWithEnrolledTeam[]**](ProfileListWithEnrolledTeam.md) | List of all profiles participating in this challenge | [optional] 
**repetition** | **string** |  | 
**avatar** | **string** |  | [optional] 
**data_source** | **string** |  | [optional] 
**activity_types** | [**\WeFitter\Client\Model\ChallengeActivityType[]**](ChallengeActivityType.md) |  | [optional] 
**total_calories** | **float** |  | [optional] 
**total_distance** | **float** |  | [optional] 
**total_steps** | **float** |  | [optional] 
**total_points** | **float** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

