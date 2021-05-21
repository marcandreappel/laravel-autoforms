<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Label extends Model
{
    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class);
    }
}
