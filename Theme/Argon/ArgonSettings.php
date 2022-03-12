<?php
namespace Themes\Argon;

use App\Admin\Settings\SettingsInterface;
use ClientX\Renderer\RendererInterface;
use ClientX\Renderer\TwigRenderer;
use ClientX\Validator;

class ArgonSettings implements SettingsInterface {

    public function name(): string
    {
        return "argon";
    }

    public function title(): string
    {
        return "Argon Theme";
    }

    public function icon(): string
    {
        return "fas fa-fill";
    }

    public function render(RendererInterface $renderer)
    {

            return $renderer->render("setting/argon", ['themes' => [
                'none' => 'User choose between Dark and light',
                'dark' => "Dark only",
                'light' => "Light only"
            ], 'default' => [
                'dark' => "Dark",
                'light' => "Light"
            ]]);

        return '';
    }

    public function validate(array $params): Validator
    {
        return (new Validator($params))->notEmpty('argon_theme');
    }
}