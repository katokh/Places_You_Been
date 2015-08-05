<?php
      class Place
      {
        private $cityName;
        private $lengthOfTime;
        private $reasonOfVisit;

        //Constructor
        function __construct($cityName, $lengthOfTime, $reasonOfVisit)
        {
          $this->city = $cityName;
          $this->time = $lengthOfTime;
          $this->reason = $reasonOfVisit;
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

        function setReasonOfVisit($new_reason_of_visit)
        {
          $this->time = (float) $new_reason_of_visit;
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

        function getReasonOfVisit()
        {
          return $this->reason;
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
