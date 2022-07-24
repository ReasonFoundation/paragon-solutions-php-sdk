# # CardAdminReportRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_rows** | **int** |  | [optional]
**card_account_updates_key** | **string** | Unique identifier for each update assigned by the Paragon Platform | [optional]
**update_receive_date** | **string** | Date/Time of Update (UTC) | [optional]
**customer_name** | **string** | Customer Name | [optional]
**customer_key** | **string** | Customer key  Note: Unique identifier for the customer assigned by the Paragon Platform | [optional]
**customer_id** | **string** | Customer ID assigned by the Merchant | [optional]
**card_info_key** | **string** | Card info key   Note: Unique identifier for the card in the Paragon Platform | [optional]
**card_type** | **string** | Type of Payment | [optional]
**name_on_card** | **string** | Cardholder&#39;s name on card | [optional]
**previous_account_number** | **string** | Previous primary account number before the update (Last 4 only) | [optional]
**previous_expiration_date** | **string** | Previous expiration date before the update (MMYY) | [optional]
**new_account_number** | **string** | New primary account number after the update (Last 4 only) | [optional]
**new_expiration_date** | **string** | New expiration date after the update (MMYY) | [optional]
**reason_code** | **string** | Update reason code  Common Reason Code values:       200 &#x3D; No update       201 &#x3D; Expiration Date update       202 &#x3D; Account Number update       203 &#x3D; Account closed       204 &#x3D; Account closed, call cardholder       For a complete list of supported reason codes, please refer to the Card Account Updater user guide. | [optional]
**reason_code_text** | **string** | Update reason code description | [optional]
**is_active** | **string** | Indicates if values returned are active account within list of stored card values (&#39;true&#39; or &#39;false&#39;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
