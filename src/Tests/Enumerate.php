<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * TODO: Complete
 * Class Enumerate
 * @package FernleafSystems\ApiWrappers\StatusCake\Tests
 */
class Enumerate extends BaseTests {

	/**
	 * https://www.statuscake.com/api/Tests/Get%20All%20Tests.md
	 * @return array
	 */
	public function getAll() {
		return $this->req()->getDecodedResponseBody();
	}

	protected function getUrlEndpoint() :string {
		return 'Tests/';
	}

	/**
	 * @param int $nId
	 * @return $this
	 */
	public function setGroupId( $nId ) :self {
		return $this->setRequestData( [ 'CUID' => (int)$nId ] );
	}

	public function unsetGroupId() :self {
		return $this->removeRequestDataItem( 'CUID' );
	}

	public function setForStatusUp() :self {
		return $this->setRequestData( [ 'Status' => 'Up' ] );
	}

	public function setForStatusDown() :self {
		return $this->setRequestData( [ 'Status' => 'Down' ] );
	}

	public function unsetForStatus() :self {
		return $this->removeRequestDataItem( 'Status' );
	}
}