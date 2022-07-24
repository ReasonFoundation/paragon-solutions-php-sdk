# # CreateCashTransactionsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | The type of transaction you wish to create. Valid values are Auth, Sale, Force, RepeatSale, Return, Reversal, Void, Capture and CaptureAll  This field is Mandatory |
**amount** | **string** | $0.00 &amp;gt; Amount &amp;lt; $1,000,000.00 (DDDDDD.CC).  Required for TransType &#x3D; Auth; Sale; RepeatSale; Force; Return; Reversal;  Optional for TransType &#x3D; Void; Capture; CaptureAll. | [optional]
**invoice_number** | **string** | Identifier assigned by the merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.   Required for TransType &#x3D; Force; Return; Reversal; Void; Capture;  Optional for TransType &#x3D; Auth; Sale; RepeatSale; CaptureAll. | [optional]
**register_number** | **string** | A string that uniquely identifies the register, terminal or computer on which-the transaction was performed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
