<?php namespace PWC\Component;

class Bootstrap extends \PWC\Component
{
    public function render(): string
    {
        return (string) \PWC\Component\Html::build(
            \PWC\Component\Html\Head::build(
                \PWC\Component\Html\Meta::build()->charset('utf-8'),
                \PWC\Component\Html\Meta::build()->httpEquiv('X-UA-Compatible')->content('IE=edge'),
                \PWC\Component\Html\Meta::build()->name('viewport')->content('width=device-width, initial-scale=1, shrink-to-fit=no'),
                \PWC\Component\Html\Style::build([
                    \PWC\AssetsManager\Config::instance()->get('dir') . 'php-web-component/bootstrap/css/bootstrap.min.css'
                ]),
                \PWC\Component\Html\Title::build(\PWC\Component\Text::build('Bootstrap'))
            ),
            \PWC\Component\Html\Body::build(
                parent::render(),
                \PWC\Component\JQuery::build(),
                \PWC\Component\Html\Script::build([
                    \PWC\AssetsManager\Config::instance()->get('dir') . 'php-web-component/bootstrap/js/bootstrap.min.js'
                ])
            )
        );
    }

    use \PWC\BuilderTrait;
}
