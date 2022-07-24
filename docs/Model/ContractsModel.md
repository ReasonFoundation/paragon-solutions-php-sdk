# # ContractsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_key** | **string** | Unique identifier for Customer assigned by Paragon platform | [optional]
**payment_info_key** | **string** | Unique Identifier assigned to a Checking Account or Credit Card payment method(by Paragon platform).  Required for TransType&#x3D; ADD and UPDATE;  Not used for TransType &#x3D;DELETE | [optional]
**payment_type** | **string** | Type of payment for method (CC - Credit Card, CK - Check).  Required for TransType&#x3D; ADD and UPDATE;  Not used for TransType &#x3D;DELETE. | [optional]
**contract_id** | **string** | Unique identifier assigned by Merchant to the Recurring Payment Agreement between Merchant and Customer.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**contract_name** | **string** | Description for Recurring Payment Agreement | [optional]
**bill_amount** | **string** | Sales amount for each recurring payment.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**tax_amount** | **string** | Tax amount (for each payment) | [optional]
**total_amount** | **string** | Total (Sales + Tax) amount (for each payment).  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**start_date** | **string** | Date of first payment (MM/DD/YYYY).  Required for TransType &#x3D; ADD and UPDATE;  Optional for TransType &#x3D; DELETE. | [optional]
**end_date** | **string** | Date of termination for Recurring Payment Agreement(MM/DD/YYYY).  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**next_bill_date** | **string** | Date of first payment (MM/DD/YYYY).  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**billing_period** | **string** | Unit (DAY, WEEK, MONTH, YEAR) for billing time period.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE.  Note that the minimum BillingPeriod for FirstACH is WEEK | [optional]
**billing_interval** | **string** | Number of periods (1, 2, 4, 14, 21, 28) between payments - used in combination with BillingPeriod.  Required for TransType&#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**max_failures** | **string** | Maximum number (0-10) of attempts for Paragon platform to reprocess failed payments.  The value of MaxFailures treated as zero if no value is provided for Recurring Payment Agreement. | [optional]
**failure_interval** | **string** | Indicates the interval (1-28) after which the failed payment will be retied.  The value of FailureInterval treated as one if no value is provided for Recurring Payment Agreement. | [optional]
**email_customer** | **string** | Send (TRUE) electronic mail message to Customer when an attempted payment is successful. | [optional]
**email_merchant** | **string** | Send (TRUE) electronic mail message to Merchant when an attempted payment is successful. | [optional]
**email_customer_failure** | **string** | Send (TRUE) electronic mail message to Merchant when an attempted payment is unsuccessful. | [optional]
**email_merchant_failure** | **string** | Send (True) electronic mail message to Merchant when an attempted payment is unsuccessful. | [optional]
**status** | **string** | Paragon platform to evaluate Recurring Payment Agreement each day to determine whether(ACTIVE) or not (INACTIVE, CLOSED) a payment to be processed or reprocessed(PENDING). | [optional]
**failure_retry_result_code** | **string** | Collection of result code values from unsuccessful payment attempts for Paragon platform to reprocess automatically. | [optional]
**max_billing_cycle_retry** | **string** | The number of times a suspended contract will be reconsidered for activation by Paragon platform. | [optional]
**clone_tokens** | **string** | Use this tag with value of TRUE only when Token Sharing is enabled for the reseller and the Merchant wants to clone the customer and payment information to create the contract. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
