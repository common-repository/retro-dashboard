=== Plugin Name ===
Contributors: mpwalsh8 (Mike Walsh)
Donate link: 
Tags: admin, dashboard, theme
Requires at least: 2.5
Tested up to: 2.5.1
Stable tag: trunk

This plugin implements an admin theme which results in the Dashboard looking
similar (but not exactly) to how it looked prior to the 2.5 release.

== Description ==

The 2.5 release dramatically changed the layout of the Wordpress Dashboard.
This plugin implements an admin theme which results in the Dashboard looking
similar (but not exactly) to how it looked prior to the 2.5 release.  This is
implemented using CSS declarations which take precedence over those shipped
with Wordpress.

This plugin also supports Andy Staines' [Advanced Admin Menus](http://www.stuff.yellowswordfish.com/admin-drop-down-menus/ "Advanced Admin Menus") and similarly
employs CSS declarations which take precendence over those shipped with the
plugin.  The result is Advanced Admin Menus which look closer to those shipped
in Andy's pre-2.5 plugin.  The required "click" to activate a menu remains.

This plugin has been tested (but not exhaustively) with IE7, Firefox 2.x,
Apple's Safari all running on the Windows platform.  No other testing has
been performed.  I personally use IE most of the time but that is largely
due to some thing I use at work which require IE.

== Installation ==

1. Download the plugin and unzip it
1. Upload `retro-dashboard` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Optional: Change Dashboard color scheme to "Classic" (it will look better)

== Frequently Asked Questions ==

= Why did you do this? =

Because I prefer the appearance of the Dashboard in the pre-2.5 Wordpress
release and I like to see some whitespace and subtle borders on web pages.

= Can I change the colors you chose? =

Absolutely - they are all in the supplied CSS file.

= Can to change this plugin so it can be configured from the Dashboard? =

Not right now but it is something I'd like to do.  I am not sure when
I'll get to it though.  This effort resulted from a project I am
working on which exposed the End User to the dashboard extensively and
the new 2.5 Dashboard wasn't a good fit (look nor usage) with the plugin
I am working on.

= What plugin in that? =

wp-swimteam - a Wordpress plugin which extends Wordpress to allow it to
be used to manage a Youth Swim Team.  You can find more information on
[wp-swimteam](http://wp-swimteam.sourceforge.net "wp-swimteam") can
be found at on the plugin home page.
An answer to that question.

= Do you want some help? =

Sure - I make no claims to be a CSS expert by any means.  There are lots
of people who are much smarter than I and if you know CSS and want to help,
let me know.  There are a couple things I'd love to figure out how to do
but don't have the CSS expertise nor the time to gain it right now.

== Screenshots ==

1. Without any plugins active.
2. With RetroDashboard active and Admin Menus inactive.
3. With RetroDashboard inactive and Admin Menus active.
4. With RetroDashboard active and Admin Menus active.

== Credits ==

I got the idea to do this after looking at the
[Fluency Admin Theme](http://deanjrobinson.com/projects/fluency-admin/ "Fluency Admin There"),
which doesn't support IE or I probably would have used it, and the
[Baltic Amber](http://wordpress.org/extend/plugins/baltic-amber-admin-themes-and-schemes/ "Baltic Amber") theme.
Fluency redesigns the Dashboard and Baltic Amber offers multiple color choices
for the Dashboard.  After seeing how Baltic Amber loaded, I realized I
could do something similar for the CSS declarations I wanted to change.
It was surprisingly easy.
