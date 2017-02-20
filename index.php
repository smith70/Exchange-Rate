<?php
if (isset($_POST['ex'])) {
	if ($_POST['ex']=="jpy") {
		$money = $_POST['mon']*3.24;
	}
	if ($_POST['ex']=="usd") {
		$money = $_POST['mon']*0.0285;
	}
	if ($_POST['ex']=="aud") {
		$money = $_POST['mon']*0.037;
	}
	$money = number_format($money, 2, '.', '');
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="index.php">
		เลือกค่าเงินประเทศ : <select name="ex" required>
			<option value="jpy"> ญี่ปุ่น </option>
			<option value="usd"> อเมริกา </option>
			<option value="aud"> ออสเตเรีย</option>
		</select>
		ค่าเงินบาท : <input name="mon" required>
		<button>เปลี่ยนสกุลเงิน</button>
	</form>
	<p>
<?php
if (isset($_POST['ex'])) {
	echo $money;
}
?>
	</p>
</body>
</html>
สิ้นสุดการสนทนาผ่านแชท
