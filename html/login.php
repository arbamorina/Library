

<?php include "../php/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>

</head>
<body>

<div class="container">
    <form method='POST' action="../php/login.php" onsubmit=" return ValidateLoginForm()" ">
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
            <td>Type: </td>
            <td><select name="typeChooser">
                <option value="Admin">Administrator</option>
            </select>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div id="buttoniLogin">
                <button  type="submit" class="btn btn-primary" name="btn-save" >
                    <span class="glyphicon glyphicon-arrow-down"></span> Log in
                </button>
                </div>

            </td>
        </tr>

    </table>
    </form>
</div>
<script type="text/javascript" src="../js/validateLogin.js"> </script>
</body>


</html>

