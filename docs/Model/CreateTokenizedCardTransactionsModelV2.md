# # CreateTokenizedCardTransactionsModelV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | The type of transaction you wish to create. Valid values are Auth, Sale, Force, RepeatSale, Return, Reversal, Void, Capture and CaptureAll  This field is Mandatory |
**card_info_key** | **string** | Unique reference to a Payment Method stored in Paragon platform Card Safe. | [optional]
**hp_plus_key** | **string** | Hosted Payment Plus Key used to process transaction | [optional]
**amount** | **string** | $0.00 gt; Amount lt; $1,000,000.00 (DDDDD.CC). | [optional]
**invoice_number** | **string** | Identifier assigned by the merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.   Required for TransType &#x3D; Force; Return; Reversal; Void; Capture;  Optional for TransType &#x3D; Auth; Sale; RepeatSale; CaptureAll. | [optional]
**tip_amount** | **string** | Fee (included in Amount) specified by consumer as gratuity for service performed (DDDDD.CC). | [optional]
**customer_code** | **string** | Identifier assigned by merchant to allow payment processed by Global Payments to be traced to purchase order number. | [optional]
**purchase_order_number** | **string** | Identifier assigned by merchant to allow payment processed (by processor other than Global Payments) to be traced to purchase order number. | [optional]
**tax_amount** | **string** | Fee (added to Amount) to cover cost of sales tax (DDDDD.CC). | [optional]
**custom_fields** | **array<string,string>** | User defined Custom fields for Merchant in Paragon platform. | [optional]
**authorization_code** | **string** | Authorization/approval code assigned to original transaction by processor. | [optional]
**bill_payment** | **string** | Indicate (T) transaction accepted for payment on Utility Bill. | [optional]
**bypass_address_verification_and_card_value_verification** | **string** | Flag used to indicate if the Paragon platform should bypass AVS and CVV validation. | [optional]
**health_care** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\HealthcareDetailsModel**](HealthcareDetailsModel.md) |  | [optional]
**merchant_soft_descriptor** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\MerchantSoftDescriptorModel**](MerchantSoftDescriptorModel.md) |  | [optional]
**force** | **string** | Force (T) Paragon platform to accept duplicate transaction into current batch (ignored by Concord EFS processor). | [optional]
**card_verification_number** | **string** | Credit card verification number. | [optional]
**cv_presence** | **string** | Card verification provided for transaction. | [optional]
**entry_mode** | **string** | Indicate how merchant obtained values from credit card, as follows:   UNKNOWN; MANUAL MagneticStripe; ICC; PROXIMITY.  Required when MagData or EMVData fields are populated. | [optional]
**external_ip** | **string** | Originating IP address to use for logging and IP filtering. | [optional]
**level3_details** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\Level3DetailsModel**](Level3DetailsModel.md) |  | [optional]
**register_number** | **string** | A string that uniquely identifies the register, terminal, or computer on which transaction was performed. | [optional]
**sequence_count** | **string** | Total number of payments to be processed on a repeat sale or Recurring Payment Agreement. | [optional]
**sequence_number** | **string** | The order in which a payment was processed on a repeat sale or Recurring Payment Agreement. | [optional]
**server_id** | **string** | Unique identifier of Paragon platform used to process transaction. | [optional]
**transaction_id** | **string** | Numeric value assigned by Merchant to identify a transaction (for use as alternative to Paragon platform-assigned PNRef). | [optional]
**street1** | **string** | House number and Street name of a cardholder&#39;s billing address. | [optional]
**zip_code** | **string** | ZIP or Postal Code of cardholder&#39;s billing address. | [optional]
**card_number_last_four_digits** | **string** | Last 4 digits of card number. | [optional]
**currency_code** | **string** | The three-letter ISO currency code | [optional]
**bypass_amount_format** | **string** | Flag used to indicate if the Paragon platform should bypass amount format validation | [optional]
**shipping_amount** | **string** | Fee (added to Amount) to cover cost of shipping (DDDDD.CC). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
