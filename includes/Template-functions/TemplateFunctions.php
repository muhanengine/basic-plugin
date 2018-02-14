<?php
namespace CodeDodamPlugin\Template_function\Template_function;

/**
 * @param string $func
 * @param string $name
 * @param string $value
 * @param string $id
 * @param string $class
 * @param string $style
 *
 * @return string
 */
function getSelectMenu( $func, $name = '', $value = '', $id = '', $class = '', $style = '' )
{
	$htmlTag    = '';
	$attributes = '';

	if ( ! empty($name) ) {
		$attributes .= ' name="'. $name .'"';
	}

	if ( ! empty($id) ) {
		$attributes .= ' id="'. $id .'"';
	}

	if ( ! empty($class) ) {
		$attributes .= ' class="'. $class .'"';
	}

	if ( ! empty($style) ) {
		$attributes .= ' style="'. $style .'"';
	}

	$htmlTag .= '<select' . $attributes . '>';
	$htmlTag .= getSelectOptions( $func, array($value) );
	$htmlTag .= '</select>';

	return $htmlTag;
}

/**
 * @param string $func
 * @param array $value
 *
 * @return string
 */
function getSelectOptions( $func, $value = array() )
{
	$option = '';
	$funcName = __NAMESPACE__ .'\\'. $func;

	if ( function_exists($funcName) ) {
		$option .= call_user_func_array( $funcName, $value );
	}

	return $option;
}

/**
 * @param $value
 *
 * @return string
 */
function getOptionYear( $value )
{
	$expr1 = current_time( 'Y' );
	$expr2 = date( 'Y', strtotime("+1 year") );
	$expr3 = 1;

	if ( empty($value) ) {
		$value = $expr1;
	}

	return getOptionTag( $expr1, $expr2, $expr3, $value );
}

/**
 * @param $value
 *
 * @return string
 */
function getOptionMonth( $value )
{
	$expr1 = 1;
	$expr2 = 12;
	$expr3 = 1;

	if ( empty($value) ) {
		$value = current_time( 'm' );
	}

	return getOptionTag( $expr1, $expr2, $expr3, $value, 'sprintf', array('%02d') );
}

/**
 * @param $value
 *
 * @return string
 */
function getOptionDay( $value )
{
	$expr1 = 1;
	$expr2 = 31;
	$expr3 = 1;

	if ( empty($value) ) {
		$value = current_time( 'd' );
	}

	return getOptionTag( $expr1, $expr2, $expr3, $value, 'sprintf', array('%02d') );
}

/**
 * @param $value
 *
 * @return string
 */
function getOptionTime( $value )
{
	$expr1 = 1;
	$expr2 = 23;
	$expr3 = 1;

	if ( empty($value) ) {
		$value = current_time( 'H' );
	}

	return getOptionTag( $expr1, $expr2, $expr3, $value, 'sprintf', array('%02d') );
}

/**
 * @param $value
 *
 * @return string
 */
function getOptionMinute( $value )
{
	$expr1 = 0;
	$expr2 = 55;
	$expr3 = 5;

	//if ( empty($value) ) {
	//	$value = sprintf( '%02d', );
	//}

	return getOptionTag( $expr1, $expr2, $expr3, $value, 'sprintf', array('%02d') );
}

/**
 * @param $expr1
 * @param $expr2
 * @param $expr3
 * @param $value
 * @param string $callback
 * @param array $paramArr
 *
 * @return string
 */
function getOptionTag( $expr1, $expr2, $expr3, $value, $callback = '' , $paramArr = array() )
{
	$optionTag = '';

	$expr  = (int) $expr1;
	$expr2 = (int) $expr2;
	$expr3 = (int) $expr3;

	while ( $expr <= $expr2 ) {
		$text = $expr;
		if ( ! empty($callback) ) {
			$array = $paramArr;
			array_push( $array, $text );
			$text = call_user_func_array( $callback, $array );
		}

		$selected = '';
		if ( $value == $text ) {
			$selected = 'selected="selected"';
		}

		$optionTag .= '<option value="' . $text . '" ' . $selected . '>' . $text . '</option>';

		$expr += $expr3;
	}

	return $optionTag;
}