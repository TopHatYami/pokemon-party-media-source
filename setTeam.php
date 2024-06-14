<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
include 'db.php';
$db = new DB;
?>
<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<table class="table table-striped">
  <thead>
    <tr>
      <th colspan="3"><input id="pokeSearch" type="text" placeholder="Search Pokemon" class="form-control"></th>
    </tr>
    <tr>
      <th>Pokemon</th>
      <th>Nickname</th>
      <th>Active team member</th>
    </tr>
  </thead>
  <tbody id="pokeList">
    <?php
    $db->query("SELECT * FROM pokemon");
    while($db->next_record()){
      list($id, $poke, $nickname, $active) = $db->Record;
      $poke = ucwords($poke);
      $inTeam = $active == 1 ? 'checked="checked"' : '';
      echo <<<EOT
      <tr id="$id">
        <td style="font-size:18px;padding-top:20px">$poke</td>
        <td><input type="text" value="$nickname" class="form-control" onblur="updateNickname($id,this.value)"/></td>
        <td><label class="switch"><input type="checkbox" $inTeam onChange="updateActive($id, this.checked)"><span class="slider round"></span></label></td>
      </tr>
EOT;
    }
    ?>
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
function updateNickname(id,name){
    $.post("ajax/updatePN.php", {id:id, name:name},function(data){
        console.log(data);
    });
}
function updateActive(id,checked){
  if(checked == true) active = 1; else active = 0;
  $.post("ajax/updatePA.php", {id:id, active:active},function(data){
      console.log(data);
  });
}

$(document).ready(function(){
  $("#pokeSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#pokeList tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
