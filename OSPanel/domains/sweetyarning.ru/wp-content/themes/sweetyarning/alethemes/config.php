<?php
function aletheme_metaboxes($meta_boxes)
{
//metaboxes for contacts
    //--------------------------------------------------------------------
    $meta_boxes = array();
    $prefix = "sw_yn_";
    $meta_boxes[] = array(
        'id' => 'metabox_template_contacts_headlines',
        'title' => 'Headlines',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('template-contacts.php'),), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First Headline',
                'desc' => 'Insert the text',
                'id' => $prefix . 'headline1',
                'type' => 'text',
            ),
            array(
                'name' => 'Second Headline',
                'desc' => 'Insert the text',
                'id' => $prefix . 'headline2',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id' => 'metabox_template_contacts_first_headline_fields',
        'title' => 'First Headline Fields',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('template-contacts.php'),), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'fh_field1',
                'type' => 'text',
            ),
            array(
                'name' => 'Second field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'fh_field2',
                'type' => 'text',
            ),
            array(
                'name' => 'Third field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'fh_field3',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id' => 'metabox_template_contacts_second_headline_fields',
        'title' => 'Second Headline Fields',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('template-contacts.php'),), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'sh_field1',
                'type' => 'text',
            ),
            array(
                'name' => 'Second field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'sh_field2',
                'type' => 'text',
            ),
            array(
                'name' => 'Third field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'sh_field3',
                'type' => 'text',
            ),
            array(
                'name' => 'Forth field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'sh_field4',
                'type' => 'text',
            ),
            array(
                'name' => 'Fifth field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'sh_field5',
                'type' => 'text',
            ),
        )
    );
//    meta boxes for payment and delivery
//    -------------------------------------------------
    $meta_boxes[] = array(
        'id' => 'metabox_template_payment_and_delivery_headlines',
        'title' => 'Second Headline Fields',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('template-payment-and-delivery.php'),),
        'fields' => array(
            array(
                'name' => 'headline1',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_headline1',
                'type' => 'text',
            ),
            array(
                'name' => 'headline2',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_headline2',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id' => 'metabox_template_payment_and_delivery_first_headline_fields',
        'title' => 'First Headline Fields',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('template-payment-and-delivery.php'),), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_fh_field1',
                'type' => 'text',
            ),
            array(
                'name' => 'Second field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_fh_field2',
                'type' => 'text',
            ),
            array(
                'name' => 'Third field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_fh_field3',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id' => 'metabox_template_payment_and_delivery_second_headline_fields',
        'title' => 'Second Headline Fields',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('template-payment-and-delivery.php'),), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_sh_field1',
                'type' => 'text',
            ),
            array(
                'name' => 'Second field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_sh_field2',
                'type' => 'text',
            ),
            array(
                'name' => 'Third field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_sh_field3',
                'type' => 'text',
            ),
            array(
                'name' => 'Forth field',
                'desc' => 'Insert the text',
                'id' => $prefix . 'pd_sh_field4',
                'type' => 'text',
            ),
        )
    );
//    front page
    //------------------------------------------------------------------------
    $meta_boxes[] = array(
        'id' => 'metabox_front page',
        'title' => 'HeadlinesBliad',
        'pages' => array('page',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'show_on' => array('key' => 'page-template', 'value' => array('woocommerce.php'),), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First Headline',
                'desc' => 'Insert the text',
                'id' => $prefix . 'first_page_image',
                'type' => 'text',
            ),
        )
    );
    return $meta_boxes;
}