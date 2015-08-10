<?php
/**
 * @file field--fences-no-wrapper.tpl.php
 * Render each field value with no wrapper element.
 */

$classes = glacier_classes(
  array(
    // $prefix_component . 'field',
    // $prefix_component . 'field--' . $field_name_css,
    // $prefix_component . 'field--' . $field_type_css,
    $prefix_component . $bundle_class . '__' . $field_name_css,
  ),
  $default_classes
);

$label_classes = glacier_classes(
  array(
    // $prefix_component . 'field--' . $field_name_css . '__label',
    // $prefix_component . 'field--' . $field_type_css . '__label',
    $prefix_component . $bundle_class . '__' . $field_name_css . '__label',
  ),
  $default_label_classes
);

$item_classes = glacier_classes(
  array(
    // $prefix_component . 'field--' . $field_name_css . '__item',
    // $prefix_component . 'field--' . $field_type_css . '__item',
    $prefix_component . $bundle_class . '__' . $field_name_css . '__item',
  ),
  $default_item_classes
);

?>
<?php if ($label_display == 'inline'): ?>
  <span class="<?php print $label_classes; ?> <?php print $prefix_utility; ?>display-inline"<?php print $title_attributes; ?>>
    <?php print $label; ?>:
  </span>
<?php elseif ($label_display == 'above'): ?>
  <div class="<?php print $label_classes; ?>"<?php print $title_attributes; ?>>
    <?php print $label; ?>
  </div>
<?php endif; ?>

<?php foreach ($items as $delta => $item): ?>
  <?php print render($item); ?>
<?php endforeach; ?>
