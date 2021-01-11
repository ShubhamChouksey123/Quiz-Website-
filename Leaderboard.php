<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Leaderboard Page</title>
    <link rel= "stylesheet" href = "Leaderboard.css"   >
    <link rel="stylesheet" media="screen and (max-width: 500px)" href="css/phone_Leaderboard.css">
</head>
<style>

</style>
<body>
    <!-- <img class = "bg" src = "bg.jpg" alt = "Starts"> -->
    
       <!-- Navigation  Box -->
    <nav class = "flex-container">
        <div><a href = "index.php" >Home</a></div>
        <div><a href = "about.php" >About</a></div>
        <div><a href = "PHP.php" >More Quizes</a></div>
        <div><a href = "Leaderboard.php" >Leader Board</a></div>
        <div><a href = "contact.php" >Contact Us</a></div>  
    </nav>

    <img class="bg" src = "images/backgroud_battle.jpg" alt = "background" >
    
   
    <?php
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
        $query = "SELECT * FROM `quiz` ORDER BY score DESC limit 5";
        
        $res = mysqli_query($con, $query);
        if($res == true){
            $cur = 0;
    ?>
        <table id = "Leaderborad_table">
            <tr class = "table_row">
                <th class = "position_table">Position</th>
                <th class = "Name_table">Name</th>
                <th class = "Score_table">Score</th>
                <th class = "Reward_table">Reward<th>
            </tr>
        
    <?php        
            while($data = mysqli_fetch_array($res)){
                $cur++;
    ?>
            <tr class = "table_row">
                <th class = "position_table" > <?php echo $cur ?></th>
                <th class = "Name_table"> <?php echo $data['name'] ?></th>
                <th class = "Score_table"> <?php echo $data['score'] ?></th>
                <th class = "Reward_table"> </th>
            </tr>
    <?php    
                
            }
        }    
    ?>
        </table>
</body>
</html>
<!-- SELECT *
FROM `quiz`
ORDER BY score DESC
limit 5; -->