# # CustomersModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_type** | **string** | Required for First ACH; Used only for FirstACH processor with value &#x3D; “CK”.  Will enable, create and sync customer profile between Gateway and FirstACH host. | [optional]
**customer_id** | **string** | Identifier for a customer assigned by Merchant.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE | [optional]
**customer_name** | **string** | Customer Name.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**first_name** | **string** | First Name of Primary Contact for Customer.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**last_name** | **string** | Last Name of Primary Contact for Customer.  Required for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**title** | **string** | Title of Primary Contact for Customer.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**department** | **string** | Department Name in Address of Primary Contact for Customer.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**street1** | **string** | House number and street name for postal address.  Required for processor of First ACH and TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**street2** | **string** | Second line of postal address.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**street3** | **string** | Third line of postal address.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**city** | **string** | City of postal address.  Required for processor of First ACH and TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**state_id** | **string** | USPS abbreviation for state, province, district or possession.  Required for processor of First ACH and TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**province** | **string** | Canadian Province.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**zip_code** | **string** | ZIP/Postal code of postal address.  Required for processor of First ACH and TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**country_id** | **string** | Country code (USA, CAN) of postal address.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**email** | **string** | Electronic mail address of Primary Contact for Customer.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**day_phone** | **string** | Phone number (daytime) of Primary Contact for Customer.  Required for processor of First ACH and TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE  (###-###-####). | [optional]
**night_phone** | **string** | Phone number (night time) of Primary Contact for Customer.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**fax** | **string** | Facsimile phone number of Primary Contact for Customer.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**mobile_phone** | **string** | Mobile phone number of Primary Contact for Customer.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]
**status** | **string** | Customer must be assigned ACTIVE or INACTIVE status to be visible in Paragon platform Virtual Terminal user interface.  Defaults to ACTIVE.  Optional for TransType &#x3D; ADD and UPDATE;  Not used for TransType &#x3D; DELETE. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
