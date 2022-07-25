# DCarbone\ParagonSolutionsPHPSDK\TicketApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2CloudposTicketByTicketIdGet()**](TicketApi.md#v2CloudposTicketByTicketIdGet) | **GET** /v2/cloudpos/ticket/{ticket_id} | Get a Ticket by ID
[**v2CloudposTicketOpenGet()**](TicketApi.md#v2CloudposTicketOpenGet) | **GET** /v2/cloudpos/ticket/open | Get Open Tickets
[**v2CloudposTicketPost()**](TicketApi.md#v2CloudposTicketPost) | **POST** /v2/cloudpos/ticket | Create a Ticket
[**v2CloudposTicketReceiptByPaymentReferenceNumberGet()**](TicketApi.md#v2CloudposTicketReceiptByPaymentReferenceNumberGet) | **GET** /v2/cloudpos/ticket/receipt/{payment_reference_number} | Get Receipt Data
[**v2CloudposTicketStatusGet()**](TicketApi.md#v2CloudposTicketStatusGet) | **GET** /v2/cloudpos/ticket/status | Get Tickets by Status
[**v2CloudposTicketStatusPatch()**](TicketApi.md#v2CloudposTicketStatusPatch) | **PATCH** /v2/cloudpos/ticket/status | Update a Ticket Status
[**v2CloudposTicketTicketreportByMerchantKeyPost()**](TicketApi.md#v2CloudposTicketTicketreportByMerchantKeyPost) | **POST** /v2/cloudpos/ticket/ticketreport/{merchant_key} | Generate Ticket Report


## `v2CloudposTicketByTicketIdGet()`

```php
v2CloudposTicketByTicketIdGet($ticket_id, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketResponseModel
```

Get a Ticket by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_id = 56; // int | Gateway Ticket ID
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2CloudposTicketByTicketIdGet($ticket_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketByTicketIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**| Gateway Ticket ID |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketResponseModel**](../Model/GetTicketResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CloudposTicketOpenGet()`

```php
v2CloudposTicketOpenGet($authorization, $get_ticket): \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketResponseModel
```

Get Open Tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$get_ticket = new \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketRequestModel

try {
    $result = $apiInstance->v2CloudposTicketOpenGet($authorization, $get_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketOpenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **get_ticket** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketRequestModel**](../Model/GetTicketRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketResponseModel**](../Model/GetTicketResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CloudposTicketPost()`

```php
v2CloudposTicketPost($authorization, $create_ticket): \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTicketResponseModel
```

Create a Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$create_ticket = new \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTicketRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CreateTicketRequestModel

try {
    $result = $apiInstance->v2CloudposTicketPost($authorization, $create_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **create_ticket** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateTicketRequestModel**](../Model/CreateTicketRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CreateTicketResponseModel**](../Model/CreateTicketResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CloudposTicketReceiptByPaymentReferenceNumberGet()`

```php
v2CloudposTicketReceiptByPaymentReferenceNumberGet($payment_reference_number, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetReceiptResponseModel
```

Get Receipt Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_reference_number = 56; // int | Gateway PNREF
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2CloudposTicketReceiptByPaymentReferenceNumberGet($payment_reference_number, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketReceiptByPaymentReferenceNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_reference_number** | **int**| Gateway PNREF |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetReceiptResponseModel**](../Model/GetReceiptResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CloudposTicketStatusGet()`

```php
v2CloudposTicketStatusGet($authorization, $get_ticket): \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketResponseModel
```

Get Tickets by Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$get_ticket = new \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketRequestModel

try {
    $result = $apiInstance->v2CloudposTicketStatusGet($authorization, $get_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **get_ticket** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketRequestModel**](../Model/GetTicketRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetTicketResponseModel**](../Model/GetTicketResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CloudposTicketStatusPatch()`

```php
v2CloudposTicketStatusPatch($authorization, $update_ticketstatus): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTicketStatusResponseModel
```

Update a Ticket Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$update_ticketstatus = new \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTicketStatusRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTicketStatusRequestModel

try {
    $result = $apiInstance->v2CloudposTicketStatusPatch($authorization, $update_ticketstatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketStatusPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **update_ticketstatus** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTicketStatusRequestModel**](../Model/UpdateTicketStatusRequestModel.md)|  |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateTicketStatusResponseModel**](../Model/UpdateTicketStatusResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CloudposTicketTicketreportByMerchantKeyPost()`

```php
v2CloudposTicketTicketreportByMerchantKeyPost($authorization, $filter_by, $order_by, $skip, $top, $merchant_key): \DCarbone\ParagonSolutionsPHPSDK\Model\TicketReportResponseModel
```

Generate Ticket Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$filter_by = new \DCarbone\ParagonSolutionsPHPSDK\Model\TicketReportRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\TicketReportRequestModel | Report filter criteria
$order_by = 'order_by_example'; // string | Order by field  Currently supported:       ticket_create_date, payment_reference_number, auth_amount, ticket_id  Note: Add ' ASC' or ' DESC' after the field to sort ascending or descending. (Ex: ticket_id ASC)  Note: Only one (1) field can be used to sort the results
$skip = 56; // int | Number of records to skip prior to returning result set.
$top = 56; // int | Select from top n number of records
$merchant_key = 'merchant_key_example'; // string | Gateway merchant key

try {
    $result = $apiInstance->v2CloudposTicketTicketreportByMerchantKeyPost($authorization, $filter_by, $order_by, $skip, $top, $merchant_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->v2CloudposTicketTicketreportByMerchantKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **filter_by** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\TicketReportRequestModel**](../Model/TicketReportRequestModel.md)| Report filter criteria |
 **order_by** | **string**| Order by field  Currently supported:       ticket_create_date, payment_reference_number, auth_amount, ticket_id  Note: Add &#39; ASC&#39; or &#39; DESC&#39; after the field to sort ascending or descending. (Ex: ticket_id ASC)  Note: Only one (1) field can be used to sort the results | [optional]
 **skip** | **int**| Number of records to skip prior to returning result set. | [optional]
 **top** | **int**| Select from top n number of records | [optional]
 **merchant_key** | **string**| Gateway merchant key | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\TicketReportResponseModel**](../Model/TicketReportResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
