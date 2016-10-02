<?php
 
session_start();
include_once 'includes/dbconnect.php';
if ( isset($_SESSION['login'])=="" ) {
  header("Location: login.php");
  exit;
 }
 
include_once 'includes/logout.php'; 
include_once 'people_json.php'; 
if (isset($_SESSION['login']) && isset($_SESSION['pass'])) // если в сессии загружены логин и id
    {
        $btn_logout = '<a href="index.php?exit"><button style="margin-top: 1em" type="button" class="btn-login btn btn-danger uppercase">Exit</button></a>'; // Выводим нашу ссылку выхода
    } 
    ?>


    <?php include_once 'header.php'; ?>
    <div class="container">
<div class="row">
    <div class="col-lg-offset-4 col-lg-4"><h2>Список Клиентов</h2> </div>
    <div class="col-lg-offset-2 col-lg-2">
        <?php echo $btn_logout; ?>
    </div>
</div>
</div>
    

<?php echo($outp); ?>

    </body>
    </html>
