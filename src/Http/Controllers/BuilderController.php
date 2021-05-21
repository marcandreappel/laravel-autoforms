<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Controllers;

use Illuminate\Contracts\View\View;

class BuilderController
{
    /**
     * List all auto-forms
     */
    public function index(): View
    {
        return view('laravelautoforms::livewire.auto-form.forms');
    }

    /**
     * Create a new form
     */
    public function create()
    {

    }

    /**
     * Store the form data
     */
    public function store()
    {

    }

    /**
     * Edit an existing form
     */
    public function edit()
    {

    }

    /**
     * Update the form data
     */
    public function update()
    {

    }

    /**
     * Delete a form
     */
    public function delete()
    {

    }
}
