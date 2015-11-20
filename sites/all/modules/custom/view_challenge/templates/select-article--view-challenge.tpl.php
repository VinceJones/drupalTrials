<?php
/**
 * The raw implementation of the select-article--view-challenge template
 *
 * @var array $items
 *   The Node objects that were retrived in >>
 *
 * @var array $form_block
 *   The prepared form render array
 */
$break = 'point';

?>

<div>
  <?php foreach($items as $node): ?>
  <div class="node">
    <?php print $node; ?>
  </div>
  <?php endforeach; ?>
</div>
<div>
  <?php print render($form_block); ?>
</div>
