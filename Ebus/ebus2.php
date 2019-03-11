

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
   <?php
  
session_start();
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Customer Information</title>
    </head>
    <body>
            <?php
$fullNameValue = "";
$fullNumValue = "";
$fullPinValue = "";



$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum'] = $fullNumValue;
$_SESSION['txtPin'] = $fullPinValue;
?>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td><b>Enter in your details below</b></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="txtName" name="txtName" value=""  /></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="tel" id="txtNum" name ="txtNum" value=""  /></td>
                    </tr>
                    
                    <tr>
                        <td>Pin</td>
                        <td><input type="text" id="txtPin" name="txtPin" value="" size = "4" maxlength="4" /></td>
                        
                    </tr>
                    
                    
                </table>
            </center>
            
        <center>
        
        
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center>
        </div>
        </form>