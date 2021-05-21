<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use MarcAndreAppel\LaravelAutoForms\Models\Form;

class FormController
{
    public function __invoke(Request $request): View
    {
        $form = Form::with('fields');

        return view('laravelautoforms::render', compact('request', 'form'));
    }
}
