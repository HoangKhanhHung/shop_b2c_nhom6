<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $list = Product::orderBy('id', 'desc')->paginate(10);
        return view('be.product.index', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        $categories = \App\Models\Category::all();
        return view('be.product.add',compact('categories'));
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $name = $request->name;
        try {
            Product::create([
                'name' => $name,
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Add failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.product.list')->with('success', 'Add successfully');
    }


    public function edit($id)
    {
        // TODO: Implement edit() method.
        $category = Product::find($id);//lấy ra product có id là $id truyền vào
        return view('be.product.edit', compact('product'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $name = $request->name;
        try {
            Product::where('id', $id)->update([
                'name' => $name
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Update failed");
        }
        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.product.list')->with('success', 'Update successfully');
    }


    public function delete($id)
    {
        // TODO: Implement delete() method.
        try {
            $category = Product::find($id);
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', "Delete failed");
        }
        return redirect()->back()->with('success', "Delete successfully");
    }

}
