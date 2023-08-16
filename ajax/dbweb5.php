<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","dbdisplay.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>
  <!-- AJAX Database Example
    The following example will demonstrate how a web page can fetch information from a database with AJAX: -->
<?php
  $con = mysqli_connect('localhost:3306','root','12345');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"MyDbPhp");
    $sql="SELECT * FROM userdata";
    $result = mysqli_query($con,$sql);

    echo "<form>";
    echo "Select User Name : <select name='users' onchange='showUser(this.value)'>
    <option value=''>Select a person:</option>";
    while($row = mysqli_fetch_assoc($result)) {
     echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>" ;
    }
  echo "</select> </form> <br>"; 
  echo "<div id='txtHint'><b>Person info will be listed here...</b></div>";
  ?>

<!-- Example Explained
    In the example above, when a user selects a person in the dropdown list above,
    a function called "showUser()" is executed.

    The function is triggered by the onchange event.

Example Explained
    In the example above, when a user selects a person in the dropdown list above, 
    a function called "showUser()" is executed.

    The function is triggered by the onchange event. 

    The database table contains id, FirstName, LastName, Age, HomeTown, and Job
-->
    
</body>
</html>