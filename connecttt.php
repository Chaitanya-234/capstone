<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Done 👍😇></title>
</head>
<body>

</body>
</html>
<?php
	
	session_start();
	$firstName =$_POST['firstName'];
	$lastName =$_POST['lastName'];
	$option=$_POST['vt'] ;
	$tax =$_POST['tax'];
	$vechicleNo =$_POST['vechicleNo'];
	$nomi=$_POST['nom'];
	date_default_timezone_set('Asia/Kolkata');
	$dahte=date("Y-m-d H:i:s");
	$Rec=$_SESSION['user'];
	$conn =new mysqli('bggdwkmz9yilvfw1m8ww-mysql.services.clever-cloud.com:3306','uge66coybsyu00cz','84Kz2wFGWtX1cjUtvAW5','bggdwkmz9yilvfw1m8ww');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die('connectio failed ...'.$conn->connect_error);
	}else{
		echo "Connection Done...............";
		$stmt=$conn->prepare("insert into vechicle(Nominal,firstName,lastName,Vechicle_Type,tax,vechicleNo,TaxReceiver,date_time) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssisss",$nomi,$firstName,$lastName,$option,$tax,$vechicleNo,$Rec,$dahte);
		$execval = $stmt->execute();
		echo $execval;
		echo "\n Data Saved";
		$sql="SELECT * FROM vechicle WHERE vechicleNo='".$vechicleNo."'";
		$retval=$conn->query($sql);
		$row=$retval->fetch_assoc();
		$stmt->close();
		$conn->close();
		ob_start();
		require('FPDF/fpdf.php');
		$fpdf=new FPDF();
		$fpdf->SetFont('Helvetica', 'B',20);
		$fpdf->AddPage();
		$image1 = "img/logo.jpg";
		$fpdf->Cell(190, 16, 'National Highway Authority of India', 0, 3, 'C', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->Cell(0,8,$fpdf->Image($image1, $fpdf->GetX()+150, $fpdf->GetY()+2, 35),0,1,'C',FALSE);
		$fpdf->Cell(56, 4, 'Recipt No        :'.$row['id'], 0, 1, 'R', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->Cell(50, 4, 'City      :'.$_SESSION['city'], 0, 1, 'R', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->Cell(100, 4, 'Tax Receiver  :'.$_SESSION['user'], 0, 1, 'R', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, '', 0, 1, 'L', FALSE);
		$fpdf->SetFont('Helvetica', '',16);
		$fpdf->Cell(56, 6, 'First Name             :'.$nomi." ".$firstName, 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, 'Last Name             :'.$lastName, 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, 'Vechicle Type        :'.$option, 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, 'Tax Applied            :'.$tax, 0, 1, 'L', FALSE);
		$fpdf->Cell(56, 6, 'Vechicle Number    :'.$vechicleNo, 0, 0, 'L', FALSE);
		$fpdf->Output('.pdf','I');
		ob_end_flush(); 
		
		
		

	}
	
					

		header("Location: card.html",true,301);
	
?>
