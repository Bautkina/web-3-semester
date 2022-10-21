<?php 
$title = 'Бауткина Анастасия';
$date = date('Сформировано d.m.Y в H-i:s'); 
$array = array('Джозеф Кэмпбелл "Тысячеликий герой"','Ли Бардуго "Шестёрка Воронов"', 'Нил Гейман "Никогде"');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo$title ?></title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <a href="/" class="logo"><img src="logo10.png" alt="" width="700px"></a>
        
        <div class="table_menu">
        <table>
            <tr>
              
                <td>
                <a href="<?php	
            $name='Главная'; 
            $link='/laba1/design.php';	
            $current_page=true;	
            echo $link;	
            ?>">
            <?php	
            if( $current_page )	
            echo $name;	
                ?>
            </a>
            </a></td>

                <!--<td><a href="#contact">Контакты</a></td>
                <td><a href="#skills">Навыки</a></td> -->
                <td>
                <a href="<?php	
            $name='Авторизация'; 
            $link='/laba2/form2.html';	
            $current_page=true;	
            echo $link;	
            ?>">
            <?php	
            if( $current_page )	
            echo $name;	
                ?>
            </a>
            <td>
                <a href="<?php	
            $name='Обратная связь'; 
            $link='/laba2/form.html';	
            $current_page=true;	
            echo $link;	
            ?>">
            <?php	
            if( $current_page )	
            echo $name;	
                ?>
            </a>
            </td>
        </table>
    </div>
    </header>

    <main>
        <section >
            <table align="center" class="text">
                <tr>
            <td align="left">
                <?php $s = date('s');
                $os = $s % 2;

                if ($os === 0)
                $name='photo_2022-10-06_21-41-37.jpg';
                else
                $name='me.jpg';

                echo '<img src="'.$name.'"alt-"Меняющаяся фотография" height="900px">';
                ?>
            </td>
            <td align="center" width="1200px"><h1 class="h">Всем привет!</h1>
            <p> Меня зовут Бауткина Анастасия. Я являюсь студенткой 2-го курса Московского политехнического университета.
            
            <div class="array"></p>
            <b>Мои любимые книги:</b><br>
            <?php
for ($a = 0; $a < count($array); $a++) {
  echo $a + 1 . '.' . $array[$a] . "<br>";
}
?>
</div></td>
        </tr>
        </table>
        </section>
        <section id="skills" class="skills">
            <table align="center">
                <tr>
            <td><p><b>МОИ НАВЫКИ:</b></p></td>
            <td><img src="python.png" width="400" alt=""></td>
            <td><img src="mysql.png" width="400" alt=""></td>
            <td><img src="java.png" width="400" alt=""></td>
        </tr>
        </table>
        </section>
    </div>
    <br>
    <?php
    include "bd.php";
    $result = mysqli_query($mysql, "SELECT * FROM `images_web`");
?>

    <div class="box">
    <table align="center">
    
    <?php 
        while($name = mysqli_fetch_assoc($result)){
           ?>
           <tr>
               <div class="filters__img">
               <td><img  title="<?php echo $name['term'];?>" src="/laba1/<?php echo $name['img'];?>.jpg" width="400"> </td>
               <td> <?php echo $name['definition_t'];?></td>
                </div>
                </tr>
            <?php
          }
     ?>
    
     </table>
</div> 
– – – – – – 

</div> 


    </main>

    <footer>
        <nav>
            <div class="social" id="contact">
                <a href="https://vk.com/id245949779"><img class="vk" src="vk.png" width="100" alt="">
                </a>
                <a href="https://t.me/bautkina"><img class="tg" src="tg.png" width="100" alt="">
                </a>
                <p>Телефон: 89586344407</p>
                <p>Почта: bautkina.anas@yandex.ru</p> 
                </div>
            
        </nav>
        <div class="logo_footer"><a href="design.html"><img src="logo10.png" alt="" width="900px"></a></div>
       <div class="copy"> &copy;Бауткина А. Е., 2022</div><br>
       <div class="date"><?= $date ?></div>
    </footer>
</body>

