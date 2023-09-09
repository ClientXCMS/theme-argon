<?php

use function DI\add;
use function DI\get;

return [
    'class' => \Themes\Argon\ArgonTheme::class,
    \ClientX\Twig\FormExtension::class => \DI\autowire()->constructorParameter('classGroup', 'mt-2'),
    //'bootstrapv5' => true,
        'theme.pagination' => [
        'prev_message' => '&laquo;',
        'next_message' => '&raquo;',
    ],
    'theme_primary' => \ClientX\setting("theme_primary"),
    'argon_theme' => \ClientX\setting("argon_theme", "none"),
    'argon_default' => \ClientX\setting("argon_default", "light"),
    'admin.settings' => add(get(\Themes\Argon\ArgonSettings::class))
];
