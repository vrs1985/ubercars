<?php
include_once 'includes/dbconnect.php';

if (isset($_POST['submit-scan'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $car = $_POST['car'];
    $email = $_POST['email'];
    $url = 'uploads/';
    $passWhoGive = $url . $_FILES['passWhoGive']['name'];
    $passLastPhoto = $url . $_FILES['passLastPhoto']['name'];
    $driveLicenseFirst = $url . $_FILES['driveLicenseFirst']['name'];
    $driveLicenseSecond = $url . $_FILES['driveLicenseSecond']['name'];
    $techPassFirst = $url . $_FILES['techPassFirst']['name'];
    $techPassSecond = $url . $_FILES['techPassSecond']['name'];
    $insurance = $url . $_FILES['insurance']['name'];
    $carPhoto = $url . $_FILES['carPhoto']['name'];
    $license = $url . $_FILES['license']['name'];
    
    $query = "INSERT INTO `documents`(`name`, `last_name`, `phone`, `car`, `email`, `pass1`, `pass2`, `drive_licence1`, `drive_licence2`, `tech_pass1`, `tech_pass2`, `insurance`, `car_photo`, `photo_licence`) VALUES ('$firstName', '$lastName', '$phone', '$car', '$email', '$passWhoGive', '$passLastPhoto', '$driveLicenseFirst', '$driveLicenseSecond', '$techPassFirst', '$techPassSecond', '$insurance', '$carPhoto', '$license')"; 
    $result = mysqli_query($con, $query); 

    if($result == 1){
    $errTyp = "success";
    $errMSG = "Вы успешно добавили товар в Вашу базу";
  }else{
    $errTyp = "warning";
    $errMSG = "Произошла ошибка, проверьте корректность введеных полей...";
}

// Каталог, в который мы будем принимать файл:
$uploaddir = './uploads/';
$uploadpassWhoGive = $uploaddir.basename($_FILES['passWhoGive']['name']);
$uploadpassLastPhoto = $uploaddir.basename($_FILES['passLastPhoto']['name']);
$uploaddriveLicenseFirst = $uploaddir.basename($_FILES['driveLicenseFirst']['name']);
$uploaddriveLicenseSecond = $uploaddir.basename($_FILES['driveLicenseSecond']['name']);
$uploadtechPassFirst = $uploaddir.basename($_FILES['techPassFirst']['name']);
$uploadtechPassSecond = $uploaddir.basename($_FILES['techPassSecond']['name']);
$uploadinsurance = $uploaddir.basename($_FILES['insurance']['name']);
$uploadcarPhoto = $uploaddir.basename($_FILES['carPhoto']['name']);
$uploadlicense = $uploaddir.basename($_FILES['license']['name']);

// Копируем файл из каталога для временного хранения файлов:

copy($_FILES['passWhoGive']['tmp_name'], $uploadpassWhoGive );
copy($_FILES['passLastPhoto']['tmp_name'], $uploadpassLastPhoto );
copy($_FILES['driveLicenseFirst']['tmp_name'], $uploaddriveLicenseFirst );
copy($_FILES['driveLicenseSecond']['tmp_name'], $uploaddriveLicenseSecond );
copy($_FILES['techPassFirst']['tmp_name'], $uploadtechPassFirst );
copy($_FILES['techPassSecond']['tmp_name'], $uploadtechPassSecond );
copy($_FILES['insurance']['tmp_name'], $uploadinsurance );
copy($_FILES['carPhoto']['tmp_name'], $uploadcarPhoto );
if(!empty($_FILES['license']['name'])){
copy($_FILES['license']['tmp_name'], $uploadlicense );
}
} 

 ?>