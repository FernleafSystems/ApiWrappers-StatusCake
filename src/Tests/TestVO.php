<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

use FernleafSystems\ApiWrappers\StatusCake\Constants;

/**
 * @property string   $id
 * @property string   $status
 * @property string   $website_url
 * @property string   $test_type
 * @property int      $check_rate           - seconds
 * @property string[] $contact_groups       - seconds
 * @property string   $name
 * @property int      $timeout              - seconds
 * @property float    $uptime               - percentage
 * @property int      $trigger_rate         - minutes
 * @property string[] $tags
 * @property bool     $paused
 * @property bool     $Success
 * @property bool     $processing           - currently processing
 * @property string   $find_string
 * @property string   $last_tested_at       - date/time RFC3339 format
 */
class TestVO extends \FernleafSystems\ApiWrappers\Base\BaseVO {

	public function isValid() :bool {
		return parent::isValid() && $this->id > 0;
	}

	public function isDown() :bool {
		return !$this->isUp();
	}

	public function isUp() :bool {
		return $this->status == Constants::UPTIME_STATUS_UP;
	}
}