<style>
  .name{
    font-family: 'Lato', sans-serif;
    color:#f0f0f0;
    font-size:22px
  }
  .pokemon{
    height:155px;
    margin-top:10px;
  }
  .s{
    height:100px;
    margin-top:60px
  }
</style>
<div style="width:450px;height:540px;">
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="umbreon.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="espeon.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="makuhita.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="quilava.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="misdreavus.gif"    id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="absol.gif"         id="none"/></div>

  <?php /*
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="aipom.gif"         id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="flaaffy.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="altaria.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="ampharos.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="ariados.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="bayleef.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="croconaw.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="delibird.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="dunsparce.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="entei.gif"         id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="feraligatr.gif"    id="none"/></div>

  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="flygon.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="forretress.gif"    id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="furret.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="gligar.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="granbull.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="hariyama.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="heracross.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="hitmontop.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="houndoom.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="jumpluff.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="ledian.gif"        id="none"/></div>

  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="mantine.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="medicham.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="meditite.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="meganium.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="metagross.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="miltank.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="murkrow.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="noctowl.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="octillery.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="piloswine.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="plusle.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="quagsire.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="qwilfish.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="raikou.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="remoraid.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="shuckle.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="skarmory.gif"      id="none"/></div>
<div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="skiploom.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="slugma.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="smeargle.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="sneasel.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="stantler.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="sudowoodo.gif"     id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="suicune.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="sunflora.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="swablu.gif"        id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="togetic.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="tropius.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="typhlosion.gif"    id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="ursaring.gif"      id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon s"   src="vibrava.gif"       id="none"/></div>
  <div style="float:left;height:180px;width:225px;text-align:center"><img class="pokemon"     src="yanma.gif"       id="none"/></div>
*/ ?>

</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script>
$('.pokemon').each(function(){

  var name
  if($(this).attr('id') != "none"){
    name = $(this).attr('id');
  } else {
    name = $(this).attr('src').slice(0,-4);
  }
  $(this).after("<br><div class='name'>" + name + "</div>");
});
</script>
