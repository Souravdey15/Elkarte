<?php
// Version: 1.0; ManageSettings

global $scripturl;

$txt['modSettings_desc'] = 'This page allows you to change the settings of features and basic options in your forum.  Please see the <a href="' . $scripturl . '?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">theme settings</a> for more options.  Click the help icons for more information about a setting.';
$txt['security_settings_desc'] = 'This page allows you to set options specifically related to the security and moderation of your forum, including anti-spam options.';
$txt['modification_settings_desc'] = 'This page contains settings added by any modifications to your forum';

$txt['modification_no_misc_settings'] = 'There are no modifications installed that have added any settings to this area yet.';

$txt['pollMode'] = 'Poll mode';
$txt['disable_polls'] = 'Disable polls';
$txt['enable_polls'] = 'Enable polls';
$txt['polls_as_topics'] = 'Show existing polls as topics';
$txt['allow_guestAccess'] = 'Allow guests to browse the forum';
$txt['userLanguage'] = 'Enable user-selectable language support';
$txt['allow_editDisplayName'] = 'Allow users to edit their displayed name';
$txt['allow_hideOnline'] = 'Allow non-administrators to hide their online status';
$txt['guest_hideContacts'] = 'Do not reveal contact details of members to guests';
$txt['titlesEnable'] = 'Enable custom titles';
$txt['enable_buddylist'] = 'Enable buddy/ignore lists';
$txt['enable_disregard'] = 'Enable disregard topics';
$txt['default_personal_text'] = 'Default personal text';
$txt['default_personal_text_note'] = 'Personal text to assign to newly registered members.';
$txt['time_format'] = 'Default time format';
$txt['setting_time_offset'] = 'Overall time offset';
$txt['setting_time_offset_note'] = '(added to the member specific option)';
$txt['setting_default_timezone'] = 'Server timezone';
$txt['failed_login_threshold'] = 'Failed login threshold';
$txt['loginHistoryDays'] = 'Days to keep login history';
$txt['lastActive'] = 'User online time threshold';
$txt['trackStats'] = 'Track daily statistics';
$txt['hitStats'] = 'Track daily page views (must have stats enabled)';
$txt['enableCompressedOutput'] = 'Enable compressed output';
$txt['disableTemplateEval'] = 'Disable evaluation of templates';
$txt['databaseSession_enable'] = 'Use database driven sessions';
$txt['databaseSession_loose'] = 'Allow browsers to go back to cached pages';
$txt['databaseSession_lifetime'] = 'Seconds before an unused session timeout';
$txt['enableErrorLogging'] = 'Enable error logging';
$txt['enableErrorQueryLogging'] = 'Include database query in the error log';
$txt['pruningOptions'] = 'Enable pruning of log entries';
$txt['pruneErrorLog'] = 'Remove error log entries older than';
$txt['pruneModLog'] = 'Remove moderation log entries older than';
$txt['pruneBanLog'] = 'Remove ban hit log entries older than';
$txt['pruneReportLog'] = 'Remove report to moderator log entries older than';
$txt['pruneScheduledTaskLog'] = 'Remove scheduled task log entries older than';
$txt['pruneSpiderHitLog'] = 'Remove search engine hit logs older than';
$txt['pruneBadbehaviorLog'] = 'Remove Bad Behavior logs older than';
$txt['cookieTime'] = 'Default login cookies length';
$txt['localCookies'] = 'Enable local storage of cookies';
$txt['localCookies_note'] = '(SSI won\'t work well with this on)';
$txt['globalCookies'] = 'Use subdomain independent cookies';
$txt['globalCookies_note'] = '(turn off local cookies first!)';
$txt['globalCookiesDomain'] = 'Main domain used for subdomain independent cookies';
$txt['globalCookiesDomain_note'] = '(enable subdomain independent cookies first!<br />The domain could be for example: "website.com" or "website.co.uk" without http:// or slashes)';
$txt['invalid_cookie_domain'] = 'The domain introduced seems to be invalid, please check it and save again.';
$txt['secureCookies'] = 'Force cookies to be secure';
$txt['secureCookies_note'] = '(This only applies if you are using HTTPS - don\'t use otherwise!)';
$txt['httponlyCookies'] = 'Force cookies to be made accessible only through the HTTP protocol';
$txt['httponlyCookies_note'] = '(Cookies won\'t be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks.)';
$txt['securityDisable'] = 'Disable administration security';
$txt['securityDisable_moderate'] = 'Disable moderation security';
$txt['send_validation_onChange'] = 'Require reactivation after email change';
$txt['approveAccountDeletion'] = 'Require admin approval when member deletes account';
$txt['autoOptMaxOnline'] = 'Maximum users online when optimizing';
$txt['autoFixDatabase'] = 'Automatically fix broken tables';
$txt['allow_disableAnnounce'] = 'Allow users to disable announcements';
$txt['disallow_sendBody'] = 'Don\'t allow post text in notifications';
$txt['enable_contactform'] = 'Enable contact form';
$txt['jquery_source'] = 'Source for the jQuery Library';
$txt['jquery_local'] = 'Local';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Auto';
$txt['minify_css_js'] = 'Minify Javascript and CSS files';
$txt['enable_contactform'] = 'Enable contact form';
$txt['contact_form_disabled'] = 'Disabled';
$txt['contact_form_registration'] = 'Show only at registration';
$txt['contact_form_menu'] = 'Show in the menu';
$txt['queryless_urls'] = 'Search engine friendly URLs';
$txt['queryless_urls_note'] = 'Apache/Lighttpd only';
$txt['enableReportPM'] = 'Enable reporting of personal messages';
$txt['antispam_PM'] = 'Personal Message Limits';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a personal message';
$txt['max_pm_recipients_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_verification'] = 'Post count under which users must pass verification when sending personal messages';
$txt['pm_posts_verification_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_per_hour'] = 'Number of personal messages a user may send in an hour';
$txt['pm_posts_per_hour_note'] = '(0 for no limit, moderators are exempt)';
$txt['compactTopicPagesEnable'] = 'Limit number of displayed page links';
$txt['contiguous_page_display'] = 'Contiguous pages to display';
$txt['to_display'] = 'to display';
$txt['todayMod'] = 'Enable shorthand date display';
$txt['today_disabled'] = 'Disabled';
$txt['today_only'] = 'Only Today';
$txt['yesterday_today'] = 'Today &amp; Yesterday';
$txt['topbottomEnable'] = 'Enable Go Up/Go Down buttons';
$txt['onlineEnable'] = 'Show online/offline in posts and PMs';
$txt['enableVBStyleLogin'] = 'Show a quick login on every page';
$txt['defaultMaxMembers'] = 'Members per page in member list';
$txt['timeLoadPageEnable'] = 'Display time taken to create every page';
$txt['disableHostnameLookup'] = 'Disable hostname lookups';
$txt['who_enabled'] = 'Enable who\'s online list';
$txt['make_email_viewable'] = 'Allow viewable email addresses';
$txt['meta_keywords'] = 'Meta keywords associated with forum';
$txt['meta_keywords_note'] = 'For search engines. Leave blank for default.';
$txt['settings_error'] = 'Warning: Updating of Settings.php failed, the settings cannot be saved.';
$txt['core_settings_saved'] = 'The settings were successfully saved';

