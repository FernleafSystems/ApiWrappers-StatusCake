<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Create extends BaseCreateUpdate {

	const REQUEST_METHOD = 'post';

	public function createNewTest() :?string {
		return $this->req()->isLastRequestSuccess() ? $this->getDecodedResponseBody()[ 'data' ][ 'new_id' ] : null;
	}

	/**
	 * @throws \Exception
	 */
	protected function preSendVerification() {
		parent::preSendVerification();

		if ( empty( $this->getRequestDataItem( 'name' ) ) ) {
			throw new \InvalidArgumentException( 'StatusCake Test `name` must not be empty' );
		}
	}
}