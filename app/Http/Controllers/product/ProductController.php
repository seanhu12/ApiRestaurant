<?php

namespace App\Http\Controllers\product;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\StoreProjectRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\product;

class ProductController
{

    public function index()
    {
        return product::orderBy('code')->get();
    }

    public function store(StoreProductRequest $request)
    {
        return Product::create($request->all());
    }


    public function show(Product $product)
    {
        return $product;
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return 'Eliminado exitosamente';
    }
}
