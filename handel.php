<?php 
if(isset($_POST['register'])){

echo "your name is ".$_POST['first-name'].' '.$_POST['last-name'].', ';
echo "your contact is ".$_POST['email-mobile'].', ';
echo "your password is ".$_POST['up-password'].', ';
echo "your birthday is ".$_POST['birth-day'].'/'.$_POST['birth-month'].'/'.$_POST['birth-year'].', ';
echo "your gender is ".$_POST['gen'].'.';
}else {
    echo "error 404";
}
?>