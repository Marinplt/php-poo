<?php
class Boardgame {
    private $id;
    private $name;
    private $players_min;
    private $players_max;
    private $age_min;
    private $age_max;
    private $picture;

    public function __construct( $data = [] ){
        if ( !empty($data) ) {
            $this->hydrate($data);
        }
    }
    private function hydrate($data) {
        foreach ($data as $key => $value)
        {
            $method = 'set'.str_replace('_', '', ucwords($key, '_')); // replace snake_case to PascalCase

            if (method_exists($this, $method))  // check if setter exists and execute it.
            {
                $this->$method($value);
            }
        }
    }

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }
    public function getPlayersMin() {
        return $this->players_min;
    }
    public function setPlayersMin(int $players_min) {
        $this->players_min = $players_min;
        return $this;
    }
    public function getPlayersMax() {
        return $this->players_max;
    }
    public function setPlayersMax(int $players_max) {
        $this->players_max = $players_max;
        return $this;
    }
    public function getAgeMin() {
        return $this->age_min;
    }
    public function setAgeMin(int $age_min) {
        $this->age_min = $age_min;
        return $this;
    }
    public function getAgeMax() {
        return $this->age_max;
    }
    public function setAgeMax(int $age_max) {
        $this->age_max = $age_max;
        return $this;
    }
    
    public function getPicture() {
        return $this->picture;
    }
    public function setPicture(string $picture) {
        $this->picture = $picture;
        return $this;
    }
}