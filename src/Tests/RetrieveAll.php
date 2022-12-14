<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class RetrieveAll extends Base {

	const REQUEST_METHOD = 'get';

	/**
	 * @return TestVO[]
	 */
	public function getAllAsTestVO() {
		return array_map(
			function ( $aData ) {
				return ( new TestVO() )->applyFromArray( $aData );
			},
			$this->getAll()
		);
	}

	/**
	 * https://www.statuscake.com/api/Tests/Get%20Detailed%20Test%20Data.md
	 *
	 * @return array[]|null
	 */
	public function getAll() {
		return $this->req()->isSuccessful() ? $this->getDecodedResponseBody() : [];
	}

	protected function getUrlEndpoint() :string {
		return 'Tests/';
	}
}