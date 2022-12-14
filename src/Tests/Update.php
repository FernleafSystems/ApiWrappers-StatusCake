<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Update extends BaseCreateUpdate {

	use TestAccessor;

	const REQUEST_METHOD = 'put';

	/**
	 * https://developers.statuscake.com/api/#tag/uptime/operation/update-uptime-test
	 */
	public function updateTest() :bool {
		return $this->req()->isLastRequestSuccess();
	}
}