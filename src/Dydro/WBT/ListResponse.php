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
 * Wrapper around the response from list endpoints
 *
 * @package Dydro\WBT
 */
class ListResponse
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $pages = 1;

    /**
     * @var int
     */
    private $total = 0;

    /**
     * @param \stdClass $json
     */
    public function __construct($json)
    {
        $this->setPage($json->page);
        $this->setPages($json->pages);
        $this->setTotal($json->total);
    }

    /**
     * @return bool
     */
    public function morePages()
    {
        return $this->pages > $this->page;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
}