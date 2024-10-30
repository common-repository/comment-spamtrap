=== Plugin Name ===
Contributors: seengee
Donate link: http://seengee.co.uk
Tags: comments, comment, spam
Requires at least: 2.9
Tested up to: 2.9.1
Stable tag: trunk

This plugin adds 2 form fields to the comment form (hidden by CSS) to detect spam bots that autofill all form fields they find

== Description ==

This plugin adds 2 form fields to the comment form to detect spam bots that autofill all form fields they find. These fields are hidden by CSS so they are not viewable within the browser. Of the 2 fields, one will be checked that it is still empty, the other will be checked that the data has not been changed.


== Installation ==

1. Upload `commentSpamtrap.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

None.

== Screenshots ==

None.

== Changelog ==
= 1.0.2 =
changed css hiding method
= 1.0.1 = 
added str_replace for spaces in site names
= 1.0 =
* First release