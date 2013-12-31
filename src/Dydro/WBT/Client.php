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

use Dydro\WBT\Resource\Beer;
use Dydro\WBT\Resource\Location;
use Dydro\WBT\Resource\MiniTour;
use Dydro\WBT\Resource\User;
use Dydro\WBT\Resource\UserBeer;
use Dydro\WBT\Resource\UserTour;

/**
 * The main Client for the WBT API
 *
 * @package Dydro\WBT
 */
class Client
{
    /**
     * The API Key for all requests
     *
     * @var string
     */
    private $apiKey;

    /**
     * The root of the API we're working with
     *
     * @var string
     */
    private $apiRoot = 'http://ocwbt.com/api/v1.0';

    /**
     * The Secret Key for all requests
     *
     * @var string
     */
    private $secretKey;

    /**
     * @param string $apiKey The API Key to use
     * @param string $secretKey The Secret Key to use
     */
    public function __construct($apiKey, $secretKey)
    {
        $this->apiKey = $apiKey;
        $this->secretKey = $secretKey;
    }

    /**
     * Returns a single beer
     *
     * @param int $id The id of the beer to retrieve
     * @return Beer
     */
    public function getBeer($id)
    {
        return $this->getSingle('Beer', "/beers/{$id}?", 'beer');
    }

    /**
     * Returns a list of beers
     *
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getBeers(ListConfig $listConfig = null)
    {
        return $this->getList('Beer', '/beers?', 'beers', $listConfig);
    }

    /**
     * Returns a single location
     *
     * @param int $id The id of the location to retrieve
     * @return Location
     */
    public function getLocation($id)
    {
        return $this->getSingle('Location', "/locations/{$id}?", 'location');
    }

    /**
     * Returns a list of beers
     *
     * @param int $id The id of the location to retrieve beers for
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getLocationBeers($id, ListConfig $listConfig = null)
    {
        return $this->getList('LocationBeer', "/locations/{$id}/beers?", 'locationBeers', $listConfig);
    }

    /**
     * Returns a list of locations
     *
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getLocations(ListConfig $listConfig = null)
    {
        return $this->getList('Location', '/locations?', 'locations', $listConfig);
    }

    /**
     * Returns a list of beers for all locations
     *
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getLocationsBeers(ListConfig $listConfig = null)
    {
        return $this->getList('LocationBeer', '/locations/beers?', 'locationBeers', $listConfig);
    }

    /**
     * Returns a single minitour
     *
     * @param int $id The id of the minitour to retrieve
     * @return MiniTour
     */
    public function getMiniTour($id)
    {
        return $this->getSingle('MiniTour', "/minitours/{$id}?", 'miniTour');
    }

    /**
     * Returns a list of minitours
     *
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getMiniTours(ListConfig $listConfig = null)
    {
        return $this->getList('MiniTour', '/minitours?', 'miniTours', $listConfig);
    }

    /**
     * Returns a single user
     *
     * @param int $id The id of the user to retrieve
     * @return User
     */
    public function getUser($id)
    {
        return $this->getSingle('User', "/users/{$id}?", 'user');
    }

    /**
     * Returns a single user beer
     *
     * @param int $userId The id of the user to retrieve the beer for
     * @param int $userBeerId The id beer to retrieve for the user
     * @return User
     */
    public function getUserBeer($userId, $userBeerId)
    {
        return $this->getSingle('UserBeer', "/users/{$userId}/beers/{$userBeerId}?", 'userBeer');
    }

    /**
     * Returns a list of beers for a user
     *
     * @param int $userId The id of the user to retrieve beers for
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getUserBeers($userId, ListConfig $listConfig = null)
    {
        return $this->getList('UserBeer', "/users/{$userId}/beers?", 'userBeers', $listConfig);
    }

    /**
     * Returns a list of tours for a user
     *
     * @param int $userId The id of the user to retrieve tours for
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    public function getUserTours($userId, ListConfig $listConfig = null)
    {
        return $this->getList('UserTour', "/users/{$userId}/tours?", 'userTours', $listConfig);
    }

    /**
     * Kicks off a sync with Old Chicago and return the user
     *
     * @param string $emailOrCardNumber The email or card number of the user
     * @param string $birthday The birthday of the user (YYYY-MM-DD)
     * @return User
     */
    public function login($emailOrCardNumber, $birthday)
    {
        return $this->getSingle('User', "/users/login?login={$emailOrCardNumber}&birthday={$birthday}&", 'user');
    }

    /**
     * Helper method which wraps the actual grabbing of data from lists
     *
     * @param string $class The class to instantiate for each item in the response
     * @param string $uri The uri to retrieve data from
     * @param string $el The element in the JSON to grab items from
     * @param ListConfig $listConfig The configuration for the request
     * @return ListResponse
     */
    private function getList($class, $uri, $el, ListConfig $listConfig = null)
    {
        $class = "\\Dydro\\WBT\\Resource\\{$class}";
        if ($listConfig !== null) {
            $uri = "{$uri}{$listConfig}&";
        }
        $json = $this->request($uri);
        $response = new ListResponse($json);

        $items = [];
        foreach ($json->{$el} as $item) {
            $items[] = $class::fromJson($item);
        }

        $response->setItems($items);

        return $response;
    }

    /**
     * Helper method which wraps the actual grabbing of data from single response
     *
     * @param string $class The class to instantiate for each item in the response
     * @param string $uri The uri to retrieve data from
     * @param string $el The element in the JSON to grab the item from
     * @return mixed
     */
    private function getSingle($class, $uri, $el)
    {
        $class = "\\Dydro\\WBT\\Resource\\{$class}";
        return $class::fromJson($this->request($uri)->{$el});
    }

    /**
     * Make the actual request to the server
     *
     * @param string $uri The uri to request
     * @return \stdClass
     */
    private function request($uri)
    {
        $ch = curl_init($this->apiRoot . $this->sign($uri));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $json = json_decode($response);
        $this->checkSuccess($json);

        return $json;
    }

    /**
     * Sign the request
     *
     * @param string $uri The uri to sign
     * @return string
     */
    private function sign($uri)
    {
        $uri = $uri . "key={$this->apiKey}";
        $signature = urlencode(base64_encode(hash_hmac('sha1', $uri, $this->secretKey, true)));
        return $uri . "&signature={$signature}";
    }

    /**
     * Verify that the request was successful
     *
     * @param \stdClass $json The decoded json from the server
     * @throws Exception
     */
    private function checkSuccess($json)
    {
        if (!$json->success) {
            throw new Exception($json->message);
        }
    }
}