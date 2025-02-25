<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // Lấy danh sách sản phẩm
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Thêm sản phẩm mới
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Tạo sản phẩm mới
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json($product, 201);
    }
}