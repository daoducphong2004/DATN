@extends('stories.iframe.layouts.master')

@section('content')
<style>
    #sortable {
    padding: 0;
    list-style: none;
}

#sortable li {
    margin: 5px 0;
    padding: 10px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
}

</style>
    <div class="container">
        <h2>Sắp xếp Episode</h2>
        <!-- Danh sách episodes có thể sắp xếp -->
        <ul id="sortable" class="list-group">
            @foreach($episodes as $episode)
                <li class="list-group-item" data-id="{{ $episode->id }}">
                    {{ $episode->title }}
                </li>
            @endforeach
        </ul>

        <button id="saveOrder" class="btn btn-primary mt-3">Lưu Thứ Tự</button>
    </div>

    <script>
        $(function() {
            // Kích hoạt sortable từ jQuery UI
            $("#sortable").sortable();
            $("#sortable").disableSelection();

            // Xử lý sự kiện lưu thứ tự
            $('#saveOrder').click(function() {
                var order = [];
                $('#sortable li').each(function(index, element) {
                    order.push({
                        id: $(this).data('id'),
                        position: index + 1
                    });
                });

                // Gửi AJAX request để lưu thứ tự
                $.ajax({
                    url: "{{ route('episodes.updateOrder') }}",
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        order: order
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('Thứ tự đã được lưu thành công!');
                        } else {
                            alert('Đã có lỗi xảy ra.');
                        }
                    }
                });
            });
        });
    </script>
@endsection
