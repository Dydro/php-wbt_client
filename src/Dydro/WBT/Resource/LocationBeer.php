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
 * Represents a locationBeer
 *
 * @package Dydro\WBT\Resource
 */
class LocationBeer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $beerId;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @var int
     */
    private $rowChanged;

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
     * @param string $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
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
     * @param \stdClass $json A json object to extract properties from
     * @return LocationBeer
     */
    public static function fromJson($json)
    {
        $locationBeer = new LocationBeer();
        $locationBeer->setId($json->id);
        $locationBeer->setBeerId($json->beerId);
        $locationBeer->setLocationId($json->locationId);
        $locationBeer->setRowChanged($json->rowChanged);

        return $locationBeer;
    }
}