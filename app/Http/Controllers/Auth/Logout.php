<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Auth;

class Logout extends RoutingController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login-page');
    }
}

//Đoạn mã này xử lý yêu cầu đăng xuất của người dùng trong ứng dụng Laravel:
//Đăng xuất người dùng bằng cách gọi Auth::logout().
//Hủy bỏ session hiện tại và tạo lại một token CSRF mới để bảo mật.
//Sau khi đăng xuất, người dùng được chuyển hướng đến trang đăng nhập (admin.login-page).
//Controller này sử dụng phương thức __invoke để xử lý yêu cầu một cách đơn giản và hiệu quả, giúp bạn quản lý đăng xuất của người dùng dễ dàng hơn.