$txt['karmaMode'] = 'Karma mode';
$txt['karma_options'] = 'Disable karma|Enable karma total|Enable karma positive/negative';
$txt['karmaMinPosts'] = 'Set the minimum posts needed to modify karma';
$txt['karmaWaitTime'] = 'Set wait time in hours';
$txt['karmaTimeRestrictAdmins'] = 'Restrict administrators to wait time';
$txt['karmaLabel'] = 'Karma label';
$txt['karmaApplaudLabel'] = 'Karma applaud label';
$txt['karmaSmiteLabel'] = 'Karma smite label';

$txt['caching_information'] = 'ELKARTE supports caching through the use of accelerators. The currently supported accelerators include:
<ul class="normallist">
	<li>APC</li>
	<li>eAccelerator</li>
	<li>Turck MMCache</li>
	<li>Memcached</li>
	<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	<li>XCache</li>
</ul>
Caching will work best if you have PHP compiled with one of the above optimizers, or have memcache available. If you do not have any optimizer installed file based caching will be used.';
$txt['detected_no_caching'] = '<strong class="alert">Unable to detect a compatible accelerator on your server.  File based caching can be used instead.</strong>';
$txt['detected_accelerators'] = '<strong class="success">The following accelerators have been detected: %1$s</strong>';


$txt['cache_enable'] = 'Caching Level';
$txt['cache_off'] = 'No caching';
$txt['cache_level1'] = 'Level 1 Caching (Recommended)';
$txt['cache_level2'] = 'Level 2 Caching';
$txt['cache_level3'] = 'Level 3 Caching (Not Recommended)';
$txt['cache_memcached'] = 'Memcache settings';
$txt['cache_accelerator'] = 'Caching Accelerator';
$txt['default_cache'] = 'File based caching';
$txt['apc_cache'] = 'APC';
$txt['eAccelerator_cache'] = 'eAccelerator';
$txt['mmcache_cache'] = 'Turck MMCache';
$txt['memcached_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['xcache_cache'] = 'XCache';

$txt['loadavg_warning'] = '<span class="error">Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Enable load balancing by load averages';
$txt['loadavg_auto_opt'] = 'Threshold to disabling automatic database optimization';
$txt['loadavg_search'] = 'Threshold to disabling search';
$txt['loadavg_allunread'] = 'Threshold to disabling all unread topics';
$txt['loadavg_unreadreplies'] = 'Threshold to disabling unread replies';
$txt['loadavg_show_posts'] = 'Threshold to disabling showing user posts';
$txt['loadavg_userstats'] = 'Threshold to disabling showing user statistics';
$txt['loadavg_bbc'] = 'Threshold to disabling BBC formatting when showing posts';
$txt['loadavg_forum'] = 'Threshold to disabling the forum <strong>completely</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">Load balancing support is not available on Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Load balancing support is disabled by your host configuration.</span>';

$txt['setting_password_strength'] = 'Required strength for user passwords';
$txt['setting_password_strength_low'] = 'Low - 4 character minimum';
$txt['setting_password_strength_medium'] = 'Medium - cannot contain username';
$txt['setting_password_strength_high'] = 'High - mixture of different characters';
$txt['setting_enable_password_conversion'] = 'Allow password hash conversion';

$txt['antispam_Settings'] = 'Anti-Spam Verification';
$txt['antispam_Settings_desc'] = 'This section allows you to setup verification checks to ensure the user is a human (and not a bot), and tweak how and where these apply.';
$txt['setting_reg_verification'] = 'Require verification on registration page';
$txt['posts_require_captcha'] = 'Post count under which users must pass verification to make a post';
$txt['posts_require_captcha_desc'] = '(0 for no limit, moderators are exempt)';
$txt['search_enable_captcha'] = 'Require verification on all guest searches';
$txt['setting_guests_require_captcha'] = 'Guests must pass verification when making a post';
$txt['setting_guests_require_captcha_desc'] = '(Automatically set if you specify a minimum post count below)';
$txt['guests_report_require_captcha'] = 'Guests must pass verification when reporting a post';

$txt['badbehavior_title'] = 'Bad Behavior Settings';
$txt['badbehavior_details'] = 'Details';
$txt['badbehavior_desc'] = 'Bad Behavior is designed to run as early as possible to throw out spam bots before they have the opportunity to vandalize your site or even to scrape your pages for e-mail addresses and forms to fill out.<br />Bad Behavior also blocks many e-mail address harvesters, resulting in less e-mail spam, and many automated Web site cracking tools, helping to improve your Web site\'s overall security.';
$txt['badbehavior_wl_desc'] = 'Inappropriate whitelisting WILL expose you to spam, or cause Bad Behavior to stop functioning entirely! <strong>DO NOT WHITELIST</strong> unless you are 100% CERTAIN that you should and know what you are doing.';
$txt['badbehavior_enabled'] = 'Enable Bad Behavior Checking';
$txt['badbehavior_enabled_desc'] = 'Check to enable Bad Behavior protection on your site.';
$txt['badbehavior_strict'] = 'Enable Strict Operating Mode';
$txt['badbehavior_logging'] = 'Enable Logging';
$txt['badbehavior_offsite_forms'] = 'Allow Offsite Forms';
$txt['badbehavior_verbose'] = 'Enable Verbose Logging';
$txt['badbehavior_verbose_desc'] = 'It is recommended to leave Verbose mode off';
$txt['badbehavior_httpbl_key'] = 'http:BL API Key';
$txt['badbehavior_httpbl_key_invalid'] = 'The supplied http:BL API Key is not valid';
$txt['badbehavior_httpbl_threat'] = 'http:BL Threat Level';
$txt['badbehavior_httpbl_threat_desc'] = '(default 25)';
$txt['badbehavior_httpbl_maxage'] = 'http:BL Maximum Age';
$txt['badbehavior_httpbl_maxage_desc'] = '(default 30)';
$txt['badbehavior_eucookie'] = 'Check to enable EU Cookie Handling';
$txt['badbehavior_display_stats'] = 'Check to display bad behavior in the page footer';
$txt['badbehavior_reverse_proxy'] = 'Enable Reverse Proxy';
$txt['badbehavior_reverse_proxy_header'] = 'Reverse Proxy Header';
$txt['badbehavior_reverse_proxy_header_desc'] = '(default X-Forwarded-For)';
$txt['badbehavior_reverse_proxy_addresses'] = 'Reverse Proxy Addresses';
$txt['badbehavior_default_on'] = '(default on)';
$txt['badbehavior_default_off'] = '(default off)';
$txt['badbehavior_whitelist_title'] = 'Whitelisting Options';
$txt['badbehavior_postcount_wl'] = 'Whitelist users over a certain post count';
$txt['badbehavior_postcount_wl_desc'] = '(0 to disable)';
$txt['badbehavior_ip_wl'] = 'Whitelist by IP address';
$txt['badbehavior_ip_wl_desc'] = 'IP Address (CIDR Format 127.0.0.1 or 127.0.0.0/24)';
$txt['badbehavior_ip_wl_add'] = 'Add another IP address';
$txt['badbehavior_useragent_wl'] = 'Whitelist by user agent string';
$txt['badbehavior_useragent_wl_desc'] = 'Example: Mozilla/4.0 (It\'s me, let me in)';
$txt['badbehavior_useragent_wl_add'] = 'Add another Useragent string';
$txt['badbehavior_url_wl'] = 'Whitelist by URL';
$txt['badbehavior_url_wl_desc'] = 'Example: /subscriptions.php';
$txt['badbehavior_url_wl_add'] = 'Add another URL';
$txt['badbehavior_wl_comment'] = 'Comment';

$txt['configure_verification_means'] = 'Configure Verification Methods';
$txt['setting_qa_verification_number'] = 'Number of verification questions user must answer';
$txt['setting_qa_verification_number_desc'] = '(0 to disable; questions are set below)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Below you can set which anti-spam features you wish to have enabled whenever a user needs to verify they are a human. Note that the user will have to pass <em>all</em> verification so if you enable both a verification image and a question/answer test they need to complete both to proceed.</span>';
$txt['setting_visual_verification_type'] = 'Visual verification image to display';
$txt['setting_visual_verification_type_desc'] = 'The more complex the image the harder it is for bots to bypass';
$txt['setting_image_verification_off'] = 'None';
$txt['setting_image_verification_vsimple'] = 'Very Simple - Plain text on image';
$txt['setting_image_verification_simple'] = 'Simple - Overlapping colored letters, no noise';
$txt['setting_image_verification_medium'] = 'Medium - Overlapping colored letters, with noise/lines';
$txt['setting_image_verification_high'] = 'High - Angled letters, considerable noise/lines';
$txt['setting_image_verification_extreme'] = 'Extreme - Angled letters, noise, lines and blocks';
$txt['setting_image_verification_sample'] = 'Sample';
$txt['setting_image_verification_nogd'] = '<strong>Note:</strong> as this server does not have the GD library installed the different complexity settings will have no effect.';
$txt['setup_verification_questions'] = 'Verification Questions';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">If you want users to answer verification questions in order to stop spam bots you should setup a number of questions in the table below. You should pick relatively simple questions; answers are not case sensitive. You may use BBC in the questions for formatting, to remove a question simply delete the contents of that line.</span>';
$txt['setup_verification_question'] = 'Question';
$txt['setup_verification_answer'] = 'Answer';
$txt['setup_verification_add_more'] = 'Add another question';

$txt['moderation_settings'] = 'Moderation Settings';
$txt['setting_warning_enable'] = 'Enable User Warning System';
$txt['setting_warning_watch'] = 'Warning level for user watch';
$txt['setting_warning_watch_note'] = 'The user warning level after which a user watch is put in place - 0 to disable.';
$txt['setting_warning_moderate'] = 'Warning level for post moderation';
$txt['setting_warning_moderate_note'] = 'The user warning level after which a user has all posts moderated - 0 to disable.';
$txt['setting_warning_mute'] = 'Warning level for user muting';
$txt['setting_warning_mute_note'] = 'The user warning level after which a user cannot post any further - 0 to disable.';
$txt['setting_user_limit'] = 'Maximum user warning points per day';
$txt['setting_user_limit_note'] = 'This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.';
$txt['setting_warning_decrement'] = 'Warning points to decrement from users every 24 hours';
$txt['setting_warning_decrement_note'] = 'Only applies to users not warned within last 24 hours - set to 0 to disable.';
$txt['setting_warning_show'] = 'Users who can see warning status';
$txt['setting_warning_show_note'] = 'Determines who can see the warning level of users on the forum.';
$txt['setting_warning_show_mods'] = 'Moderators Only';
$txt['setting_warning_show_user'] = 'Moderators and Warned Users';
$txt['setting_warning_show_all'] = 'All Users';

$txt['signature_settings'] = 'Signature Settings';
$txt['signature_settings_desc'] = 'Use the settings on this page to decide how member signatures should be treated.';
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default. <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Run the process now</a>';
$txt['signature_settings_applied'] = 'The updated rules have been applied to the existing signatures.';
$txt['signature_enable'] = 'Enable signatures';
$txt['signature_max_length'] = 'Maximum allowed characters';
$txt['signature_max_lines'] = 'Maximum amount of lines';
$txt['signature_max_images'] = 'Maximum image count';
$txt['signature_max_images_note'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'Allow smileys in signatures';
$txt['signature_max_smileys'] = 'Maximum smiley count';
$txt['signature_max_image_width'] = 'Maximum width of signature images (pixels)';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixels)';
$txt['signature_max_font_size'] = 'Maximum font size allowed in signatures (pixels)';
$txt['signature_bbc'] = 'Enabled BBC tags';

$txt['custom_profile_title'] = 'Custom Profile Fields';
$txt['custom_profile_desc'] = 'From this page you can create your own custom profile fields that fit in with your own forums requirements';
$txt['custom_profile_active'] = 'Active';
$txt['custom_profile_fieldname'] = 'Field Name';
$txt['custom_profile_fieldtype'] = 'Field Type';
$txt['custom_profile_make_new'] = 'New Field';
$txt['custom_profile_none'] = 'You have not created any custom profile fields yet!';
$txt['custom_profile_icon'] = 'Icon';

$txt['custom_profile_type_text'] = 'Text';
$txt['custom_profile_type_textarea'] = 'Large Text';
$txt['custom_profile_type_select'] = 'Select Box';
$txt['custom_profile_type_radio'] = 'Radio Button';
$txt['custom_profile_type_check'] = 'Checkbox';

$txt['custom_add_title'] = 'Add Profile Field';
$txt['custom_edit_title'] = 'Edit Profile Field';
$txt['custom_edit_general'] = 'Display Settings';
$txt['custom_edit_input'] = 'Input Settings';
$txt['custom_edit_advanced'] = 'Advanced Settings';
$txt['custom_edit_name'] = 'Name';
$txt['custom_edit_desc'] = 'Description';
$txt['custom_edit_profile'] = 'Profile Section';
$txt['custom_edit_profile_desc'] = 'Section of profile this is edited in.';
$txt['custom_edit_profile_none'] = 'None';
$txt['custom_edit_registration'] = 'Show on Registration';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'Yes';
$txt['custom_edit_registration_require'] = 'Yes, and require entry';
$txt['custom_edit_display'] = 'Show on Topic View';
$txt['custom_edit_picktype'] = 'Field Type';

$txt['custom_edit_max_length'] = 'Maximum Length';
$txt['custom_edit_max_length_desc'] = '(0 for no limit)';
$txt['custom_edit_dimension'] = 'Dimensions';
$txt['custom_edit_dimension_row'] = 'Rows';
$txt['custom_edit_dimension_col'] = 'Columns';
$txt['custom_edit_bbc'] = 'Allow BBC';
$txt['custom_edit_options'] = 'Options';
$txt['custom_edit_options_desc'] = 'Leave option box blank to remove. Radio button selects default option.';
$txt['custom_edit_options_more'] = 'More';
$txt['custom_edit_default'] = 'Default State';
$txt['custom_edit_active'] = 'Active';
$txt['custom_edit_active_desc'] = 'If not selected this field will not be shown to anyone.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Who can see and edit this field.';
$txt['custom_edit_privacy_all'] = 'Users can see this field; owner can edit it';
$txt['custom_edit_privacy_see'] = 'Users can see this field; only admins can edit it';
$txt['custom_edit_privacy_owner'] = 'Users cannot see this field; owner and admins can edit it.';
$txt['custom_edit_privacy_none'] = 'This field is only visible to admins';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = 'For text fields an input mask can be selected to validate the data.';
$txt['custom_edit_mask_email'] = 'Valid Email';
$txt['custom_edit_mask_number'] = 'Numeric';
$txt['custom_edit_mask_nohtml'] = 'No HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Advanced)';
$txt['custom_edit_enclose'] = 'Show Enclosed Within Text (Optional)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';

$txt['custom_edit_placement'] = 'Choose Placement';
$txt['custom_edit_placement_standard'] = 'Standard (with title)';
$txt['custom_edit_placement_withicons'] = 'With Icons';
$txt['custom_edit_placement_abovesignature'] = 'Above Signature';
$txt['custom_profile_placement'] = 'Placement';
$txt['custom_profile_placement_standard'] = 'Standard';
$txt['custom_profile_placement_withicons'] = 'With Icons';
$txt['custom_profile_placement_abovesignature'] = 'Above Signature';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Are you sure you wish to delete this field - all related user data will be lost!';

$txt['standard_profile_title'] = 'Standard Profile Fields';
$txt['standard_profile_field'] = 'Field';

$txt['core_settings_welcome_msg'] = 'Welcome to Your New Forum';
$txt['core_settings_welcome_msg_desc'] = 'To get you started we suggest you select which of ELKARTE\'s core features you want to enable. We\'d recommend only enabling with those features you need!';
$txt['core_settings_item_cd'] = 'Calendar';
$txt['core_settings_item_cd_desc'] = 'Enabling this feature will open up a selection of options to enable your users to view the calendar, add and review events, see users birthdates on a calendar and much, much more.';
$txt['core_settings_item_dr'] = 'Drafts';
$txt['core_settings_item_dr_desc'] = 'Enabling this feature will allow users to save drafts of their posts so they can return to them later to post them.';
$txt['core_settings_item_cp'] = 'Advanced Profile Fields';
$txt['core_settings_item_cp_desc'] = 'This enables you to hide standard profile fields, add profile fields to registration, and create new profile fields for your forum.';
$txt['core_settings_item_ih'] = 'Integration Hooks Management';
$txt['core_settings_item_ih_desc'] = 'This feature allows you to enable or disable any integration hooks added by modifications. Changing hooks can prevent your forum from working properly, so use this feature only if you know what you are doing.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma is a feature that shows the popularity of a member. Members, if allowed, can \'applaud\' or \'smite\' other members, which is how their popularity is calculated.';
$txt['core_settings_item_ml'] = 'Moderation, Administration and User Logs';
$txt['core_settings_item_ml_desc'] = 'Enable the moderation and administration logs to keep an audit trail of all the key actions taken on your forum. Also allows forum moderators to view a history of key changes a user makes to their profile.';
$txt['core_settings_item_pm'] = 'Post Moderation';
$txt['core_settings_item_pm_desc'] = 'Post moderation enables you to select groups and boards within which posts must be approved before they become public. Upon enabling this feature be sure to visit the permission section to set up the relevant permissions.';
$txt['core_settings_item_ps'] = 'Paid Subscriptions';
$txt['core_settings_item_ps_desc'] = 'Paid subscriptions allow users to pay for subscriptions to change membergroup within the forum and thus change their access rights.';
$txt['core_settings_item_rg'] = 'Report Generation';
$txt['core_settings_item_rg_desc'] = 'This administration feature allows the generation of reports (which can be printed) to present your current forum setup in an easy to view manner - particularly useful for large forums.';
$txt['core_settings_item_sp'] = 'Search Engine Tracking';
$txt['core_settings_item_sp_desc'] = 'Enabling this feature will allow administrators to track search engines as they index your forum.';
$txt['core_settings_item_w'] = 'Warning System';
$txt['core_settings_item_w_desc'] = 'This system allows administrators and moderators to issue warnings to users, and can automatically remove user rights as their warning level increases. To take full advantage of this system, &quot;Post Moderation&quot; should be enabled.';
$txt['core_settings_switch_on'] = 'Click to Enable';
$txt['core_settings_switch_off'] = 'Click to Disable';
$txt['core_settings_enabled'] = 'Enabled';
$txt['core_settings_disabled'] = 'Disabled';

$txt['languages_lang_name'] = 'Language Name';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Default';
$txt['languages_character_set'] = 'Character Set';
$txt['languages_users'] = 'Users';
$txt['language_settings_writable'] = 'Warning: Settings.php is not writable so the default language setting cannot be saved.';
$txt['edit_languages'] = 'Edit Languages';
$txt['lang_file_not_writable'] = '<strong>Warning:</strong> The primary language file (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['lang_entries_not_writable'] = '<strong>Warning:</strong> The language file you wish to edit (%1$s) is not writable. You must make this writable before you can make any changes.';
$txt['languages_ltr'] = 'Right to Left';

$txt['add_language'] = 'Add Language';
$txt['add_language_elk'] = 'Download from Elkarte\'s GitHub Repository';
$txt['add_language_elk_browse'] = 'Type name of language to search for or leave blank to search for all.';
$txt['add_language_elk_install'] = 'Install';
$txt['add_language_elk_found'] = 'The following languages were found. Click the install link next to the language you wish to install, you will then be taken to the package manager to install.';
$txt['add_language_error_no_response'] = 'The Simple Machines (R) site is not responding. Please try again later.';
$txt['add_language_error_no_files'] = 'No files could be found.';
$txt['add_language_elk_desc'] = 'Description';
$txt['add_language_elk_utf8'] = 'UTF-8';
$txt['add_language_elk_version'] = 'Version';

$txt['edit_language_entries_primary'] = 'Below are the primary language settings for this language pack.';
$txt['edit_language_entries'] = 'Edit Language Entries';
$txt['edit_language_entries_file'] = 'Select entries to edit';
$txt['languages_dictionary'] = 'Dictionary';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'This is for <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - if installed';
$txt['languages_rtl'] = 'Enable &quot;Right to Left&quot; Mode';

$txt['lang_file_desc_index'] = 'General Strings';
$txt['lang_file_desc_EmailTemplates'] = 'Email Templates';

$txt['languages_download'] = 'Download Language Pack';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Note:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means the system will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last forum version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primary Files';
$txt['languages_download_theme_files'] = 'Theme-related Files';
$txt['languages_download_filename'] = 'File Name';
$txt['languages_download_dest'] = 'Destination';
$txt['languages_download_writable'] = 'Writable';
$txt['languages_download_version'] = 'Version';
$txt['languages_download_older'] = 'You have a newer version of this file installed, overwriting is not recommended.';
$txt['languages_download_exists'] = 'Already Exists';
$txt['languages_download_exists_same'] = 'Identical';
$txt['languages_download_exists_different'] = 'Different';
$txt['languages_download_copy'] = 'Copy';
$txt['languages_download_not_chmod'] = 'You cannot proceed with the installation until all files selected to be copied are writable.';
$txt['languages_download_illegal_paths'] = 'Package contains illegal paths - please contact Elkarte';
$txt['languages_download_complete'] = 'Installation Complete';
$txt['languages_download_complete_desc'] = 'Language pack installed successfully. Please click <a href="%1$s">here</a> to return to the languages page';
$txt['languages_delete_confirm'] = 'Are you sure you want to delete this language?';