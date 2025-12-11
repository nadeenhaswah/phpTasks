<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1
    //color
    $color = ['red' , 'green' , 'white'];
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[0]." carpet, the ".$color[1]." lawn, the ".$color[2]." house, the leaden sky. The new president and his first lady. - Richard M. Nixo";
    echo "<hr>"
    ?>

    
    <!-- 2 -->
    <!-- list of colors  -->
    <ul>
        <?php 
            $len = count($color);
            for($i=0 ; $i<$len;$i++){
                echo "<li>$color[$i] </li>";
            }
        ?>
    </ul>

    <?php  echo "<hr>" ?>
    <!-- 3 -->
    <!-- city  -->
    <?php 
        $cities= array( "Italy"=>"Rome",
        "Luxembourg"=>"Luxembourg", 
        "Belgium"=> "Brussels", 
        "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", 
        "France" => "Paris", 
        "Slovakia"=>"Bratislava", 
        "Slovenia"=>"Ljubljana", 
        "Germany" => "Berlin", 
        "Greece" => "Athens", 
        "Ireland"=>"Dublin", 
        "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", 
        "Spain"=>"Madrid" );

        foreach ($cities as $key => $value) {
            echo "The capital of ".$key." is ".$value ;
            echo "<br>";
        }
    ?>

        <?php  echo "<hr>" ?>
        <!-- 4 -->
        <!-- first index -->
        <?php
            $color = array (4 => 'white', 6 => 'green', 11=> 'red');
            echo $color[4];
        ?>

        <?php  echo "<hr>" ?>
        <!-- 5 -->
        <!-- insert item  -->
        <?php 
            $arr = [1,2,3,4,5];
            array_splice($arr , 3 ,0,"$");
            print_r($arr);
        ?>

        <?php  echo "<hr>" ?>
        <!-- 6 -->
        <!-- array sort  -->
        <?php
        $fruits = array("d" => "lemon", 
        "a" => "orange", 
        "b" => "banana", 
        "c" => "apple");
        echo "<br>";
        asort($fruits);
        foreach ($fruits as $key => $value) {
            $key ." = "." $value";
        }
        echo "<br>";
        
        // 7
        // temperature
        $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
        $total=0;
        $count = count($temp);
        for($i = 0 ; $i<$count ; $i++){
            $total +=$temp[$i];
        }
        echo $total ;
        echo "<br>";
        echo $count ;
        echo "<br>";
        $avg = $total / $count;
        echo "<b> Avg </b>: ". $avg ;
        
        echo "<br>";
        // sort 
        sort($temp);
        echo "<b>Sorted temperature :  </b>";
        print_r($temp);
        echo "<br>";
        
        echo "<b>The lowest  </b>:";
        for($i=0 ;$i<8 ; $i++){
            echo $temp[$i]." , " ;
        }

        echo "<br>";
        echo "<b>The hightest  </b>:";
        for($i = $count - 7; $i <= $count-1; $i++){
            echo $temp[$i] . " , ";
        }


        echo "<hr>" ;
        // 8
        // merge
        $array1 = array("color" => "red", 2, 4); 
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

        $result= array_merge($array1,$array2);
        echo "<b> Arrays after Marge : </b>";
        print_r($result);
        echo "<hr>" ;

        // 9
        // strings to upper case
        $colors = array("red","blue", "white","yellow");
        function toUpper($arr){
            foreach($arr as $val){
                echo strtoupper($val). " , ";
            }
        }
        echo "<b>Colors to UpperCase : </b>";
        toUpper($colors);

        echo "<hr>" ;
        // 10
        // strings to lower case
        $lowerColors = array("RED","BLUE", "WHITE","YELLOW");
        function toLower($arr){
            foreach($arr as $val){
                echo strtolower($val). " , ";
            }
        }
        echo "<b>Colors to LowerCase : </b>";
        toLower($lowerColors);

        echo "<hr>" ;
        // 11
        // numbers between 200 and 250 that are divisible by 4.
        echo "<b>numbers between 200 and 250 that are divisible by 4 :  </b>";
        for($i=200 ; $i<=250 ; $i++){
            if($i %4==0){
                echo $i." , "; 
            }
        }

        echo "<hr>" ;
        // 12
        // shortest/longest string length
        $words = array("abcd","abc","de","hjjj","g","wer","Orange Coding School");
        
        function shortest($arr){
            $shortestStrLen = strlen($arr[0]);
            $shortestWord = $arr[0];
            
            foreach($arr as $key => $val){
                if(strlen($arr[$key]) < $shortestStrLen){
                    $shortestStrLen = strlen($arr[$key]);
                    $shortestWord = $arr[$key];
                };
            }
            echo "The Shortest word is <b>".$shortestWord ."</b> and its length is <b> ".$shortestStrLen."</b> <br>";
        }

        shortest($words);


        function longest($arr){
            $longestStrLen = strlen($arr[0]);
            $longestWord = $arr[0];
            
            foreach($arr as $key => $val){
                if(strlen($arr[$key]) > $longestStrLen){
                    $longestStrLen = strlen($arr[$key]);
                    $longestWord = $arr[$key];
                };
            }
            echo "The Shortest word is <b>".$longestWord ."</b> and its length is <b> ".$longestStrLen."</b> <br>";
        }

        longest($words);

        echo "<hr>" ;

        // 13
        // generate unique random
        echo "<b> generate unique random numbers :  </b>";
        for($i=0 ; $i<10 ;$i++){
            echo mt_rand(11,20) ." , ";
        }


        echo "<hr>" ;
        // 14
        // lowest integer that is not 0
        $arrayOfNum = array( 5,2, 0, 10, 12, 6,1);
        $min= $arrayOfNum[0];
        foreach($arrayOfNum as $key=>$val){
            if($arrayOfNum[$key] < $min && $arrayOfNum[$key] != 0 ){
                $min = $arrayOfNum[$key];
            }
        }
        echo "<b>lowest integer : </b>".$min;
        ?>
</body>
</html>