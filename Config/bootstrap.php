<?php 
Cache::config('geography', array(
'engine' => $engine,
'prefix' => $prefix,
'path' => CACHE . 'persistent' . DS,
'serialize' => ($engine === 'File'),
'duration' => $duration,
'groups' => array('geography')
));