<?php
        if ((!empty($_POST["first"]) && !empty($_POST["second"] )) ) {
        if(isset($_POST['addValue']))
        {
           echo "Addition = " . ($_POST["first"] + $_POST["second"]);
        }
        else if(isset($_POST['subValue']))
        {
            echo "Subtraction = " . ($_POST["first"] - $_POST["second"]);
        }
        else if(isset($_POST['mulValue']))
        {
            echo "Multiplication = " . ($_POST["first"] * $_POST["second"]);
        }
        else if(isset($_POST['divValue']))
        {
            echo "Division = " . ($_POST["first"] / $_POST["second"]);
        }   
        }
    else
     {
        // redirect ("http://localhost/FRESHERS/FormArithmetic1.html");
       // header("Location: http://localhost/FRESHERS/FormArithmetic1.html");
         // redirect()->back();
        //return redirect()->back()->withErrors($validator)->withInput();
       //echo "Empty values";
     }
     ?>
