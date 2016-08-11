 <?php
 session_start();
 $_SESSION['user']="";
 $em_id=$_POST['em_id'];
 $em_password=$_POST['em_password'];
 $connect=mysql_connect("db.mis.kuas.edu.tw", "s1100137213","s1100137213");
 mysql_query("SET NAMES utf8");
 mysql_select_db('s1100137213');
 $search="SELECT  `em_id`, `em_password` FROM  `EMPLOYEE` WHERE  `em_id` ='".$em_id."'AND  `em_password`='".$em_password."'";
 $result=mysql_query($search);
 $save=mysql_fetch_array($result);
 $total=mysql_num_rows($result);
 $user=$save['em_id'];
 if($total==1)
 {
     if(substr($user,0,1)=="A")
     {
         $_SESSION['user']=$user;
         header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=Aindex.php");
               
     }
     else
     {
         $_SESSION['user']=$user;
         header("Content-Type: text/html; charset=utf-8");
              header("refresh:1;URL=Aindex.php");
               
                
     }    
 }
 else 
{
    header("Content-Type: text/html; charset=utf-8");
    header('refresh:2;URL=main.php');
    die("帳號或密碼有誤,請重新輸入");
    $_SESSION['user']="";
     
}
 mysql_close($connect);
        ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        //echo $save['password'];
       ?>
    </body>
</html>
