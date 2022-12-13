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
	 * @param string $username
	 * @return $this
	 */
	public function setUsername( string $username ) :self {
		$this->account_id = $username;
		return $this;
	}
}
