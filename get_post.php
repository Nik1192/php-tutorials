<?php

// What different $_GET and $_POST variables are used for in PHP?
// $_GET - data url parameters, used to collect data sent in the URL query string. It is visible in the URL and has a size limit.
// $_POST - data sent in the body of the HTTP request, used to collect data sent via an HTML form. 

// example of using $_GET
echo "Get Method <br>";
$name = ($_GET['name']) ?? "Guest";

echo "Hello " . $name;

// example of using $_POST

echo "<br>Post Method<br>";
if(isset($_POST['name'])){
    echo "Hi ".$_POST['name'];
}
?>
<form method="POST" action ="">
    <input type="text" name="name" placeholder="Enter name">
    <button type"submit" >Submit </button>
</form>


