# # TicketReportRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **string** | Filter by start date where ticket_create_date &amp;gt;&#x3D; start_date  Format: YYYY-MM-DD | [optional]
**end_date** | **string** |  | [optional]
**terminal_key** | **string** | Filter by Terminal Key  Note: Unique identifier for the terminal assigned by the merchant | [optional]
**terminal_id** | **string** | Filter by Terminal ID  Note: Unique identifier for the terminal assigned by the merchant | [optional]
**terminal_serial_number** | **string** | Filter by terminal serial number | [optional]
**ticket_status** | **string** | Filter by ticket status. Valid values are 1, 2, 3, 4 (1&#x3D;Open, 2&#x3D;Complete, 3&#x3D;Error, 4&#x3D;Cancelled) | [optional]
**recent_10** | **string** | Filter by recent 10 tickets (overrides date and top filters) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
