<?php

return array(
    'action' => '/modules/forms/submit.php',
    'forms' => array(
        'mailchimp' => array(
            'inputs_allowed'   => array( 'email' ),
            'inputs_required' => array( 'email' ),
            'message_success' => 'You was successfully subscribed!',
            'api_key' => 'ab84710546fc82519d48baa5b94a9d2a-us18',
            'list_id' => 'c5c23a0e79'
        ),
        'standard'  => array(
            'email'           => 'lorem@ipsum.dolor',
            'email_subject'   => 'Mail from site',
            'inputs_allowed'   => array( 'name', 'phone', 'email', 'subject', 'message', 'site' ),
            'inputs_required' => array( 'name', 'email', 'message' ),
            'message_success' => 'Your message was successfully sent!',
        )
    )
);