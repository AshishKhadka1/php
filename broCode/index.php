<!-- <?php
echo "I love pizza and momo <br>";
echo "I am a boy <br><br>";


$name = "ashish";
echo "hello {$name}";

?> -->

<!-- 
    ** = power operator

    operator percedence
    ()
    **
    *, /, %
    +, _

 -->

<!-- GET method 

<form action="index.php" method = "GET"
- Data is appended to the url
- Not secure
- Char limit
- bookmark is possible

<?php
    echo "{$_GET["username"]}<br>";
    echo $_GET["password"]
?>
-->

<!--  POST method

<form action="index.php" method = "POST" 
- Data is packed inside the body of http request
- Better for submitting credentials

<?php
    echo "{$POST["username"]}<br>";
    echo $_["password"]
?>

-->