<!DOCTYPE html>
<html>
<head>
<title>Поиск</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
    <h1>Найти строку в тексте</h1>
<form method="get" name="poisk" target="_blank" class="search">
    <label>Ключевая строка:</label>
    <input type="text" name="stroka"><br>
    <br>
    <input type="submit" name="poisk" value="Поиск">
</form>
    <hr>
    <?php 
    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius quam feugiat, ultrices mi nec, fringilla justo. Nunc nec congue nibh, vitae ultrices erat. Phasellus finibus mollis nisl, eget tempor felis mollis non. In placerat elementum varius. Aenean condimentum lorem imperdiet felis lobortis cursus. Quisque tempus urna lorem, in vestibulum est iaculis nec. Duis commodo suscipit ex, interdum elementum leo cursus vitae. Ut ipsum mauris, faucibus ut sagittis quis, efficitur vitae nibh. Proin at enim volutpat, vulputate elit at, tincidunt tortor. Aliquam dolor leo, hendrerit sagittis accumsan eu, vehicula non sapien. Sed turpis mi, interdum et suscipit sed, blandit in libero. Phasellus porttitor sed nunc ac dignissim.';
            //echo $razbienie[0];
            //echo $razbienie[1];
            
        if( isset( $_GET['poisk'] ) )
        {
            $value = $_GET['stroka'];
                if (strstr($value, "\"") !== false) {
                    $value = trim($value, '\"');
                    $text = preg_replace("#($value)#iu", "<span style='background-color: rgb(255, 153, 153);'>$1</span>",  $text);
                    //echo $text;
                } 
        else {
            $razbienie = explode(" ", $value);
            $text = preg_replace("#($razbienie[0]|$razbienie[1]|$razbienie[2]|$razbienie[3]|$razbienie[4])#iu", "<span style='background-color: rgb(255, 153, 153);'>$1</span>",  $text);
            //echo $text;
        }
        }
        
        echo $text;
?>
</body>
</html>