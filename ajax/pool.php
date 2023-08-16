<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 1) {
  $yes = number_format($yes) + 1;
}else if ($vote == 0) {
  $no = number_format($no) + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td><img src="http://localhost/PHP-Concepts/ajax/images/poll.webp"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td><img src="http://localhost/PHP-Concepts/ajax/images/poll.webp"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>

<!--
  The value is sent from the JavaScript, and the following happens:

Get the content of the "poll_result.txt" file
Put the content of the file in variables and add one to the selected variable
Write the result to the "poll_result.txt" file
Output a graphical representation of the poll result
The Text File
The text file (poll_result.txt) is where we store the data from the poll.

It is stored like this:

0||0
The first number represents the "Yes" votes, the second number represents the "No" votes.

Note: Remember to allow your web server to edit the text file. Do NOT give everyone access, just the web server (PHP).
 -->