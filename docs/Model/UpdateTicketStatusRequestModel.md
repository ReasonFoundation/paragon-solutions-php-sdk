# # UpdateTicketStatusRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_id** | **string** | Terminal identifier. |
**ticket_id** | **string** | Unique Paragon ticket identifier. |
**ticket_status** | **string** | The ticket status you want to set. Valid values are (OPEN, COMPLETE, ERROR, CANCELLED)  This field is Mandatory | [optional]
**payment_reference_number** | **string** | Returned from Paragon, the PNREF | [optional]
**commercial_card_status** | **string** | Commercial Card Status ( 0 &#x3D; NotSet, 1 &#x3D; Commercial Card, Tax Exempt ) | [optional]
**terminal_cashback_amount** | **string** | Final cash back amount sent to the gateway | [optional]
**ticket_result** | **string** | Code returned from Paragon platform describing result from processing transaction | [optional]
**ticket_sub_result** | **string** | Code returned from Paragon platform describing sub result from processing transaction | [optional]
**ticket_result_message** | **string** | Message returned from Paragon platform describing result from processing transaction | [optional]
**ticket_result_description** | **string** | Description returned from Paragon platform describing result from processing transaction | [optional]
**ticket_approval_code** | **string** | Code returned from Paragon platform describing approval code from approved transaction | [optional]
**terminal_auth_amount** | **string** | Final amount terminal sent to the gateway | [optional]
**terminal_tip_amount** | **string** | Final tip amount terminal sent to the gateway | [optional]
**terminal_tax_amount** | **string** | Final tax amount terminal sent to the gateway | [optional]
**card_key** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
