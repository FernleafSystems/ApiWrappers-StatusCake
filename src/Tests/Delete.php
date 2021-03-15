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

	public function deleteTest() :bool {
		return $this->req()->isSuccessful();
	}

	/**
	 * @param int $nId
	 * @return $this
	 */
	public function setTestId( $nId ) :self {
		return $this->setRequestDataItem( 'TestID', (int)$nId );
	}

	public function unsetTestId() :self {
		return $this->removeRequestDataItem( 'TestID' );
	}

	protected function getUrlEndpoint() :string {
		return 'Tests/Details';
	}

	public function getDataChannel() :string {
		return 'query';
	}
}