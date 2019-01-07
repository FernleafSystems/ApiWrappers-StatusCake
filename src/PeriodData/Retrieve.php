<?php

namespace FernleafSystems\ApiWrappers\StatusCake\PeriodData;

class Retrieve extends \FernleafSystems\ApiWrappers\StatusCake\Api {

	const REQUEST_METHOD = 'get';

	/**
	 * https://www.statuscake.com/api/Period%20Data/Get%20Period%20Data.md
	 *
	 * @return array|null
	 */
	public function getTestPeriodData() {
		return $this->req()->isSuccessful() ? $this->getDecodedResponseBody() : null;
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
		return 'Tests/Periods/';
	}
}