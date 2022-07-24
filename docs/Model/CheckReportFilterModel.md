# # CheckReportFilterModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**begin_date** | **string** | Begin Date (MM/DD/YYYY)  Required Date on or after transaction settled.   MM – Month (1-12), YYYY – Year, DD – Date (01-31), h – hour (0-23), m – minute (0-59) and s – second (0-59):2016-05-10T17:00:01 | [optional]
**end_date** | **string** | End Date (MM/DD/YYYY)  Required Date on or after transaction settled.  MM – Month (1-12), YYYY – Year, DD – Date (01-31), h – hour (0-23), m – minute (0-59) and s – second (0-59):2016-05-10T17:00:01 | [optional]
**transaction_type** | **string** | Type(s) of transactions.  EX: sale,capture | [optional]
**payment_type** | **string** | Payment type  Type(s) of payment to be included in list of processed transactions.  EX: visa,amex | [optional]
**processor_type** | **string** | Processor type(s)  EX: checkout,tsys | [optional]
**user** | **string** | Paragon Payment User Name with which list of transactions were processed. | [optional]
**name_on_check** | **string** | Cardholder&#39;s name as it appears on the check. | [optional]
**amount** | **string** | $0.00 &amp;gt; Amount &amp;lt; $1,000,000.00 (DDDDDD.CC). | [optional]
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.   Optional: will ignore other filters if used | [optional]
**customer_id** | **string** | Unique identifier assigned by the merchant | [optional]
**exclude_void** | **string** | Exclude (TRUE) Voided transactions from list of settled transactions.   /// This field is Mandatory | [optional]
**check_number** | **string** | The Primary Account Number (PAN) uniquely identifies the issuer and credit cardholder account.   Required for TransType &#x3D; Auth; Sale; RepeatSale; Return; Reversal;  Optional for TransType &#x3D; Force; Void; Capture; CaptureAll. | [optional]
**result** | **string** | Numeric value returned from Paragon platform to summarize result from invoking operation | [optional]
**invoice_number** | **string** | The invoice ID that was included in the original transaction. | [optional]
**settle_flag** | **string** | Include settled (1) or unsettled (0)transactions in list of transactions. | [optional]
**settle_message** | **string** | The settlement ID or message returned from the host. | [optional]
**begin_settle_date** | **string** | Beginning of settlement date range. | [optional]
**end_settle_date** | **string** | End of settlement date range. | [optional]
**merchant_key** | **string** | Unique identifier assigned to a merchant |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
