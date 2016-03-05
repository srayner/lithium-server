<?php
return array(
    
    // Modules to load in the application.
    'modules' => array(
        'Application',
     //   'ZfcBase',
     //   'ZfcUser',
     //   'TwbBundle',
    ),

    // These are various options for the listeners attached to the ModuleManager
    'module_listener_options' => array(
        // This should be an array of paths in which modules reside.
        'module_paths' => array(
            './module',
            './vendor',
        ),

        // An array of paths from which to glob configuration files after
        // modules are loaded. These effectively override configuration
        // provided by modules themselves. Paths may use GLOB_BRACE notation.
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
