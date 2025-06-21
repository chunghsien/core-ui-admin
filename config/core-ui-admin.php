<?php
return [
    'use_type' => 'admin',   //暫定site跟admin
    'name' => "CoreUi React 主題",
    'slug' => 'core-ui-admin',
    'source_type' => 'local',
    'version' => '0.0.1',
    'author' => 'pinpinAura 團隊',
    'description' => 'pinpin-aura後台管理',
    //'is_active' => true,
    'installed_at' => now(),
    'setings' => [
        'layout' => 'core-ui-admin::app',
    ],
];
