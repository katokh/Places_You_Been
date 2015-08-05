<?php
      class Place
      {
        private $cityName;
        private $lengthOfTime;

        //Constructor
        function __construct($cityName, $lengthOfTime)
        {
          $this->city = $cityName;
          $this->time = $lengthOfTime;
        }

        //Setters
        function setCityName($new_city_name)
        {
          $this->city = (string) $new_city_name;
        }

        function setLengthOfTime($new_length_of_time)
        {
          $this->time = (float) $new_length_of_time;
        }

        //Getters
        function getCityName()
        {
          return $this->city;
        }

        function getLengthOfTime()
        {
          return $this->time;
        }

        //Save Method
        function save()
        {
          array_push($_SESSION['list_of_cities'], $this);
        }

        //Getter Static Method
        static function getAll()
        {
          return $_SESSION['list_of_cities'];
        }

        //Static Method - Deletes Tasks
        static function deleteAll()
        {
          $_SESSION['list_of_cities'] = array();
        }
      }


?>
