@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách tin tức
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
        <h2 class="text-primary mb-4">Thêm tin tức mới</h2>
        <a href="{{ route('newsIndex') }}" class="btn btn-primary">
            Quay lại
        </a>
        <form action="" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tiêu đề tin tức</label>
                        <input type="text" class="form-control" placeholder="Tiêu đề tin tức...." name="title">
                        @error('title')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="">Slug tin tức</label>
                        <input type="text" class="form-control" placeholder="Slug tin tức...." name="slug">
                    </div>
                </div>

                <div class="col-12">
                    <label for="">Nội dung</label>
                    <textarea name="content" cols="30" rows="10" placeholder="Nội dung tin tức" class="form-control"></textarea>
                </div>

                <div class="col-6 mt-3">
                    <label for="">Tác giả</label>
                    <input type="text" class="form-control" placeholder="Tác giả...." name="author">
                </div>

                <button class="btn btn-success pt-5" type="submit">Thêm mới</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
       document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.querySelector('input[name="title"]');
            const slugInput = document.querySelector('input[name="slug"]');

            function removeDiacritics(str) {
                return str.normalize('NFD').replace(/[\u0300-\u036f]/g, '').replace(/đ/g, 'd').replace(/Đ/g, 'D');
            }

            titleInput.addEventListener('input', function() {
                let slug = removeDiacritics(titleInput.value)
                    .toLowerCase()
                    .trim()
                    .replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a') // Loại bỏ ký tự đặc biệt nhưng giữ lại chữ cái và số
                    .replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e')
                    .replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o')
                    .replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u')
                    .replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y')
                    .replace(/đ/gi, 'd')
                    .replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i')
                    .replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '')
                    .replace(/ /gi, "-")
                    .replace(/\-\-\-\-\-/gi, '-')
                    .replace(/\-\-\-\-/gi, '-')
                    .replace(/\-\-\-/gi, '-')
                    .replace(/\-\-/gi, '-')

                slugInput.value = slug;
            });
        });
    </script>
@endpush
@push('styles')

@endpush
