=== Metabox Glue ===
Contributors: numeeja
Donate link: https://paypal.me/michaelatkins
Tags: admin, metabox, meta box, glue, fix, stick, drag, ipad, android, tablet
Requires at least: 4.2
Tested up to: 6.5
Stable tag: 1.3.0
License: GPLv2

Glues the editor metaboxes in place so they cannot be repositioned or minimised.

== Description ==

When the plugin is active, the admin metaboxes are glued in place by default so they cannot be inadvertently repositioned by dragging or minimised or tapping.

A checkbox in a metabox allows the metaboxes to be temporarily unglued until the page is reloaded or another page is loaded. This Unlock metabox can be hidden in the screen options for the post type.

== Installation ==

1. Upload the plugin folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can the ability to reposition metaboxes be toggled via a button? =

Yes this plugin adds a new metabox in the admin sidebar containing a button which will enable you to temporarily unglue the metaboxes until the page is reloaded or another page is loaded.

= Can I glue the metaboxes only for my editor account? =

This is not supported currently, but it may be possible to add this feature in the future if this is a popular requirement or if someone commissions the work.

= Does this also prevent widgets begin dragged? =

Nope - they are not metaboxes, and do not appear on the post editor so they are not affected.

= How do I hide Metabox Glue's own metabox so I can keep the metaboxes locked? =

Uncheck the 'Metabox Glue' option in the Screen Options for each post type.

= Why doesn't it work? =

It works for me, so there might be a problem local to your site. Please ask for help on the forum. Don't forget to give details of your site.

= I am using the plugin and I love it. How can I show my appreciation? =

You can donate any amount via [my donation page](https://cubecolour.co.uk/wp/ "cubecolour donation page").

If you find this plugin useful, I would also appreciate a review on the [plugin review page](https://wordpress.org/support/view/plugin-reviews/cubecolour-metabox-glue/ "Metabox Glue plugin reviews")

= Are there any other free plugins by the same author? =

Yes these are listed on the [cubecolour plugins page on WordPress.org](https://profiles.wordpress.org/numeeja/#content-plugins "cubecolour plugins on WordPress.org").

== Screenshots ==

1. In the post/page editor, a button in the 'Metabox Glue' metabox gives you the option to temporarily unglue the metaboxes.
2. You can hide the 'Metabox Glue' metabox using the screen options for each post type.

== Changelog ==

= 1.3.0 =
* Fixed issue with uninstall

= 1.2.4 =
* The checkbox in the metabox glue metabox was having no effect. Removed quotes around true & false values for 'disabled' parameter of 'sortable' property to fix.

= 1.2.3 =
* Corrected broken plugin page links

= 1.2.2 =
* Conditionally enqueue the script only on the post editor page

= 1.2.1 =
* Prevent metaboxes minimising/expanding when Glued

= 1.2.0 =
* Moved the Unglue button into its own Meta Box on the post editor only
* Replaced the 'lock' icon with a yes/no tick/cross

= 1.1.1 =
* Bugfix for invalid markup

= 1.1.0 =
* Added unglue button to temporarily allow metaboxes to be repositioned

= 1.0.0 =
* Initial Version

== Upgrade Notice ==

= 1.3.0 =
* Fixed issue with uninstall

= 1.2.4 =
* The checkbox in the metabox glue metabox was having no effect. Removed quotes around true & false values for 'disabled' parameter of 'sortable' property to fix.

= 1.2.3 =
* Corrected broken plugin page links

= 1.2.2 =
* Conditionally enqueue the script only on the post editor page

= 1.2.1 =
* Prevent metaboxes minimising/expanding when Glued

= 1.2.0 =
* Moved the Unglue button into its own Meta Box

= 1.1.1 =
* Bugfix for invalid markup

= 1.1.0 =
* Added unglue button to temporarily allow metaboxes to be repositioned

= 1.0.0 =
* Initial Version
