ComplexifyPHP
====================

###This is just a shameless port of Dan Palmer's jQuery [Complexify plugin](http://danpalmer.me/jquery-complexify)

#### Code Examples:

```php
// Setting configuration
\Complexify\Complexify::setConfig(array(
	'minimumChars' => 8 // Default value
));


var_dump(\Complexify\Complexify::evaluate('th1s !5 @ p@$$w0rd'));
/**
 * object(stdClass)#1 (2) {
 *  ["complexity"]=>
 *  float(60.906645158196)
 *  ["valid"]=>
 *  bool(true)
 * }
*/

// Overriding the 'global' configuration
var_dump(\Complexify\Complexify::evaluate('th1s !5 @ p@$$w0rd', array('minimumChars' => 50)));
/**
 * object(stdClass)#1 (2) {
 *  ["complexity"]=>
 *  float(60.906645158196)
 *  ["valid"]=>
 *  bool(false)
 * }
*/


```
