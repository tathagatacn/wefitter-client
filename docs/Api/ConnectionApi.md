# WeFitter\Client\ConnectionApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**connectionConnectCreate**](ConnectionApi.md#connectionconnectcreate) | **POST** /connection/{connection_slug}/connect/ | Connect wearable
[**connectionConnectDelete**](ConnectionApi.md#connectionconnectdelete) | **DELETE** /connection/{connection_slug}/connect/ | Disconnect Wearable

# **connectionConnectCreate**
> \WeFitter\Client\Model\AppConnectionUrl connectionConnectCreate($body, $connection_slug)

Connect wearable

Get OAuth URL for this connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileAsProfilePublicId(); // \WeFitter\Client\Model\ProfileAsProfilePublicId | 
$connection_slug = "connection_slug_example"; // string | 

try {
    $result = $apiInstance->connectionConnectCreate($body, $connection_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionConnectCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileAsProfilePublicId**](../Model/ProfileAsProfilePublicId.md)|  |
 **connection_slug** | **string**|  |

### Return type

[**\WeFitter\Client\Model\AppConnectionUrl**](../Model/AppConnectionUrl.md)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionConnectDelete**
> connectionConnectDelete($connection_slug, $profile)

Disconnect Wearable

Disconnect a wearables connection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_slug = "connection_slug_example"; // string | 
$profile = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A profile public_id is expected

try {
    $apiInstance->connectionConnectDelete($connection_slug, $profile);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionConnectDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_slug** | **string**|  |
 **profile** | [**string**](../Model/.md)| A profile public_id is expected |

### Return type

void (empty response body)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

