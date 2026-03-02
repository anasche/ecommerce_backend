<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'customer.name'    => 'required|string|max:255',
            'customer.email'   => 'required|email|max:255',
            'customer.phone'   => 'nullable|string|max:50',
            'customer.address' => 'nullable|string|max:255',
            'customer.city'    => 'nullable|string|max:100',
            'customer.country' => 'nullable|string|max:100',
            'items'            => 'required|array|min:1',
            'items.*.productId'=> 'required|integer|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'total'            => 'required|numeric|min:0',
        ]);

        $order = DB::transaction(function () use ($validated) {
            $customer = $validated['customer'];

            $order = Order::create([
                'customer_name'  => $customer['name'],
                'customer_email' => $customer['email'],
                'customer_phone' => $customer['phone'] ?? null,
                'address'        => $customer['address'] ?? null,
                'city'           => $customer['city'] ?? null,
                'country'        => $customer['country'] ?? null,
                'total'          => $validated['total'],
            ]);

            foreach ($validated['items'] as $item) {
                $product = Product::findOrFail($item['productId']);
                $order->items()->create([
                    'product_id' => $product->id,
                    'quantity'   => $item['quantity'],
                    'price'      => $product->price,
                ]);
            }

            return $order;
        });

        return response()->json(['data' => ['id' => $order->id, 'total' => $order->total]], 201);
    }
}
