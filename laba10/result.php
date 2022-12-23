<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo$title ?></title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="/laba10/index.css">
</head>

<body>

<header><h1>Лабораторная работа №10</h1></header>
<main>
    <form class="log_in" method="get" action="/laba10/index.html">
        <?php
    if( isset($_POST['comment']) && $_POST['comment'] ) // если передан текст для анализа
        { 
        echo '<div class="src_text">'.$_POST['comment'].'</div>'; // выводим текст
        test_it( iconv("utf-8", "cp1251", $_POST['comment']) ); // анализируем текст
            } 
    else // если текста нет или он пустой
    echo '<div class="src_error">Нет текста для анализа</div>'; 
    function test_it( $text ) 
{ 
// количество символов в тексте определяется функцией размера текста
echo '<table class="table_view">';
    echo 'Количество символов: '.strlen($text).'<br>'; 
    // определяем ассоциированный массив с цифрами
    $cifra=array( '0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true, 
    '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true ); 
    // вводим переменные для хранения информации о: 
    $cifra_amount=0; // количество цифр в тексте
    $word_amount=0; // количество слов в тексте
    $word=''; // текущее слово
    $words=array(); // список всех слов
    $count_symbs = 0;
    for($i=0; $i<strlen($text); $i++) // перебираем все символы текста
    { 
    if( array_key_exists($text[$i], $cifra) ){ // если встретилась цифра
    $cifra_amount++; // увеличиваем счетчик цифр
    }
    // если в тексте встретился пробел или текст закончился
    else if ($text[$i]!=" " && $text[$i]!="!" && $text[$i]!="," && $text[$i]!="?" && $text[$i]!="."){
        $count_symbs +=1;
    }
    
    if( $text[$i]==' ' ||  $text[$i]==',' || $text[$i]=='.' || $text[$i]=='!'  || $text[$i]=='?' || $i==strlen($text)-1 ) {  // если в тексте встретился пробел или текст закончился
        if ($text[$i]!=' ' && $text[$i]!=',' && $text[$i]!='.' && $text[$i]!='!' && $text[$i]!='?'){
            $word.=$text[$i];
        }
        if( $word ) {// если есть текущее слово
            if( isset($words[$word]) )  // если текущее слово сохранено в списке слов
                $words[ $word ]++; // увеличиваем число его повторов
            else
                $words[ $word ]=1; // первый повтор слова
        }
        $word=''; // сбрасываем текущее слово
    }
    else // если слово продолжается
        $word.=$text[$i]; //добавляем в текущее слово новый символ
    } 
    
    echo '<tr><td>Кол-во букв: </td><td>'. $count_symbs.'</td></tr>'; 
    // выводим количество цифр в тексте
    echo '<tr><td>Кол-во цифр: </td><td>'. $cifra_amount.'</td></tr>'; 
    // выводим количество слов в тексте
    echo '<tr><td>Количество слов: </td><td>'.count($words).'</td></tr>'; 
    ksort($words);
    
    foreach ($words as $key => $value) {  // выводим слово || кол-во
        echo '<tr><td>Кол-во вхождений слова "'.iconv("cp1251", "utf-8", $key).'": </td><td>' . $value  .'</td></tr>';
    }
    $arr_symbs = test_symbs( iconv("utf-8", "cp1251", $_POST['comment']) );
        foreach ($arr_symbs as $key => $value) {  // выводим символ || кол-во
            echo '<tr><td>Кол-во вхождений символа "' . iconv("cp1251", "utf-8", $key) . '": </td><td>' . $value . '</td></tr>';
        }
    } 
    
    
    echo '<tr><td>Кол-во препинаний: <td>'.mb_strlen(preg_replace("/[^.,:;!?-]/u", "", $_POST['comment'])).'</td></tr>';
    


            echo '<tr><td>Количество строчных букв по отдельности: <td>'. mb_strlen(preg_replace("/[^a-zа-я]/u", "", $_POST['comment'])).'</td></tr>';
             echo '<tr><td>Количество заглавных букв по отдельности: <td>'.mb_strlen( preg_replace("/[^A-ZА-Я]/u", "", $_POST['comment'])).'</td></tr>'; 
 
    echo '</table><br>';
    

    function test_symbs( $text ) 
    { 
    $symbs=array(); // массив символов текста
    $l_text = mb_strtolower(iconv("cp1251", "utf-8", $text));

    $l_text = iconv("utf-8", "cp1251", $l_text);
    // последовательно перебираем все символы текста
    for($i=0; $i<strlen($l_text); $i++) 
    { 
        if( isset($symbs[$l_text[$i]]) ) // если символ есть в массиве 
            $symbs[$l_text[$i]]++; // увеличиваем счетчик повторов
        else // иначе
            $symbs[$l_text[$i]]=1; // добавляем символ в массив
    } 
    return $symbs; // возвращаем массив с числом вхождений символов в тексте
    } 
    
    
 ?><a href="/laba10/index.html">Другой анализ</a>

</form>
</main>
<footer>
<div class="copy"> &copy;Бауткина А. Е., 2022</div><br>
</footer>


</body>

