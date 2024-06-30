<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     title="Product",
 *     required={"name", "value", "category_id", "user_id"},
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Nome do produto"
 *     ),
 *     @OA\Property(
 *         property="value",
 *         type="number",
 *         format="float",
 *         description="Valor do produto"
 *     ),
 *     @OA\Property(
 *         property="category_id",
 *         type="integer",
 *         description="ID da categoria do produto"
 *     ),
 *     @OA\Property(
 *         property="user_id",
 *         type="integer",
 *         description="ID do usuário que criou o produto"
 *     )
 * )
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'category_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
