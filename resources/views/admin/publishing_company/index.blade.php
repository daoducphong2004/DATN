@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách Công ty
@endsection

@push('styles')
@endpush

@section('content')
    @if (isset($errorMessage))
        <div class="alert alert-danger">
            {{ $errorMessage }}
        </div>
    @endif

    <div class="p-4" style="min-height: 800px;">
        <table class="table table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">name</th>

                    <th scope="col">
                        <a class="btn btn-primary" href="{{ route('publishing_company_create') }}">Create</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publishing_companys as $publishing_company)
                    <tr>
                        <td>{{ $publishing_company->name }}</td>
                        <td>
                            <div class="btn-action" style="display: flex; gap:5px;">
                                <a class="btn btn-success"
                                    href="{{ route('publishing_company_edit', $publishing_company->id) }}">Edit</a>
                                <form action="{{ route('publishing_company_delete', $publishing_company->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class=" btn btn-danger" type="submit"
                                        onclick="return confirm('Xác nhận xóa')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $publishing_companys->links() }}
@endsection

@push('scripts')
@endpush
