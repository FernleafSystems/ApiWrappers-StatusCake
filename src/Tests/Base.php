<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Base extends \FernleafSystems\ApiWrappers\StatusCake\Api {

	protected function getUrlEndpoint() :string {
		return 'uptime';
	}

	protected function getVO() :TestVO {
		return new TestVO();
	}
}