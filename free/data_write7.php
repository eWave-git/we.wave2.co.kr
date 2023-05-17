<?php
foreach ($_REQUEST as $k => $v) {
		$$k = hexdec($v);
}


$date = date("Y-m-d");
$time = date("His");
$create_at = date("Y-m-d H:i:s");
$from_ip = $_SERVER['REMOTE_ADDR'];
$conn = mysqli_connect("database-2.cvdze1lptugg.ap-northeast-2.rds.amazonaws.com","wave2","crss6801!!","well") or die ("Can't access DB");

$address = dechex($add);

$bd_num = dechex($bd);
$bd_type = substr($bd_num, 0, 1);
$bd_number = substr($bd_num, 1, 1);


if ($bd_type != 1) {

	if ($address == '227') {
		

	if ($bd_type == 2) {
		$d1 = round($d1 / 65536 * 175 - 46.85,1); //온도센서
		$d2 = round($d2 / 65536 * 125 - 6, 1); // 습도센서
		if ($d2>99.9){
			$d2 = 99.9;
		}
		$d7 = round($d7 / 1.2, 1); // 조도센서
//	} else if ($bd_type == 3) {
//		$d1 = round($d1 / 10,1); //온도센서 AM2305
//		$d2 = round($d2 / 10,1); //습도센서 AM2305
	} else if ($bd_type == 4) {   //아날로그보드 경우의 수

		if($bd_number == 5)	{																// 5번보드 PH + 1, EC 0
			$d1 = round($d1 / 65536 * 100,1); //지습도 센서
			if ($d2 < 768){
				$d2 = 0;
			}	else {
				$d2 = round(($d2 - 768) / 3328 * 14 , 1) + 1; // PH 센서 셋팅
			}
			if ($d3 < 768){
				$d3 = 0;
			} else {
				$d3 = round(($d3 - 768) / 3328 * 44 , 1); // EC 센서 셋팅
			}
			if ($d4 < 768){
				$d4 = 0;
			} else {
			$d4 = round(($d4 - 768) / 3328 * 2500 , 1); // PAR 센서 셋팅
			}
		}
		else if($bd_number == 6)	{														// 6번보드 PH + 0.3, EC -3
			$d1 = round($d1 / 65536 * 100,1); //지습도 센서
			if ($d2 < 768){
				$d2 = 0;
			}	else {
				$d2 = round(($d2 - 768) / 3328 * 14 , 1) + 0.3; // PH 센서 셋팅
			}
			if ($d3 < 768){
				$d3 = 0;
			} else {
				$d3 = round(($d3 - 768) / 3328 * 44 , 1) - 3.5; // EC 센서 셋팅
			}
			if ($d4 < 768){
				$d4 = 0;
			} else {
			$d4 = round(($d4 - 768) / 3328 * 2500 , 1); // PAR 센서 셋팅
			}
		}
		else if($bd_number == 7)	{														// 7번보드 PH + 2, EC 0
			$d1 = round($d1 / 65536 * 100,1); //지습도 센서
			if ($d2 < 768){
				$d2 = 0;
			}	else {
				$d2 = round(($d2 - 768) / 3328 * 14 , 1) + 2; // PH 센서 셋팅
			}
			if ($d3 < 768){
				$d3 = 0;
			} else {
				$d3 = round(($d3 - 768) / 3328 * 44 , 1); // EC 센서 셋팅
			}
			if ($d4 < 768){
				$d4 = 0;
			} else {
			$d4 = round(($d4 - 768) / 3328 * 2500 , 1); // PAR 센서 셋팅
			}
		}
		else	{
			$d1 = round($d1 / 65536 * 100,1); //지습도 센서
			if ($d2 < 768){
				$d2 = 0;
			}	else {
				$d2 = round(($d2 - 768) / 3328 * 14 , 1); // PH 센서 셋팅
			}
			if ($d3 < 768){
				$d3 = 0;
			} else {
				$d3 = round(($d3 - 768) / 3328 * 44 , 1); // EC 센서 셋팅
			}
			if ($d4 < 768){
				$d4 = 0;
			} else {
			$d4 = round(($d4 - 768) / 3328 * 2500 , 1); // PAR 센서 셋팅
			}
		}
	}

	$sql = "INSERT INTO well.raw_data (`create_at`,`address`,`board_type`,`board_number`,`data1`,`data2`,`data3`,`data4`,`data5`,`data6`,`data7`)
    		VALUES ('{$create_at}', $address, $bd_type, $bd_number, $d1, $d2, $d3, $d4, $d5, $d6, $d7)";

	$result = mysqli_query($conn, $sql);
	
//	} else if ($bd_type == 5) {
//		$d1 = round($d1 / 10,1);
//		$d2 = round($d2 / 10,1);
	}	
}

