# DCarbone\ParagonSolutionsPHPSDK\TransactionsApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2TransactionByPaymentReferenceNumberReceiptPost()**](TransactionsApi.md#v2TransactionByPaymentReferenceNumberReceiptPost) | **POST** /v2/transaction/{payment_reference_number}/receipt | Send a receipt of a previously processed transaction
[**v2TransactionsByPaymentReferenceNumberGet()**](TransactionsApi.md#v2TransactionsByPaymentReferenceNumberGet) | **GET** /v2/transactions/{payment_reference_number} | Obtain details of a processed transaction.
[**v2TransactionsPost()**](TransactionsApi.md#v2TransactionsPost) | **POST** /v2/transactions | Creates a transaction that you would like to process.


## `v2TransactionByPaymentReferenceNumberReceiptPost()`

```php
v2TransactionByPaymentReferenceNumberReceiptPost($payment_reference_number, $authorization, $body): \DCarbone\ParagonSolutionsPHPSDK\Model\TransactionReceiptResponse
```

Send a receipt of a previously processed transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_reference_number = 56; // int
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$body = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTransactionReceiptModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTransactionReceiptModel

try {
    $result = $apiInstance->v2TransactionByPaymentReferenceNumberReceiptPost($payment_reference_number, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v2TransactionByPaymentReferenceNumberReceiptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_reference_number** | **int**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **body** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateTransactionReceiptModel**](../Model/CreateTransactionReceiptModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\TransactionReceiptResponse**](../Model/TransactionReceiptResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TransactionsByPaymentReferenceNumberGet()`

```php
v2TransactionsByPaymentReferenceNumberGet($payment_reference_number, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\TransactionResponse
```

Obtain details of a processed transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_reference_number = 56; // int
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2TransactionsByPaymentReferenceNumberGet($payment_reference_number, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v2TransactionsByPaymentReferenceNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_reference_number** | **int**|  |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2TransactionsPost()`

```php
v2TransactionsPost($authorization, $create_transactions): \DCarbone\ParagonSolutionsPHPSDK\Model\TransactionResponse
```

Creates a transaction that you would like to process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$create_transactions = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTransactionsModelV2(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTransactionsModelV2

try {
    $result = $apiInstance->v2TransactionsPost($authorization, $create_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v2TransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **create_transactions** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateTransactionsModelV2**](../Model/CreateTransactionsModelV2.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
