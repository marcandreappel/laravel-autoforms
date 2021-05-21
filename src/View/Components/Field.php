<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\View\Components;

use Illuminate\View\Component;

abstract class Field extends Component
{
    public bool $isRequired = false;
}
