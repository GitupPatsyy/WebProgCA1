<?php
/**
 * Created by IntelliJ IDEA.
 * User: rorypb
 * Date: 18/11/2015
 * Time: 1:42 PM
 */


?>
<!DOCTYPE html>
<html>
<head>
    <title>Tour Bus Massacre</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/960.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


</head>

<body>
<!--All content in container-->
<div class="container_12">
    <!--All data will be displayed from database-->
    <br>
    <hr>
    <h4 style="text-align: center">Garage Editor</h4>
    <hr>
    <!--    Opening databse area -->
    <div class="prefix_3 grid_6 suffix_3">

        <!--        Opening form area           -->

        <form class="pure-form pure-form-stacked" action="" id="databaseAdd" name="databaseAdd" method="post">
            <!--            Data will go inside of here -->
            <table class="prefix_2 grid_6 suffix_3">

                <tr>
                    <td>Garage Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="garageName" value="" /> <span id="gnameError">
<!--                        Garage Name Errors will go here             -->
                    </span>
                    </td>
                </tr>

                <tr>
                    <td>Garage Address</td>
                </tr>
                <tr>
                    <td><input type="text" name="garageAdd" value=""/><span id="addresssError">
<!--                        Garage address errors will go here          -->
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Garage Phone</td>
                </tr>
                <tr>
                    <td><input type="phone" name="phoneNo" value=""/><span id="phoneError">
<!--                        Phone errors will go here       -->
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Manager Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="managerName" value=""/><span id="mnameError">
<!--                        Manager name errors will go here           -->
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Manager Email</td>
                </tr>
                <tr>
                    <td><input type="email" name="manEmail" value="" /><span id="emailError">
<!--                        Email Error will go here        -->
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Date of Next Service</td>
                </tr>
                <tr>
                    <td><input type="date" name="serviceDate" value="" /><span id="dateError">
<!--            Date Error will go here             -->
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Garage URL</td>
                </tr>
                <tr>
                    <td><input type="url" name="gURL" value="" /><span id="urlError">
<!--          URL Error will go here         -->
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Overnight?</td><td>Yes<input type="checkbox" name="overnight" value="Overnight?"></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td>Garage Image</td>
                </tr>
                <tr>
                    <td><input type="image" class="pure-button pure-button-secondary" name=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Committ" class="pure-button pure-button-primary" name="add"></td>
                </tr>


                <!--        Closing data area       -->
            </table>
            <!--            Closing form area           -->
        </form>

        <!--Closing database area-->
    </div>

    <!--Closing container-->
</div>
</body>


</html>
