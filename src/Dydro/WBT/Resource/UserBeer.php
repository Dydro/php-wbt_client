<?php
/**
 * World Beer Tour Client
 *
 * A PHP Client for the Old Chicago World Beer Tour API hosted at http://ocwbt.com
 *
 * @author Troy McCabe <troy@dydro.com>
 * @copyright 2013 Dydro LLC.
 * @package Dydro\WBT\Resource
 */

namespace Dydro\WBT\Resource;

/**
 * Represents a UserBeer
 *
 * @package Dydro\WBT\Resource
 */
class UserBeer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $beerId;

    /**
     * @var string
     */
    private $beerName;

    /**
     * @var string
     */
    private $beerCountry;

    /**
     * @var int
     */
    private $tourNumber;

    /**
     * @var int
     */
    private $tourCompleted;

    /**
     * @var int
     */
    private $locationId;

    /**
     * @var string
     */
    private $locationName;

    /**
     * @var float
     */
    private $rating;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var int
     */
    private $time;

    /**
     * @var int
     */
    private $rowChanged;

    /**
     * @param string $beerCountry
     */
    public function setBeerCountry($beerCountry)
    {
        $this->beerCountry = $beerCountry;
    }

    /**
     * @return string
     */
    public function getBeerCountry()
    {
        return $this->beerCountry;
    }

    /**
     * @param int $beerId
     */
    public function setBeerId($beerId)
    {
        $this->beerId = $beerId;
    }

    /**
     * @return int
     */
    public function getBeerId()
    {
        return $this->beerId;
    }

    /**
     * @param string $beerName
     */
    public function setBeerName($beerName)
    {
        $this->beerName = $beerName;
    }

    /**
     * @return string
     */
    public function getBeerName()
    {
        return $this->beerName;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param string $locationName
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * @param float $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rowChanged
     */
    public function setRowChanged($rowChanged)
    {
        $this->rowChanged = $rowChanged;
    }

    /**
     * @return int
     */
    public function getRowChanged()
    {
        return $this->rowChanged;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $tourCompleted
     */
    public function setTourCompleted($tourCompleted)
    {
        $this->tourCompleted = $tourCompleted;
    }

    /**
     * @return int
     */
    public function getTourCompleted()
    {
        return $this->tourCompleted;
    }

    /**
     * @param int $tourNumber
     */
    public function setTourNumber($tourNumber)
    {
        $this->tourNumber = $tourNumber;
    }

    /**
     * @return int
     */
    public function getTourNumber()
    {
        return $this->tourNumber;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param \stdClass $json A json object to extract properties from
     * @return UserBeer
     */
    public static function fromJson($json)
    {
        $userBeer = new UserBeer();
        $userBeer->setId($json->id);
        $userBeer->setUserId($json->userId);
        $userBeer->setBeerId($json->beerId);
        $userBeer->setBeerName($json->beerName);
        $userBeer->setBeerCountry($json->beerCountry);
        $userBeer->setTourNumber($json->tourNumber);
        $userBeer->setTourCompleted($json->tourCompleted);
        $userBeer->setLocationId($json->locationId);
        $userBeer->setLocationName($json->locationName);
        $userBeer->setRating($json->rating);
        $userBeer->setComment($json->comment);
        $userBeer->setTime($json->time);
        $userBeer->setRowChanged($json->rowChanged);

        return $userBeer;
    }
}