# # MerchantConfigModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_auto_settlement** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**enable_auto_settlement_email** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Enable (T) Paragon platform to send message to merchant when batch settled automatically is complete. | [optional]
**auto_settlement_time** | **string** | Time in which automatic settlement should run. 24 Hour Format, Ex: 17 &#x3D; 5:00 PM | [optional]
**allow_duplicate_invoice_number** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Enable (T) new invoice number to be required when multiple transactions with same payment method and amount are processed for the same time period. | [optional]
**enable_duplicate_check** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;,  Set Enable duplicate check to &#39;T&#39; if you want duplicate transactions to be flagged as duplicates. | [optional]
**require_pnref_for_refunds** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Paragon platform requires(T) unique identifier for original transaction to allow refunds or credits | [optional]
**enable_daily_transaction_summary_report_email** | **string** | Enable daily transaction summary report: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**require_invoice_number** | **string** | Require Invoice: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**require_level_2_data** | **string** | Require Level 2 data: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**collect_level_3_data** | **string** | Collect Level 3 data: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**enable_hosted_payment_page** | **string** | Enable Hosted Payments Page: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**allow_avs_cvv_filter_bypass_per_transaction** | **string** | Bypass (True) AVS/CVV verification on a per transaction basis | [optional]
**enable_fraud_control_suite** | **string** | Enable Fraud Control Suite: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**enable_card_account_updater** | **string** | Enable Card Account Updater: Valid Values: \&quot;T\&quot; or \&quot;F\&quot; | [optional]
**enable_image_capture_and_retrieval** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Enable (T) merchant to store store signatures. | [optional]
**enable_receipt_capture_and_retrieval** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Enable (T) merchant to store receipt images. | [optional]
**enable_offline_batch_tool** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Enable (T), allows the merchant to upload a flat file of transaction data for offline processing. | [optional]
**enable_transactions_via_internet** | **string** |  | [optional]
**enable_transactions_via_dial_in** | **string** |  | [optional]
**enable_bin_management_api** | **string** |  | [optional]
**enable_override_of_recurring_billing_settings** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Override (T) values provided by Merchant or API User for MaxFailure, FailureInterval, FailureResultCode and MaxBillingCycleRetry. | [optional]
**enable_expired_card_validation_bypass** | **string** | Valid Values \&quot;T\&quot; or \&quot;F\&quot;. Enable (T) Paragon platform to bypass validation of credit card expiration date. | [optional]
**has_email_receipts_access** | **string** | Has access to email receipts: Valid Values \&quot;T\&quot; or \&quot;F\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
