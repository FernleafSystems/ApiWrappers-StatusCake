<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

use FernleafSystems\ApiWrappers\StatusCake\Constants;

class RetrieveAll extends Base {

	const REQUEST_METHOD = 'get';

	/**
	 * @return TestVO[]
	 */
	public function getAllAsTestVO() :array {
		return array_map(
			function ( $testData ) {
				return $this->getVO()->applyFromArray( $testData );
			},
			$this->getAll()
		);
	}

	public function filterByStatus( string $status = Constants::UPTIME_STATUS_UP ) :self {
		return $this->setRequestQueryDataItem( 'status', $status );
	}

	public function setLimit( int $limit = 100 ) :self {
		return $this->setRequestQueryDataItem( 'limit', $limit );
	}

	public function setPage( int $page ) :self {
		return $this->setRequestQueryDataItem( 'page', $page );
	}

	public function filterByTags( array $tags, bool $matchAnyTag = false ) :self {
		return $this->setRequestQueryDataItem( 'tags', implode( ',', array_filter( array_map( 'trim', $tags ) ) ) )
					->setRequestQueryDataItem( 'matchany', $matchAnyTag );
	}

	public function getAll() :array {
		return $this->req()->isSuccessful() ? $this->getDecodedResponseBody()[ 'data' ] : [];
	}
}