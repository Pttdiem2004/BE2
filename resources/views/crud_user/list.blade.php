@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <h2>Danh Sách User</h2>
            <div class="row justify-content-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Quyền</th> {{-- Cột mới --}}
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    {{-- Tạo link cho quyền --}}
                                    <a href="{{ route('user.roleList', ['role' => $user->role ?? 'user']) }}">
                                        {{ $user->role ?? 'user' }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="footer mt-3">
                    Lập trình web @01/2024
                </div>
            </div>
        </div>
    </main>
@endsection
