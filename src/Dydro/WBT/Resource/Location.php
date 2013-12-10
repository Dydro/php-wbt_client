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
 * Represents a location
 *
 * @package Dydro\WBT\Resource
 */
class Location
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
    private $phone;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var int
     */
    private $zip;

    /**
     * @var double
     */
    private $latitude;

    /**
     * @var double
     */
    private $longitude;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $menuLink;

    /**
     * @var string
     */
    private $nutritionalInfoLink;

    /**
     * @var string
     */
    private $hours;

    /**
     * @var string
     */
    private $happyHours;

    /**
     * @var int
     */
    private $rowChanged;

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $happyHours
     */
    public function setHappyHours($happyHours)
    {
        $this->happyHours = $happyHours;
    }

    /**
     * @return string
     */
    public function getHappyHours()
    {
        return $this->happyHours;
    }

    /**
     * @param string $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getHours()
    {
        return $this->hours;
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
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $menuLink
     */
    public function setMenuLink($menuLink)
    {
        $this->menuLink = $menuLink;
    }

    /**
     * @return string
     */
    public function getMenuLink()
    {
        return $this->menuLink;
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
     * @param string $nutritionalInfoLink
     */
    public function setNutritionalInfoLink($nutritionalInfoLink)
    {
        $this->nutritionalInfoLink = $nutritionalInfoLink;
    }

    /**
     * @return string
     */
    public function getNutritionalInfoLink()
    {
        return $this->nutritionalInfoLink;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
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
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param int $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param \stdClass $json A json object to extract properties from
     * @return Location
     */
    public static function fromJson($json)
    {
        $location = new Location();
        $location->setId($json->id);
        $location->setName($json->name);
        $location->setPhone($json->phone);
        $location->setAddress($json->address);
        $location->setCity($json->city);
        $location->setState($json->state);
        $location->setZip($json->zip);
        $location->setLatitude($json->latitude);
        $location->setLongitude($json->longitude);
        $location->setUrl($json->url);
        $location->setMenuLink($json->menuLink);
        $location->setNutritionalInfoLink($json->nutritionalInfoLink);
        $location->setHours($json->hours);
        $location->setHappyHours($json->happyHours);
        $location->setRowChanged($json->rowChanged);

        return $location;
    }
}