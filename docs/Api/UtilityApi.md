# DCarbone\ParagonSolutionsPHPSDK\UtilityApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2UtilityPost()**](UtilityApi.md#v2UtilityPost) | **POST** /v2/utility | Performs various utility processes: Currently supported, bin lookup.


## `v2UtilityPost()`

```php
v2UtilityPost($authorization, $util_request): \DCarbone\ParagonSolutionsPHPSDK\Model\UtilityResponseModel
```

Performs various utility processes: Currently supported, bin lookup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\UtilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$util_request = new \DCarbone\ParagonSolutionsPHPSDK\Model\UtilityRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\UtilityRequestModel

try {
    $result = $apiInstance->v2UtilityPost($authorization, $util_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilityApi->v2UtilityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **util_request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UtilityRequestModel**](../Model/UtilityRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UtilityResponseModel**](../Model/UtilityResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
