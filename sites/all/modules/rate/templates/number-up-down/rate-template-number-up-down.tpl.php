<?php

/**
 * @file
 * Rate widget theme
 */

?>

<?php
  /*
  <div class="rate-label">
    <?php print $display_options['title']; ?>
  </div>
  */
?>



<?php print $up_button; ?>

<div class="rate-number-up-down-rating <?php print $score_class; ?>"><?php print $results['up'];  ?></div>

<!-- original just remove the comments
<div class="rate-number-up-down-rating <?php //print $score_class; ?>"><?php //print $score;  ?></div>
end of original-->

<?php print $down_button; ?>

<div class="rate-number-up-down-rating <?php print $score_class; ?>"><?php print $results['down'];  ?></div>

<?php

if ($info) {
  print '<div class="rate-info">' . $info . '</div>';
}

if ($display_options['description']) {
  print '<div class="rate-description">' . $display_options['description'] . '</div>';
}
