<?php

namespace Sfndesign;

class PluginBase {
    public static function init() {
        define( 'EXAMPLE', 'initialized' );

        add_action('the_title', function () {
            return 'EXAMPLE TITLE MOD';
        });
    }
}
