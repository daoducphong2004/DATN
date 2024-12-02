@extends('user.layout.master')

@section('content')
    <div class="container">
        <h1>Lịch sử giao dịch</h1>
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <table id="transactionTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->purchasedStory->user->username ?? 'Unknown User' }}</td>
                        <td>{{ number_format($transaction->amount, 2) }}</td>
                        <td>
                            @if ($transaction->status === 'completed')
                                <span class="badge bg-success">Completed</span>
                            @elseif ($transaction->status === 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @else
                                <span class="badge bg-danger">Failed</span>
                            @endif
                        </td>
                        <td>
                            <a
                                href="{{ route('truyen.chuong', [$transaction->purchasedStory->chapter->book->slug, $transaction->purchasedStory->chapter->slug]) }}">
                                {{ $transaction->purchasedStory->chapter->title ?? 'Unknown Title' }}
                            </a>
                        </td>
                        <td>{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No transactions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div style="height: 70px"></div>
    <script>
        $(document).ready(function() {
            var table = $('#transactionTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                lengthChange: true,
                language: {
                    paginate: {
                        next: 'Next →',
                        previous: '← Previous'
                    },
                    search: "Search:",
                    lengthMenu: "Show _MENU_ entries",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    infoEmpty: "No transactions available",
                    zeroRecords: "No matching transactions found",
                }
            });

          
        });
    </script>
@endsection
