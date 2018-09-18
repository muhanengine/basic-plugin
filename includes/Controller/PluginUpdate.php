<?php

namespace CodeDodamPlugin\Controllers;

class PluginUpdate
{
    private $initiated = false;

    /**
     * The plugin current version
     * @var string
     */
    public $currentVersion;
 
    /**
     * The plugin remote update path
     * @var string
     */
    public $updatePath;
 
    /**
     * Plugin Slug (plugin_directory/plugin_file.php)
     * @var string
     */
    public $pluginSlug;
 
    /**
     * Plugin name (plugin_file)
     * @var string
     */
    public $slug;

    /**
     * Initialize a new instance
     */
    function __construct() {}

	/**
	 * Initializer for setting up action handler
	 */
	public function phpVersionCheck()
	{
		if ( version_compare(phpversion(), '5.6', '<') ) {
			add_action( 'admin_notices', function () {
				$message = __( 'SMS (ICODE) plugin requires PHP version 5.6 or later.', _DODAM_ICODE_TEXT_DOMAIN_ );
				echo '<div class="notice notice-error"><p>'. $message .'</p></div>';
			});

			return false;
		}

		return true;
	}

    /**
     * Initializer for setting up action handler
     *
     * @param string $mainFile 플러그인 파일 절대경로
     */
    public function initHooks( $mainFile )
    {
        $this->initiated = true;

        register_activation_hook( $mainFile, array( $this, 'pluginInstall' ) ); // 플러그인 활성화 호출
        register_deactivation_hook( $mainFile, array( $this, 'pluginUninstall' ) ); // 플러그인 비활성화 호출
    }

    /**
     * Initialize a new instance of the WordPress Auto-Update class
     * @param [string] $current_version 버전명
     * @param [string] $update_path     업데이트 파일 경로
     * @param [string] $plugin_slug     슬러그명
     */
    public function autoUpdateCheck( $currentVersion, $updatePath, $pluginSlug )
    {
        // Set the class public variables
        $this->currentVersion = $currentVersion;
        $this->updatePath     = $updatePath;
        $this->pluginSlug     = $pluginSlug;
	    /** @noinspection PhpUnusedLocalVariableInspection */
        list ( $t1, $t2 )      = explode( '/', $pluginSlug );
        $this->slug            = str_replace('.php', '', $t2);
 
        // define the alternative API for updating checking
        add_filter( 'pre_set_site_transient_update_plugins', array(&$this, 'checkUpdate') );
 
        // Define the alternative response for information checking
        add_filter( 'plugins_api', array(&$this, 'checkInfo'), 10, 3 );
    }
 
    /**
     * Add our self-hosted autoupdate plugin to the filter transient
     *
     * @param $transient
     * @return object $transient
     */
    public function checkUpdate( $transient )
    {
        if ( empty($transient->checked) ) {
            return $transient;
        }
 
        // Get the remote version
        $remote_version = $this->getRemoteVersion();
 
        // If a newer version is available, add the update
        if ( version_compare($this->currentVersion, $remote_version, '<') ) {
            $obj = new \stdClass();

            $obj->slug        = $this->slug;
            $obj->new_version = $remote_version;
            $obj->url         = $this->updatePath;
            $obj->package     = $this->updatePath;

            $transient->response[$this->pluginSlug] = $obj;

            update_option( 'leebon-plugin-version', $remote_version );
        }

        return $transient;
    }

    /**
     * Add our self-hosted description to the filter
     *
     * @param boolean $false
     * @param array   $action
     * @param object  $arg
     * @return bool|object
     */
    public function checkInfo( /** @noinspection PhpUnusedParameterInspection */$false, /** @noinspection PhpUnusedParameterInspection */$action, $arg )
    {
        if ( isset($arg->slug) && $arg->slug === $this->slug ) {
            $information = $this->getRemoteInformation();
            return $information;
        }
        return false;
    }
 
    /**
     * Return the remote version
     * @return string $remote_version
     */
    public function getRemoteVersion()
    {
        $request = wp_remote_post( $this->updatePath, array( 'body' => array( 'action' => 'version') ) );
        if ( !is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) === 200 ) {
            return $request['body'];
        }
        return false;
    }
 
    /**
     * Get information about the remote version
     * @return bool|object
     */
    public function getRemoteInformation()
    {
        $request = wp_remote_post( $this->updatePath, array( 'body' => array( 'action' => 'info') ) );
        if ( !is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) === 200 ) {
            return unserialize($request['body']);
        }
        return false;
    }
 
    /**
     * Return the status of the plugin licensing
     * @return boolean $remote_license
     */
    public function getRemoteLicense()
    {
        $request = wp_remote_post( $this->updatePath, array( 'body' => array( 'action' => 'license') ) );
        if ( !is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) === 200 ) {
            return $request['body'];
        }
        return false;
    }

    /**
     * registers a plugin function
     */
    public function pluginInstall()
    {
    }

    /**
     * deactivation hook function
     */
    public function pluginUninstall()
    {
    }
}
