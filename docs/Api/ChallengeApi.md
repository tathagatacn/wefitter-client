# WeFitter\Client\ChallengeApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**challengeCreate**](ChallengeApi.md#challengecreate) | **POST** /challenge/ | Create challenge
[**challengeDelete**](ChallengeApi.md#challengedelete) | **DELETE** /challenge/{public_id}/ | Delete challenge
[**challengeLeaderboardHistoryRead**](ChallengeApi.md#challengeleaderboardhistoryread) | **GET** /challenge/{public_id}/leaderboard_history/ | Leaderboard history
[**challengeLeaderboardRead**](ChallengeApi.md#challengeleaderboardread) | **GET** /challenge/{public_id}/leaderboard/ | Leaderboard
[**challengeList**](ChallengeApi.md#challengelist) | **GET** /challenge/ | List Challenges
[**challengeMemberCreate**](ChallengeApi.md#challengemembercreate) | **POST** /challenge/{public_id}/member/ | Add member
[**challengeMemberDelete**](ChallengeApi.md#challengememberdelete) | **DELETE** /challenge/{public_id}/member/ | Remove member
[**challengeMemberUpdate**](ChallengeApi.md#challengememberupdate) | **PUT** /challenge/{public_id}/member/ | Add member
[**challengeMembersCreate**](ChallengeApi.md#challengememberscreate) | **POST** /challenge/{public_id}/members/ | Add members
[**challengeMembersUpdate**](ChallengeApi.md#challengemembersupdate) | **PUT** /challenge/{public_id}/members/ | Add members
[**challengePartialUpdate**](ChallengeApi.md#challengepartialupdate) | **PATCH** /challenge/{public_id}/ | Partial edit challenge
[**challengePeriods**](ChallengeApi.md#challengeperiods) | **GET** /challenge/{public_id}/periods/ | Periods
[**challengeRead**](ChallengeApi.md#challengeread) | **GET** /challenge/{public_id}/ | Get Challenge
[**challengeRemoveMembers**](ChallengeApi.md#challengeremovemembers) | **POST** /challenge/{public_id}/remove_members/ | Remove members
[**challengeTeamList**](ChallengeApi.md#challengeteamlist) | **GET** /challenge/{challenge_public_id}/team/ | Team leaderboard
[**challengeTeamRead**](ChallengeApi.md#challengeteamread) | **GET** /challenge/{challenge_public_id}/team/{team_public_id}/ | Team contribution
[**challengeUpdate**](ChallengeApi.md#challengeupdate) | **PUT** /challenge/{public_id}/ | Edit challenge

# **challengeCreate**
> \WeFitter\Client\Model\ChallengeDetail challengeCreate($body)

Create challenge

Creates a new challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ChallengeDetail(); // \WeFitter\Client\Model\ChallengeDetail | 

try {
    $result = $apiInstance->challengeCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)|  |

### Return type

[**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeDelete**
> challengeDelete($public_id)

Delete challenge

deletes a challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $apiInstance->challengeDelete($public_id);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeLeaderboardHistoryRead**
> \WeFitter\Client\Model\LeaderboardHistory challengeLeaderboardHistoryRead($public_id)

Leaderboard history

Retrieve the scores of the authenticated profile for all periods since the profile joined the challenge. This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeLeaderboardHistoryRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeLeaderboardHistoryRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\LeaderboardHistory**](../Model/LeaderboardHistory.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeLeaderboardRead**
> \WeFitter\Client\Model\LeaderboardProfileAndTeam challengeLeaderboardRead($public_id, $date_range)

Leaderboard

Displays the leaderboard for a challenge. This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 
$date_range = 56; // int | Index of the time period use

try {
    $result = $apiInstance->challengeLeaderboardRead($public_id, $date_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeLeaderboardRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |
 **date_range** | **int**| Index of the time period use | [optional]

### Return type

[**\WeFitter\Client\Model\LeaderboardProfileAndTeam**](../Model/LeaderboardProfileAndTeam.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeList**
> \WeFitter\Client\Model\InlineResponse200 challengeList($limit, $offset)

List Challenges

Lists all available challenges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.

try {
    $result = $apiInstance->challengeList($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of results to return per page. | [optional]
 **offset** | **int**| The initial index from which to return the results. | [optional]

### Return type

[**\WeFitter\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeMemberCreate**
> \WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId challengeMemberCreate($body, $public_id)

Add member

Add member to a team.     For now if the challenge is a team challenge and no team is specified, the first team for the specified profile is     used. Do note that this is a temporary fix and may be removed at any time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId(); // \WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeMemberCreate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeMemberCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId**](../Model/ProfileAsProfilePublicIdAndTeamAsTeamPublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId**](../Model/ProfileAsProfilePublicIdAndTeamAsTeamPublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeMemberDelete**
> challengeMemberDelete($public_id, $profile)

Remove member

Remove a member from the challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 
$profile = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A profile public_id is expected

try {
    $apiInstance->challengeMemberDelete($public_id, $profile);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeMemberDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |
 **profile** | [**string**](../Model/.md)| A profile public_id is expected |

### Return type

void (empty response body)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeMemberUpdate**
> \WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId challengeMemberUpdate($body, $public_id)

Add member

Add member to a team.     For now if the challenge is a team challenge and no team is specified, the first team for the specified profile is     used. Do note that this is a temporary fix and may be removed at any time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId(); // \WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeMemberUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeMemberUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId**](../Model/ProfileAsProfilePublicIdAndTeamAsTeamPublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileAsProfilePublicIdAndTeamAsTeamPublicId**](../Model/ProfileAsProfilePublicIdAndTeamAsTeamPublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeMembersCreate**
> \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId challengeMembersCreate($body, $public_id)

Add members

Add members to a team.     For now if the challenge is a team challenge and no team is specified, the first team for the specified profile is     used. Do note that this is a temporary fix and may be removed at any time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId(); // \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeMembersCreate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeMembersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId**](../Model/ProfilePublicIdsListAndTeamAsPublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId**](../Model/ProfilePublicIdsListAndTeamAsPublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeMembersUpdate**
> \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId challengeMembersUpdate($body, $public_id)

Add members

Add members to a team.     For now if the challenge is a team challenge and no team is specified, the first team for the specified profile is     used. Do note that this is a temporary fix and may be removed at any time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId(); // \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeMembersUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeMembersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId**](../Model/ProfilePublicIdsListAndTeamAsPublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId**](../Model/ProfilePublicIdsListAndTeamAsPublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengePartialUpdate**
> \WeFitter\Client\Model\ChallengeDetail challengePartialUpdate($body, $public_id)

Partial edit challenge

Edits a challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ChallengeDetail(); // \WeFitter\Client\Model\ChallengeDetail | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengePartialUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengePartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengePeriods**
> \WeFitter\Client\Model\ChallengePeriod challengePeriods($public_id)

Periods

Get all periods for the challenge. This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengePeriods($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengePeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ChallengePeriod**](../Model/ChallengePeriod.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeRead**
> \WeFitter\Client\Model\ChallengeDetail challengeRead($public_id)

Get Challenge

Gets a single challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeRemoveMembers**
> \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId challengeRemoveMembers($body, $public_id)

Remove members

Remove members from the challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId(); // \WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeRemoveMembers($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeRemoveMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId**](../Model/ProfilePublicIdsListAndTeamAsPublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfilePublicIdsListAndTeamAsPublicId**](../Model/ProfilePublicIdsListAndTeamAsPublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeTeamList**
> \WeFitter\Client\Model\InlineResponse2001 challengeTeamList($challenge_public_id, $limit, $offset, $date_range)

Team leaderboard

List the standings of different teams in challenges (don't have to be team challenges). This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$challenge_public_id = "challenge_public_id_example"; // string | 
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.
$date_range = 56; // int | Index of the time period use

try {
    $result = $apiInstance->challengeTeamList($challenge_public_id, $limit, $offset, $date_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeTeamList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_public_id** | **string**|  |
 **limit** | **int**| Number of results to return per page. | [optional]
 **offset** | **int**| The initial index from which to return the results. | [optional]
 **date_range** | **int**| Index of the time period use | [optional]

### Return type

[**\WeFitter\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeTeamRead**
> \WeFitter\Client\Model\LeaderboardProfile challengeTeamRead($challenge_public_id, $team_public_id, $date_range)

Team contribution

List team members' contribution to the challenge. This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$challenge_public_id = "challenge_public_id_example"; // string | 
$team_public_id = "team_public_id_example"; // string | 
$date_range = 56; // int | Index of the time period use

try {
    $result = $apiInstance->challengeTeamRead($challenge_public_id, $team_public_id, $date_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeTeamRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_public_id** | **string**|  |
 **team_public_id** | **string**|  |
 **date_range** | **int**| Index of the time period use | [optional]

### Return type

[**\WeFitter\Client\Model\LeaderboardProfile**](../Model/LeaderboardProfile.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **challengeUpdate**
> \WeFitter\Client\Model\ChallengeDetail challengeUpdate($body, $public_id)

Edit challenge

Edits a challenge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ChallengeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ChallengeDetail(); // \WeFitter\Client\Model\ChallengeDetail | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->challengeUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengeApi->challengeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ChallengeDetail**](../Model/ChallengeDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

