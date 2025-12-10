<html>
    <body>
        <?php
        $name=$email=$dob=$gender=$degree=$bloodgroup="";
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            $name=test_input($_POST["name"]);
            $email=test_input($_POST["email"]);
            $dob=test_input($_POST["dob"]);
            $gender=test_input($_POST["gender"]);
            $degree=test_input($_POST["degree"]);
            $bloodgroup=test_input($_POST["bloodgroup"]);
 
        }
        function test_input($data){
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }
        ?>
        <h2>Assignment</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 name>Name</h1>
            <input type="text" name="name"><br>
        </form>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 email>email</h1>
            <input type="text" email="email"><br>
        </form>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 date of birth>date of birth</h1>
        
                  <input type="text" id="dd" placeholder="dd" maxlength="2" style="width:40px"> 
                <input type="text" id="mm" placeholder="mm" maxlength="2" style="width:40px">
                <input type="text" id="yyyy" placeholder="yyyy" maxlength="4" style="width:60px"><br>
       <br>
        </form>

       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 gender>gender</h1>
            <td>
                    <input type="radio" name="gender" value=""/>Male
                    <input type="radio" name="gender" value=""/>Female
                    <input type="radio" name="gender" value=""/>Other
                </td>
            <br>
        </form>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 Degree>degree</h1>
             <td>
                    <input type="checkbox" name="" value=""/>JSC
                    <input type="checkbox" name="" value=""/>SSC
                    <input type="checkbox" name="" value=""/>HSC
                </td>
            <br>
        </form>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 Blood Group>blood_group</h1>
            <td>
                    <select name="">
                        <option value="">AB+</option>
                        <option value="">A+</option>
                        <option value="">B+</option>
                        <option value="">O+</option>
                    </select>
                </td>
            <br>
            <td>           
                    <input type="submit" name="" value="Submit"/>
                </td>
            </tr>
        </form>
        

    </body>
</html>
 
 





    