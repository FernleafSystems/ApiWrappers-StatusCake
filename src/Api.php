<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

use FernleafSystems\ApiWrappers\Base\BaseApi;

class Api extends BaseApi {

	public function getRequestHeaders() :array {
		/** @var Connection $conn */
		$conn = $this->getConnection();
		return [
			'API'      => $conn->api_key,
			'Username' => $conn->account_id,
		];
	}

	protected function isSuccessful() :bool {
		$r = $this->getDecodedResponseBody();
		return is_array( $r ) && !empty( $r );
	}
}