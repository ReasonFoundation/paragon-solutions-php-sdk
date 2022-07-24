# # CardDataModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_number** | **string** | The Primary Account Number (PAN) uniquely identifies the issuer and credit cardholder account.   Required for TransType &#x3D; Auth; Sale; RepeatSale; Return; Reversal;  Optional for TransType &#x3D; Force; Void; Capture; CaptureAll. |
**expiration_date** | **string** | Expiration Date (MMYY)  Required for TransType &#x3D; Auth; Sale; RepeatSale; Return; Reversal;  Optional for TransType &#x3D; Force; Void; Capture; CaptureAll. |
**name_on_card** | **string** | Cardholder&#39;s name as it appears on the card. | [optional]
**zip_code** | **string** | ZIP or Postal Code of cardholder&#39;s billing address. | [optional]
**street1** | **string** | House number and Street name of cardholder&#39;s billing address. | [optional]
**card_verification_number** | **string** | Credit Card Verification Number. | [optional]
**applepay_token** | **string** | Pass in Apple Pay token in place of card_number,expiration_date, and cvv | [optional]
**googlepay_token** | **string** | Pass in Google Pay token in place of card_number,expiration_date, and cvv | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
