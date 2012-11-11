=== WP Accessible ===
Contributors: rianrietveld
Donate link: http://wp-accessible.com/
Tags: twitter, tweets, accessible, WCAG
Requires at least: 3.0
Tested up to: 3.5
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds functionality to improve the Accessibility of WordPress.
== Description ==

Version: 0.1: A widget with an accessible twitter feed, based on the native Genesis Framework Widget by StudioPress. Works without Genesis Framework. Validates for WCAG 2.0. This plugin requires PHP5.

Changes made to Genesis_Latest_Tweets_Widget:
- stand alone widget
- included function genesis_tweet_linkify, renamed it wp_accessible_tweet_linkify
- removed target is _blank for links, so they don't open in a new window
- removed title attribute in links (messes up screen reader output)
- removed links on hashtags to prevent a overload of links for a tweet
- removed the timestamp/link to prevent a overload of links for a tweet
- removed inline style for font-size
== Installation ==

You can install WP Accessible using the built in WordPress plugin installer by uploading the .zip file. If you download WP Accessible Twitter Feed manually, make sure it is uploaded to "/wp-content/plugins/".

Activate the WP Accessible in the "Plugins" admin panel using the "Activate" link. Setting are included in the widget.

== Changelog ==

= 0.1 =
* First release
