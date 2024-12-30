<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->type == User::TYPE_ADMIN){
            return $next($request);
        }
        return redirect('/admin/login');
    }
}

//Đoạn mã trên định nghĩa một middleware kiểm tra xem người dùng đã đăng nhập chưa và có phải là admin không. Nếu người dùng thỏa mãn cả hai điều kiện:
//Đã đăng nhập (kiểm tra bằng Auth::check()).
//Có quyền admin (kiểm tra bằng Auth::user()->type == User::TYPE_ADMIN).
//Nếu cả hai điều kiện trên đều đúng, yêu cầu sẽ được tiếp tục xử lý. Nếu không, người dùng sẽ bị chuyển hướng đến trang đăng nhập của admin (/admin/login).