<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetAssignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'asset_id',
        'user_id',
        'start_date',
        'end_date',
        'assignment_date',
    ];

    // Define the relationships with Asset and User models
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
