<?php
/**
 * Created by PhpStorm.
 * User: MuhanEngine
 * Date: 2017. 12. 26.
 * Time: PM 12:27
 */

namespace CodeDodamPlugin\Libs\Functions;

use function CodeDodamPlugin\Libs\Utils\_isset;
use function CodeDodamPlugin\Libs\Utils\getFuncVar;

/**
 * 템플릿 파일 불러오기
 *
 * @param string $template_name 파일명
 * @param array $args
 * @param string $template_path 파일경로
 * @param string $extension
 */
function getTemplatePart( $template_name, &$args = array(), $template_path = '', $extension = 'php' )
{
	if ( ! empty($args) && is_array( $args ) ) {
		extract( $args );
	}

	$located = getTemplateFilePath( $template_name, $template_path, $extension );

	if ( file_exists($located) ) {
		@require( $located );
	}
}

/**
 * 템플릿 파일 버퍼 출력
 *
 * @param string $template_name 파일명
 * @param array $args 전달값
 * @param string $template_path 파일경로
 * @param string $extension
 *
 * @return string
 */
function getTemplateRender( $template_name, &$args = array(), $template_path = '', $extension = 'php' )
{
	if ( ! empty($args) && is_array( $args ) ) {
		extract( $args );
	}

	$located = getTemplateFilePath( $template_name, $template_path, $extension );

	if ( file_exists($located) ) {
		ob_start();
		@require( $located );
		$buffer = ob_get_contents();
		@ob_end_clean();

		return $buffer;
	}

	return null;
}

/**
 * 템플릿 파일경로
 * @param string $template_name 파일명
 * @param string $template_path 파일경로
 * @param string $extension 파일확장자
 * @return string
 */
function getTemplateFilePath( $template_name, $template_path = '', $extension = 'php' )
{
	$located = '';

	if ( ! empty($template_name) ) {
		if ( ! $template_path ) {
			$located = dirname( dirname( __FILE__ ) ) . '/Templates/' . $template_name . '.'. $extension;
		} else {
			$located = $template_path . $template_name . '.'. $extension;
		}
	}

	return $located;
}

/**
 * Escaping for HTML attributes.
 * @param  string $text    input text
 * @param  string $default default text
 * @param  string $func    esc_attr(default), esc_html, esc_url, esc_sql
 * @return string          Escaping for HTML...
 */
function getEscaping( $text, $default = '', $func = 'esc_attr' )
{
	if ( empty($text) ) {
		$text = $default;
	}

	if ( is_callable($func) ) {
		$text = getFuncVar( $text, $func );
	}

	return $text;
}

/**
 * Sanitize content for allowed HTML tags for post content.
 * @param  string $string           input text
 * @param  string $func             kses_post, kses
 * @param  array $allowed_html      (array) (Required) List of allowed HTML elements
 * @param  array $allowed_protocols (array) (Optional) Allowed protocol in links.Default value: array()
 * @return string                   Escaping for HTML...
 */
function getKses( $string, $func = 'kses_post', $allowed_html = array(), $allowed_protocols = array() )
{
	$text = $string;

	if ( ! empty($text) ) {
		switch ( $func ) {
			case 'kses_post':
				$text = wp_kses_post( $text );
				break;

			case 'kses':
				if ( empty($allowed_html) ) {
					$allowed_html = array(
						'a' => array(
							'href' => array(),
							'title' => array()
						),
						'br' => array(),
						'em' => array(),
						'strong' => array(),
					);
				}
				$text = wp_kses( $text, $allowed_html, $allowed_protocols );
				break;
		}
	}

	return $text;
}

/**
 * 배열 키네임 기준 정렬 변경
 * @param  array $arr
 * @return array
 */
function getSortArrayKey( &$arr )
{
	$arr_keys = array();

	if ( is_array($arr) && ! empty($arr) ) {
		$array = $arr;

		foreach ( array_keys($array) as $fieldKey ) {
			foreach ( $array[$fieldKey] as $key => $value ) {
				$arr_keys[$key][$fieldKey] = $value;
			}
		}
	}

	return $arr_keys;
}

/**
 * [verify_nonce description]
 * @param  string $nonce_value  Nonce to verify
 * @param  string $nonce_action Action name
 * @param  boolean $return      Return Values
 * @param  string $fail_message Fail Message
 * @return mixed|boolean
 */
function verifyNonce( $nonce_value, $nonce_action, $return = false, $fail_message = 'Nonce verification failed' )
{
	if ( ! wp_verify_nonce( $nonce_value, $nonce_action ) ) {
		if ( true === $return ) {
			return false;
		} else {
			wp_die( $fail_message );
		}
	}

	return true;
}

/**
 * Simple and handy object dump
 * @param object|array|string string
 */
function getDump( $obj )
{
	echo '<p><pre>' . print_r( $obj, TRUE ) . '</pre></p>';
}

/**
 * A safe way of adding/update a named option/value pair to the options database table
 * @param string $option_name Name of the option to be added/update
 * @param mixed  $new_value   Value for this option name
 * @param string $autoload    Should this option be automatically loaded
 */
function wpUpdateOption( $option_name, $new_value, $autoload = 'no' )
{
	if ( get_option( $option_name ) !== false ) {

		// The option already exists, so we just update it.
		update_option( $option_name, $new_value );

	} else {
		// The option hasn't been added yet. We'll add it with $autoload set to 'no'.
		$deprecated = null;
		add_option( $option_name, $new_value, $deprecated, $autoload );
	}
}

