# # AvsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_exact_match** | **string** | Accept (T) transactions for which AV service reports exact match. | [optional]
**accept_zip_only** | **string** | Accept (T) transactions for which AV service reports ZIP Code match only. | [optional]
**accept_address_only** | **string** | Accept (T) transactions for which AV service reports only Address line match. | [optional]
**accept_no_match** | **string** | Accept (T) transactions for which AV service reports no Address match. | [optional]
**accept_verification_unavailable** | **string** | Accept (T) transactions for which AV service reports Address verification service not available. | [optional]
**accept_issuer_unavailable** | **string** | Accept (T) transactions for which AV service reports Address verification service not available. | [optional]
**accept_service_unsupported** | **string** | Accept (T) transactions for which AV service reports Address verification is not supported by process. | [optional]
**accept_invalid_address_zip** | **string** | Accept (T) transactions for which AV service reports formats of address and ZIP code are invalid. | [optional]
**accept_address_not_verifiable** | **string** | Accept (T) transactions for which AV service reports Address not verifiable. | [optional]
**accept_address_not_verifiable_global** | **string** | Accept (T) transactions for which global AV service reports Address is not verifiable. | [optional]
**accept_unrecognized_code** | **string** | Accept (T) transactions for which AV service returns unrecognized result. | [optional]
**accept_no_data** | **string** | Accept (T) transactions for which AV service returns no result. | [optional]
**accept_not_requested** | **string** | Accept (T) transactions for which AV was not requested. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
