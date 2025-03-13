<html>
    <head></head>

        <body>

        <form action= "info.php" method="POST">

         Please input your name:<input type="text" name= "uName"><br>
         Please input your password:<input type="password" name= "uPwd"><br>
         Please input your email:<input type="email" name= "uEmail"><br>
         Please select your color:<input type="color" name= "uColor"><br>
         Please select your age:<input type="number" name= "uAge"><br>
         Please select your birthday:<input type="date" name= "uBirth"><br>
         Please select how you like the webpage:<input type="range" name= "uLike"><br>

         <input type="hidden" name="uSecret" value="hahaha"><br>

         Please select your gender:
         Male<input type="ratio" name= "uGender" value="male"><br>
         Female<input type="ratio" name="uGender" value="female"><br>

         Please select your interest:<br>
         Study<input type="checkbox" name= "uInterest[]" value="study">
         Sleep<input type="checkbox" name= "uInterest[]" value="sleep">
         Game<input type="checkbox" name= "uInterest[]" value="game"><br>

         Please select your city:<br>
         <select name="city">
            <option value="Taipei">Taipei</option>
            <option value="Taichung">Taichung</option>
            <option value="Kaohsiung">Kaohsiung</option>
         </select>

         <br>Please input your comments:
         <br><textarea cols="30" rows="10" name="uComments">

         </textarea>


        <input type="submit"><input type="reset">

        </form>
        </body>
</html>