# # CheckTokenRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_key** | **string** | Unique identifier for existing customer (in Paragon platform). |
**check_type** | **string** | Checking Account Type (PERSONAL, BUSINESS).   Required for TransType &#x3D; ADD and UPDATE  Not required for TransType &#x3D; DELETE | [optional]
**account_type** | **string** | Account type (CHECKING, SAVINGS).   Required for TransType &#x3D; ADD and UPDATE  Not required for TransType &#x3D; DELETE | [optional]
**check_number** | **string** | Unique identifier for an original check (on a Checking Account). | [optional]
**micr** | **string** | Magnetic Ink Check Reader (MICR) data line, including routing number of Bank, checking account number of customer and check number. | [optional]
**account_number** | **string** | Unique identifier of the check owner&#39;s bank account.  Required for TransType &#x3D; ADD and UPDATE  Not required for TransType &#x3D; DELETE | [optional]
**transit_number** | **string** | A Nine-digit code, used in the United States to identify the financial institution on which a check is drawn.  Required for TransType &#x3D; ADD and UPDATE  Not required for TransType &#x3D; DELETE | [optional]
**raw_micr** | **string** | Magnetic Ink Check Reader (MICR) received from a check reader: composed of a transit number (TransitNum), the letter &#39;T&#39;, an account number (AccountNum), the letter &#39;O&#39; and a check number (CheckNum). | [optional]
**social_security_number** | **string** | Nine-digit number issued by the US Social Security Administration to the checking account owner | [optional]
**date_of_birth** | **string** | Date of Birth of checking account owner. | [optional]
**branch_city** | **string** | City of the checking account bank branch. | [optional]
**drivers_license_number** | **string** | Unique identifier of Driver&#39;s License of Checking account owner. | [optional]
**state_code** | **string** | United States Postal Service abbreviation for a state, district, possession or territory of checking account owner&#39;s billing address. | [optional]
**name_on_check** | **string** | Check account owner&#39;s name as it appears on the check. | [optional]
**email** | **string** | Electronic Mail Address of checking account owner. | [optional]
**day_phone** | **string** | Daytime Phone Number of checking account owner. | [optional]
**street1** | **string** | House number and Street name of checking account owner&#39;s billing address. | [optional]
**street2** | **string** | Second line of checking account owner&#39;s billing address. | [optional]
**street3** | **string** | Third line of checking account owner&#39;s billing address. | [optional]
**city** | **string** | City of the checking account owner&#39;s billing address. | [optional]
**state_id** | **string** | United States Postal Service abbreviation for a state, district, possession or territory. | [optional]
**province** | **string** | Canadian Province (if applicable) of checking account owner&#39;s billing address | [optional]
**zip_code** | **string** | ZIP/Postal code of checking account owner&#39;s billing address. | [optional]
**country_id** | **string** | Code (USA, CAN) for country of checking account owner&#39;s billing address. | [optional]
**payment_reference_number** | **string** | Payment Reference number can be used in place AccountNum/TransitNumber | [optional]
**secc_type** | **string** | Required for FirstACH processor.  One of: CCD, PPD, ARC, RCK, TEL, WEB | [optional]
**auth_option_form** | **string** | Signed Form authorization option.  Required for SECCType &#x3D; CCD; PPD | [optional]
**auth_option_voice** | **string** | Recorded Voice authorization option.  Required for SECCType &#x3D; TEL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
