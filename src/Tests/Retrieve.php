<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

class Retrieve extends Base {

	use TestAccessor;

	const REQUEST_METHOD = 'get';

	public function getTestAsVO() :?TestVO {
		$VO = $this->getVO();

		$data = $this->getTestData();
		if ( !empty( $data ) ) {
			$VO->applyFromArray( $data );
		}
		return $VO;
	}

	public function getTestData() :?array {
		return $this->req()->isLastRequestSuccess() ? $this->getDecodedResponseBody()[ 'data' ] : null;
	}
}