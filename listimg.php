<?php
include 'db.php';
$db = new DB;
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        if(stristr($fileinfo->getFilename(), '.gif')){
          $poke = substr($fileinfo->getFilename(),0,-4);
          $db->query("INSERT INTO pokemon SET pkmn = '$poke', nickname = 'none', active = '0'");
        }
        //echo '<div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="'.$fileinfo->getFilename().'"       id="none"/></div>';
    }
}
?>
eof
