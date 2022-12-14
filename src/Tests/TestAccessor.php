<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * @property string $test_id
 */
trait TestAccessor {

	/**
	 * @throws \Exception
	 */
	protected function preSendVerification() {
		parent::preSendVerification();

		if ( !isset( $this->test_id ) ) {
			throw new \InvalidArgumentException( 'StatusCake Test `test_id` must be supplied' );
		}
	}

	public function setTestId( string $testID ) :self {
		$this->test_id = $testID;
		return $this;
	}

	public function unsetTestId() :self {
		unset( $this->test_id );
		return $this;
	}

	protected function getUrlEndpoint() :string {
		return sprintf( '%s/%s', parent::getUrlEndpoint(), $this->test_id );
	}
}