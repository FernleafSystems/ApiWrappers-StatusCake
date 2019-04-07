<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Create extends BaseTestUpdate {

	/**
	 * https://www.statuscake.com/api/Tests/Updating%20Inserting%20and%20Deleting%20Tests.md
	 *
	 * @return int|null the newly inserted TestID.
	 */
	public function createNewTest() {
		return $this->req()->isSuccessful() ? $this->getDecodedResponseBody()[ 'InsertID' ] : null;
	}

	/**
	 * @throws \Exception
	 */
	protected function preSendVerification() {
		parent::preSendVerification();

		if ( empty( $this->getRequestDataItem( 'WebsiteName' ) ) ) {
			throw new \InvalidArgumentException( 'StatusCake Test name must not be empty' );
		}
	}
}