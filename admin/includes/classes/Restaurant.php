<?php
class Restaurant {
    private $restaurant_id;
    private $restaurant_name;
    private $restaurant_image;
    private $restaurant_description;
    private $restaurant_capacity;

    /**
     * @return mixed
     */
    public function getRestaurantId()
    {
        return $this->restaurant_id;
    }

    /**
     * @param mixed $restaurant_id
     */
    public function setRestaurantId($restaurant_id)
    {
        $this->restaurant_id = $restaurant_id;
    }

    /**
     * @return mixed
     */
    public function getRestaurantName()
    {
        return $this->restaurant_name;
    }

    /**
     * @param mixed $restaurant_name
     */
    public function setRestaurantName($restaurant_name)
    {
        $this->restaurant_name = $restaurant_name;
    }

    /**
     * @return mixed
     */
    public function getRestaurantImage()
    {
        return $this->restaurant_image;
    }

    /**
     * @param mixed $restaurant_image
     */
    public function setRestaurantImage($restaurant_image)
    {
        $this->restaurant_image = $restaurant_image;
    }

    /**
     * @return mixed
     */
    public function getRestaurantDescription()
    {
        return $this->restaurant_description;
    }

    /**
     * @param mixed $restaurant_description
     */
    public function setRestaurantDescription($restaurant_description)
    {
        $this->restaurant_description = $restaurant_description;
    }

    /**
     * @return mixed
     */
    public function getRestaurantCapacity()
    {
        return $this->restaurant_capacity;
    }

    /**
     * @param mixed $restaurant_capacity
     */
    public function setRestaurantCapacity($restaurant_capacity)
    {
        $this->restaurant_capacity = $restaurant_capacity;
    }



}