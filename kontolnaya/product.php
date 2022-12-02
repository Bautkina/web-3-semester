<?php 
include("header.html");
?>
<body><main>
<?php
    include "bd.php";
    $result = mysqli_query($mysql, "SELECT * FROM `products`");
?>

    <div class="box">
    <script>alert("Не забудьте авторизоваться, чтобы приобрести товар!");</script>
    <table class="product" align="center">
    
    <?php 
        while($name = mysqli_fetch_assoc($result)){
           ?>
           <tr class="stroka">
               <div class="filters__img">
               
               <td class="stolb"><?php echo '<button type="submit" class="buy" value="'.$name['id_img'].'"><a href="/kontolnaya/fix_product.php?id_img='.$name['id_img'].'">Купить</a></button>' ?><img  src="/kontolnaya/<?php echo $name['id_img'];?>.png" width="400"></td>
               <td class="stolb"> <?php echo $name['price'];?></td>
               <td class="stolb"> <?php echo $name['comm'];?></td>
                </div>
                </tr>
            <?php
          }
     ?>
    
     </table>
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
    </footer>
    </body>
