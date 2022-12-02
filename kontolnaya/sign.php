<?php 
include("header.html");
include "bd.php";
?>
    <div class="f2">
    <form  class = "super" action="https://httpbin.org/post" enctype="multipart/form-data" method="post" class="form">
        <h1>Авторизация</h1>
        <div class="login_block">
            <input type="text" name="login" placeholder="Введите логин">
        </div> 
        <div class="password_block"><br>
            <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <div class="checkbox">
        </div>
       
        <div><br>
            <input class="block" type="submit" value="Авторизоваться">
        </div>
        <br>
    </form>
</div>
    <footer>
            <p>Телефон: 89586344407</p>
            <p>Почта: bautkina.anas@yandex.ru</p> 
            </div>
   
    <div class="logo_footer"><a href="index.php"><img src="log.png" alt="" width="400px"></a></div>
   <div class="copy"> &copy;Бауткина А. Е., 2022</div>
</div>
</footer>
</body>
