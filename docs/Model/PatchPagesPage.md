# # PatchPagesPage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of your page to be displayed | [optional]
**domain** | **string** | CNAME alias for your status page | [optional]
**subdomain** | **string** | Subdomain at which to access your status page | [optional]
**url** | **string** | Website of your page.  Clicking on your statuspage image will link here. | [optional]
**branding** | **string** | The main template your statuspage will use | [optional]
**css_body_background_color** | **string** | CSS Color | [optional]
**css_font_color** | **string** | CSS Color | [optional]
**css_light_font_color** | **string** | CSS Color | [optional]
**css_greens** | **string** | CSS Color | [optional]
**css_yellows** | **string** | CSS Color | [optional]
**css_oranges** | **string** | CSS Color | [optional]
**css_reds** | **string** | CSS Color | [optional]
**css_blues** | **string** | CSS Color | [optional]
**css_border_color** | **string** | CSS Color | [optional]
**css_graph_color** | **string** | CSS Color | [optional]
**css_link_color** | **string** | CSS Color | [optional]
**css_no_data** | **string** | CSS Color | [optional]
**hidden_from_search** | **bool** | Should your page hide itself from search engines | [optional]
**viewers_must_be_team_members** | **bool** |  | [optional]
**allow_page_subscribers** | **bool** | Can your users subscribe to all notifications on the page | [optional]
**allow_incident_subscribers** | **bool** | Can your users subscribe to notifications for a single incident | [optional]
**allow_email_subscribers** | **bool** | Can your users choose to receive notifications via email | [optional]
**allow_sms_subscribers** | **bool** | Can your users choose to receive notifications via SMS | [optional]
**allow_rss_atom_feeds** | **bool** | Can your users choose to access incident feeds via RSS/Atom (not functional on Audience-Specific pages) | [optional]
**allow_webhook_subscribers** | **bool** | Can your users choose to receive notifications via Webhooks | [optional]
**notifications_from_email** | **string** | Allows you to customize the email address your page notifications come from | [optional]
**time_zone** | **string** | Timezone configured for your page | [optional]
**notifications_email_footer** | **string** | Allows you to customize the footer appearing on your notification emails.  Accepts Markdown for formatting | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
