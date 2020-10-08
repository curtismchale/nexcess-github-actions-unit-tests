<?php

namespace Acme;

class Loader {
    public static function init() {
        define( 'EXAMPLE', 'initialized' );

        add_action('the_title', function () {
            return 'EXAMPLE TITLE MOD';
        });
    }
}
