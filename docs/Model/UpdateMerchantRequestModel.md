# # UpdateMerchantRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary_merchant_id** | **string** | Primary MID for a Merchant in Paragon platform assigned by the Processor. | [optional]
**merchant_id** | **string** | Unique identifier for a Merchant in Paragon platform. | [optional]
**annual_sales** | **string** | Annual Sales for a Merchant, in US or CAN Dollars | [optional]
**business_start_date** | **string** | Merchant&#39;s first day in business | [optional]
**company_name** | **string** | Company Name of Merchant Account Holder. |
**soft_descriptor** | **string** | PureFac Alternate name. | [optional]
**doing_business_as** | **string** | Trade name for a Merchant | [optional]
**url** | **string** | Universal Resource Locator (for Merchant website). | [optional]
**federal_tax_id** | **string** | Unique identifier for a business entity issued by the Internal Revenue Service (IRS), also known as an Employer Identification Number(EIN). | [optional]
**state_tax_id** | **string** | Unique identifier for a Merchant assigned by a State in the United States. | [optional]
**sales_tax_id** | **string** | Sales Tax identifier of a Merchant in Paragon platform | [optional]
**ownership_type** | **string** | Structure of ownership for Merchant Business | [optional]
**time_zone_offset** | **string** | Offset from Coordinated Universal Time(in minutes). | [optional]
**is_test_merchant** | **string** | Enable (T), Is merchant a test merchant? | [optional]
**underwriting_status** | **string** | Merchant Underwriting Status | [optional]
**merchant_status** | **string** | Merchant Status | [optional]
**correlation_id** | **string** | Guid Correlation Identifier. EX: \&quot;de80889a-da5c-4d94-82b1-6d63209c7455\&quot; | [optional]
**configuration** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantConfigModel**](UpdateMerchantConfigModel.md) |  | [optional]
**contact** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ContactModel**](ContactModel.md) |  | [optional]
**virtual_terminal** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantVirtualTerminalModel**](UpdateMerchantVirtualTerminalModel.md) |  | [optional]
**fraud_control_suite_configuration** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\UpdateMerchantCardVerificationModel**](UpdateMerchantCardVerificationModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
