<?php
include("waris1.php");
// Pewarisan tanpa perubahan
class OrangInggris extends Orang{
}
// Pewarisan dengan meng-override function UcapSalam
// dan Penambahan Method
class OrangSwis extends Orang{
protected $asal="England"; // penambahan properti baru
function UcapSalam(){
echo "Hello. My name is ".$this->nama."<br>";
}
function UcapNegara(){ // penambahan method baru
echo "I'm from ".$this->asal."<br>";
}
}
$kabayan=new OrangInggris("Leo de william");
$kabayan->UcapSalam();
$william=new OrangSwis("Micheal Cantona");
$william->UcapSalam();
$william->UcapNegara();
?>