<?php
class Player {
   private int $id;
   private string $name;
   private string $position;
   private string $bat;
   private string $throw;
   private int $age;
   private int $height;
   private int $weight;
   private string $birthPlace;

   /**
    * @param integer $id
    * @param string $name
    * @param string $position
    * @param integer $bat
    * @param string $throw
    * @param integer $age
    * @param integer $height
    * @param integer $weight
    * @param string $birthPlace
    */
   public function __construct( int $id, string $name, string $position, string $bat, string $throw, int $age, int $height, int $weight, string $birthPlace) {
      $this->id = $id;
      $this->name = $name;
      $this->position = $position;
      $this->bat = $bat;
      $this->throw = $throw;
      $this->age = $age;
      $this->height = $height;
      $this->weight = $weight;
      $this->birthPlace = $birthPlace;
   }

   public function getId(): int {
      return $this->id;
   }
   public function getName(): string {
      return $this->name;
   }
   public function getPosition(): string {
      return $this->position;
   }
   public function getBat(): string {
      return $this->bat;
   }
   public function getThrow(): string {
      return $this->throw;
   }
   public function getAge(): int {
         return $this->age;
   }
   public function getHeight(): int {
         return $this->height;
   }
   public function getWeight(): int {
            return $this->weight;
   }
   public function getBirthPlace(): string {
         return $this->birthPlace;
   }
   public function setName(string $name) {
      $this->name = $name;
   }
   public function setPosition(string $position) {
      $this->position = $position;
   }
   public function setBat(string $bat) {
      $this->bat = $bat;
   }
   public function setThrow(string $throw) {
      $this->throw = $throw;
   }
   public function setAge(int $age) {
      $this->age = $age;
   }
   public function setHeight(int $height) {
      $this->height = $height;
   }
   public function setWeight(int $weight) {
      $this->weight = $weight;
   }
   public function setBirthPlace(string $birthPlace) {
      $this->birthPlace = $birthPlace;
   }
}