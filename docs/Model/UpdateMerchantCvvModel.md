# # UpdateMerchantCvvModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_match** | **string** | Accept (T) transactions for which CV service reports code matches. | [optional]
**accept_no_match** | **string** | Accept (T) transactions for which CV service reports code does not match. | [optional]
**accept_not_processed** | **string** | Accept (T) transactions not processed through CV service. | [optional]
**accept_not_present** | **string** | Accept (T) transactions for which CV service reports code not provided. | [optional]
**accept_no_data_from_issuer** | **string** | Accept (T) transactions for which CV service reports no code provided from issuing bank for card number. | [optional]
**accept_unrecognized_code** | **string** | Accept (T) transactions for which CV service returns unrecognized result. | [optional]
**accept_no_data** | **string** | Accept (T) transactions for which CV service returns no result. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
