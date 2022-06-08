<form action="../items/add" method="POST">
    <input type="text" value="I have to ..." onclick="this.value=''" name="todo">
    <input type="submit" value="Add">
</form>
<br>

<?php $number = 0 ?>
<?php foreach ($todo as $todoitem):?>
    <a href="../items/view/<?php echo $todoitem['id']?>/<?php echo $todoitem['item_name']?>">
        <span class = "item">
            <?php echo ++$number;?>
            <?php echo $todoitem['item_name'];?>
        </span>
    </a>
    <br>
<?php endforeach ?>

