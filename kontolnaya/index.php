<?php 
$title = 'candy-box';
$date = date('Сформировано d.m.Y в H-i:s'); 
include("header.html");
include("bd.php");

?>
    <main>
    
        <section >
            <table align="center" class="text">
                <tr>
            <td align="left">
               
                <img src="title.png" height="900px">
        
            </td>
            <td align="center" width="1200px"><h1 class="h">CandyBox</h1>
            <p> CandyBox - магазин, который станет идеальным подарком для себя и ваших близких! Наши боксы содержат в себе самые вкусные сладости из самых разных стран.
            </td>
        </tr>
        </table>
        </section>

    </div>
    <br>
    
     </table>


    </main>

    <footer>
        <nav>
            <div class="social" id="contact">
  
                <p>Телефон: 89586344407</p>
                <p>Почта: bautkina.anas@yandex.ru</p> 
                </div>
            
        </nav>
        <div class="logo_footer"><a href="design.html"><img src="logo10.png" alt="" width="900px"></a></div>
       <div class="copy"> &copy;Бауткина А. Е., 2022</div><br>
       <div class="date"><?= $date ?></div>
    </footer>
</body>

