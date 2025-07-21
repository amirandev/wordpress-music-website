<?php

    function title($use_echo = 1){
        $site_name = get_bloginfo('name') . ' - ' . get_bloginfo('description');
        $title = get_the_title() == 'Home' ? $site_name : get_the_title();

        if($use_echo == 0){
            return $title;
        }

        echo $title;
    }
