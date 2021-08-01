<?php
$text = $_GET['text'];
$url="https://api.codebazan.ir/owghat/?city=$text";
$get = json_decode(file_get_contents($url),true);
$ok = $get["Result"];
if($ok==true){
$res=$get["Result"];
$shar=$res[0]["shahr"];
$sob= $res[0]["azansobh"];
$tol = $res[0]["toloaftab"];
$zo = $res[0]["azanzohr"];
$gho = $res[0]["ghorubaftab"];
$magh = $res[0]["azanmaghreb"];
$nim = $res[0]["nimeshab"];

$txt="
👈اوقات شرعی فردا به افق شهر $shar

🌅اذان صبح: $sob
🏙طلوع آفتاب: $tol
☀️اذان ظهر: $zo
🌇غروب خورشید: $gho
🌃اذان مغرب: $magh
🌌نیمه شب شرعی: $nim

";
echo $txt;
}else{
echo "شهر مورد نظر یافت نشد🚫";
}
if (is_file("error_log")){
unlink("error_log");
}
?>
