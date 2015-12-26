<?php 
Cache::config('geography', array(
'engine' => $engine,
'prefix' => $prefix . 'acl',
'path' => CACHE . 'persistent' . DS,
'serialize' => ($engine === 'File'),
'duration' => $duration,
'groups' => array('geography')
));