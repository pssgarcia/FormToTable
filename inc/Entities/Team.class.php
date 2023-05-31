<?php

class Team {
   private array $team;

   public function getTotalPlayers(): int {
      return count($this->team);
   }

   public function getTeam() : array {
      return $this->team;
   }

   public function setTeam(array $team): void {
      $this->team = $team;
   }

   public function insertPlayer($newPlayer){
      $this->team[] = $newPlayer;
   }

   public static function compareId($player1, $player2) {
      return $player1->getId() <=> $player2->getId();
   }

   public static function compareName($player1, $player2) {
      return $player1->getName() <=> $player2->getName();
   }

   public static function comparePosition($player1, $player2) {
      return $player1->getName() <=> $player2->getName();
   }

   public static function compareBat($player1,$player2){
      return $player1->getBat() <=> $player2->getBat();
   }

   public static function compareAge($player1,$player2) {
      return $player1->getAge() <=> $player2->getAge();
   }

   public static function compareThrow($player1,$player2) {
      return $player1->getThrow() <=> $player2->getThrow();
   }

   public static function compareHeight($player1,$player2) {
      return $player1->getHeight() <=> $player2->getHeight();
   }

   public static function compareWeight($player1,$player2) {
      return $player1->getWeight() <=> $player2->getWeight();
   }

   public static function compareBirthPlace($player1,$player2) {
      return $player1->getBirthPlace() <=> $player2->getBirthPlace();
   }

   public function sortPlayers($sortBy){
      switch($sortBy) {
         case 'id':
            usort($this->team, 'self::compareId');
            break;
         case 'name':
            usort($this->team, 'self::compareName');
            break;
         case 'position':
            usort($this->team,'self::comparePosition');
            break;
         case 'bat':
            usort($this->team,'self::compareBat');
            break;
         case 'throw':
            usort($this->team,'self::compareThrow');
            break;
         case 'age':
            usort($this->team, 'self::compareAge');
            break;
         case 'height':
            usort($this->team,'self::compareHeight');
            break;
         case 'weight':
            usort($this->team,'self::compareWeight');
            break;
         case 'birthPlace':
            usort($this->team,'self::compareBirthPlace');
            break;
      }
   }
}