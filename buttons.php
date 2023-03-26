<input type="button" value="Button Label">
<input type="submit" value="Submit">
<?php
$button_label = "Click me";
$button_class = "btn-primary";
?>
<input type="button" value="<?php echo $button_label; ?>" class="<?php echo $button_class; ?>">
