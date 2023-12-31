# # PostPagesPageIdMetricsProvidersMetricsProviderIdMetricsMetric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of metric | [optional]
**metric_identifier** | **string** | The identifier used to look up the metric data from the provider | [optional]
**transform** | **string** | The transform to apply to metric before pulling into Statuspage. One of: \&quot;average\&quot;, \&quot;count\&quot;, \&quot;max\&quot;, \&quot;min\&quot;, or \&quot;sum\&quot; | [optional]
**application_id** | **string** | The Identifier for new relic application. Required in the case of NewRelic only | [optional]
**suffix** | **string** | Suffix to describe the units on the graph | [optional]
**y_axis_min** | **int** | The lower bound of the y axis | [optional]
**y_axis_max** | **int** | The upper bound of the y axis | [optional]
**y_axis_hidden** | **bool** | Should the values on the y axis be hidden on render | [optional]
**display** | **bool** | Should the metric be displayed | [optional]
**decimal_places** | **int** | How many decimal places to render on the graph | [optional]
**tooltip_description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
