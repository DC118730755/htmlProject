<?php
session_start();

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Strategic Consulting Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

   
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
    <h1> Customer Details</h1>
    <a href="index.html">Home</a>
        <meta charset="utf-8" />
        <title>Customer Information</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
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
                        <td><input type="text" id="txtName" name="txtName" value="" required /></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="tel" id="txtNum" name ="txtNum" value="" maxlength="10" required /></td>
                    </tr>
                    
                    <tr>
                        <td>Pin</td>
                        <td><input type="text" id="txtPin" name="txtPin" value="" size = "4" maxlength="4" required /></td>
                        
                    </tr>
                    <tr>
                       
                        <td><input type="hidden" id="txtTotal" name ="txtTotal" value="<?php echo $_POST["txtTotal"] ?>"  /></td>
                    </tr>
                    
                </table>
            </center>
            
        <center>
        
        
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center>
        </div>
        </form>