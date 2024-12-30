<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\Level;
use App\Models\National;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->with(['profile'])->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nationals = National::all();
        $levels = Level::all();
        return view('admin.user.create', compact('nationals', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name') ?? 'NO  NAME';
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        if(!empty($user)){
            $avatarPath = '';
            if($request->hasFile('avatar'))
            {
                $image = $request->file('avatar');
                $imageName = time() . '.' . $image->getClientOriginalExtension(); // Đặt tên file
                $avatarPath = $image->storeAs('avatars', $imageName, 'public');
            }

            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->display_name = $user->name;
            $profile->phone_number = $request->get('phone_number');
            $profile->avatar = $avatarPath?? ''; //Toán tử ?? kiểm tra xem biến ở bên trái ($avatarPath) có tồn tại và không phải là null hay không.
            $profile->level_id = $request->get('level_id');
            $profile->national_id = $request->get('national_id');
            $profile->save();
        }
        return redirect()->route('admin.user.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $nationals = National::all();
        $levels = Level::all();
        return view('admin.user.edit', compact('user', 'nationals', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->get('name') ?? 'NO NAME';
        $user->email = $request->get('email');
        $user->save();
        if (!empty($user)) {
            $avatarPath = $user->profile->avatar;
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $imageName = time() . '.' . $image->getClientOriginalExtension(); // Đặt tên file
                $avatarPath = $image->storeAs('avatars', $imageName, 'public');
            }
            $profile = $user->profile;
            $profile->display_name = $user->name;
            $profile->address = $request->get('address');
            $profile->phone_number = $request->get('phone_number');
            $profile->avatar = $avatarPath ?? '';
            $profile->level_id = $request->get('level_id');
            $profile->national_id = $request->get('national_id');
            $profile->save();
        }
        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }

    public function blockUser(string $id)
    {
        $user = User::findOrFail($id);
        $user->blockUser();
        return redirect()->route('admin.user.index')->with('success', 'User blocked successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function unblockUser(string $id)
    {
        $user = User::findOrFail($id);
        $user->unblockUser();
        return redirect()->route('admin.user.index')->with('success', 'User unblocked successfully.');
    }

}
