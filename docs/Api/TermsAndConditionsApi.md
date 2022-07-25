# DCarbone\ParagonSolutionsPHPSDK\TermsAndConditionsApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2TermsAndConditionsAcceptTermsAndConditionsPost()**](TermsAndConditionsApi.md#v2TermsAndConditionsAcceptTermsAndConditionsPost) | **POST** /v2/TermsAndConditions/AcceptTermsAndConditions | 
[**v2TermsAndConditionsByVersionNameCorrelationIdGet()**](TermsAndConditionsApi.md#v2TermsAndConditionsByVersionNameCorrelationIdGet) | **GET** /v2/TermsAndConditions/{versionName}/correlationId | 
[**v2TermsAndConditionsPayaConnectAcceptTermsAndConditionsPost()**](TermsAndConditionsApi.md#v2TermsAndConditionsPayaConnectAcceptTermsAndConditionsPost) | **POST** /v2/TermsAndConditions/PayaConnect/AcceptTermsAndConditions | 


## `v2TermsAndConditionsAcceptTermsAndConditionsPost()`

```php
v2TermsAndConditionsAcceptTermsAndConditionsPost($authorization, $request): \DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TermsAndConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$request = new \DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsRequest(); // \DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsRequest

try {
    $result = $apiInstance->v2TermsAndConditionsAcceptTermsAndConditionsPost($authorization, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsAndConditionsApi->v2TermsAndConditionsAcceptTermsAndConditionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsRequest**](../Model/AcceptTermsAndConditionsRequest.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsResponse**](../Model/AcceptTermsAndConditionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TermsAndConditionsByVersionNameCorrelationIdGet()`

```php
v2TermsAndConditionsByVersionNameCorrelationIdGet($authorization, $version_name): \DCarbone\ParagonSolutionsPHPSDK\Model\CorrelationIdResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TermsAndConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$version_name = 'pdf'; // string

try {
    $result = $apiInstance->v2TermsAndConditionsByVersionNameCorrelationIdGet($authorization, $version_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsAndConditionsApi->v2TermsAndConditionsByVersionNameCorrelationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **version_name** | **string**|  | [optional] [default to &#39;pdf&#39;]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CorrelationIdResponse**](../Model/CorrelationIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TermsAndConditionsPayaConnectAcceptTermsAndConditionsPost()`

```php
v2TermsAndConditionsPayaConnectAcceptTermsAndConditionsPost($authorization, $request): \DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TermsAndConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$request = new \DCarbone\ParagonSolutionsPHPSDK\Model\AcceptPayaConnectTermsAndConditionsRequest(); // \DCarbone\ParagonSolutionsPHPSDK\Model\AcceptPayaConnectTermsAndConditionsRequest

try {
    $result = $apiInstance->v2TermsAndConditionsPayaConnectAcceptTermsAndConditionsPost($authorization, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsAndConditionsApi->v2TermsAndConditionsPayaConnectAcceptTermsAndConditionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\AcceptPayaConnectTermsAndConditionsRequest**](../Model/AcceptPayaConnectTermsAndConditionsRequest.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\AcceptTermsAndConditionsResponse**](../Model/AcceptTermsAndConditionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
