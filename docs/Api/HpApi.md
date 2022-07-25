# DCarbone\ParagonSolutionsPHPSDK\HpApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2HpTokenPost()**](HpApi.md#v2HpTokenPost) | **POST** /v2/hp/token | 


## `v2HpTokenPost()`

```php
v2HpTokenPost($request): \DCarbone\ParagonSolutionsPHPSDK\Model\HpTokenResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\HpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \DCarbone\ParagonSolutionsPHPSDK\Model\HpTokenRequest(); // \DCarbone\ParagonSolutionsPHPSDK\Model\HpTokenRequest

try {
    $result = $apiInstance->v2HpTokenPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HpApi->v2HpTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\HpTokenRequest**](../Model/HpTokenRequest.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\HpTokenResponse**](../Model/HpTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
