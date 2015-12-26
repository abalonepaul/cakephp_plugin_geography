<?php 
Cache::config('geography', array(
'engine' => Configure::read('Application.cacheEngine'),
'prefix' => Configure::read('Application.cachePrefix'),
'path' => CACHE . 'persistent' . DS,
'serialize' => (Configure::read('Application.cacheEngine') === 'File'),
'duration' => Configure::read('Application.cacheDuration'),
'groups' => array('geography')
));