/**
 * Retrieves an option value based on an option name
 * @param string $option_name Name of the option
 * @param mixed  $default     Default value to return
 * @return null
 */
function wpGetOption( $option_name, $default = false )
{
	return get_option( $option_name, $default );
}

/**
 * Retrieve post meta field for a post.
 * @param array $key      The meta key to retrieve
 * @param int   $post_id  Post ID
 * @param bool  $single   return a single value. Default true.
 * @return mixed
 */
function wpArrayGetPostMeta( &$key, $post_id, $single = true )
{
	$meta = array();

	if ( is_array($key) ) {
		foreach ( $key as $key_name ) {
			$meta[$key_name] = wpGetPostMeta( $key_name, $post_id, $single );
		}
	}

	return $meta;
}

/**
 * Retrieve post meta field for a post.
 * @param string $key_name The meta key to retrieve
 * @param int    $post_id  Post ID
 * @param bool   $single   return a single value. Default true.
 * @return mixed
 */
function wpGetPostMeta( $key_name, $post_id, $single = true )
{
	$meta_value = get_post_meta( $post_id, $key_name, $single );
	return maybe_unserialize( $meta_value );
}

/**
 * Update post meta field for a post.
 * @param array $post_metas The meta key to retrieve
 * @param array $_post      POST Data
 * @param int   $post_id    Post ID
 */
function wpArrayUpdatePostMeta( &$post_metas, &$_post, $post_id )
{
	if ( is_array($post_metas) ) {
		foreach ( $post_metas as $post_name ) {
			// Save fields
			$post_value = _Isset( $post_name, $_post );
			if ( is_array($post_value) ) {
				$post_value = maybe_serialize( $post_value );
			} else {
				$post_value = sanitize_text_field( $post_value );
			}

			update_post_meta( $post_id, $post_name, $post_value );
		}
	}
}

/**
 * Send a POST requst using cURL
 * @param string $url to request
 * @param array $post values to send
 * @param array $options for cURL
 * @return string
 */
function curlPost( $url, array &$post = NULL, &$options = array() )
{
	$defaults = array(
		CURLOPT_POST           => TRUE,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_COOKIESESSION  => TRUE,
		CURLOPT_FORBID_REUSE   => TRUE,
		CURLOPT_FRESH_CONNECT  => TRUE,
		CURLOPT_URL            => $url,
		CURLOPT_POSTFIELDS     => http_build_query($post)
	);
	$defaults = $options + $defaults;

	/** @var array $defaults */
	return curlPerform( $defaults );
}

/**
 * Send a GET requst using cURL
 * @param string $url to request
 * @param array $options for cURL
 * @return string
 */
function curlGet( $url, &$options = array() )
{
	$defaults = array(
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_COOKIESESSION  => TRUE,
		CURLOPT_FORBID_REUSE   => TRUE,
		CURLOPT_FRESH_CONNECT  => TRUE,
		CURLOPT_URL            => $url,
	);
	$defaults = $options + $defaults;

	/** @var array $defaults */
	return curlPerform( $defaults );
}


/**
 * using cURL
 * @param array $defaults for cURL
 * @return mixed
 */
function curlPerform( &$defaults )
{
	try {
		$ch = curl_init();

		if ( FALSE === $ch ) {
			throw new \Exception( 'failed to initialize' );
		}

		curl_setopt_array( $ch, $defaults );
		$result = curl_exec($ch);

		if ( FALSE === $result ) {
			throw new \Exception( curl_error( $ch ), curl_errno( $ch ) );
		}

		curl_close( $ch );

		return $result;
	} catch ( \Exception $e ) {
		trigger_error( sprintf('Curl failed with error #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR );
	}

	return null;
}

/**
 * css, js 파일 불러오기
 * @param  string $file_path 파일경로명
 * @param  string $version   버전정보
 * @return string
 */
function includeCssJs( $file_path, $version = '' )
{
	$include = '';
	//$srcUrl  = '';

	$path_parts = pathinfo( $file_path );
	$srcUrl     = $file_path;

	if ( ! empty( $version ) ) {
		$srcUrl .= '?ver=' . $version;
	}
	$srcUrl = esc_url( $srcUrl );

	if ( $path_parts['extension'] == 'css' ) {
		$include = '<link type="text/css" rel="stylesheet" href="' . $srcUrl . '" />';
	} else if ( $path_parts['extension'] == 'js' ) {
		$include = '<script type="text/javascript" src="' . $srcUrl . '"></script>';
	}

	return $include;
}

/**
 * Registers a script to be enqueued later using the wp_enqueue_script() function.
 *
 * @param $handle
 * @param $src
 * @param array $deps
 * @param bool $ver
 * @param bool $in_footer
 */
function wpRegisterEnqueueScript( $handle, $src, $deps = array(), $ver = false, $in_footer = false )
{
	wp_register_script( $handle,
		$src,
		$deps,
		$ver,
		$in_footer );
	wp_enqueue_script( $handle );
}

/**
 * RRegister a CSS stylesheet.
 *
 * @param $handle
 * @param $src
 * @param array $deps
 * @param bool $ver
 * @param string $media
 */
function wpRegisterEnqueueStyle( $handle, $src, $deps = array(), $ver = false, $media = 'all' )
{
	wp_register_style( $handle,
		$src,
		$deps,
		$ver,
		$media );
	wp_enqueue_style( $handle );
}