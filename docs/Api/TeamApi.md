# WeFitter\Client\TeamApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamCreate**](TeamApi.md#teamcreate) | **POST** /team/ | Create Team
[**teamDelete**](TeamApi.md#teamdelete) | **DELETE** /team/{public_id}/ | Deletes a Team
[**teamList**](TeamApi.md#teamlist) | **GET** /team/ | List Teams
[**teamMemberCreate**](TeamApi.md#teammembercreate) | **POST** /team/{public_id}/member/ | Add member
[**teamMemberDelete**](TeamApi.md#teammemberdelete) | **DELETE** /team/{public_id}/member/ | Remove member
[**teamMemberUpdate**](TeamApi.md#teammemberupdate) | **PUT** /team/{public_id}/member/ | Add member
[**teamMembersCreate**](TeamApi.md#teammemberscreate) | **POST** /team/{public_id}/members/ | Add members
[**teamMembersUpdate**](TeamApi.md#teammembersupdate) | **PUT** /team/{public_id}/members/ | Add members
[**teamPartialUpdate**](TeamApi.md#teampartialupdate) | **PATCH** /team/{public_id}/ | Partial Edit a Team
[**teamRead**](TeamApi.md#teamread) | **GET** /team/{public_id}/ | Team
[**teamRemoveMembers**](TeamApi.md#teamremovemembers) | **POST** /team/{public_id}/remove_members/ | Remove members
[**teamUpdate**](TeamApi.md#teamupdate) | **PUT** /team/{public_id}/ | Edit Team

# **teamCreate**
> \WeFitter\Client\Model\TeamDetail teamCreate($body)

Create Team

Creates a new team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\TeamDetail(); // \WeFitter\Client\Model\TeamDetail | 

try {
    $result = $apiInstance->teamCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)|  |

### Return type

[**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamDelete**
> teamDelete($public_id)

Deletes a Team

Deletes an existing team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $apiInstance->teamDelete($public_id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamList**
> \WeFitter\Client\Model\InlineResponse2003 teamList($limit, $offset)

List Teams

List all available teams

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.

try {
    $result = $apiInstance->teamList($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of results to return per page. | [optional]
 **offset** | **int**| The initial index from which to return the results. | [optional]

### Return type

[**\WeFitter\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberCreate**
> \WeFitter\Client\Model\ProfileAsProfilePublicId teamMemberCreate($body, $public_id)

Add member

Add member to a team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileAsProfilePublicId(); // \WeFitter\Client\Model\ProfileAsProfilePublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamMemberCreate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamMemberCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileAsProfilePublicId**](../Model/ProfileAsProfilePublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileAsProfilePublicId**](../Model/ProfileAsProfilePublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberDelete**
> teamMemberDelete($public_id, $profile)

Remove member

Remove a member from the team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 
$profile = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A profile public_id is expected

try {
    $apiInstance->teamMemberDelete($public_id, $profile);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamMemberDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberUpdate**
> \WeFitter\Client\Model\ProfileAsProfilePublicId teamMemberUpdate($body, $public_id)

Add member

Add member to a team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfileAsProfilePublicId(); // \WeFitter\Client\Model\ProfileAsProfilePublicId | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamMemberUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamMemberUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfileAsProfilePublicId**](../Model/ProfileAsProfilePublicId.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfileAsProfilePublicId**](../Model/ProfileAsProfilePublicId.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersCreate**
> \WeFitter\Client\Model\ProfilePublicIdsList teamMembersCreate($body, $public_id)

Add members

Add members to a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfilePublicIdsList(); // \WeFitter\Client\Model\ProfilePublicIdsList | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamMembersCreate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamMembersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfilePublicIdsList**](../Model/ProfilePublicIdsList.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfilePublicIdsList**](../Model/ProfilePublicIdsList.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersUpdate**
> \WeFitter\Client\Model\ProfilePublicIdsList teamMembersUpdate($body, $public_id)

Add members

Add members to a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfilePublicIdsList(); // \WeFitter\Client\Model\ProfilePublicIdsList | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamMembersUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamMembersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfilePublicIdsList**](../Model/ProfilePublicIdsList.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfilePublicIdsList**](../Model/ProfilePublicIdsList.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamPartialUpdate**
> \WeFitter\Client\Model\TeamDetail teamPartialUpdate($body, $public_id)

Partial Edit a Team

Creates a new team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\TeamDetail(); // \WeFitter\Client\Model\TeamDetail | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamPartialUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamRead**
> \WeFitter\Client\Model\TeamDetail teamRead($public_id)

Team

Get a single team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamRead($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamRemoveMembers**
> \WeFitter\Client\Model\ProfilePublicIdsList teamRemoveMembers($body, $public_id)

Remove members

Remove members from the team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAdmin
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\ProfilePublicIdsList(); // \WeFitter\Client\Model\ProfilePublicIdsList | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamRemoveMembers($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamRemoveMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\ProfilePublicIdsList**](../Model/ProfilePublicIdsList.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\ProfilePublicIdsList**](../Model/ProfilePublicIdsList.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamUpdate**
> \WeFitter\Client\Model\TeamDetail teamUpdate($body, $public_id)

Edit Team

Creates a new team

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

$apiInstance = new WeFitter\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WeFitter\Client\Model\TeamDetail(); // \WeFitter\Client\Model\TeamDetail | 
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->teamUpdate($body, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)|  |
 **public_id** | **string**|  |

### Return type

[**\WeFitter\Client\Model\TeamDetail**](../Model/TeamDetail.md)

### Authorization

[BearerAdmin](../../README.md#BearerAdmin), [BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

