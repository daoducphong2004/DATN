@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách Công ty
@endsection

@push('styles')
@endpush

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="p-4" style="min-height: 800px;">
        <form action="{{ route('publishing_company_update', $id->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                    value="{{ $id->name }}">
            </div>
            <button type="submit" class="mt-3 btn btn-success">Save</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
