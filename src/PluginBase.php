<?php

namespace Sfndesign;

class \Sfndesign\PluginBase {
    public static function init() {
        define( 'EXAMPLE', 'initialized' );

        add_action('the_title', function () {
            return 'EXAMPLE TITLE MOD';
        });
    }
}
