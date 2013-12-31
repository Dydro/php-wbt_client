<?php
/**
 * World Beer Tour Client
 *
 * A PHP Client for the Old Chicago World Beer Tour API hosted at http://ocwbt.com
 *
 * @author Troy McCabe <troy@dydro.com>
 * @copyright 2013 Dydro LLC.
 * @package Dydro\WBT
 */

namespace Dydro\WBT;

/**
 * Configuration for list endpoints
 *
 * @package Dydro\WBT
 */
class ListConfig
{
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $pageSize;

    /**
     * @var int
     */
    private $since;

    /**
     * @var string
     */
    private $sort;

    /**
     * @var string
     */
    private $sortDir;

    /**
     * @return string
     */
    public function __toString()
    {
        $queryParts = [];
        if ($this->page != null) {
            $queryParts['page'] = $this->page;
        }
        if ($this->pageSize != null) {
            $queryParts['pagesize'] = $this->pageSize;
        }
        if ($this->since != null) {
            $queryParts['since'] = $this->since;
        }
        if ($this->sort != null) {
            $queryParts['sort'] = $this->sort;
        }
        if ($this->sortDir != null) {
            $queryParts['sortdir'] = $this->sortDir;
        }

        return http_build_query($queryParts);
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $since
     * @return $this
     */
    public function setSince($since)
    {
        $this->since = $since;

        return $this;
    }

    /**
     * @return int
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * @param string $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sortDir
     * @return $this
     * @throws \Exception
     */
    public function setSortDir($sortDir)
    {
        if ($sortDir != self::SORT_ASC && $sortDir != self::SORT_DESC) {
            throw new Exception('$sortDir must be ListConfig::SORT_ASC or ListConfig::SORT_DESC');
        }

        $this->sortDir = $sortDir;

        return $this;
    }

    /**
     * @return string
     */
    public function getSortDir()
    {
        return $this->sortDir;
    }
}