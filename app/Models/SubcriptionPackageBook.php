<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


#[Fillable (['subcription_package_id', 'book_id'])]

class SubcriptionPackageBook extends Model
{
    public function subcriptionPackage(): BelongsTo
    {
        return $this->belongsTo(SubcriptionPackage::class);
    }
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
