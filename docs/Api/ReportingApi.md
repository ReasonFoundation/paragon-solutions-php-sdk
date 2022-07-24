# DCarbone\ParagonSolutionsPHPSDK\ReportingApi

All URIs are relative to https://stage.paragonsolutions.com/api/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2ReportingTransactionsCardPost()**](ReportingApi.md#v2ReportingTransactionsCardPost) | **POST** /v2/reporting/transactions/card | Obtain details of processed card transaction(s).
[**v2ReportingTransactionsCashPost()**](ReportingApi.md#v2ReportingTransactionsCashPost) | **POST** /v2/reporting/transactions/cash | Obtain details of processed cash transaction(s).
[**v2ReportingTransactionsCheckPost()**](ReportingApi.md#v2ReportingTransactionsCheckPost) | **POST** /v2/reporting/transactions/check | Obtain details of processed check transaction(s).


## `v2ReportingTransactionsCardPost()`

```php
v2ReportingTransactionsCardPost($authorization, $skip, $top, $order_by, $card_request): \DCarbone\ParagonSolutionsPHPSDK\Model\CardTransactionReportResponse
```

Obtain details of processed card transaction(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$skip = 'skip_example'; // string | Number of transactions to skip prior to returning transaction info.
$top = 'top_example'; // string | Select from top n number of transactions
$order_by = 'order_by_example'; // string | Order by 1 field: currently supported:   payment_reference_number ,payment_id, transaction_type, or result_code  Add ;ASC or ;DESC after the field to sort ascending or descending.  EX: sale ; ASC
$card_request = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateCardTransactionReportModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateCardTransactionReportModel

try {
    $result = $apiInstance->v2ReportingTransactionsCardPost($authorization, $skip, $top, $order_by, $card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->v2ReportingTransactionsCardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **skip** | **string**| Number of transactions to skip prior to returning transaction info. | [optional]
 **top** | **string**| Select from top n number of transactions | [optional]
 **order_by** | **string**| Order by 1 field: currently supported:   payment_reference_number ,payment_id, transaction_type, or result_code  Add ;ASC or ;DESC after the field to sort ascending or descending.  EX: sale ; ASC | [optional]
 **card_request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateCardTransactionReportModel**](../Model/CreateCardTransactionReportModel.md)|  | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CardTransactionReportResponse**](../Model/CardTransactionReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ReportingTransactionsCashPost()`

```php
v2ReportingTransactionsCashPost($authorization, $cash_request, $skip, $top, $order_by): \DCarbone\ParagonSolutionsPHPSDK\Model\CashTransactionReportResponse
```

Obtain details of processed cash transaction(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$cash_request = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateCashTransactionReportModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateCashTransactionReportModel
$skip = 'skip_example'; // string | Number of transactions to skip prior to returning transaction info.
$top = 'top_example'; // string | Select from top n number of transactions
$order_by = 'order_by_example'; // string | Order by 1 field: currently supported:   payment_reference_number ,payment_id, transaction_type, or result_code  Add ;ASC or ;DESC after the field to sort ascending or descending.  EX: sale ; ASC

try {
    $result = $apiInstance->v2ReportingTransactionsCashPost($authorization, $cash_request, $skip, $top, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->v2ReportingTransactionsCashPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **cash_request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateCashTransactionReportModel**](../Model/CreateCashTransactionReportModel.md)|  |
 **skip** | **string**| Number of transactions to skip prior to returning transaction info. | [optional]
 **top** | **string**| Select from top n number of transactions | [optional]
 **order_by** | **string**| Order by 1 field: currently supported:   payment_reference_number ,payment_id, transaction_type, or result_code  Add ;ASC or ;DESC after the field to sort ascending or descending.  EX: sale ; ASC | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CashTransactionReportResponse**](../Model/CashTransactionReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2ReportingTransactionsCheckPost()`

```php
v2ReportingTransactionsCheckPost($authorization, $check_request, $skip, $top, $order_by): \DCarbone\ParagonSolutionsPHPSDK\Model\CheckTransactionReportResponse
```

Obtain details of processed check transaction(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$check_request = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateCheckTransactionReportModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateCheckTransactionReportModel
$skip = 'skip_example'; // string | Number of transactions to skip prior to returning transaction info.
$top = 'top_example'; // string | Select from top n number of transactions
$order_by = 'order_by_example'; // string | Order by 1 field: currently supported:   payment_reference_number ,payment_id, transaction_type, or result_code  Add ;ASC or ;DESC after the field to sort ascending or descending.  EX: sale ; ASC

try {
    $result = $apiInstance->v2ReportingTransactionsCheckPost($authorization, $check_request, $skip, $top, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->v2ReportingTransactionsCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **check_request** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateCheckTransactionReportModel**](../Model/CreateCheckTransactionReportModel.md)|  |
 **skip** | **string**| Number of transactions to skip prior to returning transaction info. | [optional]
 **top** | **string**| Select from top n number of transactions | [optional]
 **order_by** | **string**| Order by 1 field: currently supported:   payment_reference_number ,payment_id, transaction_type, or result_code  Add ;ASC or ;DESC after the field to sort ascending or descending.  EX: sale ; ASC | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CheckTransactionReportResponse**](../Model/CheckTransactionReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
