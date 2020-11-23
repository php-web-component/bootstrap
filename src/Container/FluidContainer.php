<?php namespace PWC\Component\Bootstrap\Container;

use PWC\BuilderTrait;
use PWC\Component\Bootstrap\Container;

class FluidContainer extends Container
{
    protected $_ID = 'pwc-bootstrap-container-fluid';

    protected $_attributes = [
        'class' => [
            'container-fluid'
        ]
    ];

    use BuilderTrait;
}
