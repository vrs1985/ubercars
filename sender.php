<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ 
        $to = 'ubercars2016@gmail.com'; 
        $subject = ""; 
        $text = "";
        switch ($_POST['subject']){
            case 'callback':
            $subject .= 'Обратный звонок';
            break;
            case 'message':
            $subject .= 'Сообщение';
            break;
            case 'join':
            $subject .= 'Подключиться';
            break;
            default:
            $subject .= 'UberCars';
        }

        if($_POST['text'] != ''){
            $text .= '<p>Сообщение: '.$_POST['text'].'</p>';
        }

        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                            '.$text.'
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: ubercars.com.ua\r\n"; 
        mail($to, $subject, $message, $headers); 
}
?>