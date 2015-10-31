<?php

defined('C5_EXECUTE') or die(_("Access Denied."));
$ps = loader::helper('form/page_selector');


?>

<div class="form-group">
	<label class="control-label" for="link"><?=t('Choose Internal Link')?></label>
	<?php echo $ps->selectPage('goID',$goID)?>
</div>
