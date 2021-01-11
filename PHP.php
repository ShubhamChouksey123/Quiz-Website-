<?php
    // error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ini_set('error_reporting', E_ALL);
    
    // Create a database connection
    $server = "localhost";
    $database = "quiz";
    $username = "root";
    $password = "";

    // $username = "id15886018_root";
    // $password = "Shubham@1998";
    // $database = "id15886018_quiz";
    $con = mysqli_connect($server, $username, $password);
    // mysqli_select_db($con, "id15886018_quiz");
    mysqli_select_db($con, "quiz");
    
    $inserted = false;
    $asked = false;
    function Return_Name($var){
        return strval($var);
    }
    function Return_id(int $sno, string $option){
        return $option . strval($sno);
    }
    function Return_Value(string $option, $sno){
        return $option . strval($sno);
    }
?>


<?php
    
    if(isset($_POST['name'])){
        // Set connection variables
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "quiz";
        

        // $username = "id15886018_root";
        // $password = "Shubham@1998";
        // $database = "id15886018_quiz";
        $con = mysqli_connect($server, $username, $password);
        // mysqli_select_db($con, "id15886018_quiz");
        mysqli_select_db($con, "quiz");
        $asked = true;
        // Check for connection success
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }

        // Collect post variables
        if($inserted == false){
            $score = 0;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $N = 10;
            for($i = 1 ; $i <= $N ; $i++){
                $str = "Q".strval($i);  // str = Q1
                $sno = $_POST["$str"];  // $sno = 3
                
                $query = "SELECT `ans` as actual_ans FROM `question` WHERE sno = $sno";
                mysqli_select_db($con, "quiz");
                $res = mysqli_query($con, $query);
                $data = mysqli_fetch_array($res);
                $actual_ans  = $data['actual_ans'];   // actual_ans = 0
                if( isset($_POST["$sno"]) && $actual_ans == $_POST["$sno"]){
                    $score++;
                }
            }
            
            $sql = "INSERT INTO `quiz`.`quiz` ( `score`, `name`, `email`, `dt`) VALUES ('$score', '$name', '$email', current_timestamp());";
            // echo "name = $name <br>";
            // echo "email = $email <br>";
            
            // Execute the query
            if($con->query($sql) == true){
                // echo "Successfully inserted in the Database <br>";
                // Flag for successful insertion
                $inserted = true;

                // $con = mysqli_connect($server, $username, $password);            
                mysqli_select_db($con, "quiz");
                // mysqli_select_db($con, "id15886018_quiz");
                $query = "SELECT AVG(score) as avgscore FROM `quiz`";
                $res = mysqli_query($con, $query);
                
                if($res == TRUE ){                    
                    $data = mysqli_fetch_array($res);
                    $avgscore  = $data['avgscore'];
                    // echo "average score = $avgscore <br>";
                    
                    if($score > $avgscore){
                        // echo "<h1>Congratulations ! Youre among the top 10% </h1><br>";
                    }
                    else{
                        // echo "<h1>You performed well ! but still need to work on your GK </h1><br>";
                    }

                }
                else{
                    // echo "So there is some error , Error in runnning the query !<br>";
                }    
            }
            else{
                echo "ERROR: $sql <br> $con->error";
            }
            
            // Close the database connection
            // $con->close();
        }
    }
        
        
?>     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Page</title>
    <link rel= "stylesheet" href="CSS.css?version -1">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/phone_PHP.css">

</head>

