
<dt> <label for ="my_name">お名前:</label></dt>
<dd>
<?php print(htmlspecialchars($_GET['name'], ENT_QUOTES)); ?>

</dd>
<dt><label for = "message">メッセージ:</label></dt>
<dd>
<?php print(htmlspecialchars($_GET['message'], ENT_QUOTES));?>
</dd>



