<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div id="<?php echo h($key) ?>Message" class="<?php echo h($class) ?>"> <?php echo h($message) ?><a href="#" class="close" onclick="$(this).parent().fadeOut();return false;">&times;</a></div>
