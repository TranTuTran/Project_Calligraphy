<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function index(Request $request)
    {
        $query = Category::orderBy('id','desc');
        if($request->has('q'))
        {
            $query->where('name','LIKE',"%{request->get('q')}%")->orWhere('description','LIKE',"%{request->get('q')}%");
        }
        $categories = $query->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        if($request->hasFile('thumbnail'))
        {
            $image = $request->file('thumbnail');
            $imageName = time().'.'.$image->getClientOriginalExtension(); //getClientOriginalExtension(): lấy phần mở rộng của tệp tin vd: jpg, png, pdf, docx
            $thumbnailPath = $image->storeAs('categories',$imageName, 'public');
            $category->thumbnail = $thumbnailPath;
        }
        $category->save();
        return redirect()->route('admin.category.index')->with('success','Category created successfully!');
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        if($request->hasFile('thumbnail'))
        {
            $image = $request->file('thumbnail');
            $imageName = time(). '.'. $image->getClientOriginalExtension();
            $thumbnailPath = $image->storeAs('categories', $imageName, 'public');
            $category->thumbnail = $thumbnailPath;
        }
        $category->save();
        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully!');
    }

    public function hideCategory(string $id)
    {
        $category = Category::findOrFail($id);
        $category->hideCategory();
        return redirect()->route('admin.category.index')->with('success', 'Category hidden successfully!');
    }

    public function showCategory(string $id)
    {
        $category = Category::findOrFail($id);
        $category->showCategory();
        return redirect()->route('admin.category.index')->with('success', 'Category shown successfully!');
    }
}
