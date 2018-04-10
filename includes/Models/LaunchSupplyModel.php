<?php
namespace CodeDodamPlugin\Models;

use function CodeDodamPlugin\Libs\Utils\_isset;

class LaunchSupplyModel
{
	/**
	 * @param string $key
	 * @return array|mixed|null
	 */
	public static function &getScheme( $key = '' ) {
		static $scheme = null;

		if ( is_null( $scheme ) ) {

			$scheme = array();

			$scheme['Admin'] = array(
				'value'       => 'Admin',
				'description' => __( 'Install admin directory', _DODAM_ICODE_TEXT_DOMAIN_ ),
			);

			$scheme['Site'] = array(
				'value'       => 'Site',
				'description' => __( 'Install site directory', _DODAM_ICODE_TEXT_DOMAIN_ ),
			);

			$scheme['Front-end'] = array(
				'value'       => 'Front_end',
				'description' => __( 'Install front-end directory', _DODAM_ICODE_TEXT_DOMAIN_ ),
			);

			$scheme['Ajax'] = array(
				'value'       => 'Ajax',
				'description' => __( 'Install ajax directory', _DODAM_ICODE_TEXT_DOMAIN_ ),
			);

			$scheme['autoload_classmap'] = array(
				'value'       => 'autoload_classmap.php',
				'description' => __( 'Composer Autoload Load Class Map File Name', _DODAM_ICODE_TEXT_DOMAIN_ ),
			);
		}

		if ( ! empty($key) ) {
			$value = _isset( $key, $scheme );
			return $value;
		} else {
			return $scheme;
		}
	}

	/**
	 * Composer Directory
	 * @param string $dirName
	 * @return string
	 */
	public static function composerDirectory( $dirName )
	{
		$composerDir = $dirName .'/vendor/composer';
		return $composerDir;
	}

	/**
	 * Install admin directory
	 * @return string
	 */
	public static function adminDirectory()
	{
		return self::getValue( 'Admin' );
	}

	/**
	 * Install Front-end directory
	 * @return string
	 */
	public static function FrontEndDirectory()
	{
		return self::getValue( 'Front-end' );
	}

	/**
	 * @return string
	 */
	public static function siteDirectory()
	{
		return self::getValue( 'Site' );
	}

	/**
	 * @return string
	 */
	public static function ajaxDirectory()
	{
		return self::getValue( 'Ajax' );
	}

	/**
	 * Composer Autoload Load Class Map File
	 * @return string
	 */
	public static function autoloadClassMapFile()
	{
		return self::getValue( 'autoload_classmap' );
	}

	/**
	 * return scheme value
	 * @param string $key key name
	 * @return string
	 */
	public static function getValue( $key )
	{
		$data = &self::getScheme( $key );
		return _isset( 'value', $data );
	}
}