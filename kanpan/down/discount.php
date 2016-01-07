<?php
//echo "0";
$name = $_GET['userName'];  
$pass=$_GET['pass'];
$recommend=$_GET['recommend'];
$total_fee=$_GET['total_fee'];

$con=mysql_connect("localhost","zzc","zhouzhongcheng&11414");//,"stock_alarm");

//echo "begin";
// Check connection
if (mysqli_connect_errno())
{
 	 echo "failed to connect to MySQL: " . mysqli_connect_error();
}
else 
{
	//echo "i con ok ";

	$db_found = mysql_select_db("stock_alarm", $con);

	if ($db_found) {
		
		//echo "found database";
		$SQL = "SELECT  discount_times from user where user_name='".$name."' and pass='".$pass."'";
		//echo $SQL;
		$result = mysql_query($SQL);
		
		$discount_times=0;

		while ( $row = mysql_fetch_array($result) ) {
			
			$discount_times=$row['discount_times'];
		}
//		echo "disount times:".$discount_times;

		if($discount_times<2 && $total_fee>=10 && $total_fee<600) {
			
			
			 $discountValue=0;
			
			$discountValue=intval($total_fee*0.1);
			



			$sqlUpdate="update user set discount_times=".($discount_times+1).",account_value=account_value+".$discountValue."  where  user_name='".$name."' and pass='".$pass."'";
			
			$updateResult=mysql_query($sqlUpdate);
//			echo "9";
			$updateResult3=false;
			//echo mysql_affected_rows();
			if(mysql_affected_rows()>0) {
				$sqlUpdate3="update user set account_value=account_value+".$discountValue."  where  user_name='".$recommend."'";
			
				$updateResult3=mysql_query($sqlUpdate3);
				

			}

			if(mysql_affected_rows()>0)
				echo "discountok";
			else
				echo "discountfail:update fail";


				
		}
		else 
			echo "discountfail:times >2";

		

		$discount_times++;
		$sqlUpdate2="update user set discount_times=".$discount_times." where  user_name='".$name."' and pass='".$pass."'";
			
		$updateResult2=mysql_query($sqlUpdate2);
			


	}
	else {
		echo "fail:Database not found da";
		
		

	}





	

	}

	mysql_close($con);



?>
