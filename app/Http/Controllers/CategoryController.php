<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        if (!$categories) {
            return back()->with('error', 'Nenhuma categoria encontrada');
        }
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCategoryRequest $request)
    {
        $category = Category::create($request->all());

        if ($category)

            return redirect()->route('categories')->with('success', 'Categoria cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {


        $category = Category::find($id);

        if (!$category) {
            return back()->with('error', 'Id do produto não informado');
        }

        return view('categories.edit', ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCategoryRequest $request)
    {

        $category = Category::find($request->category_id);

        if (!$category) {

            return back()->with('error', 'Categoria não encontrada');

        }

        $category->name = $request->name;

        try{
            if ($category->save())
            return redirect()->route('categories')->with('success', 'Categoria atualizada com sucesso');

        }catch(\Exception $e){
            dd($e->getMessage());
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $categoryId = $request->categoryId;

        
        if(!$categoryId){
            
            return back()->with('error','Categoria não encontrada');
            
        }

        $category = Category::find($categoryId);
        
        if(!$category){
            return back()->with('error','Categoria não encontrada');
        }

        if ($category->products()->count() > 0) {
            return back()->with('error', 'Não é possível deletar uma categoria que possui produtos cadastrados');
        }
        
        if(Category::destroy($categoryId)){
            return redirect()->route('categories')->with('success','Categoria deletada com sucesso');
            
        }
        
        return back()->with('error','Ocorreu um erro ao deletar categoria');

    }
}
