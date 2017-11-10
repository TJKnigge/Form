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
        
        <form>
            <br>
            First Name:<br> <input type="text" name="FirstName" value=""><br>
            Surname:<br> <input type="text" name="Surname" value=""><br>
            Birth date:<br> <input type="date" name="bday"><br><br>
            Gender:<br><input type="radio" name="gender" value="male"> Male
           
            <input type="radio" name="gender" value="female"> Female<br><br><br><br>
            
            Address:<br><br>
            Street:<br><input type="text" name="Street" value="" required><br>
            Zipcode & City:<br><input type="text" name="Zipcode" value=""> <input type="text" name="City" value="" required><br>
            Country:<br><input list="Country" name="Country">
                <datalist id="Country">
                <option value="Netherlands">
                <option value="Germany">
                <option value="Belgium">
                <option value="Great Britain">
                <option value="France">
                </datalist>
              
            
        </form>
        
        <?php
        
        
        // put your code here
        ?>
        
    </body>
</html>

