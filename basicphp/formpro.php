 <?php
 
$f_num = $_POST["fnum"];
$s_num = $_POST['snum'];
$t_num = $_POST['tnum'];
$data = "php data";


if ($f_num > $s_num && $f_num>$t_num) {
    $data = "Hihest Number is " . $f_num;
}
 elseif($s_num>$t_num)
 {
    $data = "Hihest Number is " . $s_num;
}
 else {
    $data = "Hihest Number is " . $t_num;
}
 ?>
  <table width=50% border="1">
    <!-- <tr>
//         <th>.</th>
//         <th>.</th>
//     </tr> -->

     <tr>
         <td>Result: </td>
         <td>
             <?php
             echo $data; ?>
         </td>

     </tr>

 </table> 
<?php
//  $firstname=$_GET['fname'];
//  $lastname=$_GET['lname'];

// echo $firstname;
//  echo $lastname;
 ?>

