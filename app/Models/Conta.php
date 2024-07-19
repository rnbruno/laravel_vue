<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Conta extends Model
{
    use HasFactory;

    protected $table = 'conta';

    // Se a tabela não usa as colunas timestamps (created_at e updated_at)
    public $timestamps = false;

    protected $fillable=['conta_id','conta'];

    protected $primaryKey = 'conta_id';

    protected $attributes = [
        'conta_id' => 'conta_id',
        'conta' => 'conta',
        'inativo' => 'inativo',
    ];

    public static function getContas()
    {
        $query = DB::table('conta')
            ->get();

        return $query;
    }
}
