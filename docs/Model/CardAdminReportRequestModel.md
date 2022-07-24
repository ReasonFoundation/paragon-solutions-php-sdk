# # CardAdminReportRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **string** | Filter by start date where update_receive_date &amp;gt;&#x3D; start_date  Format: YYYY-MM-DD |
**end_date** | **string** |  | [optional]
**card_type** | **string** | Filter by card type  Values: AMEX, DISCOVER, VISA, MASTERCARD  Note: Seperate multiple values with a comma (Ex. VISA, MASTERCARD) to filter by multiple card types | [optional]
**contract_key** | **string** | Filter by contract key  Note: Unique identifier for the contract assigned by the Paragon Platform | [optional]
**customer_key** | **string** | Filter by customer key  Note: Unique identifier for the customer assigned by the Paragon Platform | [optional]
**customer_id** | **string** | Filter by customer id assigned by the merchant | [optional]
**card_info_key** | **string** | Filter by card info key   Note: Unique identifier for the card assigned by the Paragon Platform | [optional]
**name_on_card** | **string** | Filter by cardholder&#39;s name on card | [optional]
**account_number** | **string** | The Primary Account Number(PAN) uniquely identifies the issuer and cardholder account | [optional]
**reason_code** | **string** | Filter by update reason code  Note: Seperate multiple reason codes with a comma (Ex. 201, 202) to filter by multiple update reason codes  Common Reason Code values:      200 &#x3D; No update      201 &#x3D; Expiration Date update      202 &#x3D; Account Number update      203 &#x3D; Account closed      204 &#x3D; Account closed, call cardholder      For a complete list of supported reason codes, please refer to the Card Account Updater user guide. | [optional]
**exclude_inactive** | **string** | Exclude inactive tokens from the results (&#39;true&#39; or &#39;false&#39;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
