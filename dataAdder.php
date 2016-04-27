<?php
$link = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('test');
date_default_timezone_set('Europe/Kiev');

/*http://www.ebay.com/sch/TV-Video-Home-Audio-/32852/i.html

all = document.querySelectorAll('.vip');
all = document.querySelectorAll('.lvresult .space-zero .lvprice.prc .bold');

res1 = [];
for(var i=0;i<all.length;i=i+1) res1[i] = all[i].innerText;
JSON.stringify(res1);*/
if (false) {
	$x1 = json_decode('["MiraScreen WIFI HD Display TV Dongle Miracast DLNA Airplay HDMI 1080P Receiver", "VGA To HDMI Output 1080P HD + USB Audio TV AV HDTV Video Cable Converter Adapter", "Mini Home Cinema Theater 1080P HD Multimedia USB LED Projector AV TV VGA HDMI JD", "Home Cinema Theater Multimedia LED LCD Projector HD 1080P PC AV TV VGA USB HDMI", "1200 Lumens HD 1080P LED Video Projector 3D HDMI Wifi Home Theater TV USB VGA", "3000 Lumen HD 1080P Home Theater Multimedia LED Projector HDMI/TV/AV/VGA/USB 3D", "Zidoo X6 PRO Smart Android 5.1 TV Box RK3368 Octa Core Mini PC 4K WiFi XBMC E3A8", "Excelvan 3D DVB-T Theater Cinema 1080p 3000 Lumens HD Led Projector HDMI USB TV", "Mini 1080P 3D HD LED Projector Multimedia Home Theater USB VGA HDMI White EU BG", "Home Cinema Theater Portable Mini Projector 1080P LCD Sudio Video USB TV SD HDMI", "Full HD 1080P input Home Theater LED LCD Mini Projector Cinema USB TV SD AV 12V", "3500 Lumens LED Projector Home Theater USB TV 3D HD 1080P Business VGA/HDMI", "CS918T Quad Core Android 4.4 Smart TV BOX XBMC 2G/16G 1080P KODI WIFI MINI PC 4K", "HD 1080P LED Multimedia Projector Home Theater Cinema AV TV VGA HDMI USB SD", "Mini Home Cinema Theater 1080P HD Multimedia PC USB LED Projector AV TV VGA HDMI", "4200 Lumens Home Cinema Theater LCD Projector FULL 3D 1080P HD HDMI AV USB VGA", "HDMI Male to VGA With Audio HD Video Cable Converter Adapter 1080P for PC US", "Home Cinema Theater Mini LED LCD 3D Projector 1080P HD HDMI TV PC AV USB VGA SD", "M8S+/M8S Plus Quad Core Android 5.1 Smart TV BOX XBMC Kodi Fully Loaded Wifi 4K", "UC-40 HD 400 Lumens Home Mini LED Projector Support AV/SD/VGA/HDMI", "1080P HD LED Home MulitMedia Theater Cinema USB TV VGA SD HDMI Mini Projector", "Full HD LED96 Wifi Projector 3D LCD Smart Home Theater TV HDMI 5000 Lumens 1080p", "1000 Lumens 3D Mini LED LCD Projector HD 1080P Home Theater HDMI USB VGA AV KJ", "Portable Mini LED Projector Cinema Theater Laptop VGA USB SD AV HDMI Black EU DH", "Mini 1080P 3D HD LED Projector Multimedia Home Theater USB VGA HDMI Black EU BG", "JmGO Android Full HD 1080P Home Theater Projector 3D Wifi Bluetooth TV HDMI New", "Color 3D Mini LED LCD Projector HD 1080P Home Theater HDMI USB VGA AV Cinema KJ", "1080P LED HD Projector Support AV TV VGA USB HDMI SD Mini Home Multimedia Cinema", "Full HD 1080P Home Theater LED Mini Multimedia Projector Cinema USB TV HDMI TF", "800Lumens HD 1080P Home Theater Cinema 3D LCD Projector MHL USB SD VGA HDMI AV", "Mini VGA to HDMI Full HD Video 1080P Audio Converter Adapter for PC Laptop DVD", "Mini LED LCD Projector HD 1080P Home Theater HDMI USB VGA AV Cinema Black EU KJ", "5000Lumens 1080P 3D LED LCD Home Theater Projector Smart Multimedia Cinema HDMI", "UC40+ 2000 Lumens HD 1080P LED Projector 3D HDMI Wifi Home Theater TV USB VGA", "Mini HD 1080P LED Projector Home Cinema Theater Multimedia PC USB SD TV AV HDMI", "NEW LISTING 1080P HD LED Home MulitMedia Theater Cinema USB TV VGA SD HDMI Mini Projector", "LCD Mini Projector Home Cinema Theater 1080P input Multimedia HDMI USB TV SD AV", "4000 Lumens Home Theater Multimedia USB HDMI 1080P Full HD LCD LED Projector", "1000Lumen HD LED Projector Home Cinema Theater PC USB AV HDMI 1080P Black US UP", "Mini Portable HD LED Projector Home Cinema Theater PC Laptop VGA USB SD AV HDMI", "2000 Lumen HD Home Cinema Theater Multimedia LED LCD Projector PC AV TV VGA HDMI", "NEW LISTING 3000 Lumens LCD LED HD Home Theater Cinema Multimedia Projector 3D HDMI VGA", "UC46 Mini HD 1080P 1200LM LED WIFI Projector Home Cinema PC VGA AV USB SD HDMI", "G40+ Pro Mini Home Cinema Theater Multimedia FULL HD LED LCD Projector USB HDMI", "JmGO G1 Android Full HD 1080P Home Theater Projector 3D Wifi Bluetooth TV HDMI", "Mini Full HD 1080P LED Projector Home Cinema Theater Multimedia VGA/SD/USB/HDMI", "Wholesale Goodly Connection HDMI Cable V1.4 HD 1080P for LCD DVD HDTV Samsung", "2000 Lumens HD 1080P Home Cinema Theater Multimedia LED LCD Projector HDMI TV PC", "2015 Newest Full HD LCD LED96+ Projector 3D Wifi Home Theater AV/USB/VGA 1080P", "Multimedia LED Projector Pocket Mini LCD HD 1080P AV TV VGA HDMI 500Lumens"]');
	$x2 = json_decode('["$11.29","$9.15","$39.99","$59.85","$89.27","$51.76","$78.99","$174.99","$51.19","$39.59","$37.45","$165.99","$41.29","$44.64","$20.00","$197.99","$4.59\nTrending at $4.99\n","$86.99","$53.95","$32.97","$25.21","$290.21","$35.14\nTrending at $37.84\n","$0.99","$46.87","$553.90","$35.16","$57.49","$39.99","$59.99","$6.69","$35.11\nTrending at $37.81\n","$262.75","$79.99","$38.63","$1.13","$35.99","$239.99","$35.10","$38.20","$95.99","$60.00","$79.45","$81.34","$523.55","$49.85","$1.52 to $6.64","$95.99","$273.41","$29.99"]');
	foreach ($x2 as &$v) $v = str_replace('$','',$v);

	for ($i=0;$i<50;$i++) {
		mysql_query("INSERT INTO `articles` (`name` ,`cost`) VALUES ('{$x1[$i]}',  '{$x2[$i]}')");
	}
}
mysql_query('TRUNCATE TABLE `cards`');
mysql_query('TRUNCATE TABLE `purchases`');

