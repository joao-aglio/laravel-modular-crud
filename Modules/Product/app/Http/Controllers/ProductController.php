<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Product\Http\Requests\UpdateProductRequest;
use Modules\Product\Interfaces\Controllers\ProductControllerInterface;
use Modules\Product\Models\Product;

class ProductController extends Controller implements ProductControllerInterface
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Collection
    {
        $products = Product::all();

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request) : Product
    {
        $product = new Product($request->only('name', 'description','price','status','stock_quantity'));

        $product->save();

        return $product;
    }

    /**
     * Show the specified resource.
     */
    public function show(Product $product) : Product
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product) : Product
    {
        $product->update($request->only('name','description','price','status','stock_quantity'));

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product) : Product
    {
        $product->delete();

        return $product;
        
    }
}
