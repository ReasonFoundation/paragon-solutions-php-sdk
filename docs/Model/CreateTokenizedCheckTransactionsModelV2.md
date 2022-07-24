# # CreateTokenizedCheckTransactionsModelV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**check_info_key** | **string** | Unique Identifier assigned to a Checking Account | [optional]
**hp_plus_key** | **string** | Hosted Payment Plus Key used to process transaction | [optional]
**amount** | **string** | $0.00 gt; Amount lt; $25,000.00 | [optional]
**invoice_number** | **string** | Identifier assigned by the merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**force** | **string** | Force (T) Paragon platform to accept duplicate transaction. | [optional]
**billing_frequency** | **string** | Required for FirstACH processor for first time external recurring payment.  One of: Once, Weekly, Biweekly, Monthly, Quarterly, Semiannually, Annually. | [optional]
**number_of_payments** | **string** | Required for FirstACH processor for first time external recurring payment.  1‐9998; Use 9999 for Open‐Ended Recurring Customer Payments. | [optional]
**recurring_id** | **string** | Required for FirstACH processor for external recurring payment.  RecurringID of the existing recurring Payment Series.Received in ProcessCheck response. | [optional]
**effective_date** | **string** | Required for FirstACH processor for external recurring payment.  Date of the next Customer Payment in the recurring.Recurring payments beyond the next chronologically in the series may not be created in advance.Payment series: YYYY-MM-DD. | [optional]
**transaction_type** | **string** | Required for FirstACH processor for external recurring payment.  VOID – Void an entire external recurring payment series. | [optional]
**standard_entry_class_codes_type** | **string** | Standard Entry Class codes. Required for First ACH transactions. | [optional]
**checking_account_type** | **string** | Valid Account Type: Checking, Savings. Required for TransType &#x3D; Sale; Return; Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**auth_option_form** | **string** | Signed Form authorization option.  Required for SECCType &#x3D; CCD; PPD | [optional]
**auth_option_voice** | **string** | Recorded Voice authorization option.  Required for SECCType &#x3D; TEL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