function randSer() {
	$c = '';
	for($i=0;$i<3;$i++) $c .= chr(rand(65,90));
	return $c;
}

$ex = array(1,6,12);
$series = 10;
$cards = 10;
$ic = 0; // last_inserted_id
for($is=0;$is<$series;$is++) {
	$ser = randSer();
	$issue = mktime(rand(12,18), rand(0,59), rand(0,59), $m=1, rand(1,28), 2016);
	$type = rand(0,2); // rand period
	$m += $ex[$type];
	$expir = mktime(rand(12,18), rand(0,59), rand(0,59), $m, rand(1,28), 2016);
	$statusT = ($expir > time());

	for ($i=0;$i<$cards;$i++) {
		$numb = str_pad($i,6,'0',STR_PAD_LEFT);
		if ($statusT) $status = rand(0,1);
		else $status = 2; // expired

		mysql_query("INSERT INTO `cards`
		(`series` ,`number` ,`issueDate` ,`expirationDate` ,`status`) VALUES 
		('$ser',  '$numb',  '$issue',  '$expir',  '$status')");

		$ic++;
		$opers = rand(3,10);
		for($io=0;$io<$opers;$io++) {
			$operTime = rand($issue,$expir);
			$articleId = rand(0,49);
			mysql_query("INSERT INTO `purchases` (`cardId` ,`articleId` ,`operTime`)VALUES ('$ic',  '$articleId', '$operTime')");
		}
	}
}

?>