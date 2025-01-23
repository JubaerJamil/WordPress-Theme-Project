<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'My Theme Option',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Basic Theme Option',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'The help text of the field.',
    ),

    array(
      'id'    => 'opt-upload',
      'type'  => 'upload',
      'title' => 'Upload',
    ),

    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
      'label' => 'The label text of the switcher.',
    ),

    array(
      'id'      => 'opt-color',
      'type'    => 'color',
      'title'   => 'Color',
      'default' => '#3498db',
    ),

    array(
      'id'    => 'opt-checkbox',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'The label text of the checkbox.',
    ),

    array(
      'id'      => 'opt-radio',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'default' => 'yes',
    ),

    array(
      'id'          => 'opt-select',
      'type'        => 'select',
      'title'       => 'Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-image-select',
      'type'    => 'image_select',
      'title'   => 'Image Select',
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'opt-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default' => 'opt-1',
    ),

    array(
      'id'    => 'opt-background',
      'type'  => 'background',
      'title' => 'Background',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'A <strong>notice</strong> field with <strong>success</strong> style.',
    ),

    array(
      'id'    => 'opt-icon',
      'type'  => 'icon',
      'title' => 'Icon',
    ),

    array(
      'id'    => 'opt-alt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'         => 'opt-alt-textarea',
      'type'       => 'textarea',
      'title'      => 'Textarea',
      'subtitle'   => 'A textarea with shortcoder.',
      'shortcoder' => 'csf_demo_shortcodes',
    ),

  )
) );



//
// Others
//
CSF::createSection( $prefix, array(
  'title'       => 'Others',
  'icon'        => 'fas fa-bolt',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/fields?id=others" target="_blank">Others</a>',
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'This is a heading field',
    ),

    array(
      'type'    => 'subheading',
      'content' => 'This is a subheading field',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'success',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'info',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'warning',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'danger',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'warning',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'danger',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a <strong>content</strong> field. You can write some contents here.',
    ),

  )
) );
