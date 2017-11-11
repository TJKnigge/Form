<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms </title>
        
        <script>
        $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
            }
            
            
            
            
        </script>
        
        
        <style>
          body  {
            background-image: url("Naamloos.png");
            background-color: #cccccc;
          }  
            
        </style>
        
    </head>
    
    <body>
        
        
            
        <form method="post">
        
            <br>
            First Name:<br><input type="text" name='FirstName' value="" maxlength="20"  size="10" placeholder='First'><br>
            Surname:<br> <input type="text" name="Surname" value="" maxlength="20"  size="10" placeholder='Surname'><br>
            Birth date:<br> <input type="date" name="bday"><br><br>
            Gender:<br><input type="radio" name="gender" value="male"> Male
                       <input type="radio" name="gender" value="female"> Female<br><br><br><br>
            
            Address:<br><br>
            Street:<br><input type="text" name="Street" value="" maxlength="20"  size="10">
            Housenumber<input type="text" name="num" value=""  maxlength="5"  size="4"><br>
            Zipcode & City:<br><input type="text" name="Zipcode" value="" maxlength="20"  size="10"> 
                               <input type="text" name="City" value="" maxlength="20"  size="10"><br>
            
            Country:<br><select name="cnt" size="1" maxlength="20"  size="10">
                        <option value="the Netherlands">the Netherlands</option>
                        <option value="Germany">Germany</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="France">France</option>
                        </select>
            <br><br>
            E-mail:<br> <input type="email" name="email"><br>
            
            
            
            <br><br>
            <input type="submit" value="Submit"><br>
            
        </form>
        
        
        <?php  //formfiller.php
                

        
        $TheForm = $_POST['FirstNam'] . "formulier.txt";
        
        $form = fopen($TheForm, "a+") or die("Unable to open file!");
        
       
        
        $FirstName = $_POST['FirstName'] . "  ";
        fwrite($form, $FirstName);
        $Surname = $_POST['Surname'] . "  ";
        fwrite($form, $Surname);        
        $bday = $_POST['bday'] . "  ";
        fwrite($form, $bday);       
        $gender = $_POST['gender'] . "  ";
        fwrite($form, $gender);
        $Street = $_POST['Street'] . "  ";
        fwrite($form, $Street);        
        $num = $_POST['num'] . "  ";
        fwrite($form, $num);
        $Zipcode = $_POST['Zipcode'] . "  ";
        fwrite($form, $Zipcode);
        $City = $_POST['City'] . "  ";
        fwrite($form, $City);
        $cnt = $_POST['cnt'] . "  ";
        fwrite($form, $cnt);
        $email = $_POST['email'] . "\n";
        fwrite($form, $email);
        
        fclose($form);
                   
       
        
        ?>
        
    </body>
</html>