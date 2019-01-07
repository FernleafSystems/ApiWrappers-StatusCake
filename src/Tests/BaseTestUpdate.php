<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

/**
 * Used by Create & Update to set new and existing Test details
 *
 * @package FernleafSystems\ApiWrappers\StatusCake\Tests
 */
class BaseTestUpdate extends BaseTests {

	const REQUEST_METHOD = 'put';

	/**
	 * @param int $nInterval
	 * @return $this
	 */
	public function setTestCheckRate( $nInterval ) {
		return $this->setRequestDataItem( 'CheckRate', (int)$nInterval );
	}

	/**
	 * @param int $nId
	 * @return $this
	 */
	public function setTestContactGroup( $nId ) {
		return $this->setRequestDataItem( 'ContactGroup', (int)$nId );
	}

	/**
	 * @param string $sName
	 * @return $this
	 */
	public function setTestSiteName( $sName ) {
		return $this->setRequestDataItem( 'WebsiteName', $sName );
	}

	/**
	 * @param string $sUrl
	 * @return $this
	 */
	public function setTestSiteUrl( $sUrl ) {
		return $this->setRequestDataItem( 'WebsiteURL', $sUrl );
	}

	/**
	 * @param array $aTags
	 * @return $this
	 */
	public function setTestTags( $aTags ) {
		return $this->setRequestDataItem( 'TestTags', implode( ',', $aTags ) );
	}

	/**
	 * @return $this
	 */
	public function setTestTypeHttp() {
		return $this->setTestType( 'HTTP' );
	}

	/**
	 * @return $this
	 */
	public function setTestTypePing() {
		return $this->setTestType( 'PING' );
	}

	/**
	 * @return $this
	 */
	public function setTestTypeTcp() {
		return $this->setTestType( 'TCP' );
	}

	/**
	 * @param int $nMinutes
	 * @return $this
	 */
	public function setTestWaitBeforeTriggerAlert( $nMinutes ) {
		return $this->setRequestDataItem( 'TriggerRate', (int)$nMinutes );
	}

	/**
	 * @param string $sType
	 * @return $this
	 */
	protected function setTestType( $sType ) {
		return $this->setRequestDataItem( 'TestType', $sType );
	}

	/**
	 * The data is sent using http_build_query(), like a form
	 * @return string
	 */
	public function getDataChannel() {
		return 'form_params';
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'Tests/Update';
	}
}