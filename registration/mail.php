

<?php 
if(isset($_POST['register'])){

    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $college=$_POST['college'];
     if(!empty($_POST['lang'])) {
       
             $display="";
            foreach($_POST['lang'] as $value){
            
                $display=$display.$value.","."  ";
            }
       
        if(isset($_POST['register'])){
             $team = $_POST['member'];  
             }


            $to='techcraze2018@skf.edu.in';
        //  $to='indrajit.kantali@gmail.com';
            $subject='TECHCRAZE REGISTRATION';
            $message="Name: ".$name."\n"."Email: ".$email."\n"."Phone No: ".$phone."\n"."College Name: ".$college."\n"."Event: ".$display."\n"."No of Members: ".$team;;
            $headers="From: ".$email;
            
        
        if (mail($to, $subject, $message, $headers)) {
                echo "<h1>you have successfully registered"." ".$name.",Thank you";
            }
            else{
                echo "something going wrong!";
            }

    }
}


?>