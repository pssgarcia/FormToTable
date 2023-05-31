<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Player.class.php");
require_once("inc/Entities/Team.class.php");
require_once("inc/FileManager.class.php");
require_once("inc/FileParser.class.php");
require_once("inc/Page.class.php");

$fileContent = FileManager::readCsvFile("./data/orioles.csv");
$team = new Team();
$team->setTeam(FileParser::convertToObject($fileContent));
// var_dump($team->getTeam());

// $_POST
// $_GET
// $_COOKIE
// $_SESSION
// $_FILE

if (!empty($_POST)){
   $newPlayer = new Player(
      $_POST['id'],
      $_POST['name'],
      $_POST['position'],
      $_POST['bat'],
      $_POST['throw'],
      $_POST['age'],
      $_POST['height'],
      $_POST['weight'],
      $_POST['bplace']
   );

   $team->insertPlayer($newPlayer);
}
if (!empty($_GET)){
   echo Page::playerForm();
   $team->sortPlayers($_GET['sortby']);
   echo Page::playerTable($team->getTeam());

} else {
   echo Page::playerForm();
   echo Page::playerTable($team->getTeam());
}

echo Page::pageHeader();
// echo Page::pageBanner();
// echo Page::mainContent();
// echo Page::pageEnd();
echo Page::pageFooter();