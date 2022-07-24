# # ListOfTransactionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.   Required for TransType &#x3D; Force; Return; Reversal; Void; Capture;  Optional for TransType &#x3D; Auth; Sale; RepeatSale; CaptureAll. | [optional]
**amount** | **string** | $0.00 &amp;gt; Amount &amp;lt; $0,000,000.00 (DDDDDD.CC).  Required for TransType &#x3D; Auth; Sale; RepeatSale; Force; Return; Reversal;  Optional for TransType &#x3D; Void; Capture; CaptureAll. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
