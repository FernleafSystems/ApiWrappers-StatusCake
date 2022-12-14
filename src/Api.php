<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

use FernleafSystems\ApiWrappers\Base\BaseApi;
use FernleafSystems\ApiWrappers\StatusCake\Tests\TestVO;

class Api extends BaseApi {

	public function getRequestHeaders() :array {
		/** @var Connection $conn */
		$conn = $this->getConnection();
		return array_merge(
			[
				'Authorization' => $conn->api_key,
				'Accept'        => $this->getResponseContentType(),
				'Content-Type'  => $this->getRequestContentType(),
			],
			$this->request_headers ?? []
		);
	}

	public function getRequestContentType() :string {
		return 'application/x-www-form-urlencoded';
	}

	public function getResponseContentType() :string {
		return 'application/json';
	}

	protected function getVO() :TestVO {
		return new TestVO();
	}

	protected function isSuccessful() :bool {
		return !empty( $this->getDecodedResponseBody() );
	}
}