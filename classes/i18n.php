<?php defined('SYSPATH') or die('No direct script access.');

class I18n extends Kohana_I18n
{
    // Intentionally empty
}

/**
 * Translation method, including replacing of values
 *
 * @param  string  message to translate
 * @param  array   keys => values to replace
 * @return string
 */
function __($string, array $values = NULL)
{
	$string = _($string);

	return empty($values) ? $string : strtr($string, $values);
}