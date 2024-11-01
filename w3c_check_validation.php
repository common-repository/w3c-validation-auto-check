<?php
/*
Plugin Name: W3C validation auto check
Plugin URI: hhttp://tammax.it/
Description: Automatically checks the validity of the page with the service provided by the site http://validator.w3.org/
Author: Tammax
Version: 1.5.1
Author URI: http://tammax.it


Copyright 2009  tammax  (tammax@tammax.it)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



/*ADD SCRIPT TO HEADER */
function w3c_check_validation_script() {
	
	echo '<script type="text/javascript" src="' . plugins_url() . '/w3c-validation-auto-check/jquery.w3cValidator.js' . '"></script>' . "\n";
	
}

add_action('wp_head', 'w3c_check_validation_script');



function w3c_check_validation() {


echo '<span id="validHTML"></span>
<script type="text/javascript">
/* <![CDATA[ */
jQuery("#validHTML").w3cValidator({
     parserLocation: "' . plugins_url() . '/w3c-validation-auto-check/w3cValidator.php",
	 URL_isValid: \'Valid HTML <img src="' . plugins_url() . '/w3c-validation-auto-check/ok.png" alt="XHTML 1.1 Validate" />\',
     URL_isInvalid: \'HTML is not valid <img src="' . plugins_url() . '/w3c-validation-auto-check/ko.png" alt="XHTML 1.1 Not Validate" />\'
  });
  /* ]]> */
  </script>';

}


?>