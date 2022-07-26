# # CreateCreditCardTransactionsModelV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | The type of transaction you wish to create. Valid values are Auth, Sale, Force, RepeatSale, Return, Reversal, Void, Capture and CaptureAll  This field is Mandatory |
**card_number** | **string** | The Primary Account Number (PAN) uniquely identifies the issuer and credit cardholder account.   Required for TransType &#x3D; Auth; Sale; RepeatSale; Return; Reversal;  Optional for TransType &#x3D; Force; Void; Capture; CaptureAll. | [optional]
**expiration_date** | **string** | Expiration Date (MMYY)  Required for TransType &#x3D; Auth; Sale; RepeatSale; Return; Reversal;  Optional for TransType &#x3D; Force; Void; Capture; CaptureAll. | [optional]
**magnetic_track_data** | **string** | The data - number and expiration date - read from magnetic stripe on card.  Required when credit card presented by consumer at point of sale/service. | [optional]
**name_on_card** | **string** | Cardholder&#39;s name as it appears on the card. | [optional]
**amount** | **string** | $0.00 &amp;gt; Amount &amp;lt; $1,000,000.00 (DDDDDD.CC).  Required for TransType &#x3D; Auth; Sale; RepeatSale; Force; Return; Reversal;  Optional for TransType &#x3D; Void; Capture; CaptureAll. | [optional]
**invoice_number** | **string** | Identifier assigned by the merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.   Required for TransType &#x3D; Force; Return; Reversal; Void; Capture;  Optional for TransType &#x3D; Auth; Sale; RepeatSale; CaptureAll. | [optional]
**zip_code** | **string** | ZIP or Postal Code of cardholder&#39;s billing address. | [optional]
**street1** | **string** | House number and Street name of cardholder&#39;s billing address. | [optional]
**card_verification_number** | **string** | Credit Card Verification Number. | [optional]
**convenience_amount** | **string** | Fee (added to Amount) for utility company, government or school to recover cost of accepting credit card for payment (DDDDD.CC). | [optional]
**tip_amount** | **string** | Fee (included in Amount) specified by consumer as gratuity for service performed (DDDDD.CC). | [optional]
**customer_code** | **string** | Identifier assigned by merchant to allow payment processed by Global Payments to be traced to purchase order number. | [optional]
**purchase_order_number** | **string** | Identifier assigned by merchant to allow payment processed (by processor other than Global Payments) to be traced to purchase order number. | [optional]
**tax_amount** | **string** | Fee (added to Amount) to cover cost of sales tax (DDDDD.CC). | [optional]
**tax_exempt** | **string** | Indicates whether purchasing card qualifies for tax-exempt status. | [optional]
**level3_details** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\Level3DetailsModel**](Level3DetailsModel.md) |  | [optional]
**authorization_code** | **string** | Authorization/approval code assigned to original transaction by processor. | [optional]
**merchant_soft_descriptor** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\MerchantSoftDescriptorModel**](MerchantSoftDescriptorModel.md) |  | [optional]
**force** | **string** | Force (T) Paragon platform to accept duplicate transaction into current batch (ignored by Concord EFS processor). | [optional]
**point_to_point_encryption** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\P2PEModel**](P2PEModel.md) |  | [optional]
**custom_fields** | **array<string,string>** | User defined Custom fields for Merchant in Paragon platform.  Ex: {\&quot;customField1\&quot; : \&quot;Value\&quot;, \&quot;customField2\&quot; : \&quot;Value2\&quot;} | [optional]
**bill_payment** | **string** | Indicate (T) transaction accepted for payment on Utility Bill. | [optional]
**bypass_address_verification_and_card_value_verification** | **string** | Flag used to indicate if the Paragon platform should bypass AVS and CVV validation. | [optional]
**health_care** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\HealthcareDetailsModel**](HealthcareDetailsModel.md) |  | [optional]
**card_present** | **string** | Card presence indicator. | [optional]
**cv_presence** | **string** | Card verification provided for transaction. | [optional]
**emv_data** | **string** | Application cryptogram generated by chip requesting issuer to confirm legitimacy of card. | [optional]
**entry_mode** | **string** | Indicate how merchant obtained values from credit card, as follows:   UNKNOWN; MANUAL MagneticStripe; ICC; PROXIMITY.  Required when MagData or EMVData fields are populated. | [optional]
**external_ip** | **string** | Originating IP address to use for logging and IP filtering. | [optional]
**register_number** | **string** | A string that uniquely identifies the register, terminal, or computer on which transaction was performed. | [optional]
**sequence_count** | **string** | Total number of payments to be processed on a repeat sale or Recurring Payment Agreement. | [optional]
**sequence_number** | **string** | The order in which a payment was processed on a repeat sale or Recurring Payment Agreement. | [optional]
**server_id** | **string** | Unique identifier of Paragon platform used to process transaction. | [optional]
**transaction_id** | **string** | Numeric value assigned by Merchant to identify a transaction (for use as alternative to Paragon platform-assigned PNRef). | [optional]
**apple_pay_payment_data** | **string** | Base64 Encoded apple pay payment data. | [optional]
**google_pay_payment_data** | **string** | Base64 Encoded google pay payment data. | [optional]
**card_number_last_four_digits** | **string** | Last 4 digits of card number. | [optional]
**currency_code** | **string** | The three-letter ISO currency code | [optional]
**transactions** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ListOfTransactionModel[]**](ListOfTransactionModel.md) | A List of transactions used for multiple force captures.  Required for TransType &#x3D; forcemultiple | [optional]
**bypass_amount_format** | **string** | Flag used to indicate if the Paragon platform should bypass amount format validation | [optional]
**application_id** | **string** |  | [optional]
**primary_identification_number** | **string** | The encrypted PIN-block returned from a secure cryptographic device, such as a PIN Pad.  Required when processor requires customer to provide Personal Identification Number. | [optional]
**key_serial_number** | **string** | Serial number of PIN pad and encryption key for the transaction.  Required for online PIN debit transctions. | [optional]
**chip_condition_code** | **string** | The condition code of magnetic stripe read transactions of EMV (chip capable) cards. | [optional]
**pos_environment_indicator** | **string** | This field provides additional information about Visa transactions. | [optional]
**online_payment_cryptogram** | **string** | Base64 encoded 3D Secure authentication data | [optional]
**ecommerce_indicator** | **string** | 1-Char electronic commerce indicator | [optional]
**directory_server_transaction_id** | **string** | This field is generated by the EMV 3DS Mastercard Directory Server during authentication. | [optional]
**digital_payment_cryptogram** | **string** | This field is used for Digital Secure Remote Payment (DSRP) transactions. | [optional]
**is_merchant_initiated** | **string** | This field is used to process a Merchant Initiated transaction. | [optional]
**is_estimated_amount** | **string** | This field specifies whether the amount is an estimate. Visa transactions only. | [optional]
**clerk_id** | **string** | Clerk identifier | [optional]
**terminal_operating_environment** | **string** | Indicates the terminal&#39;s location and indicates whether it is attended by the card acceptor. | [optional]
**is_deferred_authorization** | **string** | If the merchant&#39;s Point-of-Interaction (POI) authorization system is offline and cannot process transactions, the merchant often completes the transaction with the cardholder and will then defer the authorization until their POI system is back online. | [optional]
**shipping_amount** | **string** | Fee (added to Amount) to cover cost of shipping (DDDDD.CC). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
