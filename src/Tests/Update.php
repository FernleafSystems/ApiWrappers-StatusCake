<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Update extends BaseTestUpdate {

	/**
	 * https://www.statuscake.com/api/Tests/Updating%20Inserting%20and%20Deleting%20Tests.md
	 *
	 * @return bool
	 */
	public function updateTest() {
		return $this->req()->isSuccessful();
	}

	/**
	 * @param int $nId
	 * @return $this
	 */
	public function setTestId( $nId ) {
		return $this->setRequestDataItem( 'TestID', (int)$nId );
	}
}