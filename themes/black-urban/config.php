<?php
/**
 * Don't change this is file
 */
return array(
            "sidebar"   => 'right',
            'layout'    =>  array(           // layouts styles
            			'header'  => 140,    // header height
                        'width'   => 1024,   // container width
                        'sidebar' => 240,    // sidebar width
                        'extra'   => 240,    // extrabar  width
                        'home'    => 'default',
                        'archive' => 'default',
                        'search'  => 'default',
                        'index'   => 'default',
                                 ),
            "title"     => array(
                        "pos" => 'center'
                    ),
            "content"   => array(            // content
                        "author" => 0        // - link to author page
                        ),
            "footer"    => array(            // footer text
                        "text" => null
                    ),
            "fonts"     => array(
                        'header' => 1,
                        'body'   => 0,
                    ),
            "menu"     => array(             // menu with links
                        "flag" => 1,         // - enable/disable
                        "home" => false,     // - link to home page
                        "rss"  => false,     // - link to RSS
                        "search" => true,    // - search form
                        "pages"      => array('depth'=>1),
                        "categories" => array('depth'=>1, 'group'=>1)
                        ),
            "slideshow" => array(
                        "flag" => 1,         // - enable/disable
                        "layout" => 'in',
                        "id" => null,
                        "height" => 200,
                        "onpage" => false,    // show slideshow on page
                        "onsingle" => false   // show slideshow on single post
                    ),
            "images"   => array(
                        "body" => array('src'=>'', 'pos'=>'left top', 'repeat'=>'repeat', 'fixed'=>false),
                        "wrap" => array('src'=>'themes/black-urban/header.jpg','pos'=>'center top', 'fixed'=>false),
                        "sidebar" => array('src'=>'themes/black-urban/sidebar.jpg','pos'=>'right bottom'),
                        "extrabar" => array('src'=>'','pos'=>'right bottom'),
                        "footer"  => array('src'=>'themes/black-urban/footer.jpg','pos'=>'left bottom'),
                    ),
            "opacity"   => 'dark',
            "shadow"    => false,             // create shadow
            "color"   => array(
                        "bg"      => '#000',
                        "bg2"     => '#333',
                        "opacity" => '#000',
                        "title"   => '#fff',
                        "title2"  => '#ccc',
                        "text"    => '#fff',
                        "text2"   => '#ccc',
                        "border"  => '#555',
                        "border2" => '#999',

                        "header1"   => '#ff6600',
                        "header2"   => '#ff7711',
                        "header3"   => '#ff9933',
                    ),
            );