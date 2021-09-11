<?php

namespace Themes\Argon;

use ClientX\Theme\ThemeInterface;

class ArgonTheme implements ThemeInterface
{

    const DEFINITIONS = __DIR__ . '/config.php';

    public function getName(): string
    {
        return "Argon";
    }

    public function getVersion(): ?string
    {
        return "1.0";
    }

    public function getAuthor(): ?string
    {
        return "MartinDev";
    }

    public function getScreenshots(): array
    {
        return [];
    }

    public function getViewsPath(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '/Views';
    }

    public function getAssetsPath(): string
    {
        return '/Argon/assets';
    }

    public function getPluginsPath(): ?string
    {
        return '/Argon/assets/vendor';
    }

    public function getTemplatesPath(): string
    {
        return __DIR__;
    }

    public function getComponentPath(): ?string
    {
        return null;
    }

    public function getContacts(): ?array
    {
        return [
            'discord' => 'clientxcms.com/discord',
            'email' => 'contact@clientxcms.com',
            'twitter' => "@ClientXCMS",
        ];
    }
}
