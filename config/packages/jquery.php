<?php 

/**
* Jquery 
* 
* @version 4.3.1 
* 
************************************************************************************/

return array(
  // Local Assets
  'local' => array(
    'css' => array(
      array(
        'src' => '/package/bootstrap/bootstrap-4.3.1/css/bootstrap.min.css'
      )
    ),
    'js' => array(
      array(
        'src' => '/package/bootstrap/bootstrap-4.3.1/js/bootstrap.min.js',
      )
    )
  ),
  // CDN
  'cdn' => array(
    'css' => array(
      array(
        'src' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'integrity' => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T',
        'crossorigin' => 'anonymous'
      )
    ),
    'js' => array(
      array(
        'src' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',
        'integrity' => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
        'crossorigin' => 'anonymous'
      )
    )
  )
);