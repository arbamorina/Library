<?php include "../php/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register User </title>

</head>
<body>

<div class="container">
    <form method='POST' action="../php/registreUser.php" onsubmit=" return ValidateRegistreForm()" ">
    <table class='table table-bordered'>

        <tr>
            <td>Username: </td>
            <td><input id="Username" type='text'  name='Username' onkeyup="validateUserName()" class='form-control' ><label id="commentUsername"></label></td>
        </tr>

        <tr>
            <td>Password: </td>
            <td><input id="Password" type='password'  name='Password' onkeyup="validatePassword()" class='form-control' ><label id="commentPassword"></label></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input id="Email" type='text'  name='Email' onkeyup="validateEmail()" class='form-control'  ><label id="commentEmail"></label></td>

        <tr>
        <tr>
            <td>Type: </td>
            <td><select name="typeChooser">
                    <option value="Admin">Administrator</option>
                </select>
            </td>
        </tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-save">
                    <span class="glyphicon glyphicon-plus"></span> Registre new User
                </button>
                <a href="login.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-arrow-down"></i> &nbsp; Login</a>


            </td>
        </tr>

    </table>
    </form>
</div>
<script type="text/javascript" src="../js/validateRegistre.js"> </script>
</body>


</html>

