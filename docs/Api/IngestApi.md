# WeFitter\Client\IngestApi

All URIs are relative to *https://api.wefitter.com/api/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ingestCreate**](IngestApi.md#ingestcreate) | **POST** /ingest/ | Ingest

# **ingestCreate**
> ingestCreate()

Ingest

This endpoint ingests Open mHealth objects. Specifically, when submitting data to this endpoint, the request body should contain JSON that is formatted according to the [Open mHealth data point](https://www.openmhealth.org/documentation/#/schema-docs/schema-library/schemas/omh_data-point)  JSON schema (see https://json-schema.org/ for more information about JSON Schema). This schema incorporates an  [Open mHealth header](https://www.openmhealth.org/documentation/#/schema-docs/schema-library/schemas/omh_header)  and a body. This body should correspond to one of the following JSON Schemas: - [Hk Workout](https://www.openmhealth.org/documentation/#/schema-docs/schema-library/schemas/granola_hk-workout), used for sending activity data. - [Hk category sample](https://www.openmhealth.org/schemas/granola_hk-category-sample/), specifically, samples with a `category_type` of `HKCategoryTypeIdentifierSleepAnalysis`. Used for sending sleep data. - [Body Mass Index](https://www.openmhealth.org/schemas/omh_body-mass-index/) - [Body Weight](https://www.openmhealth.org/schemas/omh_body-weight/) - [Body Height](https://www.openmhealth.org/documentation/#/schema-docs/schema-library/schemas/omh_body-height) - [Wefitter Daily Summary](https://gist.githubusercontent.com/louwers/4e4580f2cebf265c11d7f3638ec95310/raw/202fc8fb9953ea88872bbc11c03ad3d3dbf5c4a6/daily-summary.json), a schema that can be used to submit daily summary data. - [Hk Workout with Heart Rate Data](https://gist.githubusercontent.com/louwers/b30f136bbcab38f17b3e61a80e786f6b/raw/e8d67e2bdd7aa6cb2d6088cc752dab2a20a1376f/hk-workout-with-heart-rate-data-1.0.json): this schema extends Hk Workout with a `heart_rate_data` property that contains an array of [heart rate](https://www.openmhealth.org/documentation/#/schema-docs/schema-library/schemas/omh_heart-rate) samples. We ingest the first samples in this array that have a [descriptive statistic](https://www.openmhealth.org/documentation/#/schema-docs/schema-library/schemas/omh_descriptive-statistic) property equal to `maxmium`, `minimum` and `average`.  An example of a valid data that can be submitted to this endpoint: ``` {    \"header\":{       \"id\":\"some-id-abc-123\",       \"creation_date_time\":\"2019-10-29T10:42:06+00:00\",       \"schema_id\":{          \"namespace\":\"wf\",          \"name\":\"daily-summary\",          \"version\":\"1.0\"       }    },    \"body\":{       \"date\":\"2019-10-29\",       \"distance\":{          \"value\":1000,          \"unit\":\"m\"       },       \"step_count\":3000,       \"kcal_burned\":{          \"value\":999,          \"unit\":\"kcal\"       }    } } ``` You should authenticate with a ProfileBearer when using this endpoint. This allows us to attach the submitted data to the correct profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerProfile
$config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WeFitter\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new WeFitter\Client\Api\IngestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ingestCreate();
} catch (Exception $e) {
    echo 'Exception when calling IngestApi->ingestCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerProfile](../../README.md#BearerProfile)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

