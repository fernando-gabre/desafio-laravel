<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->get();

        return view('products.index', ['products' => $products]);
    }

    public function all(){
        $products = Product::all();
        return view('admin.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateProductRequest $request)
    {
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;

        $product = Product::create($data);

        if (!$product) {

            return back()->with('error', 'Ocorreu um erro ao cadastrar produto');
        }

        return redirect()->route('products')->with('success', 'Produto cadastrado com sucesso');



    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $productId)
    {
        $categories = Category::all()->pluck('name','id');
        
        $product = Auth::user()->products()->find($productId);

        if(!$product){
            
            return back()->with('error','Produto não encontrado');
        }

        
        return view('products.edit',['product'=>$product,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateProductRequest $request)
    {
        $productId = $request->product_id;

        $product = Auth::user()->products()->find($productId);

        if(!$product){

            return back()->with('error','Produto não encontrado');
        }

        $product->fill($request->all());

        if($product->save()){

            return redirect()->route('products')->with('success','Produto Atualizado com sucesso');

        }

        return back()->with('error','Ocorreu um erro ao atualizar produto');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $productId = $request->productId;

        if (!$productId) {

            return back()->with('error', 'Produto não encontrado');

        }

        $product = Auth::user()->products()->find($productId);

        if(!$product){
            return back()->with('error','Produto não encontrado');
        }

        if(Product::destroy($product->id)){
            return redirect()->route('products')->with('success','Produto excluído com sucesso');
        }

        return back()->with('error', 'Ocorreu um erro ao deletar produto');

    }
}
