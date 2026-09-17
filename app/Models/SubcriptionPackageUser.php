<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'subscription_package_id'])]

class SubcriptionPackageUser extends Model
{
    protected $table = 'subscription_package_users';

    public function subscriptionPackage(): BelongsTo
    {
        return $this->belongsTo(SubcriptionPackage::class, 'subscription_package_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
