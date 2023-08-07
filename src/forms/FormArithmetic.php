<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Arithmetic - More Submit Buttons </title>
</head>
<body>
    <form action="" method="post">   
        <table>   
            <tr><td>First Number   :  </td><td> <input type="number" name="first" value=<?php echo $_POST['first'] ?? '' ?> /></td></tr>  
            <!-- <tr><td>Second Number  :  </td><td> <input type="number" name="second" value=<?php echo isset($_POST['second']) ? $_POST['second'] : '';  ?> /> </td></tr>    -->
            <!-- NOTE: You should use htmlspecialchars() for security. 
                    Note that you have to add the operator inside the htmlspecialchars() function. 
                    Otherwise, you’ll get an “Undefined index” error. -->
            <tr><td>Second Number  :  </td><td> <input type="number" name="second" value="<?php echo htmlspecialchars($_POST['second'] ?? '', ENT_QUOTES); ?>" /> </td></tr> 

            <!-- To Keep the previous values -->
            <!-- NOTE 1: You’ll have to add something like this in the <option> tag:
            <?php echo (isset($_POST['select']) && $_POST['select'] === 'option1') ? 'selected' : ''; ?>
            If <select> has a value, and if it’s equal to the <option> value, then echo selected, otherwise, don’t echo anything.

            Here’s the whole part for <select></select>:
            <select name="select" id="">
                <option value="">Select</option>
                <option value="option1" <?php echo (isset($_POST['select']) && $_POST['select'] === 'option1') ? 'selected' : ''; ?>>Option 1</option>
                <option value="option2" <?php echo (isset($_POST['select']) && $_POST['select'] === 'option2') ? 'selected' : ''; ?>>Option 2</option>
            </select>

            NOTE 2:
            <textarea> has an ending tag: </textarea>.
            So, you need to put the PHP operator between the tags, not inside.
            <textarea name="message">   
                <?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES) : ''; ?>    
            </textarea> -->

            <tr><td><input type="submit" value="Addition" name="addValue"  />  </td>
            <td> <input type="submit" value="Subtraction" name="subValue"  />  </td> 
            <td><input type="submit" value="Multiplication" name="mulValue"/>  </td>  
            <td><input type="submit" value="Division" name="divValue"/>  </td></tr>    
        </table>  
    </form> 
    
    <?php
        if ( !(empty($_POST["first"])) && !(empty($_POST["second"] )) ) {
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
       // return redirect()->back()->withErrors($validator)->withInput();
       echo "Empty values";
     }

     //function add(){
        // if (! (empty($_POST["first"]) && empty($_POST["second"] )) ) 
       // {
       // echo "Addition by function = " . ($_POST["first"] + $_POST["second"]);
     //echo "Addition by function = " . ($e["first"] + $e["second"]);
        //return true;
       // }
        // else {
        //     echo "Either values are not empty";
        //     return false;
        // }
   //  }

    ?>

    <pre> 
    *** PHP htmlspecialchars() - Converts the predefined characters "<" (less than) and ">" (greater than) to HTML entities
        The predefined characters are:
            & (ampersand) becomes &amp;
            " (double quote) becomes &quot;
            ' (single quote) becomes &#039;
            < (less than) becomes &lt;
            > (greater than) becomes &gt;
        
    *** htmlspecialchars_decode() - Converts special HTML entities back to characters
       <?php
            $str = "This is some <b>bold</b> text.";
            echo htmlspecialchars($str);
        ?>
        
        HTML OUTPUT OF THE CODE  --- This is some &lt;b&gt;bold&lt;/b&gt; text.
        BROWSER OUTPUT OF THE CODE  --- This is some <b>bold</b> text.
    </pre>
</body>
</html>