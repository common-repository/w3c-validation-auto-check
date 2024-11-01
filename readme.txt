=== Plugin Name ===
Contributors: tammax
Tags: w3c validation, w3c, check validation, validation
Requires at least: 3.0.2
Tested up to: 3.3.2
Stable tag: 1.5.1

Automatically checks the validity of the page with the service provided by the site http://validator.w3.org/

== Description ==

Automatically checks the validity of the page with the service provided by the site http://validator.w3.org/

Verifica in automatico la validità della pagina grazie al servizio fornito dal sito http://validator.w3.org/

== Installation ==

How to install the plugin and get it working.

1. Upload `w3c` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php if ( function_exists('w3c_check_validation') ) { w3c_check_validation(); }  ?>` in your templates

The plugin requires jQuery is loaded

== Frequently Asked Questions ==

= Can I customize the plugin? =

To customize the plugin you can edit the file and change the lines of the two variables:

URL_isValid

URL_isINValid

you can insert text or images that you like better.

The result is displayed in `<span id="validHTML"> </ span>` and you can change it at your leisure with a DIV or a P, and that the important 'ID tags that use both id = "validHTML"

= Posso personalizzare il plugin? =

Per personalizzare il plugin potete editare il file e modificare le righe delle due variabili :

URL_isValid

URL_isINValid

potete inserire immagini testi o quello che vi pare meglio.

Il risultato viene visualizzato in `<span id="validHTML"></span>` e potete modificarlo a vostro piacere con un DIV o un P , l'importante e che l' ID del tag che usate sia  id="validHTML"

== Changelog ==

= 1.5.1 =
* Change readme file 
* Set new folder path

= 1.5 =
* First public release