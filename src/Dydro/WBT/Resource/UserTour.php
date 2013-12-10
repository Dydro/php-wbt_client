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
 * Represents a UserTour
 *
 * @package Dydro\WBT\Resource
 */
class UserTour
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
    private $tourNumber;

    /**
     * @var int
     */
    private $completedTime;

    /**
     * @var int
     */
    private $rowChanged;

    /**
     * @param int $completedTime
     */
    public function setCompletedTime($completedTime)
    {
        $this->completedTime = $completedTime;
    }

    /**
     * @return int
     */
    public function getCompletedTime()
    {
        return $this->completedTime;
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
     * @return UserTour
     */
    public static function fromJson($json)
    {
        $userTour = new UserTour();
        $userTour->setId($json->id);
        $userTour->setUserId($json->userId);
        $userTour->setTourNumber($json->tourNumber);
        $userTour->setCompletedTime($json->completedTime);
        $userTour->setRowChanged($json->rowChanged);

        return $userTour;
    }
}