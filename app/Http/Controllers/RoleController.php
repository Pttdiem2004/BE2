<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function showByRole($role)
    {
        // Lấy danh sách người dùng theo quyền (role)
        $users = User::where('role', $role)->get();

        // Trả về view với danh sách người dùng theo quyền
        return view('crud_user.roleList', compact('users', 'role'));  // Sửa tên view từ 'user.roleList' thành 'crud_user.roleList'
    }
}
