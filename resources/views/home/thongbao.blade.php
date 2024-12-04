@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="page_user-pm">
        <div class="container">
            <div class="row d-block clearfix">
                   @include('home.layout.box')
                <div class="col-12 col-lg-9 float-left">
                    <section class="user-pm">
                        <table class="table table-borderless listext-table has-covers">
                            <thead>
                                <tr>
                                    <th class="col-11 col-md-6">Thông báo</th>
                                    <th class="none table-cell-m col-md-2">Thời gian</th>
                                    <th class="col-4 col-md-2 text-right">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $notifications = Auth::user()->notifications()->latest()->paginate(10);;
                                @endphp
                                @if ($notifications->count() > 0)
                                    @foreach ($notifications as $notification)
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    {!! $notification->data['message'] !!}
                                                    {{-- <span class="type-translation">Truyện dịch</span> --}}
                                                </div>
                                            </td>
                                            <td class="none table-cell-m">
                                                <a href="">{{ $notification->created_at->diffForHumans() }}</a>
                                            </td>

                                            <td class="text-right update-action">
                                                @if ($notification->type == 'App\Notifications\MonthlyRevenueNotification')
                                                    <a href="{{ url('/admin') }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\BookPendingNotification')
                                                    <a href="{{ route('books.approval') }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if (isset($notification->data['user_id']))
                                                    <a href="{{ route('author.index') }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\StoryApprovedNotification' && isset($notification->data['slug']))
                                                    <a href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\AuthorApprovedNotification')
                                                    <a href="{{ route('story.create') }}"><span class="update-status no-chapters disabled">Thêm truyện ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\NewChapterNotification' && isset($notification->data['slug']))
                                                    <a href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\AutoPurchasesNotification' && isset($notification->data['slug']))
                                                    <a href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\NewBookCommentNotification' && isset($notification->data['slug']))
                                                    <a href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\NewChapCommentNotification' && isset($notification->data['chapter_slug']) && $notification->type == 'App\Notifications\NewChapCommentNotification')
                                                    <a href="{{ route('truyen.chuong', ['slug' => $notification->data['slug'], 'chapter_slug' => $notification->data['chapter_slug']]) }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                                @if ($notification->type == 'App\Notifications\NewForumCommentNotification' && isset($notification->data['id']))
                                                    <a href="{{ route('chi-tiet-thao-luan', ['id' => $notification->data['id']]) }}"><span class="update-status no-chapters disabled">xem ngay</span></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center">Không có thông báo nào.</td>
                                    </tr>
                                @endif
                            </tbody>
                            {{-- {{ $notifications->links('pagination::tailwind') }} --}}

                        </table>
                        <div class="mt-4">
                            {{ $notifications->links('pagination::tailwind') }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
