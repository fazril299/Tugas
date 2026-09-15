<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable (['subcription_package_id', 'book_id'])]

class SubcriptionPackage extends Model
{
    public function subcriptionPackage(): BelongsTo
    {
        return $this->belongsTo(SubcriptionPackage::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
