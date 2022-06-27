<?php
if(isset($_POST['submit']))  {
    $emailbody = 'First Name :'.$_POST['fname']."\n"
	.'Last Name:'.$_POST['lname']."\n"
	.'E-mail:'.$_POST['email']."\n"
	.'Address:'.$_POST['adress']."\n"
	.'Contact Number:'.$_POST['contctnumber']."\n"
	.'Product:'.$_POST['product']."\n"
	mail('nazmi95.nn@gmail.com','Subject line',$emailbody);
	header('location:Front jam.httml');
} else {
    header('location: Next Jam 3.html');
}
?>