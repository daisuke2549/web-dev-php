</section>

<footer>
  <p>(c) dotinstall.com</p>
</footer>
</body>
</html>

<!-- <form action="submit.php" method="get">
<dl>
<dt> <label for ="name">お名前:</label></dt>
<dd>
<input type="text" id="name" size= "35" name="name" >
</dd>
<dt><label for = "message">メッセージ:</label></dt>
<dd>
<input type="text" id="message" name ="message">
</dd>
</dl>
<input type="submit" value="send">
</form> -->

<?php 




$devices = [
  'win'  => 'Windows',
  'mac'  => 'macintoshi',
  'iphone'  => 'iphones',
  'ipad'  => 'iPad',
  'android'  => 'Android'
];

foreach ($devices as $abbreviation => $formal){
   print($abbreviation . ':' . $formal . "\n");
}

$i = 1;
while ($i <= 100) {
  if($i % 15 === 0){
   echo "fizzbuzz";
  }elseif($i % 5 === 0){
    echo "fizz" ;
  }else {
    echo "buzz";
  } 
}



?>