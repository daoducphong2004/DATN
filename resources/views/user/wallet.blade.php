<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thống kê lợi nhuận của tác giả</h1>
    <h3>Tổng lợi nhuận: @foreach ($total_wallet as $item)
    {{$item->balance}}
    @endforeach</h3>
    <table class="table table_striped" border="1">
        <thead>
            <th>STT</th>
            <th>Lợi nhuận từng chương</th>
        </thead>
        <tbody>
            @foreach ($single_wallet_chapter as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->amount}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>