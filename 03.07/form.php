<?php
session_start();
?>
<html>
    <head></head>

        <body>
        <?php
        if(isset($_SESSION["check"])){
            echo "Welcome!<br>";
            echo "<a href='logout.php'>Logout</a>";

            echo "<form action= 'info.php' method='GET'>";

            echo "Please input your name:<input type='text' name='uName'><br>";
            echo "Please input your password:<input type='password' name='uPwd'><br>";
            echo "Please input your email:<input type='email' name='uEmail'><br>";
            echo "Please select your color:<input type='color' name='uColor'><br>";
            echo "Please select your age:<input type='number' name='uAge'><br>";
            echo "Please select your birthday:<input type='date'; name='uBirth'><br>";
            echo "Please select how you like the webpage:<input type='range' name='uLike'><br>";

            echo "<input type='hidden' name='uSecret' value='hahaha'><br>";

            echo "Please select your gender:
                  Male<input type='radio' name='uGender' value='male'>
                  Female<input type='radio' name='uGender' value='female'><br>";

            echo "Please select your interest:<br>
                  Study<input type='checkbox' name='uInterest[]' value='study'>
                  Sleep<input type='checkbox' name='uInterest[]' value='sleep'>
                  Game<input type='checkbox' name='uInterest[]' value='game'><br>";

            echo "Please select your city:<br>
                  <select name='uCity'>
                  <option value='Taipei'>Taipei</option>
                  <option value='Taichung'>Taichung</option>
                  <option value='Kaohsiung'>Kaohsiung</option>
                  </select>";

            echo "<br>Please input your comments:
                  <br><textarea cols='30' rows='10' name='uComment'></textarea>";

            echo "<input type='submit'><input type='reset'>";
            echo "</form>";

            }else{
                echo "illegal user!";
                header("Refresh:2;url='login.php'");
            }
                 
        ?>
        </body>
</html>