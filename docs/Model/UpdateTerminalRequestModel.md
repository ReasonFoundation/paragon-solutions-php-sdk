# # UpdateTerminalRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_id** | **string** | Unique terminal identifier for this merchant. | [optional]
**terminal_model** | **string** | Optional - Terminal Model | [optional]
**terminal_service_mode** | **string** | Optional - Terminal Service Mode | [optional]
**polling_interval_sec** | **string** | How many seconds the terminal polls for before going to sleep. | [optional]
**polling_frequency_sec** | **string** | How many seconds the terminal waits between each call to the gateway to check for a ticket. | [optional]
**maintenance_start_time** | **string** | The start time of the terminal maintenance window. (hh:mm) | [optional]
**maintenance_end_time** | **string** | The end time of the terminal maintenance window. (hh:mm) | [optional]
**terminal_profile** | **string** | Payload describing the terminal profile | [optional]
**terminal_status** | **string** | Optional - Terminal Status (PENDING, ACTIVE, INACTIVE, CLOSED) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
