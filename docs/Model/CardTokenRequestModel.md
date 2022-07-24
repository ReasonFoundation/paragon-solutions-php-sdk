# # CardTokenRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_key** | **string** | Unique identifier for existing customer (in Paragon platform). |
**card_number** | **string** | The Primary Acccount Number (PAN) uniquely identifies the issuer and credit cardholder account.  Required for TransType &#x3D; ADD and UPDATE  Not used for TransType &#x3D; DELETE | [optional]
**expiration_date** | **string** | Credit card date of expiration (MMYY).  Required for TransType &#x3D; ADD and UPDATE  Not used for TransType &#x3D; DELETE | [optional]
**name_on_card** | **string** | Name of cardholder (as it appears on card). | [optional]
**street1** | **string** | House number and street of cardholder&#39;s billing address. | [optional]
**zip_code** | **string** | ZIP Code of cardholder&#39;s billing address. | [optional]
**payment_reference_number** | **string** | payment reference number can be used in place of point_to_point_encryption   and card_number/expiration_date/name_on_card/street1/zip_code to retrieve token. | [optional]
**point_to_point_encryption** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\P2PEModel**](P2PEModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
