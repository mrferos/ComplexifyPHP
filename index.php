<?php

require 'Complexify.php';

/**
 * Set global configuration options via the setConfig method
 *
 * object(stdClass)#1 (2) {
 *  ["complexity"]=>
 *   int(100)
 *   ["valid"]=>
 *   bool(false)
 *   }
 */
Complexify::setConfig(array('minimumChars' => 50));
var_dump(Complexify::evaluate('this is a really long password, right?'));

/**
 * Override global configuration options by specifying config options
 * as a second argument
 *
 * object(stdClass)#1 (2) {
 *   ["complexity"]=>
 *   int(100)
 *   ["valid"]=>
 *   bool(true)
 *   }
 */
var_dump(Complexify::evaluate('this is a really long password, right?', array('minimumChars' => 8)));