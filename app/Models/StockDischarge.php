<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockDischarge extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'quantity_issued',
        'section',
        'description',
        'issued_by',
        'stock_table_id',
        'res_section_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'stock_discharges';

    public function stockTable()
    {
        return $this->belongsTo(StockTable::class);
    }

    public function resSection()
    {
        return $this->belongsTo(ResSection::class);
    }
}
