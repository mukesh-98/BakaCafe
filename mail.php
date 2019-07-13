	<?php
if(isset($_POST['submit'])) {
	     
	   
	        $emailto = "mukesh1998parmar@gmail.com";
	        $email_subject = "-------------Order------------"; 
	     

                $thali = implode(", ", $_POST['thali']);
	        $SouthIndian = implode(", ", $_POST['South Indian']);
		$Snacks = implode(", ", $_POST['snacks']);
		$Specialitem = implode(", ", $_POST['Special1']);

                $Noodles = implode(", ", $_POST['Noodles']);
	        $rice = implode(", ", $_POST['rice']);
		$SuShi = implode(", ", $_POST['Sushi']);
		$Specialitem2 = implode(", ", $_POST['Special2']);
	 
                $pasta = implode(", ", $_POST['pasta']);
	        $spaghatti = implode(", ", $_POST['spaghatti']);
		$pizza = implode(", ", $_POST['pizza']);
		$Specialitem3 = implode(", ", $_POST['Special3']);

                $tacos= implode(", ", $_POST['tacos']);
	        $burritos = implode(", ", $_POST['burritos']);
		$rojo = implode(", ", $_POST['rojo']);
		$Specialitem3 = implode(", ", $_POST['Special4']);

		$facebook=$_POST['facebook'];
		$twitter=$_POST['twitter'];
		$gplus=$_POST['gplus'];


		$fname = $_POST['fname']; 
	        $lname = $_POST['lname'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$addr=$_POST['address'];
		$number=$_POST['number'];
		$date=$_POST['date'];
		$msg=$_POST['message'];

		
		
	        function mailmsg() {

echo"\n MENU \n ",$thali,$SouthIndian,$Snacks,$Specialitem,$Noodles,$rice,$SuShi,$Specialitem2,$pasta,$spaghatti,$pizza,$Specialitem3,$tacos,$burritos,$rojo,$Specialitem3,"\n Social Detail \n",$facebook,$twitter,$gplus,"\n Personal Detail \n",$fname,$lname,$phone,$email,$addr,$number,$date,$msg;

	 }

require '/home/mukesh/PHPMailer-master/PHPMailerAutoload.php';
$mail= new PHPMailer();
$mail -> IsSmtp();
$mail -> SMTPDebug =1;
$mail -> SMTPAuth= true;
$mail -> SMTPSecure= 'ssl';
$mail -> Host ="smtp.gmail.com";
$mail -> Port=465 ;
$mail -> IsHTML(true);
$mail -> Username =$email;
$mail -> Password =$password;
$mail -> SetForm($email);
$mail -> Subject =$email_subject;
$mail -> Body = mailmsg();
$mail ->AddAddress($emailto);

if(!$mail->Send())
{
echo"not Send";
}
else
{
echo"Order Placed \n Thanks for visiting \n Have a nice day...!!!!";
}
?>
