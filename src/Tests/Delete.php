<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Delete extends Base {

	use TestAccessor;

	const REQUEST_METHOD = 'delete';

	public function deleteTest() :bool {
		return $this->req()->isSuccessful();
	}
}