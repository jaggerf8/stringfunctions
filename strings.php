<?php

echo 'this is my string.';
$sen = 'this is my string.';
echo "<br>";
$slash = "this string before add slashes ' ";
echo "this string before add slashes ' , " . "the string after
addslashes - " . addslashes($slash);
echo "<br>";
echo "chunk split - " . chunk_split($sen,9);
echo "<br> this is count_charts = <br>";
foreach (count_chars($sen, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
   }
echo "<br> explode function: ";
$explode = explode(" ",$sen);
echo $explode[0];
echo "<br>" . $explode[1] . "<br>" . $explode[2] . "<br>" . $explode[3];
echo"<br>";
$htmlwords = "this is <b>bold</b>";
echo $htmlwords . " , now after htmlentities: " . htmlentities($htmlwords);
$htmlchar ="<p>this -&gt; &quot;</p>\n";
echo "<br> this is text before htmlspecialchars_decode - " . $htmlchar . " ,
and this is after - " . htmlspecialchars_decode($htmlchar);
echo "<br>";
$array = array('this', 'is', 'implode');
echo $array;
echo "<br>" . implode(" ", $array);
echo "<br> the hash of this string is - " . md5($sen);
echo "<br> the string rtrim'd - " . rtrim($sen," ");
echo "<br>";
$tags="this <b>string</b> has some <i>html elements</i>";
echo "this <b>string</b> has some <i>html elements</i>. not it doesnt thanks to
strip_tags - " . strip_tags($tags);
echo "<br> at what position is the word 'hello' in this string? strpos says: ";
$pos ="at what position is the word 'hello' in this string?";
$str = "hello";
echo strpos($pos,$str);
echo "<br> the length of the string is: " . strlen($sen);
?>
