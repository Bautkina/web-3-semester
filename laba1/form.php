<?php	
include(header.html)
?>
 

    <main>
        <div class="center_form1" style="width: 3000px;">
        <form name="log_in" action="/laba1/form11.php" enctype="multipart/form-data" method="post" class="form">
        <?php 
                    if(isset($_GET['fio']) ){
                        $fio = $_GET['fio'];
                        $email = $_GET['email'];
                        $radio = $_GET['radio'];
                    }else{
                        $fio = "";
                        $email = "";
                        $radio = "";
                    }
                ?>
        <div class="left_text"> 
            <h2>Форма обратной связи</h2>
        <div class="fio_block">
            <input type="text" name="fio" placeholder="Введите ФИО" value="<?php if(isset($_GET['fio'])){echo($_GET['fio']);} else{echo("");} ?>">
        </div> 
        <div class="email_block"><br>
            <input type="text" name="email" placeholder="Введите email" value="<?php if(isset($_GET['email'])){echo($_GET['email']);} else{echo("");}?>"">
        </div>
        
            <h4>Как вы узнали о нас?</h4>
            <input type="radio" id="contactChoice1" name="radio" value = "1" <?php if ($radio == "1") echo "checked" ?>>
                <label for="contactChoice1" name = "1" >Рассказали друзья</label>
            
                <input type="radio" id="contactChoice2" name="radio" value = "2" <?php if ($radio == "2") echo "checked" ?>>
                <label for="contactChoice2" name = "2">Реклама из интернета</label>
                    <div ><br>
            <select class="complain_block" name="category" size="1" style="width: 450px; height:70px">
                <option disabled>Выберите тип</option>
                <option value="1" >Предложение</option>
                <option value="2">Жалоба</option>
                </select>
        </div>
        <div class="comm_block">
            <p>Комметарий<br>
            <textarea name = "comment"></textarea></p>
        </div>
        <div>
            <input type="file" name="file" class="file_block" >
        </div>
        <div>
            <input class="personal_block" type="checkbox">Даю своё согласие на обработку <br> персональных данных
        </div>
        <div ><br>
            <input class="block" type="submit" value="Отправить" >
        </div>
        <br>
    </div>
    </form>
</div>
    </main>
    <footer>
        <div class="ftr">
        <div class="social" id="contact">
            <a href="https://vk.com/id245949779"><img class="vk" src="vk.png" width="100" alt="">
            </a>
            <a href="https://t.me/bautkina"><img class="tg" src="tg.png" width="100" alt="">
            </a>
            <p>Телефон: 89586344407</p>
            <p>Почта: bautkina.anas@yandex.ru</p> 
            </div>
   
    <div class="logo_footer"><a href="design.html"><img src="logo10.png" alt="" width="900px"></a></div>
   <div class="copy"> &copy;Бауткина А. Е., 2022</div>
</div>
</footer>
</body>
</html>
