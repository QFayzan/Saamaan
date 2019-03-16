<?php

namespace App\Http\Controllers;

use App\Order_Category;
use Illuminate\Http\Request;

class OrderCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            $categories = Order_Category::all();
            return view('categories.index')->with(compact('categories'));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('categories.create');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'price_rate' => 'required',
                'basic_fee' => 'required',
            ]);
            Order_Category::addUpdateOrderCategory($data);
            flash('created successfully');
            return back();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function show(Order_Category $order_category)
    {
        //
    }

    public function edit(Order_Category $order_category)
    {
        return view('categories.edit', compact('order_category'));
    }

    public function update(Request $request, Order_Category $order_category)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'price_rate' => 'required',
                'basic_fee' => 'required',
            ]);
            Order_Category::addUpdateOrderCategory($data, $order_category);

            flash('Updated successfully');

            return back();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function destroy(Order_Category $order_category)
    {
        try {
            $order_category->delete();
            flash('Deleted');
            return back();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
