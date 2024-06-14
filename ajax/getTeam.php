<?php
include '../db.php';
$db = new DB;

$i = 0;
$db->query("SELECT * FROM pokemon WHERE active = 1");
while($db->next_record()){
  list($id, $pkmn, $nickname) = $db->Record;
  echo <<<EOT
    <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="pokemon/$pkmn.gif"       id="$nickname"/></div>
EOT;
  $i++;
}

while($i < 6){
  echo '<div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"     src="empty.png"       id="none"/></div>';
  $i++;
}
?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script>
$('.pokemon').each(function(){

  var name
  if($(this).attr('id') != "none"){
    name = $(this).attr('id');
  } else {
    name = $(this).attr('src').slice(8,-4);
    name = name.charAt(0).toUpperCase() + name.slice(1);
  }
  $(this).after("<br><div class='name'>" + name + "</div>");
});
</script>
