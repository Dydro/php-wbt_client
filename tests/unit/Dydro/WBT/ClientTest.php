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

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    private $client;
    public function setUp()
    {
        $this->client = new Client(API_KEY, SECRET_KEY);
    }

    /**
     * @expectedException \Dydro\WBT\Exception
     */
    public function testFailedRequest()
    {
        $response = $this->client->getBeer(-1);
    }

    public function testGetBeer()
    {
        $response = $this->client->getBeer(1);

        $this->assertInstanceOf('\Dydro\WBT\Resource\Beer', $response);
    }

    public function testGetBeers()
    {
        $response = $this->client->getBeers();

        $this->assertCount(100, $response->getItems());
        $this->assertInstanceOf('\Dydro\WBT\Resource\Beer', $response->getItems()[0]);
    }

    public function testGetBeersWithListconfig()
    {
        $cfg = new ListConfig();
        $cfg->setPageSize(50);

        $response = $this->client->getBeers($cfg);

        $this->assertCount(50, $response->getItems());
    }

    public function testGetLocation()
    {
        $response = $this->client->getLocation(137);

        $this->assertInstanceOf('\Dydro\WBT\Resource\Location', $response);
    }

    public function testGetLocationBeers()
    {
        $response = $this->client->getLocationBeers(137);

        $this->assertCount(100, $response->getItems());
        $this->assertInstanceOf('\Dydro\WBT\Resource\LocationBeer', $response->getItems()[0]);
    }

    public function testGetLocations()
    {
        $response = $this->client->getLocations();

        $this->assertGreaterThan(90, count($response->getItems()));
        $this->assertInstanceOf('\Dydro\WBT\Resource\Location', $response->getItems()[0]);
    }

    public function testGetLocationsBeers()
    {
        $response = $this->client->getLocationsBeers();

        $this->assertCount(100, $response->getItems());
        $this->assertInstanceOf('\Dydro\WBT\Resource\LocationBeer', $response->getItems()[0]);
    }

    public function testGetMiniTours()
    {
        $response = $this->client->getMiniTours();

        $this->assertGreaterThan(10, count($response->getItems()));
        $this->assertInstanceOf('\Dydro\WBT\Resource\MiniTour', $response->getItems()[0]);
    }

    public function testGetMiniTour()
    {
        $response = $this->client->getMiniTour(1);

        $this->assertInstanceOf('\Dydro\WBT\Resource\MiniTour', $response);
    }

    public function testGetUser()
    {
        $response = $this->client->getUser(6);

        $this->assertInstanceOf('\Dydro\WBT\Resource\User', $response);
    }

    public function testGetUserBeer()
    {
        $response = $this->client->getUserBeer(6, 1401953);

        $this->assertInstanceOf('\Dydro\WBT\Resource\UserBeer', $response);
    }

    public function testGetUserBeers()
    {
        $response = $this->client->getUserBeers(6);

        $this->assertCount(100, $response->getItems());
        $this->assertInstanceOf('\Dydro\WBT\Resource\UserBeer', $response->getItems()[0]);
    }

//    public function testGetUserEndpoints()
//    {
//        $response = $this->client->getUserEndpoints(6);
//
//        $this->assertInstanceOf('\Dydro\WBT\Resource\UserBeer', $response->getItems()[0]);
//    }

    public function testGetUserTours()
    {
        $response = $this->client->getUserTours(6);

        $this->assertGreaterThan(5, $response->getItems());
        $this->assertInstanceOf('\Dydro\WBT\Resource\UserTour', $response->getItems()[0]);
    }

    public function testLogin()
    {
        $response = $this->client->login('troymccabe@gmail.com', '1988-04-01');

        $this->assertInstanceOf('\Dydro\WBT\Resource\User', $response);
    }
}