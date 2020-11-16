<?php namespace PWC\Component\Bootstrap\Container;

class FluidContainer extends \PWC\Component\Bootstrap\Container
{
    protected $_attributes = [
        'class' => [
            'container-fluid'
        ]
    ];

    use \PWC\BuilderTrait;
}
