# # CreateTicketRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_id** | **string** | Unique terminal identifier for this merchant. |
**transaction_type** | **string** | The type of transaction you wish to create. Valid values are Auth, Sale, Force, RepeatSale, Return, Reversal, Void, Capture and CaptureAll  This field is Mandatory |
**clerk_id** | **string** |  | [optional]
**transaction_id** | **string** | Numeric value assigned by Merchant to identify a transaction (for use as alternative to Paragon platform-assigned PNRef). | [optional]
**invoice_number** | **string** | Identifier assigned by the merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**customer_key** | **string** | Unique identifier of a customer, assigned by Paragon platform.  Required for TransType &#x3D; Tokenize.  Optional for TransType &#x3D; Auth; Sale. | [optional]
**auth_amount** | **string** | $0.00 Amount $1,000,000.00 (DDDDDD.CC).  Required for TransType &#x3D; Auth; Sale; RepeatSale; Force; Return; Reversal;  Optional for TransType &#x3D; Void; Capture; CaptureAll. | [optional]
**tip_amount** | **string** | Fee (included in Amount) specified by consumer as gratuity for service performed (DDDDD.CC). | [optional]
**sales_tax_amount** | **string** | Fee (added to Amount) to cover cost of sales tax (DDDDD.CC). | [optional]
**purchase_order_number** | **string** | Required for Level 2 Transactions.  Optional for all others. | [optional]
**prompt_for_tip** | **string** | Should Terminal Prompt for Tip Entry (True/False) | [optional]
**override_duplicates** | **string** | Overide Duplicate Checking (True/False) | [optional]
**commercial_card_mode** | **string** | Commercial Card Processing Mode ( 0 &#x3D; NotSet, 1 &#x3D; No Sales Tax, 2 &#x3D; Tax Exempt ) | [optional]
**level3_details** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\Level3DetailsModel**](Level3DetailsModel.md) |  | [optional]
**original_payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.  Required for TransType &#x3D; Force; Return; Reversal; Void; Capture;  Optional for TransType &#x3D; Auth; Sale; RepeatSale; CaptureAll. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