<body>
     
    <!-- Navigation  Box -->
        <!-- Navigation  Box -->
    <nav class = "flex-container">
        <div><a href = "index.php" >Home</a></div>
        <div><a href = "about.php" >About</a></div>
        <div><a href = "PHP.php" >More Quizes</a></div>
        <div><a href = "Leaderboard.php" >Leader Board</a></div>
        <div><a href = "contact.php" >Contact Us</a></div>  
    </nav>


    <!-- <img class = "bg" src = "bg.jpg" alt = "Background"> -->
    <img class = "bg" src = "images/dancing.jpg" alt = "Background">
          
    <div class = "challenge">
        <?php 
            // var_dump($asked);
            if($asked == false){
        ?>        
            <form action = "PHP.php" method="post" id = "form">
            <?php 
                $N = 10; // Number of questions 
                $asked = 0;
                $cur = 0;
                
                mysqli_select_db($con, "quiz");
                // mysqli_select_db($con, "id15886018_quiz");
        
                $query = "SELECT * FROM `question` ORDER BY RAND() LIMIT $N";
                $res = mysqli_query($con, $query);
                if($res == TRUE ){
            ?>
            <ol id = "Question_Set" type = "1">
                <?php 
                while($data = mysqli_fetch_assoc($res)){
                    $cur++;
                    
                        
                ?>
                <li class = "Individual_QandA">
                    <div class="Question_only">
                        <?php  
                            echo $data['Question']     ;
                        ?>
                    </div>
                    
                                                   <!-- hidden Q1  -->
                    <input type = "hidden"  name = "<?php echo "Q".strval($cur) ?>" id = "custId"  value = "<?php echo $data['sno']?>">
                    
                    <div class = "options" >
                        <!-- tracking which question is asked(sno) and  -->
                        <input type = "radio" name = "<?php echo $data['sno']?>" id = "<?php echo "a".strval($data['sno'])?>" value = "0" >
                        <label for = "<?php echo "a".strval($data['sno'])?>" > 
                            <?php
                                echo $data['option_A']."<br>";
                            ?>
                        </label>
                        <input type = "radio" name = "<?php echo $data['sno']?>" id = "<?php echo "b".strval($data['sno'])?>"  value = "1">
                        <label for = "<?php echo "b".strval($data['sno'])?>"  > 
                            <?php
                                echo $data['option_B']."<br>";
                            ?>
                        </label>
                        <input type = "radio" name = "<?php echo $data['sno']?>" id = "<?php echo "c".strval($data['sno'])?>"  value = "2">
                        <label for = "<?php echo "c".strval($data['sno'])?>"  > 
                            <?php
                                echo $data['option_C']."<br>";
                            ?>
                        </label>
                        <input type = "radio" name = "<?php echo $data['sno']?>" id = "<?php echo "d".strval($data['sno'])?>" value = "3" >
                        <label for = "<?php echo "d".strval($data['sno'])?>"  > 
                            <?php
                                echo $data['option_D']."<br>";
                            ?>
                        </label>
                    </div>
                    

                </li>
                <?php
                    }
                ?>    

            </ol>
            <?php 
                }
            ?>
            <div class="contact_box">
                <div class="items_contact">
                    <input type = "text" id = "name" name ="name" placeholder="Enter your name">
                </div>
                
                <div class="items_contact">
                    <input type = "email" id ="email" name ="email" placeholder="Enter your email">    
                </div>
                <div class="but">
                    <button class = "button">Submit</button>
                </div>
                        
            </div>

    
            <!-- <input type = "text" name = "name" id = "name" placeholder = "Name">
            <br>
            <input type = "email" name = "email" id = "email" placeholder = "abc@gmail.com">
            <br>
            <button class = "btn" > Submit</button> -->
        
        </form>
        <!-- <button type = "submit" form = "form" value = "Submit">Submit</button> -->

        <?php    
            }
            if($inserted == true ){
        ?>
        <div class="box_Result">
            
            <div class="Congrats_message">
        <?php        
            if($score > $avgscore){
                    echo "<h1>Congratulations ! Youre among the top 10% </h1><br>";
                }
                else{
                    echo "<h1>You performed well ! </h1><br>";
                }
        ?>
            </div>
            <div class="Result_score">
        <?php
                echo "<h2>Score = ".$score."/10<h2>";
        ?>    
            </div>
            <div class="but">
                <button><a class = "button" href = "PHP.php">Start Quiz</a></button>
            </div>
            <p id = "start_another">Start another quiz with different set of questions !</p>    
        </div>    
        <?php
                for($i = 1 ; $i <= $N ; $i++){
                    $str = "Q".strval($i);  // str = Q1
                    $sno = $_POST["$str"];  // $sno = 3
                    
                    $query = "SELECT * FROM `question` WHERE sno = $sno";
                    mysqli_select_db($con, "quiz");
                    // mysqli_select_db($con, "id15886018_quiz");
                    $res = mysqli_query($con, $query);
                    $data = mysqli_fetch_array($res);
                    $actual_ans  = $data['ans'];   // actual_ans = 0
                    
                    $marked_ans = 4; // answer marked byy client
                    if( isset($_POST["$sno"]) ){
                        $marked_ans = $_POST["$sno"];
                    }
        ?>
                    <ul type="I" id = "Question_Set" >
                        <li class = "Individual_QandA">
                            <div class="Question_only">
                                <?php  
                                    echo $data['Question']."<br>" ;
                                ?>
                            </div>
                            <div class = "options" >
                                <?php
                                    if($actual_ans == 0){
                                ?>
                                        <div class="correct_ans">
                                            <?php
                                                echo $data['option_A']."<br>";
                                            ?>    
                                        </div>
                                <?php        
                                    }
                                    else if($marked_ans == 0){
                                ?>
                                        <div class = "marked_ans">
                                            <?php
                                                echo $data['option_A']."<br>";
                                            ?>    
                                        </div>
                                <?php    
                                    }
                                    else{
                                        echo $data['option_A']."<br>";
                                    }    
                                ?>
                                <?php
                                    if($actual_ans == 1){
                                ?>
                                        <div class="correct_ans">
                                            <?php
                                                echo $data['option_B']."<br>";
                                            ?>    
                                        </div>
                                <?php        
                                    }
                                    else if($marked_ans == 1){
                                ?>
                                        <div class = "marked_ans">
                                            <?php
                                                echo $data['option_B']."<br>";
                                            ?>    
                                        </div>
                                <?php    
                                    }
                                    else{
                                        echo $data['option_B']."<br>";
                                    }
                                ?>
                                <?php
                                    if($actual_ans == 2){
                                ?>
                                        <div class="correct_ans">
                                            <?php
                                                echo $data['option_C']."<br>";
                                            ?>    
                                        </div>
                                <?php        
                                    }
                                    else if($marked_ans == 2){
                                ?>
                                        <div class = "marked_ans">
                                            <?php
                                                echo $data['option_C']."<br>";
                                            ?>    
                                        </div>
                                <?php    
                                    }
                                    else{
                                        echo $data['option_C']."<br>";
                                    }
                                ?>
                                <?php
                                    if($actual_ans == 3){
                                ?>
                                        <div class="correct_ans">
                                            <?php
                                                echo $data['option_D']."<br>";
                                            ?>    
                                        </div>
                                <?php        
                                    }
                                    else if($marked_ans == 3){
                                ?>
                                        <div class = "marked_ans">
                                            <?php
                                                echo $data['option_D']."<br>";
                                            ?>    
                                        </div>
                                <?php    
                                    }
                                    else{
                                        echo $data['option_D']."<br>";
                                    }
                                ?>
                            </div>
                        </li>
                    </ul>
            <?php
                }
                // Close the database connection
                $con->close();
            }
            
        ?>
    </div>
    

</body>
</html>



   
