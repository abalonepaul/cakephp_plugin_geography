<?php 
//echo json_encode($states);
$options = '<option value="">Select a State</option>';
foreach ($states as $key => $value) {
    $options .= '<option value="' . $key .'">' . $value . '</option>';
}
echo $options;
?>