<?php

$sql = "SELECT * FROM `documents`";
$result = mysqli_query($con, $sql);

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if($outp == ""){$outp = '<tr><td>№</td><td>Имя</td><td>Фамилия</td><td>Телефон</td><td>Авто</td><td>Email</td><td>паспорт (стр кем выдан)</td><td> паспорт (стр с акт фото) </td><td>вод прав (лицевая)</td><td>вод прав (обр)</td><td>тех на авто (лиц)</td><td>тех на авто (обр)</td><td>страх ОСАГО</td><td>авто полубок</td><td>лиценз</td></tr>';}
    $outp .= '<tr><td>'  . $rs["id"] . '</td>';
    $outp .= '<td>'   . $rs["name"]    . '</td>';
    $outp .= '<td>'   . $rs["last_name"]   . '</td>';
    $outp .= '<td>'   . $rs["phone"]   . '</td>';
    $outp .= '<td>' . $rs["car"] . '</td>';
    $outp .= '<td>'. $rs["email"]   . '</td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'   . $rs["pass1"]   . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'   . $rs["pass2"]   . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="' . $rs["drive_licence1"] . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'. $rs["drive_licence2"]  . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'   . $rs["tech_pass1"]   . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="' . $rs["tech_pass2"] . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'. $rs["insurance"]     . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'   . $rs["car_photo"]  . '"</a></td>';
    $outp .= '<td><a class="fa fa-file-pdf-o" style="color:red" href="'   . $rs["photo_licence"]  .  '"</a></td> </tr>'; 
}
$outp ='<table class="table table-condensed">'.$outp.'</table>';
$con->close();

?>