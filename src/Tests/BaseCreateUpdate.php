<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

use FernleafSystems\ApiWrappers\StatusCake\Constants;

/**
 * Used by Create & Update to set new and existing Test details
 */
abstract class BaseCreateUpdate extends Base {

	public function setTestCheckRate( int $rate = Constants::UPTIME_CHECK_RATE_60S ) :self {
		return $this->setRequestDataItem( 'check_rate', $rate );
	}

	public function setTestContactGroup( string $id ) :self {
		return $this->setTestContactGroups( [ $id ] );
	}

	public function setTestContactGroups( array $ids ) :self {
		return $this->setRequestDataItem( 'contact_groups', array_map( 'strval', $ids ) );
	}

	public function setUserAgent( string $ua ) :self {
		return $this->setRequestDataItem( 'user_agent', $ua );
	}

	public function setTestSiteName( string $name ) :self {
		return $this->setRequestDataItem( 'name', $name );
	}

	public function setTestSiteUrl( string $url ) :self {
		return $this->setRequestDataItem( 'website_url', $url );
	}

	public function setTestTags( array $tags ) :self {
		return $this->setRequestDataItem( 'tags', implode( ',', $tags ) );
	}

	public function setTestTypeHttp() :self {
		return $this->setTestType( Constants::TEST_TYPE_HTTP );
	}

	public function setTestTypePing() :self {
		return $this->setTestType( Constants::TEST_TYPE_PING );
	}

	public function setTestTypeTcp() :self {
		return $this->setTestType( Constants::TEST_TYPE_TCP );
	}

	public function setTestWaitBeforeTriggerAlert( int $minutes ) :self {
		return $this->setRequestDataItem( 'trigger_rate', $minutes );
	}

	public function setTestType( string $type ) :self {
		return $this->setRequestDataItem( 'test_type', $type );
	}
}