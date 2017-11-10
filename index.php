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
        
        <form action="formfiller.php" method="post">
            <br>
            First Name:<br><input type="text" name="FirstName" value="" placeholder='First'><br>
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
            
            
            
        </form>
        
        <?php  //formfiller.php
        
        $form = fopen("TheForm.txt", "a+") or die("Unable to open file!");
        
        $list = <<<_END
        
        
        $FirstName = get_post('FirstName');
        $Surname = get_post('Surname');
        
       
        _END
        
        fwrite($form, $list);
       
        
        fclose($form);
        
        ?>
        
    </body>
</html>

