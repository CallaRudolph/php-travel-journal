<?php
    class Place
    {
        private $city_name;
        private $duration;
        private $best_memory;
        private $best_meal;
        private $favorite_abductee;

        function __construct($city_name, $duration, $best_memory, $best_meal, $favorite_abductee)
        {

            $this->city_name = $city_name;
            $this->duration = $duration;
            $this->best_memory = $best_memory;
            $this->best_meal = $best_meal;
            $this->favorite_abductee = $favorite_abductee;
        }

        function setCity()
        {
            $this->city_name = $city_name;
        }

        function getCity()
        {
            return $this->city_name;
        }

        function setDuration()
        {
            $this->duration = $duration;
        }

        function getDuration()
        {
            return $this->duration;
        }

        function setMemory()
        {
            $this->best_memory = $best_memory;
        }

        function getMemory()
        {
            return $this->best_memory;
        }

        function setMeal()
        {
            $this->best_meal = $best_meal;
        }

        function getMeal()
        {
            return $this->best_meal;
        }

        function setAbductee()
        {
            $this->favorite_abductee = $favorite_abductee;
        }

        function getAbductee()
        {
            return $this->favorite_abductee;
        }

        function save()
        {
            array_push($_SESSION['list_of_places'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_places'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_places'] = array();
        }
    }
?>
