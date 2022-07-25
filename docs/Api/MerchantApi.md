# DCarbone\ParagonSolutionsPHPSDK\MerchantApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2MerchantByMerchantkeyGet()**](MerchantApi.md#v2MerchantByMerchantkeyGet) | **GET** /v2/merchant/{merchantkey} | Retrieve Merchant details
[**v2MerchantByMerchantkeyPatch()**](MerchantApi.md#v2MerchantByMerchantkeyPatch) | **PATCH** /v2/merchant/{merchantkey} | Update a merchant.
[**v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyDelete()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyDelete) | **DELETE** /v2/merchant/{merchantkey}/paymentmethod/{payment_method_profile_key} | Delete a merchant&#39;s payment method
[**v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyPatch()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyPatch) | **PATCH** /v2/merchant/{merchantkey}/paymentmethod/{payment_method_profile_key} | Update a merchant&#39;s payment method
[**v2MerchantByMerchantkeyPaymentmethodGet()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentmethodGet) | **GET** /v2/merchant/{merchantkey}/paymentmethod | Get list of merchant&#39;s payment methods
[**v2MerchantByMerchantkeyPaymentmethodPost()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentmethodPost) | **POST** /v2/merchant/{merchantkey}/paymentmethod | Add a payment method to a merchant
[**v2MerchantByMerchantkeyPaymentprofileDelete()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentprofileDelete) | **DELETE** /v2/merchant/{merchantkey}/paymentprofile | Delete a merchant&#39;s payment method from both active and inactive profiles
[**v2MerchantByMerchantkeyPaymentprofileGet()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentprofileGet) | **GET** /v2/merchant/{merchantkey}/paymentprofile | Get a merchant&#39;s complete Payment Profile
[**v2MerchantByMerchantkeyPaymentprofilePut()**](MerchantApi.md#v2MerchantByMerchantkeyPaymentprofilePut) | **PUT** /v2/merchant/{merchantkey}/paymentprofile | Update a merchant&#39;s payment profile,  This method allows you to send multiple payment methods at one time
[**v2MerchantPost()**](MerchantApi.md#v2MerchantPost) | **POST** /v2/merchant | Create a merchant.


## `v2MerchantByMerchantkeyGet()`

```php
v2MerchantByMerchantkeyGet($merchantkey, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetMerchantDetailsResponseModel
```

Retrieve Merchant details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2MerchantByMerchantkeyGet($merchantkey, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetMerchantDetailsResponseModel**](../Model/GetMerchantDetailsResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPatch()`

```php
v2MerchantByMerchantkeyPatch($merchantkey, $authorization, $update_merchant): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel
```

Update a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$update_merchant = new \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantRequestModel

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPatch($merchantkey, $authorization, $update_merchant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **update_merchant** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantRequestModel**](../Model/UpdateMerchantRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel**](../Model/UpdateMerchantResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyDelete()`

```php
v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyDelete($merchantkey, $payment_method_profile_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel
```

Delete a merchant's payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$payment_method_profile_key = 'payment_method_profile_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyDelete($merchantkey, $payment_method_profile_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **payment_method_profile_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel**](../Model/UpdateMerchantResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyPatch()`

```php
v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyPatch($merchantkey, $payment_method_profile_key, $authorization, $payment_methods): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel
```

Update a merchant's payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$payment_method_profile_key = 'payment_method_profile_key_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$payment_methods = new \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentMethodRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentMethodRequestModel

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyPatch($merchantkey, $payment_method_profile_key, $authorization, $payment_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentmethodByPaymentMethodProfileKeyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **payment_method_profile_key** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **payment_methods** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentMethodRequestModel**](../Model/PaymentMethodRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel**](../Model/UpdateMerchantResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentmethodGet()`

```php
v2MerchantByMerchantkeyPaymentmethodGet($merchantkey, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentMethodListResponseModel
```

Get list of merchant's payment methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentmethodGet($merchantkey, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentmethodGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentMethodListResponseModel**](../Model/GetPaymentMethodListResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentmethodPost()`

```php
v2MerchantByMerchantkeyPaymentmethodPost($merchantkey, $authorization, $payment_methods): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel
```

Add a payment method to a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$payment_methods = new \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentMethodRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\PaymentMethodRequestModel

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentmethodPost($merchantkey, $authorization, $payment_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentmethodPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **payment_methods** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\PaymentMethodRequestModel**](../Model/PaymentMethodRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantResponseModel**](../Model/UpdateMerchantResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentprofileDelete()`

```php
v2MerchantByMerchantkeyPaymentprofileDelete($merchantkey, $authorization, $processor_id, $payment_type_id): \DCarbone\ParagonSolutionsPHPSDK\Model\DeletePaymentProfileMethodResponseModel
```

Delete a merchant's payment method from both active and inactive profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string | Gateway Merchant ID
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$processor_id = 'processor_id_example'; // string | (Required) Supported Processor ID's are as follows: TSYS, TSYSVPN, TSYSPARAGN, FIRSTACH
$payment_type_id = 'payment_type_id_example'; // string | (Required) Supported Payment Type ID's are as follows: VISA, MASTERCARD. AMEX, DISCOVER, CARTBLANCH, JCB, JAL, DINERS, NOVUS, DEBIT, EBT, ECHECK

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentprofileDelete($merchantkey, $authorization, $processor_id, $payment_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentprofileDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**| Gateway Merchant ID |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **processor_id** | **string**| (Required) Supported Processor ID&#39;s are as follows: TSYS, TSYSVPN, TSYSPARAGN, FIRSTACH | [optional]
 **payment_type_id** | **string**| (Required) Supported Payment Type ID&#39;s are as follows: VISA, MASTERCARD. AMEX, DISCOVER, CARTBLANCH, JCB, JAL, DINERS, NOVUS, DEBIT, EBT, ECHECK | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\DeletePaymentProfileMethodResponseModel**](../Model/DeletePaymentProfileMethodResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentprofileGet()`

```php
v2MerchantByMerchantkeyPaymentprofileGet($merchantkey, $authorization, $processor_id, $profile_status): \DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentProfileResponseModel
```

Get a merchant's complete Payment Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string | Gateway Merchant ID
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$processor_id = 'processor_id_example'; // string | Supported Processor ID's are: TSYS, TSYSVPN, TSYSPARAGN, FIRSTACH.  If nothing specified, all processors returned
$profile_status = 'profile_status_example'; // string | Supported profile_status values are: active, inactive.  If nothing specified, active profile is returned

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentprofileGet($merchantkey, $authorization, $processor_id, $profile_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentprofileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**| Gateway Merchant ID |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **processor_id** | **string**| Supported Processor ID&#39;s are: TSYS, TSYSVPN, TSYSPARAGN, FIRSTACH.  If nothing specified, all processors returned | [optional]
 **profile_status** | **string**| Supported profile_status values are: active, inactive.  If nothing specified, active profile is returned | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetPaymentProfileResponseModel**](../Model/GetPaymentProfileResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantByMerchantkeyPaymentprofilePut()`

```php
v2MerchantByMerchantkeyPaymentprofilePut($merchantkey, $authorization, $payment_profile): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdatePaymentProfileResponseModel
```

Update a merchant's payment profile,  This method allows you to send multiple payment methods at one time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantkey = 'merchantkey_example'; // string
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$payment_profile = new \DCarbone\ParagonSolutionsPHPSDK\Model\UpdatePaymentProfileRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\UpdatePaymentProfileRequestModel

try {
    $result = $apiInstance->v2MerchantByMerchantkeyPaymentprofilePut($merchantkey, $authorization, $payment_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantByMerchantkeyPaymentprofilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantkey** | **string**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **payment_profile** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdatePaymentProfileRequestModel**](../Model/UpdatePaymentProfileRequestModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdatePaymentProfileResponseModel**](../Model/UpdatePaymentProfileResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2MerchantPost()`

```php
v2MerchantPost($authorization, $add_merchant): \DCarbone\ParagonSolutionsPHPSDK\Model\AddMerchantResponseModel
```

Create a merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\MerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$add_merchant = new \DCarbone\ParagonSolutionsPHPSDK\Model\AddMerchantRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\AddMerchantRequestModel

try {
    $result = $apiInstance->v2MerchantPost($authorization, $add_merchant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->v2MerchantPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **add_merchant** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\AddMerchantRequestModel**](../Model/AddMerchantRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\AddMerchantResponseModel**](../Model/AddMerchantResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
