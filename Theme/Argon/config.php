<?php

use function DI\add;
use function DI\get;

return [
    'class' => \Themes\Argon\ArgonTheme::class,
    \ClientX\Twig\FormExtension::class => \DI\autowire()->constructorParameter('classGroup', \DI\factory(function(\Psr\Container\ContainerInterface  $container){
        $adminPrefix = $container->get('admin.prefix');
        if (\ClientX\Helpers\Str::startsWith(\ClientX\request()->getUri()->getPath(), $adminPrefix)){
            return 'form-group';
        }
        return 'mt-2';
    })),

    'theme_primary' => \ClientX\setting("theme_primary"),
    'argon_theme' => \ClientX\setting("argon_theme", "none"),
    'argon_default' => \ClientX\setting("argon_default", "light"),
    'admin.settings' => add(get(\Themes\Argon\ArgonSettings::class))
];