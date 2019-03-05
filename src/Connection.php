<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

/**
 * Class Connection
 * @package FernleafSystems\ApiWrappers\StatusCake
 */
class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {

	const API_URL = 'https://app.statuscake.com/API/%s';
	const API_VERSION = '';

	/**
	 * @param string $sUsername
	 * @return $this
	 */
	public function setUsername( $sUsername ) {
		$this->account_id = $sUsername;
		return $this;
	}

	/**
	 * @deprecated
	 * @return string
	 */
	public function getUsername() {
		return $this->account_id;
	}

	/**
	 * @deprecated
	 * @return array
	 */
	public function getAuthenticationAsHeaders() {
		return array(
			'API'      => $this->api_key,
			'Username' => $this->account_id,
		);
	}
}
