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
 * Represents a MiniTour
 *
 * @package Dydro\WBT\Resource
 */
class MiniTour
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
    private $image;

    /**
     * @var int
     */
    private $endTime;

    /**
     * @var int
     */
    private $rowChanged;

    /**
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return int
     */
    public function getEndTime()
    {
        return $this->endTime;
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
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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
     * @param \stdClass $json A json object to extract properties from
     * @return MiniTour
     */
    public static function fromJson($json)
    {
        $miniTour = new MiniTour();
        $miniTour->setId($json->id);
        $miniTour->setName($json->name);
        $miniTour->setImage($json->image);
        $miniTour->setEndTime($json->endTime);
        $miniTour->setRowChanged($json->rowChanged);

        return $miniTour;
    }
}