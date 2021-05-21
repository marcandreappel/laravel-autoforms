<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Option extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name'  => 'order_by',
        'sort_when_creating' => true,
    ];
}
