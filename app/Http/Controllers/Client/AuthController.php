<?php

namespace App\Http\Controllers\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt([
            'email'=>$request->get('email'), 
            'password'=>$request->get('password'),
            'type'=>User::TYPE_STUDENT,
            ]))
        {
            $request->session()->regenerate();//Session ID hiện tại sẽ bị hủy. => Một Session ID mới được gán. => Dữ liệu trong session (nếu có) vẫn được giữ nguyên.
            return response()->json([
                'success' => true,
                'message' => 'Logged in successfully',
                'user' => Auth::user(),
                'token' => Auth::user()->createToken('student-api')->plainTextToken(), //Tạo và trả về một token API dành riêng cho người dùng này => Dùng phương thức createToken('student-api') (của Laravel Sanctum).=>plainTextToken: Trả về phiên bản plain-text của token để gửi cho người dùng.
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function logout(Request $request)
    {
        $user = Auth::user(); //Lấy thông tin của người dùng hiện đang được xác thực
        $user->tokens()->delete(); //Xóa tất cả các token xác thực của người dùng hiện tại, thường dùng Laravel Sanctum để quản lý token.
        $user = Auth::logout(); //Đăng xuất người dùng hiện tại khỏi phiên làm việc.
        $request->session()->invalidate(); //Hủy bỏ toàn bộ session hiện tại của người dùng.Ngăn chặn việc sử dụng lại Session ID cũ sau khi đăng xuất, đảm bảo bảo mật.
        $request->session()->regenerateToken(); // Tái tạo CSRF token cho phiên mới.
        return response()->json([
            'message' => 'Logged out successfully'], 200);
    }

    public function getUserInfor(Request $request)
    {
        $userData = User::where(['id' => $request->user()->id])->with('profile')->first();
        $userData->profile->avatar = config('app.url').'/storage/'.$userData->profile->avatar;
        return response()->json([$userData]);
    }
}
