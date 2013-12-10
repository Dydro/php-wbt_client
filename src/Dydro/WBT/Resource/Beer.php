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

use Dydro\WBT\Resource;

/**
 * Represents a beer
 *
 * @package Dydro\WBT\Resource
 */
class Beer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $country;

    /**
     * @var double
     */
    private $averageRating;

    /**
     * @var int
     */
    private $totalRatings;

    /**
     * @var int
     */
    private $miniTourId;

    /**
     * @var int
     */
    private $rowChanged;

    /**
     * @param float $averageRating
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
    }

    /**
     * @return float
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
     * @param int $miniTourId
     */
    public function setMiniTourId($miniTourId)
    {
        $this->miniTourId = $miniTourId;
    }

    /**
     * @return int
     */
    public function getMiniTourId()
    {
        return $this->miniTourId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * @param int $totalRatings
     */
    public function setTotalRatings($totalRatings)
    {
        $this->totalRatings = $totalRatings;
    }

    /**
     * @return int
     */
    public function getTotalRatings()
    {
        return $this->totalRatings;
    }

    /**
     * @param \stdClass $json A json object to extract properties from
     * @return Beer
     */
    public static function fromJson($json)
    {
        $beer = new Beer();
        $beer->setId($json->id);
        $beer->setName($json->name);
        $beer->setCountry($json->country);
        $beer->setAverageRating($json->averageRating);
        $beer->setTotalRatings($json->totalRatings);
        $beer->setMiniTourId($json->miniTourId);
        $beer->setRowChanged($json->rowChanged);

        return $beer;
    }
}