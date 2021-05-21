<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Models;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use MarcAndreAppel\LaravelUuids\WithUuids;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * @property string validations
 * @property string parameters
 * @property string type
 * @property string id
 * @property string form_id
 */
class Field extends Model implements Sortable
{
    use SoftDeletes, WithUuids, SortableTrait;

    public $sortable = [
        'order_column_name'  => 'order_by',
        'sort_when_creating' => true,
    ];

    protected $table = 'autoform_fields';
    protected $casts = [
        'parameters' => 'array',
    ];

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }

    public function label(): HasOne
    {
        return $this->hasOne(Label::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }

    public function validation(): string
    {
        return $this->validations;
    }

    public function render(): View
    {
        $parameters = json_decode($this->parameters, true);

        return view('laravelautoforms::components.'.$this->type, compact('parameters'));
    }

}
