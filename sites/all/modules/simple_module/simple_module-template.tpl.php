<?php
if (!isset($simple_module_form_array))
{
  echo "No records to display";
  return false;
}
 foreach ($simple_module_form_array as $delta)
 {
   echo 'id: ' . $delta['string_id'] . ' string: ' . $delta['string'].'<br>';
 }
