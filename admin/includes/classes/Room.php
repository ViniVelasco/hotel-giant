<?php

class Room {
    private $room_id;
    private $room_name;
    private $room_description;
    private $room_price;
    private $room_image;

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * @param mixed $room_id
     */
    public function setRoomId($room_id)
    {
        $this->room_id = $room_id;
    }

    /**
     * @return mixed
     */
    public function getRoomName()
    {
        return $this->room_name;
    }

    /**
     * @param mixed $room_name
     */
    public function setRoomName($room_name)
    {
        $this->room_name = $room_name;
    }

    /**
     * @return mixed
     */
    public function getRoomDescription()
    {
        return $this->room_description;
    }

    /**
     * @param mixed $room_description
     */
    public function setRoomDescription($room_description)
    {
        $this->room_description = $room_description;
    }

    /**
     * @return mixed
     */
    public function getRoomPrice()
    {
        return $this->room_price;
    }

    /**
     * @param mixed $room_price
     */
    public function setRoomPrice($room_price)
    {
        $this->room_price = $room_price;
    }

    /**
     * @return mixed
     */
    public function getRoomImage()
    {
        return $this->room_image;
    }

    /**
     * @param mixed $room_image
     */
    public function setRoomImage($room_image)
    {
        $this->room_image = $room_image;
    }


}