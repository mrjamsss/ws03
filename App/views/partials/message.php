<?php

use Framework\Session;

?>

<?php $successMessage = Session::getFlashMessage('success_message'); ?>
<?php if ($successMessage !== null): ?>
    <div class="flash-message flash-success my-6">
        <i class="fa-solid fa-circle-check mr-3 text-xl"></i>
        <span><?= $successMessage ?></span>
    </div>
<?php endif; ?>

<?php $errorMessage = Session::getFlashMessage('error_message'); ?>
<?php if ($errorMessage !== null): ?>
    <div class="flash-message flash-error my-6">
        <i class="fa-solid fa-circle-exclamation mr-3 text-xl"></i>
        <span><?= $errorMessage ?></span>
    </div>
<?php endif; ?>