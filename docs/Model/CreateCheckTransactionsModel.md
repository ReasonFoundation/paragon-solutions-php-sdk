# # CreateCheckTransactionsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | Transaction type for processing a check payment. Valid TransType values: Sale; Return; Void;. |
**check_number** | **string** | Unique identifier for an original check (on a Checking Account). | [optional]
**transit_number** | **string** | A Nine-digit code, used in the United States to identify the financial institution on which a check is drawn. | [optional]
**account_number** | **string** | Unique identifier of the check owner&#39;s bank account. | [optional]
**amount** | **string** | $0.00 &amp;gt; Amount &amp;lt; $1,000,000.00 (DDDDDD.CC). | [optional]
**magnetic_ink_check_reader** | **string** | Magnetic Ink Check Reader (MICR) data line, including routing number of Bank and Account number of owner. | [optional]
**name_on_check** | **string** | Check owner&#39;s name as it appears on the check. | [optional]
**driver_license** | **string** | Identifier on Driver&#39;s License of Check owner. | [optional]
**social_security_number** | **string** | Nine-digit number issued to citizens, permanent residents and temporary workers by the Social Security Administration in the United States. | [optional]
**date_of_birth** | **string** | Date of Birth (MM/DD/YYYY or YYYY-MM-DD). | [optional]
**state_code** | **string** | United States Postal Service abbreviation for a state, district, possession or territory. Required for TransType &#x3D; Sale; Return; Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**check_type** | **string** | Checking Account Type: Personal, Business. Required for TransType &#x3D; Sale; Return;  Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**account_type** | **string** | Valid Account Type: Checking, Savings. Required for TransType &#x3D; Sale; Return; Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**alliance_number** | **string** | Alliance number associated with checking account. | [optional]
**authorization_option_form** | **string** |  | [optional]
**authorization_option_voice** | **string** |  | [optional]
**bill_to_street** | **string** | Address of Customer.Required for TransType &#x3D; Sale; Return; Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**bill_to_city** | **string** | City of Customer. Required for TransType &#x3D; Sale; Return;Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**bill_to_state** | **string** | United States Postal Service abbreviation for a state, district, possession or territory. Required for TransType &#x3D; Sale; Return;Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**bill_to_postal_code** | **string** | Zip code of Customer. Required for TransType &#x3D; Sale; Return; Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**bill_to_country** | **string** | Country of Customer. | [optional]
**city_of_account** | **string** | City of Account. | [optional]
**customer_id** | **string** | Identifier assigned by merchant to cardholder. | [optional]
**email** | **string** | Electronic Mail Address of checking account owner. | [optional]
**external_ip** | **string** | Originating IP address to use for logging and IP filtering. | [optional]
**invoice_number** | **string** | Identifier assigned by merchant to locate a specific transaction or multiple transactions (grouped by a single invoice). | [optional]
**phone** | **string** | Phone number of Customer: xxx-xxx-xxxx.Required for TransType &#x3D; Sale; Return;Optional for TransType &#x3D; Auth; Force; Void; Capture; CaptureAll. | [optional]
**payment_reference_number** | **string** | Unique identifier of a transaction, assigned by Paragon platform.Required for TransType &#x3D; Return; Void; Capture;Optional for TransType &#x3D; Auth; Sale; Force; CaptureAll. | [optional]
**raw_magnetic_ink_check_reader** | **string** | Magnetic Ink Check Reader (MICR) received from a check reader composed of a transit number, the letter “T”, an account number, the letter “O” and the check number. | [optional]
**standard_entry_class_codes_type** | **string** | Standard Entry Class codes. Required for First ACH transactions. | [optional]
**check_info_key** | **string** | Check Info Key. Can be used for First ACH Reversals using token. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
