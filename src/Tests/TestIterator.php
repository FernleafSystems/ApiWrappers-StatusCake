<?php

namespace FernleafSystems\ApiWrappers\StatusCake\Tests;

use Elliotchance\Iterator\AbstractPagedIterator;

class TestIterator extends AbstractPagedIterator {

	public const MIN_PAGE_SIZE = 1;
	public const MAX_PAGE_SIZE = 100;

	protected $useCache = false;

	private int $pageSize = 25;

	private ?int $total;

	public ?RetrieveAll $retriever;

	public function __construct( ?RetrieveAll $retriever = null ) {
		$this->retriever = is_null( $retriever ) ? new RetrieveAll() : $retriever;
	}

	/**
	 * @return TestVO
	 */
	public function current() {
		return parent::current(); // TODO: Change the autogenerated stub
	}

	public function getPageSize() {
		return min( self::MAX_PAGE_SIZE, max( self::MIN_PAGE_SIZE, $this->pageSize ) );
	}

	public function getTotalSize() {
		if ( !isset( $this->total ) ) {
			$this->retriever->setPage( 1 )->getAll();
			$this->total = $this->retriever->getDecodedResponseBody()[ 'metadata' ][ 'total_count' ] ?? 0;
		}
	}

	public function getPage( $pageNumber ) {
		return $this->retriever->setPage( $pageNumber + 1 )
							   ->setLimit( $this->getPageSize() )
							   ->getAllAsTestVO();
	}

	public function setPageSize( int $pageSize ) :self {
		$this->pageSize = $pageSize;
		return $this;
	}
}