<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'creative_redux';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Creative Theme Options', 'creative' ),
        'customizer'           => false,
    );

    Redux::set_args( $opt_name, $args );

    Redux::set_section( $opt_name, array(
        'title'  => esc_html__( 'Basic Field', 'your-textdomain-here' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Example Text', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Example description.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
            array(
                'id'       => 'opt-textarea',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Example Textarea', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Example description.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
            ), 
            array(
                'id'       => 'opt-color',
                'type'     => 'color',
                'title'    => esc_html__('About Title Color', 'your-textdomain-here'), 
                'subtitle' => esc_html__('Pick a background color for the theme (default: #fff).', 'your-textdomain-here'),
                'default'  => '#FFFFFF',
                'validate' => 'color',
            ), 
            array(
                    'id'       => 'opt-media',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => esc_html__('Media w/ URL', 'your-textdomain-here'),
                    'desc'     => esc_html__('Basic media uploader with disabled URL input field.', 'your-textdomain-here'),
                    'subtitle' => esc_html__('Upload any media using the WordPress native uploader', 'your-textdomain-here'),
                    'default'  => array(
                        'url'=>''
                    )
                    )
    ) ));

    