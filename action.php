<?php
$name=$_POST['name'];
$contact=$_POST['Contact'];
$En=$_POST['En'];
$branch=$_POST['branch'];
$interest=$_POST['interest'];

if(!empty($name)|| !empty($contact)|| !empty($En)|| !empty($branch)|| !empty($interest))
{
    $severname="51.158.118.84:33060";
    $username="vansh";
    $password="12345678";
    $dbname="noobsters";
    $conn=new mysqli($severname,$username,$password,$dbname);
    $room;
    
        if($interest==I)
        { $a="SELECT count(*) FROM student HAVING intrest='I' ";$a++; 
        $room=100+$a;
        }
      elseif($interest==C)
        { $b="SELECT count(*) FROM student WHERE intrest='C' ";$b++;
        $room=200+$b;
        }
         elseif($interest==S)
        { $c="SELECT count(*) FROM student WHERE intrest='S' ";$c++;
        $room=300+$c;
        }
       elseif($interest==R)
        { $d="SELECT count(*) FROM student WHERE intrest='R' ";$d++;
        $room=400+$d;
        }
         else
        { $e="SELECT count(*) FROM student WHERE intrest='G' ";$e++;
        $room=500+$e;
        }
    
    $sql="INSERT INTO student ( name ,  Contact ,  En ,  branch ,  intrest , RoomNo ) VALUES ('".$name."','".$contact."','".$En."','".$branch."','".$interest."','".$room."');";
    if (!mysqli_query($conn,$sql))
      {
      echo("Error description: " . mysqli_error($con));
      }
}
else{
  echo "ALL FIELD ARE REQIRED ";
  die();
    
}
//echo "<script>window.location='project.php'</script>";
?>
