<?php
namespace CodeDodamPlugin\Supplys;

use CodeDodamPlugin\Models\LaunchSupplyModel;

class LaunchSupply
{
	private $nameSpace;
	private $installDir;
	private $composerDir;
	private $adminDir;
	private $frontDir;
	private $siteDir;
	private $ajaxDir;
	private $arrayDir;
	private $classFileName;

	public function __construct() {}

	/**
	 * @param string $dirName composer directory location
	 * @param string $nameSpace
	 * @param string $installDir Installs directory name
	 */
	public function install( $dirName, $nameSpace, $installDir = 'Launchs' ) {
		$this->nameSpace   = $nameSpace;
		$this->installDir  = $installDir;
		$this->composerDir = LaunchSupplyModel::composerDirectory( $dirName );

		$this->adminDir = LaunchSupplyModel::adminDirectory();
		$this->ajaxDir  = LaunchSupplyModel::ajaxDirectory();
		$this->frontDir = LaunchSupplyModel::FrontEndDirectory();
		$this->siteDir  = LaunchSupplyModel::siteDirectory();

		$this->classFileName = LaunchSupplyModel::autoloadClassMapFile();

		$this->arrayDir = [];

		$this->installEntrance();
		$this->installClasses();
	}

	/**
	 * Install
	 */
	private function installEntrance()
	{
		if ( is_admin() ) {
			$this->addInstallDir( $this->adminDir );
		} else if ( wp_doing_ajax() ) {
			$this->addInstallDir( $this->ajaxDir );
		} else {
			$this->addInstallDir( $this->frontDir );
		}

		$this->addInstallDir( $this->siteDir );
	}

	/**
	 * Install Classes
	 */
	private function installClasses()
	{
		$classMapFile = $this->composerDir . '/' . $this->classFileName;

		if ( file_exists( $classMapFile ) ) {
			$nameSpace = $this->nameSpace . '\\' . $this->installDir;
			$classMap = require_once $classMapFile;

			foreach ( $this->arrayDir as $dir ) {
				foreach ( $classMap as $instance => $value ) {
					if ( strpos( $instance, $nameSpace . '\\' . $dir . '\\' ) !== false ) {
						$instance = new $instance();

						if ( $instance->isActivated() ) {
							$instance->init();
						} else {
							unset( $instance );
						}
					}
				}
			}
		}
	}

	/**
	 * Install Directory
	 *
	 * @param $dir
	 */
	private function addInstallDir( $dir )
	{
		array_push( $this->arrayDir, $dir );
	}
}