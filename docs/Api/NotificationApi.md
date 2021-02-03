# WeFitter\Client\NotificationApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationSendToAllCreate**](NotificationApi.md#notificationsendtoallcreate) | **POST** /notification/send_to_all/ | Notification to all profiles in app
[**notificationSendToProfilesCreate**](NotificationApi.md#notificationsendtoprofilescreate) | **POST** /notification/send_to_profiles/ | Notification to specific profiles

# **notificationSendToAllCreate**
> \WeFitter\Client\Model\Notification notificationSendToAllCreate($body)

Notification to all profiles in app

Send a notification to all registered devices in the app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\Notification(); // \WeFitter\Client\Model\Notification | 

try {
    $result = $apiInstance->notificationSendToAllCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notificationSendToAllCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\Notification**](../Model/Notification.md)|  |

### Return type

[**\WeFitter\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationSendToProfilesCreate**
> \WeFitter\Client\Model\NotificationForProfiles notificationSendToProfilesCreate($body)

Notification to specific profiles

Send a notification to all registered devices for the specified profiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\NotificationForProfiles(); // \WeFitter\Client\Model\NotificationForProfiles | 

try {
    $result = $apiInstance->notificationSendToProfilesCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notificationSendToProfilesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\NotificationForProfiles**](../Model/NotificationForProfiles.md)|  |

### Return type

[**\WeFitter\Client\Model\NotificationForProfiles**](../Model/NotificationForProfiles.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

