<?php

$home = get_theme_mod( 'theme_home_header_display', false );

if ( 0 != $home && isset( $home ) ) {
    Backdrop\View\display( 'section/header' );
}