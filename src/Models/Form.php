<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use MarcAndreAppel\LaravelUuids\WithUuids;

/**
 * @property string name
 * @property string id
 */
class Form extends Model
{
    use SoftDeletes, WithUuids;

    protected $table = 'autoform_forms';
    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function fields(): HasMany
    {
        return $this->hasMany(Field::class)
            ->orderBy('order_by');
    }
}
