<!DOCTYPE html>
@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách thể loại sách
@endsection

@push('styles')
    
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Danh Sách User Trong Group ''</h2>
        <table border="1" class="table">
            <tr>
                <th>User</th>
            </tr>
            <tbody>
                @foreach ($user_group as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
    
                        <td>
                            <a class="btn btn-success" href="{{ route('groups_edit', $group->id) }}">Edit</a>
                            <form action="{{ route('groups_delete', $group->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Xác nhận xóa')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')

@endpush

