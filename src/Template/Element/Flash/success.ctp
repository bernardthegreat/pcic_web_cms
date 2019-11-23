<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-info" onclick="this.classList.add('hidden')">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?= $message ?>
</div>
