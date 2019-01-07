<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * Class TestVO
 * @package FernleafSystems\ApiWrappers\StatusCake\Tests
 */
class TestVO extends \FernleafSystems\ApiWrappers\Base\BaseVO {

	/**
	 * @return int|null
	 */
	public function getErrorNo() {
		return $this->getParam( 'ErrNo' );
	}

	/**
	 * @return string
	 */
	public function getErrorText() {
		return $this->getStringParam( 'Error' );
	}

	/**
	 * @return bool
	 */
	public function isValid() {
		return parent::isValid() && ( $this->isSuccess() || is_null( $this->getErrorNo() ) );
	}

	/**
	 * @return int
	 */
	public function id() {
		return $this->getParam( 'TestID' );
	}

	/**
	 * @return string
	 */
	public function testType() {
		return $this->getParam( 'TestType' );
	}

	/**
	 * @return int seconds
	 */
	public function checkRate() {
		return $this->getParam( 'CheckRate' );
	}

	/**
	 * @return int seconds
	 */
	public function name() {
		return $this->getParam( 'WebsiteName' );
	}

	/**
	 * @return int seconds
	 */
	public function timeout() {
		return $this->getParam( 'Timeout' );
	}

	/**
	 * @return int percentage
	 */
	public function uptime() {
		return $this->getParam( 'Uptime' );
	}

	/**
	 * @return bool
	 */
	public function isDown() {
		return !$this->isUp();
	}

	/**
	 * @return bool
	 */
	public function isPaused() {
		return $this->getParam( 'Paused' );
	}

	/**
	 * @return bool
	 */
	public function isSuccess() {
		return (bool)$this->getParam( 'Success' );
	}

	/**
	 * @return bool
	 */
	public function isUp() {
		return ( $this->getParam( 'Status' ) == 'Up' );
	}
}