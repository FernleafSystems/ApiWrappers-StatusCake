<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * Class TestVO
 * @package FernleafSystems\ApiWrappers\StatusCake\Tests
 * @property        $ErrNo
 * @property string $Error
 * @property int    $TestID
 * @property string $TestType
 * @property int    $CheckRate - seconds
 * @property string $WebsiteName
 * @property int    $Timeout
 * @property int    $Uptime    - percentage
 * @property bool   $Paused
 * @property bool   $Success
 * @property string $Status
 */
class TestVO extends \FernleafSystems\ApiWrappers\Base\BaseVO {

	/**
	 * @return int|null
	 */
	public function getErrorNo() {
		return $this->ErrNo;
	}

	/**
	 * @return string
	 */
	public function getErrorText() {
		return $this->Error;
	}

	public function isValid() :bool {
		return parent::isValid() && ( $this->isSuccess() || is_null( $this->getErrorNo() ) );
	}

	public function id() {
		return $this->TestID;
	}

	public function testType() {
		return $this->TestType;
	}

	/**
	 * @return int seconds
	 */
	public function checkRate() {
		return $this->CheckRate;
	}

	public function name() {
		return $this->WebsiteName;
	}

	/**
	 * @return int seconds
	 */
	public function timeout() {
		return $this->Timeout;
	}

	/**
	 * @return int percentage
	 */
	public function uptime() {
		return $this->Uptime;
	}

	public function isDown() :bool {
		return !$this->isUp();
	}

	public function isPaused() {
		return $this->Paused;
	}

	public function isSuccess() {
		return (bool)$this->Success;
	}

	public function isUp() :bool {
		return $this->Status == 'Up';
	}
}