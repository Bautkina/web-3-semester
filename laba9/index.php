<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wixdth, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Бауткина Анастасия, 211-361, лб 9</title>
    
</head>
<header><h1>Московский политехнический университет</h1>
    <h2>Лабораторная работа №9</h2>
<h3>Бауткина Анастасия, 211-361</h3></header>
<body>
    <main>
    
    <?php 

$min_value=10;	// минимальное значение, останавливающее вычисления
$max_value=1000;	// максимальное значение, останавливающее вычисления
    
$x = 5;	// начальное значение аргумента
$encounting = 10000;	// количество вычисляемых значений
$step = 16;	// шаг изменения аргумента
$type = 'A';	// тип верстки
$array =[];
if( $type == 'B' )	
echo '<ul>';
if( $type == 'C' )	
echo '<ol>';
if( $type == 'D' )	
echo '<table  align="center">';
if( $type == 'E' )	
echo '<div class="main">';


// цикл с предусловием
for( $i=0; $i < $encounting; $i++, $x+=$step)
{
    if($x == 5){
        $f = 'error';
    }	
    if( $x <= 10 && $x != 5){	
    
            $f = (5-$x)/(1-$x/5);
            round($f, 2);
        
    }
    else  if( $x <20 && $x>10){	
        $f = $x*$x+7;
        round($f, 2);}
    else  if ($x>=20){
        $f = 2*$x-21;
        round($f, 2);
    }
    
    if( ($f>=$max_value || $f<$min_value ) && $x !=5)	// если вышли за рамки диапазона
    break;
    switch ($type) { 
        case 'A':
            echo 'f('.$x.')='.$f;
            if( $i < $encounting-1 ) 
            echo '<br>';
            break; 
        case 'B':
            echo '<li>f('. $x.')='.$f.'</li>';
            break; 
        case 'C':
            echo '<li>f('. $x.')='.$f.'</li>';
            break;
        case 'D':
            $i+=1;
            echo '<tr><td>'.$i.'</td><td>f('.$x.')</td><td>'.$f.'</td></tr>';
            $i-=1;
            break;
        case 'E':
            echo '<div class="main_item">f('.$x.')='.$f.'</div>';
        }
        array_push($array, $f); 
}

if( $type == 'B' )
echo '</ul>';	
if( $type == 'C' )
echo '</ol>';	
if( $type == 'D' )
echo '</table>';	
if( $type == 'E' )
echo '</div>';	
echo '<br>';
echo "SUM: ". array_sum($array) . '<br>';
echo "MIN: ". min($array) . '<br>';
echo "MAX: ". max($array) . '<br>';
echo "AVG: ". array_sum($array)/count($array);

?>

<?php
/*
$min_value=10;	// минимальное значение, останавливающее вычисления
$max_value=40;	// максимальное значение, останавливающее вычисления
    
$x = 2;	// начальное значение аргумента
$encounting = 10000;	// количество вычисляемых значений
$step = 2;	// шаг изменения аргумента
$type = 'A';	// тип верстки
$array =[];
if( $type == 'B' )	
echo '<ul>';
if( $type == 'C' )	
echo '<ol>';
if( $type == 'D' )	
echo '<table  align="center">';
if( $type == 'E' )	
echo '<div class="main">';

$i=0; $f=0;
// цикл с предусловием
while( $i<$encounting && ($f>=$max_value || $f<$min_value) )
{
    if( $x <= 10 ){	
        if($x == 5){
            $f = 'error';
        }	
        else{
            $f = (5-$x)/(1-$x/5);
            round($f, 2);
        }
    }
    else  if( $x <20 && $x>10){	
        $f = $x*$x+7;
        round($f, 2);}
    else  if ($x>=20){
        $f = 2*$x-21;
        round($f, 2);
    }
    switch ($type) { 
        case 'A':
            echo 'f('.$x.')='.$f;
            if( $i < $encounting-1 ) 
            echo '<br>';
            break; 
        case 'B':
            echo '<li>f('. $x.')='.$f.'</li>';
            break; 
        case 'C':
            echo '<li>f('. $x.')='.$f.'</li>';
            break;
        case 'D':
            $i+=1;
            echo '<tr><td>'.$i.'</td><td>f('.$x.')</td><td>'.$f.'</td></tr>';
            $i-=1;
            break;
        case 'E':
            echo '<div class="main_item">f('.$x.')='.$f.'</div>';
        }
        array_push($array, $f); 
$i++; $x+=$step;	
}

if( $type == 'B' )
echo '</ul>';	
if( $type == 'C' )
echo '</ol>';	
if( $type == 'D' )
echo '</table>';	
if( $type == 'E' )
echo '</main>';	
echo '<br>';
echo "SUM: ". array_sum($array) . '<br>';
echo "MIN: ". min($array) . '<br>';
echo "MAX: ". max($array) . '<br>';
echo "AVG: ". array_sum($array)/count($array);
*/
?>
<?php 
/*
$min_value=10;	// минимальное значение, останавливающее вычисления
$max_value=40;	// максимальное значение, останавливающее вычисления
    
$x = 2;	// начальное значение аргумента
$encounting = 10000;	// количество вычисляемых значений
$step = 2;	// шаг изменения аргумента
$type = 'D';	// тип верстки
$array =[];

if( $type == 'B' )	
echo '<ul>';
if( $type == 'C' )	
echo '<ol>';
if( $type == 'D' )	
echo '<table  align="center">';
if( $type == 'E' )	
echo '<div class="/div">';
$i=0;	// начальное значение счетчика итераций
do // цикл с постусловием
{
    if( $x <= 10 ){	
        if($x == 5){
            $f = 'error';
        }	
        else{
             $f = (5-$x)/(1-$x/5);
             round($f, 2);
        }
    }
    else  if( $x <20 && $x>10){	
        $f = $x*$x+7;
        round($f, 2);}
        
    else  if ($x>=20){
        $f = 2*$x-21;
        round($f, 2);
    }
    switch ($type) { 
        case 'A':
            echo 'f('.$x.')='.$f;
            if( $i < $encounting-1 ) 
            echo '<br>';
            break; 
        case 'B':
            echo '<li>f('. $x.')='.$f.'</li>';
            break; 
        case 'C':
            echo '<li>f('. $x.')='.$f.'</li>';
            break;
        case 'D':
            $i+=1;
            echo '<tr><td>'.$i.'</td><td>f('.$x.')</td><td>'.$f.'</td></tr>';
            $i-=1;
            break;
        case 'E':
            echo '<div class="main_item">f('.$x.')='.$f.'</div>';
        }
        array_push($array, $f); 
    
$i++; $x+=$step;	
}
// цикл с предусловием
while( $i<$encounting && ($f>=$max_value || $f<$min_value));
if( $type == 'B' )
echo '</ul>';	
if( $type == 'C' )
echo '</ol>';	
if( $type == 'D' )
echo '</table>';	
if( $type == 'E' )
echo '</main>';	
echo '<br>';
echo "SUM: ". array_sum($array) . '<br>';
echo "MIN: ". min($array) . '<br>';
echo "MAX: ". max($array) . '<br>';
echo "AVG: ". array_sum($array)/count($array);
*/
?>

</main>
</body>
<footer><h3><span>Тип верстки: <?=$type?></span></h3></footer>
</html>