<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * @property string   $id
 * @property string   $website_url
 * @property string   $test_type
 * @property int      $check_rate           - seconds
 * @property string[] $contact_groups       - seconds
 * @property string   $name
 * @property int      $timeout              - seconds
 * @property float    $uptime               - percentage
 * @property int      $trigger_rate         - minutes
 * @property string[] $tags
 * @property string   $status
 * @property bool     $paused
 * @property bool     $Success
 * @property bool     $processing           - currently processing
 * @property string   $find_string
 * @property string   $last_tested_at       - date/time RFC3339 format
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
		return $this->id;
	}

	public function testType() {
		return $this->test_type;
	}

	/**
	 * @return int seconds
	 */
	public function checkRate() {
		return $this->check_rate;
	}

	public function name() {
		return $this->name;
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