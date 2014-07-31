/**
 * KyleBreckenridge.com
 * http://www.kylebreckenridge.com
 *
 * Copyright (c) 2014 Kyle Breckenridge
 * Licensed under the GPLv2+ license.
 */

( function( $ ) {
    $('a').bind('touchend', function(e){
        e.preventDefault();
        link = $(this).attr('href');
        target = $(this).attr('target');
        if(target){
            window.open(link,target);
        } else {
            window.open(link);
        }
    })
} )( jQuery );
