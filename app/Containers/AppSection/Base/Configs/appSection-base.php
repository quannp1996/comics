<?php

return [

    /*
    |--------------------------------------------------------------------------
    | AppSection Section Base Container
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    'admin' => [
        'css' => [
            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
            'admin/plugins/fontawesome-free/css/all.min.css',
            'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
            'admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
            'admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
            'admin/plugins/jqvmap/jqvmap.min.css',
            'admin/dist/css/adminlte.min.css',
            'admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
            'admin/plugins/daterangepicker/daterangepicker.css',
            'admin/plugins/summernote/summernote-bs4.min.css',
        ],
       'js' => [
           'plugins/jquery/jquery.min.js',
           'plugins/jquery-ui/jquery-ui.min.js',
           'plugins/bootstrap/js/bootstrap.bundle.min.js',
           /**
            * Chart JS Có thể bỏ sau
            */
           'plugins/chart.js/Chart.min.js',
           'plugins/jqvmap/jquery.vmap.min.js',
           'plugins/jqvmap/maps/jquery.vmap.usa.js',
           'plugins/jquery-knob/jquery.knob.min.js',
           'plugins/moment/moment.min.js',
           'plugins/daterangepicker/daterangepicker.js',
           'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
           'plugins/summernote/summernote-bs4.min.js',
           'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
           'pdist/js/adminlte.js',
       ] 
    ],
    'web' => [

    ]
];
 