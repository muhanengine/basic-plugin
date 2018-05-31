<?php
/**
 * @Description:
 */

namespace CodeDodamPlugin\Interfaces;

interface InterfaceLaunch
{
	/**
	 * this init
	 */
	public function init();

	/**
	 * Beginning for setting up action handler
	 */
	public function initHooks();

	/**
	 * Check activation
	 */
	public function isActivated();
}