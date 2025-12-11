<?php
// 1
// 1.1
// toUpper 
function toUpper($str){
    echo strtoupper($str);
}
toUpper("nadeen");
echo "<br>";

// 1.2
// toLower 
function toLower($str){
    echo strtolower($str);
}
toLower("NADEEN");
echo "<br>";

// 1.3
// toCapitlize
function toCapitlize($str){
    echo ucwords($str);
}
toCapitlize("nadeen abdel rahmad haswah");
echo "<br>";

echo "<hr>";

// 2
// a date format
function format($num){
    $spliting = str_split($num, 2); //[0] => 08 [1] => 51 [2] => 19
    $formating = $spliting[0]." : ".$spliting[1]." : ".$spliting[2];
    echo "<b>".$formating."</b>";
}
format('085119');

// 3
// the sentence contains a specific word 
function isContain($sentence , $word){
    if(str_contains($sentence ,$word)){
        echo $sentence."<b> is contain </b>".$word;
    }
    else{
        echo $sentence."<b> is not  contain </b>".$word;
    }
}
echo "<hr>";
isContain('I am a full stack developer at orange coding academ' , 'orange');
echo "<br>";
isContain('I am a full stack developer at orange coding academ' , 'school');


echo "<hr>";
// 4
// extract the file name from the URL.
function extractUrl($url){
    $path = parse_url($url, PHP_URL_PATH);   //parse_url() => without domain
    $fileName = basename($path);
    echo "file name in this url '$url' : <b>".$fileName."</b>";
}
extractUrl('http://localhost/OCS/Task2.3/strings.php');


echo "<hr>";
// 5
// extract the username from the following email address.
function emailAddress($email){
    $username = strstr($email , "@" , true);
    echo "The username in this email is :'$email' <b>".$username."</b>";
}
emailAddress('nadeenhaswah@gamil.com');


echo "<hr>";
// 6
// last three characters
function lastThree($str){
    for($i = strlen($str)-3 ; $i<strlen($str) ; $i++){
        echo $str[$i];
    }
}
lastThree('nadeenhaswah@gamil.com');

echo "<hr>";
// 7
$string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
function generatePass($str){
    $len = strlen($str)-1; 
    $lengthOfPass=mt_rand(0,$len);

    for($i=0;$i<=$lengthOfPass;$i++){
        $anyEndex=mt_rand(0,$len);
        echo $str[$anyEndex];
    }
}
generatePass($string);
echo "<br>";
generatePass($string);


echo "<hr>";
// 8
// replace the first 
function replace($sentence , $word1 , $word2){
    echo "The sentence before replacement : ".$sentence;
    echo "<br>";
    $sta2=str_replace($word1 , $word2 ,$sentence );
    echo "The sentence after replacement : ".$sta2;
}
replace('nadeen haswah' , 'nadeen' , 'rama');

echo "<hr>";
// 9
$String1 ='dragonball';
$String2 = 'dragonboll';
for($i=0 ; $i<strlen($String1)-1 ; $i++){
    if($String1[$i] != $String2[$i] ){
        echo "First difference between two strings at position ".$i." .<b> ".$String1[$i]." vs ".$String2[$i]."</b>";
    }
} 

echo "<hr>";
// 10
$Strings ="Twinkle, twinkle, little star";
$arrOfStrings =explode(',' ,$Strings);
var_dump($arrOfStrings);


echo "<hr>";
// 11
$letters = 'abcdefghijklmnopqrstuvwxyz';
function nextLetter($allLetters , $letter){
    for($i=0 ; $i<strlen($allLetters) ; $i++){
        if($allLetters[$i] == $letter){
            if($letter == 'z'){
                echo "The letter that follows '$letter' is a <br>";
            }
            else{
                echo "The letter that follows '$letter' is " .$allLetters[$i+1],"<br>";
            }
        } 
    }
}
nextLetter($letters , 'a');
nextLetter($letters , 'z');
nextLetter($letters , 's');

echo "<hr>";
// 12
$str = "The brown fox";
$parts = explode(" ", $str);
// print_r($parts );
array_splice($parts, 1, 0, "quick");
$result = implode(" ", $parts);

echo $result;


echo "<hr>";
// 13
$num ='0000657022.24';
function removeZeroes($n){
    $withoutZero=" ";
    for($i=0 ; $i<strlen($n) ; $i++){
        if($n[$i] != '0' ){
            $withoutZero.=$n[$i];
        }
    }
    echo "before : <b>".$n."</b> after : <b>".$withoutZero."</b>";
}
removeZeroes($num);

echo "<hr>";
// 14
$s='The quick brown fox jumps over the lazy dog';
function removeWord($Str , $word){
    $lenOfWord = strlen($word);
    $position = strpos($Str , $word);
    // echo $position;
    $newStr = substr_replace($Str , "" , $position,$lenOfWord  );
    echo $newStr;
}
removeWord($s , 'fox');
echo " <br>";
removeWord($s , 'dog');

echo "<hr>";
// 15
$sta ='The quick brown fox jumps over the lazy dog---';
function removeDashes($s){
    $withoutDash=" ";
    for($i=0 ; $i<strlen($s) ; $i++){
        if($s[$i] != '-' ){
            $withoutDash.=$s[$i];
        }
    }
    echo "before : <b>".$s."</b> after : <b>".$withoutDash."</b>";
}
removeDashes($sta);

echo "<hr>";
// 16 
// is_int() => ما راح تزبط 
function removeSpecial($s){
    $justNum=" ";
    for($i=0 ; $i<strlen($s) ; $i++){
        if(ctype_digit($s[$i])){
            $justNum.=$s[$i]." ";
        }
    }
    echo "before : <b>".$s."</b> after : <b>".$justNum."</b>";
}
removeSpecial('\"\1+2/3*2:2-3/4*3'); 

echo "<hr>";
// 17
$paragraph = 'The quick brown fox jumps over the lazy dog';
$arrayOfWords = explode(" ", $paragraph);
// print_r($arrayOfWords);
$firstFive = $arrayOfWords[0]." ".$arrayOfWords[1]." ".$arrayOfWords[2]." ".$arrayOfWords[3]." ".$arrayOfWords[4]." ";
echo $firstFive;

echo "<hr>";
// 18
$n ='2,543.12';
function removeCommas($n){
    $withoutComma=" ";
    for($i=0 ; $i<strlen($n) ; $i++){
        if($n[$i] != ',' ){
            $withoutComma.=$n[$i];
        }
    }
    echo "before : <b>".$n."</b> after : <b>".$withoutComma."</b>";
}
removeCommas($n);
echo "<br>";
removeCommas('31,2,5,4,3.12');

echo "<hr>";
// 19
for ($x = ord('a'); $x <= ord('z'); $x++) { 
    //ord('a'): This function returns the ASCII 
    echo chr($x);
}
?>