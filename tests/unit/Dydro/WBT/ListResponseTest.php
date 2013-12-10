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

class ListResponseTest extends \PHPUnit_Framework_TestCase
{
    private $listResponse;

    public function setUp()
    {
        $response = new \stdClass();
        $response->page = 1;
        $response->pages = 2;
        $response->total = 100;

        $this->listResponse = new ListResponse($response);
    }

    public function testGetters()
    {
        $this->assertEquals(1, $this->listResponse->getPage());
        $this->assertEquals(2, $this->listResponse->getPages());
        $this->assertEquals(100, $this->listResponse->getTotal());
    }

    public function testMorePages()
    {
        $this->assertTrue($this->listResponse->morePages());
    }
}