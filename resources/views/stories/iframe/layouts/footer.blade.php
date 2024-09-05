<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
<link href="{{ asset('scripts/plugins/upload/css/upload.css') }}" rel="stylesheet" />

<!-- jQuery File Upload Dependencies -->
<script src="{{ asset('scripts/plugins/upload/js/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('scripts/plugins/upload/js/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('scripts/plugins/upload/js/jquery.fileupload.js') }}"></script>

<script>
    uploadSeriesUrl = '{{ asset('action/upload/series') }}';
    uploadBookUrl = '{{ asset('action/upload/book') }}';
    uploadChapterUrl = '{{ asset('action/upload/image') }}';
    uploadAvatarUrl = '{{ asset('action/upload/avatar') }}';
    remoteUploadUrl = '{{ asset('action/upload/remote') }}';

    coverSeriesUrl = '{{ asset('covers/series') }}';
    coverBookUrl = '{{ asset('covers/books') }}';
</script>

<!-- Main Script -->
<script src="scripts/plugins/upload/js/upload.js?v=7"></script>
