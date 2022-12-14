<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Base extends \FernleafSystems\ApiWrappers\StatusCake\Api {

	protected function getUrlEndpoint() :string {
		return 'uptime';
	}
}