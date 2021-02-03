# WeFitter\Client\AppApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appTotalsList**](AppApi.md#apptotalslist) | **GET** /app/totals/ | Totals

# **appTotalsList**
> \WeFitter\Client\Model\AppTotals[] appTotalsList()

Totals

Total values for calories, distance, steps, points and activity duration over all profiles in the app.

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

$apiInstance = new WeFitter\Client\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->appTotalsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appTotalsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\WeFitter\Client\Model\AppTotals[]**](../Model/AppTotals.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

