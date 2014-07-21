<?php

/**
 * @file
 * 
 * @brief Configuration Variables
 *
 * @detail Defines organization, brand, address, other stuff perceived to be static
 *
 * PHP version 5
 *
 * @category    Configuration
 * @package     backend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

/**
 * web app base URI
 */
$base_uri = "../"; // why change?

/**
 * URI of full organization site
 */
$desktop_site = "http://chelseaschool.edu";

/**
 * Organization's name
 */
$organization = "Chelsea School";

 /**
  * Probably the same as organization. String will appear at the top left of the navigation bar.
  */
$brand = $organization; // for top navbar


/**
 * @brief   Code generated and provided by Paypal for a payment button
 * 
 * Uses heredoc. Edit between EOF and EOF; Variables will be interpreted it. String will appear as written except: variables will be interpreted.
 */
$paypal_code = <<<EOF

Paste code here

EOF;

/**
 * Street Address only, for navigation or postal mail
 */
$address_street = "711 Pershing Drive";

/**
 * State for postal contact
 */

$address_state = "Maryland";

/**
 * City or town, for navigation or postal contact
 */
$address_city = "Hyattsville";

/**
 * Part of city: Such as NY, Queens, S.E., N.E.
 * 
 * Set to null value if this isn't relevant
 */
$address_burrough = "";

/**
 * Postal Zip for navigation or postal contact
 */
$address_zip = "20910";

/**
 * Additional location information
 * 
 * May contain suite #, apartment #, floor #. Set to ""; for no value if this isn't relevant
 */
$address_additional = "Fourth Floor";

/**
 * Contact phone number. Will be used in conjunction with HTML5 tel type link.
 */
$phone = "13015851430";

/**
 * Fax number.
 * 
 * Unused/null by default.
 */
$fax = "";

/**
 * Copyright (year and org) preceded by $copy;
 */

$copyright = "&copy; 2014 Chelsea School";

/**
 * GPLv2 or greater required
 */
$license_name = "GPLv2";

/**
 * URL for license
 */
$license_url = "http://www.gnu.org/licenses/gpl-2.0.html";

/**
 * This determines the bootstrap theme from bootswatch
 *
 * Viable options articulated at http://bootswatch.com/
 */
$bootswatch = "cerulean";

/**
 * Developers' Credit
 */

$developers = "Micah, James, Bryan, Andre, Rik Goldman, Davey Vest";







