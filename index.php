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
            First Name:<br><input type="text" name='FirstName' value="" maxlength="20"  size="10" placeholder='First' required><br>
            Surname:<br> <input type="text" name="Surname" value="" maxlength="20"  size="10" placeholder='Surname' required><br>
            Birth date:<br> <input type="date" name="bday" required><br><br>
            Gender:<br><input type="radio" name="gender" value="male" required> Male
                       <input type="radio" name="gender" value="female" required> Female<br><br><br><br>
            
            Address:<br><br>
            Street:<br><input type="text" name="Street" value="" maxlength="20"  size="10" required>
            Housenumber<input type="text" name="num" value=""  maxlength="5"  size="4" required><br>
            Zipcode & City:<br><input type="text" name="Zipcode" value="" maxlength="20"  size="10" required> 
                               <input type="text" name="City" value="" maxlength="20"  size="10" required><br>
            
            Country:<br><select name="cnt" size="1" maxlength="20"  size="10" required>
                        <option value=" "> </option>
                        <option value="the Netherlands">the Netherlands</option>
                        <option value="Germany">Germany</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="France">France</option>
                        </select>
            <br><br>
            E-mail:<br> <input type="email" name="email" required><br>
            
            
            
            <br><br>
            <input type="submit" value="Submit"><br>
            
        </form>
        
        
        <?php  //formfiller.php
                

        
//        $TheForm = $_POST['FirstName'] . "formulier.txt";
        
        if (isset($_POST['FirstName'])){
        $TheForm=$_POST['FirstName'] . "formulier.txt";
         
//        fwrite($form, $FirstName);
        }
        
        
        $form = fopen('FirstName', "a+") or die("Unable to open file!");
        
     
        

        if (isset($_POST['FirstName'])){
        $FirstName=$_POST['FirstName'] . " ";
         
        fwrite($form, $FirstName);
        }
              
        if (isset($_POST['Surname'])){
        $Surname=$_POST['Surname'] . " ";
         
        fwrite($form, $Surname);
        }
          
        if (isset($_POST['bday'])){
        $bday=$_POST['bday'] . " ";
         
        fwrite($form, $bday);
        }
          
        if (isset($_POST['gender'])){
        $gender=$_POST['gender'] . " ";
         
        fwrite($form, $gender);
        }
 
        if (isset($_POST['Street'])){
        $Street=$_POST['Street'] . " ";
         
        fwrite($form, $Street);
        }
          
        if (isset($_POST['num'])){
        $num=$_POST['num'] . " ";
         
        fwrite($form, $num);
        }
        
        if (isset($_POST['Zipcode'])){
        $Zipcode=$_POST['Zipcode'] . " ";
         
        fwrite($form, $Zipcode);
        }
        
        if (isset($_POST['City'])){
        $City=$_POST['City'] . " ";
         
        fwrite($form, $City);
        }
        
        if (isset($_POST['cnt'])){
        $cnt=$_POST['cnt'] . " ";
         
        fwrite($form, $cnt);
        }
 
        if (isset($_POST['email'])){
        $email=$_POST['email'] . "\n ";
         
        fwrite($form, $email);
        }
        
        fclose($form);
                   
       
        
        ?>
        
    </body>
</html>