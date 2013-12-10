<?php
/**
 * World Beer Tour Client
 *
 * A PHP Client for the Old Chicago World Beer Tour API hosted at http://ocwbt.com
 *
 * @author Troy McCabe <troy@dydro.com>
 * @copyright 2013 Dydro LLC.
 */

namespace Dydro\WBT;

class ListConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ListConfig
     */
    private $listConfig;

    public function setUp()
    {
        $this->listConfig = new ListConfig();
    }

    public function testSettersAndGetters()
    {
        $this->listConfig->setPage(1)
                         ->setPageSize(50)
                         ->setSince(0)
                         ->setSort('name')
                         ->setSortDir(ListConfig::SORT_ASC);

        $this->assertEquals(1, $this->listConfig->getPage());
        $this->assertEquals(50, $this->listConfig->getPageSize());
        $this->assertEquals(0, $this->listConfig->getSince());
        $this->assertEquals('name', $this->listConfig->getSort());
        $this->assertEquals(ListConfig::SORT_ASC, $this->listConfig->getSortDir());
    }

    /**
     * @expectedException \Dydro\WBT\Exception
     */
    public function testSortDirException()
    {
        $this->listConfig->setSortDir('bad');
    }

    public function testGetQueryString()
    {
        $this->listConfig->setPage(1)
                         ->setPageSize(50)
                         ->setSince(1337)
                         ->setSort('name')
                         ->setSortDir(ListConfig::SORT_ASC);
        $this->assertEquals('page=1&pagesize=50&since=1337&sort=name&sortdir=asc', $this->listConfig->getQueryString());
    }
}