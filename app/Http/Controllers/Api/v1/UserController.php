<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


/**
 * @OA\Info(
 *     title="API de Produtos",
 *     version="1.0.0",
 *     description="Documentação da API para gerenciamento de produtos. (Obs nunca usei isso estou testando)"
 * )
 */

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "status" => 200,
            "data" => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::where('id',$id)->first();

        if(!$user){

            return response()->json([
                "status" => 404,
                "message" => "Usuário não encontrado" 
            ]);
        }

        return response()->json([
            "status" => 200,
            "data" => $user
        ]);


    }
 /**
     * @OA\Get(
     *     path="/api/usuario/{userId}/produtos",
     *     summary="Obter produtos de um usuário específico",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="userId",
     *         in="path",
     *         required=true,
     *         description="ID do usuário para buscar os produtos",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detalhes do usuário e seus produtos",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="status",
     *                 type="integer",
     *                 description="Código de status HTTP"
     *             ),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 ref="#/components/schemas/UserComProduto"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuário não encontrado",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="status",
     *                 type="integer",
     *                 description="Código de status HTTP"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 description="Mensagem de erro"
     *             )
     *         )
     *     )
     * )
     */
    public function userProducts(int $userId){

        $user = User::where('id', $userId)->with(['products.category'])->first();


        if (!$user) {
            return response()->json([
                "status" => 404,
                "message" => "User not found"
            ], 404);
        }

        return response()->json([
            "status" => 200,
            "data" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
