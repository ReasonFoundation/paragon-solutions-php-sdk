# # AddUserRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reseller_key** | **string** | Unique identifier for a merchant in Paragon platform; Required when creating a Merchant user account. | [optional]
**merchant_key** | **string** | Unique identifier for a merchant in Paragon platform; Required when creating a Merchant user account. | [optional]
**username** | **string** | User name assigned in Paragon platform.   The account must be granted a sufficient level of security access in order to invoke the operation. | [optional]
**password** | **string** | Password for Primary User for User in Paragon Platform.  Optional: if no password is submitted, activation url will be returned.  Password must be a minimum of 8 characters and include at least one digit (0-9), one lower case letter (a-z) and one upper case letter (A-Z). Your password must not contain any special characters | [optional]
**contact** | [**\DCarbone\ParagonSolutionsPHPSDK\Model\ContactModel**](ContactModel.md) |  | [optional]
**user_security_level** | **string** | Level of Security Access granted to Username in Paragon platform. | [optional]
**time_zone_offset** | **string** | Offset from Coordinated Universal Time(in minutes). |
**is_api_user** | **string** | Will the user being created be an API level user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
