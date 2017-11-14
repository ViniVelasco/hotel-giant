<?php
class Event {
    private $event_id;
    private $event_name;
    private $event_description;
    private $event_image;
    private $event_capacity;
    private $event_date;
    private $evente_price;

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * @param mixed $event_id
     */
    public function setEventId($event_id)
    {
        $this->event_id = $event_id;
    }

    /**
     * @return mixed
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * @param mixed $event_name
     */
    public function setEventName($event_name)
    {
        $this->event_name = $event_name;
    }

    /**
     * @return mixed
     */
    public function getEventDescription()
    {
        return $this->event_description;
    }

    /**
     * @param mixed $event_description
     */
    public function setEventDescription($event_description)
    {
        $this->event_description = $event_description;
    }

    /**
     * @return mixed
     */
    public function getEventImage()
    {
        return $this->event_image;
    }

    /**
     * @param mixed $event_image
     */
    public function setEventImage($event_image)
    {
        $this->event_image = $event_image;
    }

    /**
     * @return mixed
     */
    public function getEventCapacity()
    {
        return $this->event_capacity;
    }

    /**
     * @param mixed $event_capacity
     */
    public function setEventCapacity($event_capacity)
    {
        $this->event_capacity = $event_capacity;
    }

    /**
     * @return mixed
     */
    public function getEventDate()
    {
        return $this->event_date;
    }

    /**
     * @param mixed $event_date
     */
    public function setEventDate($event_date)
    {
        $this->event_date = $event_date;
    }

    /**
     * @return mixed
     */
    public function getEventePrice()
    {
        return $this->evente_price;
    }

    /**
     * @param mixed $evente_price
     */
    public function setEventePrice($evente_price)
    {
        $this->evente_price = $evente_price;
    }


}