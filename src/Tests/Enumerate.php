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

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'Tests/';
	}

	/**
	 * @param int $nId
	 * @return $this
	 */
	public function setGroupId( $nId ) {
		return $this->setRequestData( array( 'CUID' => (int)$nId ) );
	}

	/**
	 * @return $this
	 */
	public function unsetGroupId() {
		return $this->removeRequestDataItem( 'CUID' );
	}

	/**
	 * @return $this
	 */
	public function setForStatusUp() {
		return $this->setRequestData( array( 'Status' => 'Up' ) );
	}

	/**
	 * @return $this
	 */
	public function setForStatusDown() {
		return $this->setRequestData( array( 'Status' => 'Down' ) );
	}

	/**
	 * @return $this
	 */
	public function unsetForStatus() {
		return $this->removeRequestDataItem( 'Status' );
	}
}