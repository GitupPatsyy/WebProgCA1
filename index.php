<!DOCTYPE html>
<html>
<head>
    <title>Tour Bus Massacre</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/960.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
<!--All content in container-->
<div class="container_12 bodystyle">
    <!--Form data will go inside-->
    <br>
    <hr>
    <h4 style="text-align: center">Garage Login</h4>
    <hr>
    <div class="prefix_2 grid_6 suffix_2">

        <form id="loginForm" action="loginCheck.php" method="POST">
            <!--Opening table-->
            <table>
                <!--                Table body                    -->
                <tbody>
                <tr class="prefix_3 grid_6 suffix_3">
                    <td>Username</td>
                </tr>
                <tr class="prefix_3 grid_6 suffix_3">
                    <td><input type="text" name="username" /><span id="userNameError">
<!--                    Errors will be output here              -->
                </span></td>
                </tr>

                <tr class="prefix_3 grid_6 suffix_3">
                    <td>Password</td>
                </tr>
                <tr class="prefix_3 grid_6 suffix_3">
                    <td><input type="password" name="password" value="" /><span id="passwordError">
                    ERRORS
                            <!--                    Password errors will be put here-->
                </span>
                    </td>
                </tr>

                <tr class="prefix_3 grid_6 suffix_3">
                    <td>
                        <input type="submit" value="Login" name="login"/>
                    </td>
                    <td><input type="button" value="Register" name="register" /></td>
                </tr>


                </tbody>
                <!--                Closing table tag                -->
            </table>


        </form>


        <!--Closing form area-->
    </div>

    <!--Closing container-->
</div>
</body>


</html>