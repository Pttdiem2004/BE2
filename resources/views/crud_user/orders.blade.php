@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Danh Sách Đơn Hàng của {{ $user->name }}</h2>

        <!-- Nếu không có đơn hàng, hiển thị thông báo -->
        @if($orders && $orders->isEmpty())
        <p>Không có đơn hàng nào.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Chi Tiết Đơn Hàng</th>
                    <th>Ngày Đặt</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->order_code ?? 'Không có mã đơn hàng' }}</td>
                        <td>{{ $order->order_details ?? 'Không có chi tiết đơn hàng' }}</td>
                        <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    @endif
    <a href="{{ route('user.list') }}">Quay lại danh sách người dùng</a>
    
    </div>
@endsection
