<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

use FernleafSystems\ApiWrappers\Base\BaseApi;

class Api extends BaseApi {

	/**
	 * @return array
	 */
	public function getRequestHeaders() {
		/** @var Connection $oConn */
		$oConn = $this->getConnection();
		return [
			'API'      => $oConn->api_key,
			'Username' => $oConn->account_id,
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