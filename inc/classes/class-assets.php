<?php
/**
 * Enqueue the Theme.
 * 
 * @package Aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {

        //wp_die('Eugene');
                
                //load class.

                //Assets::get_instance(); 

                $this->setup_hooks();
        }
        
            protected function setup_hooks() {
                /**
                 * Actions.
                 */
        
        }
}


?>