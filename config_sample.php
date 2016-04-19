<?php

return [

    // Webhook message receive bot url
    'url_message_add' => 'https://mysite.com/bitrix24bot/',

    // Webhook install bot url
    'url_welcome_message' => 'https://mysite.com/bitrix24bot/',

    // Webhook uninstall bot url
    'url_bot_delete' => 'https://mysite.com/bitrix24bot/',

    // Bot alias
    'alias' => 'mybotexample',

    // Type B - Bot, H - human
    'type' => 'B',

    // Bot info
    'data' => [

        // First name
        'NAME'              => 'Bot',

        // Last name
        'LAST_NAME'         => '',

        // Color for mobile
        'COLOR'             => 'AQUA',

        // Email
        'EMAIL'             => 'admin@email.com',

        // Bithday
        'PERSONAL_BIRTHDAY' => '2016-02-01',

        // Work position
        'WORK_POSITION'     => 'description',

        // Website url
        'PERSONAL_WWW'      => 'https://site.com',

        // Gender
        'PERSONAL_GENDER'   => "M",

        // Bot avatar
        'PERSONAL_PHOTO'    => base64_encode(file_get_contents(__DIR__.'/logo.png')),
    ]
];