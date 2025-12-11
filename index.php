<?php
        
        $name = "Nadeen";
        $age =23;
        $country = "Amman";
        echo "My name is  ". $name." and I'm ". $age . " I'm From ".$country;
        echo "<br>";
        
        $arr = ["nadeen" ,23 , "Amman"];
        print_r($arr );
        
        echo "<br>";
        define("x" , 23);
        echo x;
        
        echo "<br>";
        const y=11;
        echo y;
        
        echo "<br>";
        $num =20;
        if(5 < 3 xor 5 < 10) {
            echo "Only one of the expressions was true";
        }
        echo "<br>";

        $num =20;
        if($num > 18 && $num<60){
            echo "YES";
        }
        else{
            echo "NO";
        }
        echo "<br>";

        $isAdmin = true;
        $isLogin = true;
        $isEditor =false;

        if( $isAdmin && $isLogin){
            echo "Welcom Admin";
        }
        else{
            echo "You aren't Admin";
        }
        
        if(!$isAdmin){
            echo "You aren't Admin";
        }
        echo "<br>";
        if($isAdmin){
            echo "Hello Admin";
        }
        echo "<br>";
        if($isEditor){
            echo "Hello Editor";
        }
        echo "<br>";

        // arrays 
        $data = array("name"=>"Nadeen", "age"=>23, "country"=>"Amman");
        echo $data['name'];
        echo "<br>";
        echo $data['name'];
        
        

        echo "<br>";
        $books = array (
            array("book1","name1",11),
            array("book2","name2",21),
            array("book3","name3",31),
        );
        echo $books[2][1]; //name3
        echo "<br>";
        echo $books[0][0]; //book1
        echo "<br>";

        // name 
        $myName = "Nadeen Haswah";
        echo strpos($myName , "Haswah");
        echo "<br>";
        echo strlen($myName);
        echo "<br>";
        echo strtoupper($myName);
        echo "<br>";
        echo substr($myName,0,6);




        echo "<br>";
        echo "<br>";
    ?>