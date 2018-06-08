
{{-- Gọi đến file master lấy header và footer cho index --}}
@extends('layouts.master')

{{-- Thêm nội dung vào index thông qua hàm section  --}}
@section('content')
	{{-- nội dung trong section này sẽ thay thế vào phần @yield('content') trong file master--}}
	Đây là nội dung index
 	{{-- Có thể include nội dung của file khác vào đây dùng include --}}

@endsection