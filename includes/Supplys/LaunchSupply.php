<?php
namespace CodeDodamPlugin\Supplys;

use CodeDodamPlugin\Models\ModelLaunchSupply;

class LaunchSupply {

	private $nameSpace;
	private $InstallDir;
	private $composerDir;
	private $adminDir;
	private $frontEndDir;
	private $siteDir;
	private $ajax;
	private $classMapFile;
	private static $autoLoadClass = null;

	public function __construct() {
	}

	/**
	 * @param string $dirName composer directory location
	 * @param string $nameSpace
	 * @param string $InstallDir Installs directory name
	 */
	public function install( $dirName, $nameSpace, $InstallDir = 'Launchs' ) {
		$this->nameSpace    = $nameSpace;
		$this->InstallDir   = $InstallDir;
		$this->composerDir  = ModelLaunchSupply::composerDirectory( $dirName );
		$this->adminDir     = ModelLaunchSupply::adminDirectory();
		$this->frontEndDir  = ModelLaunchSupply::FrontEndDirectory();
		$this->siteDir      = ModelLaunchSupply::siteDirectory();
		$this->ajax         = ModelLaunchSupply::ajaxDirectory();
		$this->classMapFile = ModelLaunchSupply::autoloadClassMapFile();

		$this->installClasses();
		$this->installEntrance();
	}

	/**
	 * Install Admin
	 */
	private function installAdmin() {
		$this->installImplement( $this->adminDir );
	}

	/**
	 * Install Ajax
	 */
	private function installAjax() {
		$this->installImplement( $this->ajax );
	}

	/**
	 * Install Front-end
	 */
	private function installFrontEnd() {
		$this->installImplement( $this->frontEndDir );
	}

	/**
	 * Install site/admin All
	 */
	private function installSite() {
		$this->installImplement( $this->siteDir );
	}

	/**
	 * Install
	 */
	private function installEntrance() {
		if ( wp_doing_ajax() ) {
			$this->installAjax();
		} else {
			if ( is_admin() ) {
				$this->installAdmin();
			} else {
				$this->installFrontEnd();
			}

			$this->installSite();
		}
	}

	/**
	 * @param $dir
	 */
	private function installImplement( $dir ) {
		if ( isset( self::$autoLoadClass[ $dir ] ) && is_array( self::$autoLoadClass[ $dir ] ) ) {
			foreach ( self::$autoLoadClass[ $dir ] as $key => $Install ) {
				new $Install[0];
			}
		}
	}

	/**
	 * Install Classes
	 */
	private function installClasses() {
		if ( is_null( self::$autoLoadClass ) ) {
			self::$autoLoadClass = array();

			$classMapFile = $this->composerDir . '/' . $this->classMapFile;

			if ( file_exists( $classMapFile ) ) {
				$nameSpace = $this->nameSpace . '\\' . $this->InstallDir;
				$classMap  = require $classMapFile;

				foreach ( $classMap as $key => $value ) {
					if ( strpos( $key, $nameSpace . '\\' . $this->adminDir . '\\' ) !== false ) {
						self::$autoLoadClass[ $this->adminDir ][] = array( $key, $value );
					} else if ( strpos( $key, $nameSpace . '\\' . $this->frontEndDir . '\\' ) !== false ) {
						self::$autoLoadClass[ $this->frontEndDir ][] = array( $key, $value );
					} else if ( strpos( $key, $nameSpace . '\\' . $this->ajax . '\\' ) !== false ) {
						self::$autoLoadClass[ $this->ajax ][] = array( $key, $value );
					} else if ( strpos( $key, $nameSpace . '\\' ) !== false ) {
						self::$autoLoadClass[ $this->siteDir ][] = array( $key, $value );
					}
				}
			}
		}
	}
}