<?php

class Bc {
    function __construct ($a, $b) {
        $this->a=$a;
        $this->b=$b;
    }
    function summa () {
        echo $this->a + $this->b;
    }
}

?>

<?php
$one = $_POST['one'];
$two = $_POST['two'];

$object = new Bc($one, $two);
?>

<form action="./class.php" method="post">
    <input type="text" name="one"> <input type="submit" value="плюс"> <input type="text" name="two"> = <?=$object -> summa ();?>
</form>
