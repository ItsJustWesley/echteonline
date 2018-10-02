<?php

require_once('../../../private/initialize.php');?>


<?php include(SHARED_PATH . '/staff_header.php'); ?>


<?php

  reset_pagescount();
   header("refresh: 1;");

?>

<div>
<a class="action" href="<?php echo url_for('/staff/subjects/index.php'); ?>">Gelukt, ga terug naar het homescherm</a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
