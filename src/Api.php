<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

use FernleafSystems\ApiWrappers\Base\BaseApi;

class Api extends BaseApi {

	const Url_Default_Base = 'https://app.statuscake.com/API/';

	/**
	 * @return string
	 */
	protected function getBaseUrl() {
		return self::Url_Default_Base;
	}

	/**
	 * @return array
	 */
	public function getRequestHeaders() {
		/** @var Connection $oConn */
		$oConn = $this->getConnection();
		return [
			'API'      => $oConn->getApiKey(),
			'Username' => $oConn->getUsername(),
		];
	}

	/**
	 * @return bool
	 */
	protected function isSuccessful() {
		$aResponse = $this->getDecodedResponseBody();
		return is_array( $aResponse ) && !empty( $aResponse );
	}
}