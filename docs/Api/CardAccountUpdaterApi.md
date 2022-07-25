# DCarbone\ParagonSolutionsPHPSDK\CardAccountUpdaterApi

All URIs are relative to https://stage.paragonsolutions.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2CardaccountupdaterByMerchantKeyCardadminreportPost()**](CardAccountUpdaterApi.md#v2CardaccountupdaterByMerchantKeyCardadminreportPost) | **POST** /v2/cardaccountupdater/{merchant_key}/cardadminreport | Generate Detail Card Account Update Report
[**v2CardaccountupdaterByMerchantKeyGet()**](CardAccountUpdaterApi.md#v2CardaccountupdaterByMerchantKeyGet) | **GET** /v2/cardaccountupdater/{merchant_key} | Retrieve card account updater (CAU) settings for a merchant
[**v2CardaccountupdaterByMerchantKeyPut()**](CardAccountUpdaterApi.md#v2CardaccountupdaterByMerchantKeyPut) | **PUT** /v2/cardaccountupdater/{merchant_key} | Update Card Account Updater settings for a merchant


## `v2CardaccountupdaterByMerchantKeyCardadminreportPost()`

```php
v2CardaccountupdaterByMerchantKeyCardadminreportPost($merchant_key, $authorization, $filter_by, $order_by, $skip, $top): \DCarbone\ParagonSolutionsPHPSDK\Model\CardAdminReportResponseModel
```

Generate Detail Card Account Update Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CardAccountUpdaterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string | Gateway merchant key
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$filter_by = new \DCarbone\ParagonSolutionsPHPSDK\Model\CardAdminReportRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\CardAdminReportRequestModel | Report filter criteria
$order_by = 'order_by_example'; // string | Order by field  Currently supported:       update_receive_date, customer_id, card_info_key  Note: Add ' ASC' or ' DESC' after the field to sort ascending or descending. (Ex: update_receive_date ASC)  Note: Only one (1) field can be used to sort the results
$skip = 56; // int | Number of records to skip prior to returning result set.
$top = 56; // int | Select from top n number of records

try {
    $result = $apiInstance->v2CardaccountupdaterByMerchantKeyCardadminreportPost($merchant_key, $authorization, $filter_by, $order_by, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountUpdaterApi->v2CardaccountupdaterByMerchantKeyCardadminreportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**| Gateway merchant key |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **filter_by** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\CardAdminReportRequestModel**](../Model/CardAdminReportRequestModel.md)| Report filter criteria |
 **order_by** | **string**| Order by field  Currently supported:       update_receive_date, customer_id, card_info_key  Note: Add &#39; ASC&#39; or &#39; DESC&#39; after the field to sort ascending or descending. (Ex: update_receive_date ASC)  Note: Only one (1) field can be used to sort the results | [optional]
 **skip** | **int**| Number of records to skip prior to returning result set. | [optional]
 **top** | **int**| Select from top n number of records | [optional]

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\CardAdminReportResponseModel**](../Model/CardAdminReportResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CardaccountupdaterByMerchantKeyGet()`

```php
v2CardaccountupdaterByMerchantKeyGet($merchant_key, $authorization): \DCarbone\ParagonSolutionsPHPSDK\Model\GetCAUSettingsResponseModel
```

Retrieve card account updater (CAU) settings for a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CardAccountUpdaterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string | Gateway merchant key
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.

try {
    $result = $apiInstance->v2CardaccountupdaterByMerchantKeyGet($merchant_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountUpdaterApi->v2CardaccountupdaterByMerchantKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**| Gateway merchant key |
 **authorization** | **string**| JWT security token obtained from Identity Server. |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\GetCAUSettingsResponseModel**](../Model/GetCAUSettingsResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v2CardaccountupdaterByMerchantKeyPut()`

```php
v2CardaccountupdaterByMerchantKeyPut($merchant_key, $authorization, $cau_settings): \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateCAUSettingsResponseModel
```

Update Card Account Updater settings for a merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DCarbone\ParagonSolutionsPHPSDK\Api\CardAccountUpdaterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_key = 'merchant_key_example'; // string | Gateway merchant key
$authorization = 'authorization_example'; // string | JWT security token obtained from Identity Server.
$cau_settings = new \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateCAUSettingsRequestModel(); // \DCarbone\ParagonSolutionsPHPSDK\Model\UpdateCAUSettingsRequestModel | Card account updater (CAU) settings

try {
    $result = $apiInstance->v2CardaccountupdaterByMerchantKeyPut($merchant_key, $authorization, $cau_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountUpdaterApi->v2CardaccountupdaterByMerchantKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_key** | **string**| Gateway merchant key |
 **authorization** | **string**| JWT security token obtained from Identity Server. |
 **cau_settings** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateCAUSettingsRequestModel**](../Model/UpdateCAUSettingsRequestModel.md)| Card account updater (CAU) settings |

### Return type

[**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateCAUSettingsResponseModel**](../Model/UpdateCAUSettingsResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
