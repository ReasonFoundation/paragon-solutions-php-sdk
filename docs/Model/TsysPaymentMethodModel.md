# # TsysPaymentMethodModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processor_id** | **string** | Supported TSYS Processor ID&#39;s are as followed:  TSYS, TSYSVPN, TSYSPARAGN, TSYSPPFAC, and TSYSPFAC  If none is specified, TSYS will be used | [optional]
**industry_type** | **string** | Industry Type | [optional]
**postal_code** | **string** | Postal Code | [optional]
**country_code** | **string** | Country Code | [optional]
**agent_bank_number** | **string** | Agent Bank Number | [optional]
**store_number** | **string** | Store number | [optional]
**terminal_number** | **string** | Terminal number | [optional]
**location_number** | **string** | Location number | [optional]
**chain_number** | **string** | Chain number | [optional]
**merchant_number** | **string** | Merchant number | [optional]
**bin_number** | **string** | BIN number | [optional]
**v_number** | **string** | V Number | [optional]
**category_code** | **string** | Category Code | [optional]
**time_zone_id** | **string** | Time Zone ID | [optional]
**customer_service_phone_number** | **string** | Customer Service Number | [optional]
**currency_id** | **string** | Currency ID | [optional]
**input_device_id** | **string** | Input device ID | [optional]
**purefac_name** | **string** | 3 Letter Pure Fac Name Abbreviaton : ex: PAR | [optional]
**purefac_or_marketplace_id** | **string** | Purefac Facilitator or marketplace ID ex: 123456 | [optional]
**psp_name** | **string** | Pure Fac Full Name : ex: PARAGON | [optional]
**amex_merch_seller_id** | **string** | AMEX Merchant Seller ID, for American Express payment types, 1 to 20 numeric digits. | [optional]
**tsys_payment_method_credit_card_profile** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\TsysPaymentMethodCreditModel**](TsysPaymentMethodCreditModel.md) |  | [optional]
**tsys_payment_method_debit_card_profile** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\TsysPaymentMethodDebitModel**](TsysPaymentMethodDebitModel.md) |  | [optional]
**tsys_payment_method_ebt_card_profile** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\TsysPaymentMethodEbtModel**](TsysPaymentMethodEbtModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
