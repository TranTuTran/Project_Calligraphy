<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\CreateLevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController
{
    public function index()
    {
        $levels = Level::orderBy('id','desc')->get();
        return view('admin.level.index', compact('levels'));
    }

    public function create()
    {
        return view('admin.level.create');
    }

    public function store(CreateLevelRequest $request)
    {
        $level = new Level();
        $level->name = $request->get('name');
        $level->description = $request->get('description');
        $level->save();
        return redirect()->route('admin.level.index')->with('success', 'Level created successfully');
    }

    public function edit(string $id)
    {
        $level = Level::findOrFail($id);
        return view('admin.level.edit', compact('level'));
    }

    public function update(Request $request, string $id)
    {
        $level = Level::findOrFail($id);
        $level->name = $request->get('name');
        $level->description = $request->get('description');
        $level->save();
        return redirect()->route('admin.level.index')->with('success', 'Level updated successfully');
    }


}
