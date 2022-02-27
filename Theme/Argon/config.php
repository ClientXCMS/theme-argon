<?php

$return = [
    'class' => \Themes\Argon\ArgonTheme::class,
];

return [
    'class' => \Themes\Argon\ArgonTheme::class,
    \ClientX\Twig\FormExtension::class => \DI\autowire()->constructorParameter('classGroup', \DI\factory(function(\Psr\Container\ContainerInterface  $container){
        $adminPrefix = $container->get('admin.prefix');
        if (\ClientX\Helpers\Str::startsWith(\ClientX\request()->getUri()->getPath(), $adminPrefix)){
            return 'form-group';
        }
        return 'mt-2';
    })),

    'theme_primary' => \ClientX\setting("theme_primary")
];