<? 
header('Content-Type: text/html; charset=utf-8');

include "connect.php";

$erno = "";
// если была нажата кнопка "отправить"
if (isset($_POST["go"])) {   

// определим текущую дату и время
$curdata = date("d.m.Y");
$curtime = date("H:i");
// запретим использование тегов
$_POST['comment'] = htmlspecialchars($_POST['comment']);
$_POST['imya'] = htmlspecialchars($_POST['imya']);

// засунем наши данные в БД
$result = $mysqli->query("INSERT INTO commenti VALUES ('', '".$_POST['imya']."', '".$_POST['comment']."', '$curtime', '$curdata')"); 
header("Location: index.php");
exit;
  
}

?>

<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    
    
    </head>    
        <body> 
        <header>
            
        <br>
        <div class="kon1"> 
        <div class="img1"><img src="img/logo.png"></div>   
        <div class="ud">
          Телефон: (449)340-94-71
        <br>
          Email: info@future-group.ru    
        <br></div><div class="kom1">Комментарии</div>
        
        </div>
        
        </header>  
        
        
        
        <br><br>  
        
        
        
        <section> 
        
        <div class="global">
       
       
       <? 
       
      
        // выберем последние 10 внесенных комментариев.
        $frbd = $mysqli->query("SELECT * FROM commenti ORDER BY id DESC LIMIT 10");
    
        // создаем цикл вывода этих последних комментов
        for ($i = 0; $i<=10; $i++) {
        
        $rcom = $frbd->fetch_array(); 
       
        // если есть данные 
        if (isset($rcom['imya'])){ 
        
        ?>    
        <br>    
        <table width="30%"> 
        <tr>
        <td valign=bottom width=40%>
        <b><? echo "$rcom[imya]"; ?></b>    
        </td>    
        <td valign=bottom><p style="font-size: 10px"><? echo "$rcom[vremya]"; ?></p></td>
        <td valign=bottom><p style="font-size: 10px"><? echo "$rcom[chislo]"; ?></p></td>
        </tr>
        </table>
        <table>
        <tr>
            <td>
                <? echo "$rcom[comm]"; ?>
            </td>
            
        </tr>
        </table>
        <br>  
     <?
     
     
        } 
        
        }
       ?>
       
        
        </div>
        </section>
        
        <section class="forma"> 
        <div class="global">
        <hr width="100%">
        <form action="index.php" method="POST">
        <p style="font-size: 22px">Оставить комментарий</p>
        <br>
        <table>
        <tr>
        <td>

        Ваше имя<br><br>
        <input type="text" name="imya" maxlength="18">
        </td></tr>
        <tr><td>
            
        <br>
        Ваш комментарий <br><br>
        <textarea name="comment" cols="80" rows="10" maxlength="500"></textarea>
        <br>
        </td></tr>
        <tr>
            <td align="right">
                <input type="submit" name="go" value="  Отправить  ">  
            </td>
        </tr>
        </table>
        
        </form>
        
        </div>
        </section>
        
        <br> <br>       
        
        
        <section class="niz">
            
        <div class="global">    
        <div class="img2"><img src="img/logo.png" width="100"></div>    
        <div class="ud1">
          Телефон: (499) 340-94-71 <br>
          Email: info@future-group.ru <br>
          <b>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</b> <br><br>  
          © 2010 - 2019 Future. Все права защищены   
        </div>
        </div>
        </section>
        
        
        
        
        </body>
</html>