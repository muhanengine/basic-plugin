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
	public function launch( $dirName, $nameSpace, $installDir = 'Launchs' ) {
		$this->nameSpace   = $nameSpace;
		$this->installDir  = $installDir;
		$this->composerDir = LaunchSupplyModel::composerDirectory( $dirName );

		$this->adminDir = LaunchSupplyModel::adminDirectory();
		$this->ajaxDir  = LaunchSupplyModel::ajaxDirectory();
		$this->frontDir = LaunchSupplyModel::FrontEndDirectory();
		$this->siteDir  = LaunchSupplyModel::siteDirectory();

		$this->classFileName = LaunchSupplyModel::autoloadClassMapFile();

		$this->arrayDir = [];

		$this->launchEntrance();
		$this->launchClasses();
	}

	/**
	 * Install
	 */
	private function launchEntrance()
	{
		if ( is_admin() ) {
			$this->addLaunchDir( $this->adminDir );
		} else {
			$this->addLaunchDir( $this->frontDir );
		}

		if ( wp_doing_ajax() ) {
			$this->addLaunchDir( $this->ajaxDir );
		}

		$this->addLaunchDir( $this->siteDir );
	}

	/**
	 * Install Classes
	 */
	private function launchClasses()
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
	private function addLaunchDir( $dir )
	{
		array_push( $this->arrayDir, $dir );
	}
}