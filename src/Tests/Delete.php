<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * https://www.statuscake.com/api/Tests/Get%20Detailed%20Test%20Data.md
 *
 * Class Delete
 * @package FernleafSystems\ApiWrappers\StatusCake\Tests
 */
class Delete extends BaseTests {

	const REQUEST_METHOD = 'delete';

	/**
	 * @return boolean
	 */
	public function deleteTest() {
		return $this->req()->isSuccessful();
	}

	/**
	 * @param int $nId
	 * @return $this
	 */
	public function setTestId( $nId ) {
		return $this->setRequestDataItem( 'TestID', (int)$nId );
	}

	/**
	 * @return $this
	 */
	public function unsetTestId() {
		return $this->removeRequestDataItem( 'TestID' );
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'Tests/Details';
	}

	/**
	 * @return string
	 */
	public function getDataChannel() {
		return 'query';
	}
}