<?php

/**
 * @file
 * 
 * @brief   Do Not Repeat Yourself: Metadata for <head>
 *
 * @detail Defines metadata intended for <head> of all html pages
 *
 * PHP version 5
 *
 * @category    functions
 * @package     backend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 * @todo        This isn't used. Decide whether or not it could be & should be
 */


/**
 * @fn
 * 
 * @brief   Uses here doc to echo metadata for all html
 * 
 * This is not used but at some point it was decided this was a good idea, and that was probably wise. Echoes $metadata instead of returning string.
 * 
 */
function write_metadata()
{
    $metadata = <<<EOF
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1'>
		<meta name="apple-mobile-web-app-capable" content="yes">
EOF;
    echo $metadata;
}