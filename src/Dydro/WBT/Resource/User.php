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
 * Represents a User
 *
 * @package Dydro\WBT\Resource
 */
class User
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
    private $email;

    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $birthday;

    /**
     * @var int
     */
    private $beersInCurrentTour;

    /**
     * @var int
     */
    private $toursToVip;

    /**
     * @var int
     */
    private $prizeValue;

    /**
     * @var int
     */
    private $prizeRedeemed;

    /**
     * @var int
     */
    private $lifetimePrizeValue;

    /**
     * @var int
     */
    private $beersUntilNextPrize;

    /**
     * @var string
     */
    private $nextPrize;

    /**
     * @var int
     */
    private $homeLocationId;

    /**
     * @var int
     */
    private $rowChanged;

    /**
     * @param int $beersInCurrentTour
     */
    public function setBeersInCurrentTour($beersInCurrentTour)
    {
        $this->beersInCurrentTour = $beersInCurrentTour;
    }

    /**
     * @return int
     */
    public function getBeersInCurrentTour()
    {
        return $this->beersInCurrentTour;
    }

    /**
     * @param int $beersUntilNextPrize
     */
    public function setBeersUntilNextPrize($beersUntilNextPrize)
    {
        $this->beersUntilNextPrize = $beersUntilNextPrize;
    }

    /**
     * @return int
     */
    public function getBeersUntilNextPrize()
    {
        return $this->beersUntilNextPrize;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int $homeLocationId
     */
    public function setHomeLocationId($homeLocationId)
    {
        $this->homeLocationId = $homeLocationId;
    }

    /**
     * @return int
     */
    public function getHomeLocationId()
    {
        return $this->homeLocationId;
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
     * @param int $lifetimePrizeValue
     */
    public function setLifetimePrizeValue($lifetimePrizeValue)
    {
        $this->lifetimePrizeValue = $lifetimePrizeValue;
    }

    /**
     * @return int
     */
    public function getLifetimePrizeValue()
    {
        return $this->lifetimePrizeValue;
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
     * @param string $nextPrize
     */
    public function setNextPrize($nextPrize)
    {
        $this->nextPrize = $nextPrize;
    }

    /**
     * @return string
     */
    public function getNextPrize()
    {
        return $this->nextPrize;
    }

    /**
     * @param int $prizeRedeemed
     */
    public function setPrizeRedeemed($prizeRedeemed)
    {
        $this->prizeRedeemed = $prizeRedeemed;
    }

    /**
     * @return int
     */
    public function getPrizeRedeemed()
    {
        return $this->prizeRedeemed;
    }

    /**
     * @param int $prizeValue
     */
    public function setPrizeValue($prizeValue)
    {
        $this->prizeValue = $prizeValue;
    }

    /**
     * @return int
     */
    public function getPrizeValue()
    {
        return $this->prizeValue;
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
     * @param int $toursToVip
     */
    public function setToursToVip($toursToVip)
    {
        $this->toursToVip = $toursToVip;
    }

    /**
     * @return int
     */
    public function getToursToVip()
    {
        return $this->toursToVip;
    }

    /**
     * @param \stdClass $json A json object to extract properties from
     * @return User
     */
    public static function fromJson($json)
    {
        $user = new User();
        $user->setId($json->id);
        $user->setName($json->name);
        $user->setEmail($json->email);
        $user->setCardNumber($json->cardNumber);
        $user->setBirthday($json->birthday);
        $user->setBeersInCurrentTour($json->beersInCurrentTour);
        $user->setToursToVip($json->toursToVip);
        $user->setPrizeValue($json->prizeValue);
        $user->setPrizeRedeemed($json->prizeRedeemed);
        $user->setLifetimePrizeValue($json->lifetimePrizeValue);
        $user->setBeersUntilNextPrize($json->beersUntilNextPrize);
        $user->setNextPrize($json->nextPrize);
        $user->setHomeLocationId($json->homeLocationId);
        $user->setRowChanged($json->rowChanged);

        return $user;
    }
}