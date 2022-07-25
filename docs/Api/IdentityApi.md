# DCarbone\ParagonSolutionsPHPSDK\IdentityApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2IdentityPost()**](IdentityApi.md#v2IdentityPost) | **POST** /v2/identity | Obtain bearer tokens to perform operations on the API.


## `v2IdentityPost()`

```php
v2IdentityPost($application_user): \DCarbone\ParagonSolutionsPHPSDK\Model\IdentityResponse
```

Obtain bearer tokens to perform operations on the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_user = new \DCarbone\ParagonSolutionsPHPSDK\Model\ApplicationUserModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\ApplicationUserModel | User Credentials to generate the token.

try {
    $result = $apiInstance->v2IdentityPost($application_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->v2IdentityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_user** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ApplicationUserModel**](../Model/ApplicationUserModel.md)| User Credentials to generate the token. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
