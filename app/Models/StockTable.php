<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockTable extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'item_name',
        'unit',
        'category',
        'buying_price',
        'quantity',
        'description',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'stock_tables';

    public function stockDischarges()
    {
        return $this->hasMany(StockDischarge::class);
    }
}
