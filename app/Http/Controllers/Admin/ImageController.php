<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UploadImageRequest;
use Illuminate\Http\Request;

class ImageController
{
    public function upload(UploadImageRequest $request)
    {
        if ($request->hasFile('upload')) {
            $image = $request->file('upload');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Đặt tên file
            $imagePath = $image->storeAs('lessons', $imageName, 'public');

            return response()->json([
                'url' => config('app.url').'/storage/'.$imagePath
            ]);
        }
        
        return response()->json(['error' => 'Invalid file upload'], 400);
    }
}