# WeFitter\Client\ProfileApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profileActivitiesList**](ProfileApi.md#profileactivitieslist) | **GET** /profile/{profile_public_id}/activities/ | DEPRECATED: Workout - Use /workout/ instead.
[**profileActivityList**](ProfileApi.md#profileactivitylist) | **GET** /profile/{profile_public_id}/activity/ | DEPRECATED: Workout - Use /workout/ instead.
[**profileActivitySegmentList**](ProfileApi.md#profileactivitysegmentlist) | **GET** /profile/{profile_public_id}/activity_segment/ | Activity segment
[**profileBiometricList**](ProfileApi.md#profilebiometriclist) | **GET** /profile/{profile_public_id}/biometric/ | Bio Metric
[**profileBiometricsList**](ProfileApi.md#profilebiometricslist) | **GET** /profile/{profile_public_id}/biometrics/ | DEPRECATED: Bio Metric - Use /biometric/ instead.
[**profileBmiList**](ProfileApi.md#profilebmilist) | **GET** /profile/{profile_public_id}/bmi/ | BMI
[**profileChallengeRead**](ProfileApi.md#profilechallengeread) | **GET** /profile/{public_id}/challenge/ | Challenge
[**profileChallenges**](ProfileApi.md#profilechallenges) | **GET** /profile/{public_id}/challenges/ | Challenges
[**profileConnectionWidgetRead**](ProfileApi.md#profileconnectionwidgetread) | **GET** /profile/{public_id}/connection_widget/ | Connections Widget
[**profileConnectionsRead**](ProfileApi.md#profileconnectionsread) | **GET** /profile/{public_id}/connections/ | Connections
[**profileCreate**](ProfileApi.md#profilecreate) | **POST** /profile/ | Create Profile
[**profileDailySummariesList**](ProfileApi.md#profiledailysummarieslist) | **GET** /profile/{profile_public_id}/daily_summaries/ | DEPRECATED: Daily Summary - Use /daily_summary/ instead.
[**profileDailySummaryList**](ProfileApi.md#profiledailysummarylist) | **GET** /profile/{profile_public_id}/daily_summary/ | Daily Summary
[**profileDailySummarySampleList**](ProfileApi.md#profiledailysummarysamplelist) | **GET** /profile/{profile_public_id}/daily_summary_sample/ | Daily Summary Sample
[**profileDelete**](ProfileApi.md#profiledelete) | **DELETE** /profile/{public_id}/ | Delete Profile
[**profileEventCreate**](ProfileApi.md#profileeventcreate) | **POST** /profile/{profile_public_id}/event/ | Create Event
[**profileEventList**](ProfileApi.md#profileeventlist) | **GET** /profile/{profile_public_id}/event/ | Event
[**profileHeartrateSummariesList**](ProfileApi.md#profileheartratesummarieslist) | **GET** /profile/{profile_public_id}/heartrate_summaries/ | DEPRECATED: Heart Rate Summary - Use /heartrate_summary/ instead.
[**profileHeartrateSummaryList**](ProfileApi.md#profileheartratesummarylist) | **GET** /profile/{profile_public_id}/heartrate_summary/ | Heart Rate Summary
[**profileHeightList**](ProfileApi.md#profileheightlist) | **GET** /profile/{profile_public_id}/height/ | Height
[**profileList**](ProfileApi.md#profilelist) | **GET** /profile/ | List Profiles
[**profilePartialUpdate**](ProfileApi.md#profilepartialupdate) | **PATCH** /profile/{public_id}/ | Partial Update
[**profileRead**](ProfileApi.md#profileread) | **GET** /profile/{public_id}/ | Get Profile
[**profileRegisterPushNotificationsDelete**](ProfileApi.md#profileregisterpushnotificationsdelete) | **DELETE** /profile/{public_id}/register_push_notifications/ | Remove a push notification registration
[**profileRegisterPushNotificationsUpdate**](ProfileApi.md#profileregisterpushnotificationsupdate) | **PUT** /profile/{public_id}/register_push_notifications/ | Add push notification registration
[**profileSleepSummariesList**](ProfileApi.md#profilesleepsummarieslist) | **GET** /profile/{profile_public_id}/sleep_summaries/ | DEPRECATED: Sleep Summary - Use /sleep_summary/ instead.
[**profileSleepSummaryList**](ProfileApi.md#profilesleepsummarylist) | **GET** /profile/{profile_public_id}/sleep_summary/ | Sleep Summary
[**profileStressSamplesList**](ProfileApi.md#profilestresssampleslist) | **GET** /profile/{profile_public_id}/stress_samples/ | Stress Sample
[**profileStressSummaryList**](ProfileApi.md#profilestresssummarylist) | **GET** /profile/{profile_public_id}/stress_summary/ | Stress Summary
[**profileUpdate**](ProfileApi.md#profileupdate) | **PUT** /profile/{public_id}/ | Update profile
[**profileWeightList**](ProfileApi.md#profileweightlist) | **GET** /profile/{profile_public_id}/weight/ | Weight
[**profileWorkoutList**](ProfileApi.md#profileworkoutlist) | **GET** /profile/{profile_public_id}/workout/ | Workout

# **profileActivitiesList**
> \WeFitter\Client\Model\Workout[] profileActivitiesList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate)

DEPRECATED: Workout - Use /workout/ instead.

Lists workouts associated with the profile. Used to be known as Activity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.
$deduplicate = true; // bool | If set to true, duplicates will be aggregated.

try {
    $result = $apiInstance->profileActivitiesList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileActivitiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]
 **deduplicate** | **bool**| If set to true, duplicates will be aggregated. | [optional]

### Return type

[**\WeFitter\Client\Model\Workout[]**](../Model/Workout.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileActivityList**
> \WeFitter\Client\Model\Workout[] profileActivityList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate)

DEPRECATED: Workout - Use /workout/ instead.

Lists workouts associated with the profile. Used to be known as Activity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.
$deduplicate = true; // bool | If set to true, duplicates will be aggregated.

try {
    $result = $apiInstance->profileActivityList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileActivityList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]
 **deduplicate** | **bool**| If set to true, duplicates will be aggregated. | [optional]

### Return type

[**\WeFitter\Client\Model\Workout[]**](../Model/Workout.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileActivitySegmentList**
> \WeFitter\Client\Model\Activity[] profileActivitySegmentList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Activity segment

Lists segments of activities and small non-workout-like movements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileActivitySegmentList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileActivitySegmentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\Activity[]**](../Model/Activity.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileBiometricList**
> \WeFitter\Client\Model\BioMetric[] profileBiometricList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Bio Metric

Lists changes in weight, height and bmi for the profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileBiometricList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileBiometricList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\BioMetric[]**](../Model/BioMetric.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileBiometricsList**
> \WeFitter\Client\Model\BioMetric[] profileBiometricsList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

DEPRECATED: Bio Metric - Use /biometric/ instead.

Lists changes in weight, height and bmi for the profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileBiometricsList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileBiometricsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\BioMetric[]**](../Model/BioMetric.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileBmiList**
> \WeFitter\Client\Model\BMI[] profileBmiList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

BMI

Presents the Body-Mass-Index over time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileBmiList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileBmiList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\BMI[]**](../Model/BMI.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileChallengeRead**
> \WeFitter\Client\Model\ProfileChallengeList profileChallengeRead($public_id)

Challenge

Provides a list of challenges where the profile can participate and is already participating in. This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileChallengeRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileChallengeRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileChallengeList**](../Model/ProfileChallengeList.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileChallenges**
> \WeFitter\Client\Model\ProfileChallengeList profileChallenges($public_id)

Challenges

DEPRECATED (please use /profile/{public_id}/challenge/ instead); Alias for challenge. This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileChallenges($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileChallenges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileChallengeList**](../Model/ProfileChallengeList.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileConnectionWidgetRead**
> \WeFitter\Client\Model\AppConnectionConnectionWidget profileConnectionWidgetRead($public_id)

Connections Widget

Presents an HTML connection widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileConnectionWidgetRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileConnectionWidgetRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\AppConnectionConnectionWidget**](../Model/AppConnectionConnectionWidget.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileConnectionsRead**
> \WeFitter\Client\Model\ProfileAppConnectionList profileConnectionsRead($public_id)

Connections

Lists the connections available for a profile and their \"state\". This endpoint returns a list of objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileConnectionsRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileConnectionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileAppConnectionList**](../Model/ProfileAppConnectionList.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileCreate**
> \WeFitter\Client\Model\ProfileCreated profileCreate($body)

Create Profile

Creates a new profile. The bearer field contains a profile bearer token. When this is used in the Authorization header actions are performed as that profile, which will also enable access to private data. Using a profile bearer token disables administrative features such as creating profiles, making this token safe for 'public' use. A profile bearer token has no expiration, so it remains valid as long as the profile is active.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileCreated(); // \WeFitter\Client\Model\ProfileCreated | 

try {
    $result = $apiInstance->profileCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileCreated**](../Model/ProfileCreated.md)|  |

### Return type

[**\WeFitter\Client\Model\ProfileCreated**](../Model/ProfileCreated.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileDailySummariesList**
> \WeFitter\Client\Model\DailySummary[] profileDailySummariesList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate)

DEPRECATED: Daily Summary - Use /daily_summary/ instead.

Provides summarized data per day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.
$deduplicate = true; // bool | If set to true, duplicates will be aggregated.

try {
    $result = $apiInstance->profileDailySummariesList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileDailySummariesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]
 **deduplicate** | **bool**| If set to true, duplicates will be aggregated. | [optional]

### Return type

[**\WeFitter\Client\Model\DailySummary[]**](../Model/DailySummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileDailySummaryList**
> \WeFitter\Client\Model\DailySummary[] profileDailySummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate)

Daily Summary

Provides summarized data per day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.
$deduplicate = true; // bool | If set to true, duplicates will be aggregated.

try {
    $result = $apiInstance->profileDailySummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileDailySummaryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]
 **deduplicate** | **bool**| If set to true, duplicates will be aggregated. | [optional]

### Return type

[**\WeFitter\Client\Model\DailySummary[]**](../Model/DailySummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileDailySummarySampleList**
> \WeFitter\Client\Model\DailySummarySample[] profileDailySummarySampleList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Daily Summary Sample

A history of the daily summaries we received on a day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileDailySummarySampleList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileDailySummarySampleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\DailySummarySample[]**](../Model/DailySummarySample.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileDelete**
> profileDelete($public_id)

Delete Profile

Deletes the specified profile, if created by the app.

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

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $apiInstance->profileDelete($public_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileDelete: ', $e->getMessage(), PHP_EOL;
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

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileEventCreate**
> \WeFitter\Client\Model\Event profileEventCreate($body, $profile_public_id)

Create Event

Create a new event for the profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\Event(); // \WeFitter\Client\Model\Event | 
$profile_public_id = "profile_public_id_example"; // string | 

try {
    $result = $apiInstance->profileEventCreate($body, $profile_public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileEventCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\Event**](../Model/Event.md)|  |
 **profile_public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\Event**](../Model/Event.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileEventList**
> \WeFitter\Client\Model\Event[] profileEventList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Event

Lists events, generic actions for which points have been awarded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileEventList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileEventList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileHeartrateSummariesList**
> \WeFitter\Client\Model\HeartRateSummary[] profileHeartrateSummariesList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

DEPRECATED: Heart Rate Summary - Use /heartrate_summary/ instead.

Presents heart rate information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileHeartrateSummariesList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileHeartrateSummariesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\HeartRateSummary[]**](../Model/HeartRateSummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileHeartrateSummaryList**
> \WeFitter\Client\Model\HeartRateSummary[] profileHeartrateSummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Heart Rate Summary

Presents heart rate information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileHeartrateSummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileHeartrateSummaryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\HeartRateSummary[]**](../Model/HeartRateSummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileHeightList**
> \WeFitter\Client\Model\Height[] profileHeightList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Height

Lists changes in height for the profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileHeightList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileHeightList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\Height[]**](../Model/Height.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileList**
> \WeFitter\Client\Model\InlineResponse2002 profileList($search, $limit, $offset)

List Profiles

Lists all available profiles

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

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | A search term.
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.

try {
    $result = $apiInstance->profileList($search, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| A search term. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]
 **offset** | **int**| The initial index from which to return the results. | [optional]

### Return type

[**\WeFitter\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilePartialUpdate**
> \WeFitter\Client\Model\ProfileDetail profilePartialUpdate($body, $public_id)

Partial Update

Performs a partial update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileDetail(); // \WeFitter\Client\Model\ProfileDetail | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profilePartialUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profilePartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileDetail**](../Model/ProfileDetail.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileDetail**](../Model/ProfileDetail.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileRead**
> \WeFitter\Client\Model\ProfileDetail profileRead($public_id)

Get Profile

Gets a single profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileDetail**](../Model/ProfileDetail.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileRegisterPushNotificationsDelete**
> profileRegisterPushNotificationsDelete($public_id, $device_identifier)

Remove a push notification registration

Remove a registration for an app on a device to receive push notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 
$device_identifier = "device_identifier_example"; // string | Unique identifier for the device

try {
    $apiInstance->profileRegisterPushNotificationsDelete($public_id, $device_identifier);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileRegisterPushNotificationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |
 **device_identifier** | **string**| Unique identifier for the device |

### Return type

void (empty response body)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileRegisterPushNotificationsUpdate**
> \WeFitter\Client\Model\FCMToken profileRegisterPushNotificationsUpdate($body, $public_id)

Add push notification registration

Register an app on a device to receive push notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\FCMToken(); // \WeFitter\Client\Model\FCMToken | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileRegisterPushNotificationsUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileRegisterPushNotificationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\FCMToken**](../Model/FCMToken.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\FCMToken**](../Model/FCMToken.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileSleepSummariesList**
> \WeFitter\Client\Model\SleepSummary[] profileSleepSummariesList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

DEPRECATED: Sleep Summary - Use /sleep_summary/ instead.

Provides summarized sleep data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileSleepSummariesList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileSleepSummariesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\SleepSummary[]**](../Model/SleepSummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileSleepSummaryList**
> \WeFitter\Client\Model\SleepSummary[] profileSleepSummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Sleep Summary

Provides summarized sleep data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileSleepSummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileSleepSummaryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\SleepSummary[]**](../Model/SleepSummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileStressSamplesList**
> \WeFitter\Client\Model\StressSample[] profileStressSamplesList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Stress Sample

Presents stress samples.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileStressSamplesList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileStressSamplesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\StressSample[]**](../Model/StressSample.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileStressSummaryList**
> \WeFitter\Client\Model\StressSummary[] profileStressSummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Stress Summary

Presents stress summaries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileStressSummaryList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileStressSummaryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\StressSummary[]**](../Model/StressSummary.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileUpdate**
> \WeFitter\Client\Model\ProfileDetail profileUpdate($body, $public_id)

Update profile

Updates the specified profile, excluding ID, team and public id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileDetail(); // \WeFitter\Client\Model\ProfileDetail | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->profileUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileDetail**](../Model/ProfileDetail.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileDetail**](../Model/ProfileDetail.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileWeightList**
> \WeFitter\Client\Model\Weight[] profileWeightList($profile_public_id, $cursor, $page_size, $date_start, $date_end)

Weight

Lists changes in weight for the profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.

try {
    $result = $apiInstance->profileWeightList($profile_public_id, $cursor, $page_size, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileWeightList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]

### Return type

[**\WeFitter\Client\Model\Weight[]**](../Model/Weight.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileWorkoutList**
> \WeFitter\Client\Model\Workout[] profileWorkoutList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate)

Workout

Lists workouts associated with the profile. Used to be known as Activity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_public_id = "profile_public_id_example"; // string | 
$cursor = "cursor_example"; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.
$date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lower bound of date or timestamp.
$date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Upper bound of date or timestamp.
$deduplicate = true; // bool | If set to true, duplicates will be aggregated.

try {
    $result = $apiInstance->profileWorkoutList($profile_public_id, $cursor, $page_size, $date_start, $date_end, $deduplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->profileWorkoutList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_public_id** | **string**|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **date_start** | **\DateTime**| Lower bound of date or timestamp. | [optional]
 **date_end** | **\DateTime**| Upper bound of date or timestamp. | [optional]
 **deduplicate** | **bool**| If set to true, duplicates will be aggregated. | [optional]

### Return type

[**\WeFitter\Client\Model\Workout[]**](../Model/Workout.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

