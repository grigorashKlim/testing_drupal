<?php if (!isset($simple_module_form_array)): ?>
  <?php print "No records to display"; ?>
<?php else: ?>
  <?php foreach ($simple_module_form_array as $delta): ?>
    <?php print 'id: ' . $delta['string_id'] . ' string: ' . $delta['string'] . '<br>'; ?>
  <?php endforeach; ?>
<?php endif; ?>

