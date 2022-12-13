<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Retrieve extends BaseTests {

	const REQUEST_METHOD = 'get';

	/**
	 * @return TestVO|null
	 */
	public function getTestAsVO() {
		$oVo = new TestVO();

		$aData = $this->getTestData();
		if ( !empty( $aData ) ) {
			$oVo->applyFromArray( $aData );
		}
		return $oVo;
	}

	/**
	 * https://www.statuscake.com/api/Tests/Get%20Detailed%20Test%20Data.md
	 *
	 * @return array|null
	 */
	public function getTestData() {
		return $this->req()->isSuccessful() ? $this->getDecodedResponseBody() : null;
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
}