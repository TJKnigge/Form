<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms </title>
        
        <script>
        
        </script>
        
        
        <style>
            
            
        </style>
        
    </head>
    
    <body>
        

        <form method="post">
        
            <br>
            First Name:<br><input type="text" name='FirstName' value="" placeholder='First'><br>
            Surname:<br> <input type="text" name="Surname" value="" placeholder='Surname'><br>
            Birth date:<br> <input type="date" name="bday"><br><br>
            Gender:<br><input type="radio" name="gender" value="male"> Male
                       <input type="radio" name="gender" value="female"> Female<br><br><br><br>
            
            Address:<br><br>
            Street:<br><input type="text" name="Street" value="" required><br>
            Zipcode & City:<br><input type="text" name="Zipcode" value=""> <input type="text" name="City" value=""><br>
            
            Country:<br><select name="cnt" size="1">
                        <option value="the Netherlands">the Netherlands</option>
                        <option value="Germany">Germany</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="France">France</option>
                        </select>
            
            
            <br><br>
            <input type="submit" value="Submit"><br>
            
        </form>
      
        
        <?php  //formfiller.php
                

        
        $TheForm = $_POST['FirstNam'] . "formulier.txt";
        
        $form = fopen($TheForm, "a+") or die("Unable to open file!");
        
       
        
        $FirstName = $_POST['FirstName'] . " ; ";
        fwrite($form, $FirstName);
        $Surname = $_POST['Surname'] . " ; ";
        fwrite($form, $Surname);        
        $bday = $_POST['bday'] . " ; ";
        fwrite($form, $bday);       
        $gender = $_POST['gender'] . " ; ";
        fwrite($form, $gender);
        $Street = $_POST['Street'] . "\n";
        fwrite($form, $Street);        
        
        
       
        
        fclose($form);
                   
       
        
        ?>
        
    </body>
</html>