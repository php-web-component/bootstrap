<?php namespace PWC\Component\Bootstrap;

class Row extends \PWC\Component\Html\Div
{
    protected $_attributes = [
        'class' => [
            'row'
        ]
    ];

    use \PWC\BuilderTrait;
}
