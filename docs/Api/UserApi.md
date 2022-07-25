# DCarbone\ParagonSolutionsPHPSDK\UserApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2UserPost()**](UserApi.md#v2UserPost) | **POST** /v2/user | Create A User


## `v2UserPost()`

```php
v2UserPost($authorization, $add_user): \DCarbone\ParagonSolutionsPHPSDK\Model\AddUserResponseModel
```

Create A User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$add_user = new \DCarbone\ParagonSolutionsPHPSDK\Model\AddUserRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\AddUserRequestModel

try {
    $result = $apiInstance->v2UserPost($authorization, $add_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v2UserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **add_user** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\AddUserRequestModel**](../Model/AddUserRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\AddUserResponseModel**](../Model/AddUserResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
