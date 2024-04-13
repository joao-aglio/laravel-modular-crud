<?php

namespace Modules\Product\Interfaces\Controllers;

use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Product\Http\Requests\UpdateProductRequest;
use Modules\Product\Models\Product;

interface ProductControllerInterface {

    public function index();

    public function store(CreateProductRequest $request);

    public function show(Product $product);

    public function update(UpdateProductRequest $request, Product $product);

    public function destroy(Product $product);
}