if ($bd_type != 1) {
	if ($address == '420') {
	

		if ($bd_type == 2) {
			$d1 = round($d1 / 65536 * 175 - 46.85,1); //온도센서
			$d2 = round($d2 / 65536 * 125 - 6, 1); // 습도센서
			if ($d2>99.9){
				$d2 = 99.9;
			}
			$d7 = round($d7 / 1.2, 1); // 조도센서
	//	} else if ($bd_type == 3) {
	//		$d1 = round($d1 / 10,1); //온도센서 AM2305
	//		$d2 = round($d2 / 10,1); //습도센서 AM2305
	//		$d8 = 0; // 무시
		$sql = "INSERT INTO well.raw_data_8ch (`create_at`,`address`,`board_type`,`board_number`,`data1`,`data2`,`data3`,`data4`,`data5`,`data6`,`data7`)
    		VALUES ('{$create_at}', $address, $bd_type, $bd_number, $d1, $d2, $d3, $d4, $d5, $d6, $d7)";

		$result = mysqli_query($conn, $sql);		
		}
		
		else if ($bd_type == 4) {   //아날로그보드 경우의 수

			if($bd_number == 3)	{																// 5번보드 PH + 1, EC 0
				$d1 = round($d1 / 65536 * 100,1); //지습도 센서
				if ($d2 < 768){
					$d2 = 0;
				}	else {
					$d2 = round(($d2 - 768) / 3328 * 14 , 1) + 2.6; // PH 센서 셋팅
				}
				if ($d3 < 768){
					$d3 = 0;
				} else {
					$d3 = round(($d3 - 768) / 3328 * 44 , 1) - 0.6; // EC 센서 셋팅
				}
				if ($d4 < 768){
					$d4 = 0;
				} else {
				$d4 = round(($d4 - 768) / 3328 * 2500 , 1); // PAR 센서 셋팅
				}
			}

			$sql = "INSERT INTO well.raw_data_8ch (`create_at`,`address`,`board_type`,`board_number`,`data1`,`data2`,`data3`,`data4`,`data5`,`data6`,`data7`)
    		VALUES ('{$create_at}', $address, $bd_type, $bd_number, $d1, $d2, $d3, $d4, $d5, $d6, $d7)";

			$result = mysqli_query($conn, $sql);
		}
	else if ($bd_type == 5) {
		if ($d1>32768)	{
			$d1 = round(($d1-32768) / 10,1);
			$d1 = -($d1);
			}
			$d1 = round($d1 / 10,1);
		$d2 = round($d2 / 10,1);
		if ($d3>32768)	{
			$d3 = round(($d3-32768) / 10,1);
			}
			$d3 = round($d3 / 10,1);
			$d3 = -($d3);
		$d4 = round($d4 / 10,1);
		if ($d5>32768)	{
			$d5 = round(($d5-32768) / 10,1);
			}
			$d5 = round($d5 / 10,1);
			$d5 = -($d5);			
		$d6 = round($d6 / 10,1);
		if ($d7>32768)	{
			$d7 = round(($d7-32768) / 10,1);
			}
			$d7 = round($d7 / 10,1);
			$d7 = -($d7);
		$d8 = round($d8 / 10,1);

		$sql = "INSERT INTO well.raw_data_8ch (`create_at`,`address`,`board_type`,`board_number`,`data1`,`data2`,`data3`,`data4`,`data5`,`data6`,`data7`,`data8`)
    	VALUES ('{$create_at}', $address, $bd_type, $bd_number, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8)";

		$result = mysqli_query($conn, $sql);
	}


	}
}
//$control_sql = "select * from well.control_data where address = $address and board_type = $bd_type and board_number = $bd_number order by create_at desc limit 1 ";

//$result = mysqli_query($conn, $control_sql);
//$row = mysqli_fetch_array($result);

//if (isset($row['idx'])) {

//	$relay1 = $row['relay1'] == '' ? 0 : $row['relay1'];
//	$relay2 = $row['relay2'] == '' ? 0 : $row['relay2'];


//	$str = "X000Y".$relay1.$relay2."00#";

//	$textdata = "@".$time.$str;

//} else {
	$textdata = "@".$time."X000Y0000#<br>";
//}

echo $textdata;




// http://ri.wave2.co.kr/free/data_write7.php?add=00000501&bd=43&d1=0ede9&d2=002fa&d3=00000&d4=00000&d5=00000&d6=00000&d7=00000&d8=00fff
?>
 
