 <?php	
	include 'header.html';

  ?>

  <!DOCTYPE HTML>
  <div class = "center_form2">
  <form class="feed_black_answer" action="/laba1/form.php" method="get">
  <?php
echo '<p> <h2>Здравствуйте, '.$_POST['fio'].'!</h2></p>';
  if ($_POST['category'] == '1'){ //проверяем тип обращения
         echo '<p>Спасибо за ваше предложение:</p>';
         echo '<div class="comm_block2">
         <p>Комметарий<br>
         <textarea name = "comment">'.$_POST['comment'].'</textarea></p>
     </div>';
  }else{
         echo '<p>Мы рассмотрим Вашу жалобу:</p>';
         echo '<div class="comm_block2">
         <p>Комметарий<br>
         <textarea name = "comment">'.$_POST['comment'].'</textarea></p>
     </div>';   
  }
  ?>
 

<?php if (isset($_FILES['file']) & $_FILES['file'] != '') echo '<p>Вы приложили следующий файл: '.$_FILES['file']['name'].'</p>';?>
<?php
  echo '<a class="button" href="/laba1/form.php?fio='.$_POST['fio'].'&email='.$_POST['email'].'&radio='.$_POST['radio'].'">Заполнить снова</a>'; ?>

  
  </form>
  </div>
  </HTML>
