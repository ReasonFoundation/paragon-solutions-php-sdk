# # TerminalModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | ReadOnly - Paragon provided Terminal Key.  Identifies the Terminal Uniquely. | [optional]
**terminal_id** | **string** | Optional - Unique terminal identifier for this merchant. | [optional]
**terminal_serial_number** | **string** | Required - Unique Terminal Serial Number (must match actual terminal serial number) |
**terminal_model** | **string** | Optional - Terminal Model | [optional]
**terminal_activation_id** | **string** | ReadOnly - Terminal Acitvation Code | [optional]
**terminal_service_mode** | **string** | Optional - Terminal Service Mode | [optional]
**polling_interval_sec** | **string** | Optional - Terminal Polling Interval | [optional]
**polling_frequency_sec** | **string** | Optional - Terminal Polling Frequency | [optional]
**maintenance_start_time** | **string** | The start time of the terminal maintenance window. (hh:mm) | [optional]
**maintenance_end_time** | **string** | The end time of the terminal maintenance window. (hh:mm) | [optional]
**terminal_profile** | **string** | Payload describing the terminal profile | [optional]
**terminal_status** | **string** | Optional - Terminal Status (PENDING, ACTIVE, INACTIVE, CLOSED) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
