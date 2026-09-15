<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable (['cover','title','price','description','language','publisher','writer','release_date',
'page_of_book','book_category_id'])]

class BookCategory extends Model {
    public function bookCategory(): BelongsTo
    {
        return $this->belongsTo(Bookcategory::class);
    }
    public function checkoutBooks(): HasMany
    {
        return $this->hasMany(CheckoutBook::class);
    }
    public function subcriptionPackageBooks(): HasMany
    {
        return $this->hasMany(subcriptionPackageBooks::class);
    }
}
