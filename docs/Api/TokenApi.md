# WeFitter\Client\TokenApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenCreate**](TokenApi.md#tokencreate) | **POST** /token/ | Create Token

# **tokenCreate**
> \WeFitter\Client\Model\Token tokenCreate($body)

Create Token

In order to create a token, perform a POST request to this endpoint, example:<br/> <table><tbody>     <tr><td>Application ID</td><td>123</td></tr>     <tr><td>Application Secret</td><td>ABC</td></tr>     <tr><td>Authorization header format</td><td>Authorization: base64(app_id:app_secret)</td></tr>     <tr><td>Expected result</td><td>Authorization: MTIzOkFCQw==</td></tr> </tbody></table> For testing purposes, a CURL can be used: <pre> curl -X POST -H \"Authorization: Basic MTIzOkFCQw==\" https://beta.wefitter.com/api/v1.1/token/ # alternatively curl -X POST --user 123:ABC https://beta.wefitter.com/api/v1.1/token/ </pre>  The response to a successful request should look like this: <pre> {     \"bearer\": \"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOiIxNTY2NTYxMzk2IiwiaWF0IjoxNTE2MjM5MDIyfQ.14x12h5VMJjAV2kFB5cCrfFmZhryBAYGk9N-vhyDl00\" } </pre>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: Basic
$config = WeFitter\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new WeFitter\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\Token(); // \WeFitter\Client\Model\Token | 

try {
    $result = $apiInstance->tokenCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\Token**](../Model/Token.md)|  |

### Return type

[**\WeFitter\Client\Model\Token**](../Model/Token.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

