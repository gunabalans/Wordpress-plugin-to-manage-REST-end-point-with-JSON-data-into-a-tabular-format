=== Kilinjal ===
Contributors: Gunabalan
Tags: REST, AJAX, JSON
Tested up to: 7.4.0
Requires PHP: 5.6.4.0
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Wordpress plugin to manage REST end  point with JSON data into a tabular format.

== Description ==
The plugin will parse the JSON response and will use it to build and display an HTML table.

==Installation steps==

Add the following composer in the wp instllation  directory and modify according to your need


{
  "name": "netkathir/wordpress-appliction",
  "description": "WordPress is open source software you can use to create a beautiful website, blog, or app.",
  "type": "wordpress-application",
  "homepage": "http://netkathir.com",
  "license": "GPL-2.0-or-later",
  "authors": [
    {
      "name": "Gunabalans@yahoo.com",
      "homepage": "http://netkathir.com/about/"
    }
  ],
  "repositories": [
    {
      "type": "composer",
      "url": "https://wpackagist.org"
    }
  ],
  "require": {
    "kilinjal/kilinjal":"v1.1",
    "php": ">=5.6.20"
  },

  "extra": {
    "installer-paths": {
        "./wp-content/plugins/{$name}/": ["kilinjal/kilinjal"]
    }
   },
   "autoload": {
    "psr-4": {
      "Kilinjal\\": "wp-content/plugins/kilinjal/"
    }
  }
}
