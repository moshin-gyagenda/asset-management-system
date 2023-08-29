<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'type_id',
        'name',
        'manufacturer_id',
        'supplier_id',
        'purchase_price',
        'purchase_date',
        'serial_number',
        'barcode',
        'description',
    ];


    // Relationship with Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Manufacturer model
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    // Relationship with Supplier model
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // Relationship with Type model
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function assetRequests()
    {
        return $this->hasMany(AssetRequest::class);
    }

    // Define the relationships with AssetAssignment model
    public function assetAssignments()
    {
        return $this->hasMany(AssetAssignment::class);
    }
}
