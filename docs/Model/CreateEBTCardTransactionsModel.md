# # CreateEBTCardTransactionsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | Transaction type for processing an EBT card payment. |
**card_number** | **string** | The Primary Account Number (PAN) uniquely identify the issuer of an EBT cardholder&#39;s account.  Required for TransType &#x3D; EWICAuthorization; EWICSale; EWICVoucherClear; FoodStampSale; FoodstampReturn; Inquire; Reversal; SNAPVoucherClear; CashBenefitsSale;  Optional for TransType &#x3D; Force; Void; EWICCompletion; Capture; CaptureAll. | [optional]
**expiration_date** | **string** | Expiration Date (MMYY)  Required for TransType &#x3D; EWICAuthorization; EWICSale; EWICVoucherClear; FoodStampSale; FoodstampReturn; Inquire; Reversal; SNAPVoucherClear; CashBenefitsSale;  Optional for TransType &#x3D; Force; Void; EWICCompletion; Capture; CaptureAll. | [optional]
**magnetic_track_data** | **string** | The data - number and expiration date - read from magnetic stripe on card.  Required when EBT card presented by consumer at point of sale/ service. | [optional]
**name_on_card** | **string** | Cardholder&#39;s name as it appears on the card. | [optional]
**amount** | **string** | Sale Amount (DDDDD.CC format).  Required for TransType &#x3D; EWICAuthorization; EWICSale; EWICVoucherClear; FoodStampSale; FoodstampReturn; Inquire; Reversal; SNAPVoucherClear; CashBenefitsSale;  Optional for TransType &#x3D; Force; Void; EWICCompletion; Capture; CaptureAll. | [optional]
**invoice_number** | **string** | Identifier assigned by the merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.   Required for FoodStampReturn; Capture; EWICCOMPLETION;   Optional for FoodStampSale; CashBenefitSale; Inquire; CaptureAll; Force; EWICAUTHORIZATION; EWICSALE. | [optional]
**primary_identification_number** | **string** | The encrypted PIN-block returned from a secure cryptographic device, such as a PIN Pad.  Required when processor requires customer to provide Personal Identification Number. | [optional]
**register_number** | **string** | A string that uniquely identifies the register, terminal, or computer on which the transaction was performed. | [optional]
**surcharge_amount** | **string** | The amount charged - surcharge applied - by a merchant to process a transaction with a ebt card. | [optional]
**cashback_amount** | **string** | Amount added to a Sale Amount that is returned in Cash (DDDDD.CC format). | [optional]
**authorization_code** | **string** | Authorization/approval code assigned to original transaction by processor. | [optional]
**customer_id** | **string** | Identifier assigned by merchant to allow payment processed by Global Payments to be traced to purchase order number. | [optional]
**ewic_details** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\EWICDetailsModel[]**](EWICDetailsModel.md) | XML element containing the necessary details for items covered by WIC supplemental benefits of SNAP  Required for EWIC transactions. | [optional]
**force** | **string** | Force (T) Paragon platform to accept duplicate transaction into current batch (ignored by Concord EFS processor). | [optional]
**key_serial_number** | **string** | Serial number of PIN pad and encryption key for the transaction.  Required for online PIN debit transctions. | [optional]
**merchant_food_nutrition_id** | **string** | Identifier assigned by USDA FNS for   Merchant licensed to participate in  SNAP. | [optional]
**point_to_point_encryption** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\P2PEModel**](P2PEModel.md) |  | [optional]
**transaction_id** | **string** | Numeric value assigned by Merchant to identify a transaction (for use as alternative to Paragon platform-assigned PNRef). | [optional]
**voucher_number** | **string** | Reference number on a paper voucher used for an EBT purchase.  Required for voucher purchase transactions. | [optional]
**card_number_last_four_digits** | **string** | Last 4 digits of card number. | [optional]
**ebt_type** | **string** | Identifies whether the EBT card is being used for Cashback, eWIC or SNAP transactions. | [optional]
**ebt_withdrawal** | **string** | Cash Benefit Withdrawal indicator | [optional]
**entry_mode** | **string** | Indicate how merchant obtained values from credit card, as follows:   UNKNOWN; MANUAL MagneticStripe; ICC; PROXIMITY.  Required when MagData or EMVData fields are populated. | [optional]
**application_id** | **string** |  | [optional]
**chip_condition_code** | **string** | The condition code of magnetic stripe read transactions of EMV (chip capable) cards. | [optional]
**card_present** | **string** | Card presence indicator. | [optional]
**clerk_id** | **string** | Clerk identifier | [optional]
**terminal_operating_environment** | **string** | Indicates the terminal&#39;s location and indicates whether it is attended by the card acceptor. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
