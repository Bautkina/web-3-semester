<?php 
include("header.html");

?>

<section >
<?
include "bd.php";
            $result = mysqli_query($mysql, "SELECT * FROM products WHERE id_img=".$_GET['id_img']);
            
            while ($page = mysqli_fetch_assoc($result)) {
                $id = $page['id_img'];
                $comm = $page['comm'];
                $price = $page['price'];
                $comm_plus = $page['comm_plus'];
                echo '<table align="center" class="text">
                <tr>
            <td align="left">
            <img  src="/kontolnaya/'.$id.'.png" width="400">
            </td>
            <td align="center" width="1200px">Цена: '.$price.'';
        }
            ?>
            
        </section>
</form>