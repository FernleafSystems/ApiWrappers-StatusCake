<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

class Connection extends \FernleafSystems\ApiWrappers\Base\Connection {

	/**
	 * @var string
	 */
	protected $sUsername;

	/**
	 * @return array
	 */
	public function getAuthenticationAsHeaders() {
		return array(
			'API'      => $this->getApiKey(),
			'Username' => $this->getUsername(),
		);
	}

	/**
	 * @return string
	 */
	public function getUsername() {
		return $this->sUsername;
	}

	/**
	 * @param string $sUsername
	 * @return $this
	 */
	public function setUsername( $sUsername ) {
		$this->sUsername = $sUsername;
		return $this;
	}
}
