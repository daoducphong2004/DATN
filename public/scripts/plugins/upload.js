$(function() {
    $('.series_cover #drop a').click(function() {
        $(this).parent().find('input').click();
    });

    $('.series_cover').fileupload({
        url: uploadSeriesUrl,
        dataType: 'json',
        formData: {
            '_token': $('input[name=_token]').val(),
            'series_id': $('input[name=series_id]').val()
        },
        progressall: function(e, data) {
            $('#progress').show();
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function(e, data) {
            if (data.result.status == 'success') {
                var cover = 'series_' + $('input[name=series_id]').val() + '.jpg';
                var time = Math.floor(Date.now() / 1000);
                $('#SeriesCoverPreview').attr('src', data.result.url);
            }
            else
            {
                $('.alert').find('p').remove().end().show();
                $('.alert').append('<p><strong>' + data.result.message + '</strong></p>');
            }

            $('#progress').hide();
            $('#progress .progress-bar').css('width', '');
        },
        fail: function(e, data) {
            $('#progress').hide();
            $('#progress .progress-bar').css('width', '');

            $('.alert').find('p').remove().end().show();
            var parsed = JSON.parse(data.jqXHR.responseText).errors;
            for (var p in parsed) {
                if (parsed.hasOwnProperty(p)) {
                    parsed[p].forEach(function (value) {
                        $('.alert').append('<p><strong>' + value + '</strong></p>');
                    });
                }
            }
        }
    });
});

$(function() {
    $('.book_cover #drop a').click(function() {
        $(this).parent().find('input').click();
    });

    $('.book_cover').fileupload({
        url: uploadBookUrl,
        dataType: 'json',
        formData: {
            '_token': $('input[name=_token]').val(),
            'book_id': $('input[name=book_id]').val()
        },
        progressall: function(e, data) {
            $('#progress').show();
            var progress = parseInt(data.loaded / data.total * 100, 10)
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function(e, data) {
            if (data.result.status == 'success') {
                var cover = 'book_' + $('input[name=book_id]').val() + '.jpg';
                var time = Math.floor(Date.now() / 1000);
                $('#BookCoverPreview').attr('src', data.result.url);
            }
            else
            {
                $('.alert').find('p').remove().end().show();
                $('.alert').append('<p><strong>' + data.result.message + '</strong></p>');
            }

            $('#progress').hide();
            $('#progress .progress-bar').css('width', '');
        },
        fail: function(e, data) {
            $('#progress').hide();
            $('#progress .progress-bar').css('width', '');

            $('.alert').find('p').remove().end().show();
            var parsed = JSON.parse(data.jqXHR.responseText).errors;
            for (var p in parsed) {
                if (parsed.hasOwnProperty(p)) {
                    parsed[p].forEach(function (value) {
                        $('.alert').append('<p><strong>' + value + '</strong></p>');
                    });
                }
            }
        }
    });
});

$(function() {
    $('.upload_avatar #drop a').click(function() {
        $(this).parent().find('input').click();
    });

    $('.upload_avatar').fileupload({
        url: uploadAvatarUrl,
        dataType: 'json',
        formData: {
            '_token': $('input[name=_token]').val()
        },
        progressall: function(e, data) {
            $('#progress').show();
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function(e, data) {
            // console.log(data)
            if (data.result.status == 'success') {
                $('#AvatarUploaded').attr('src', data.result.url);
            }
            else
            {
                $('.alert').find('p').remove().end().show();
                $('.alert').append('<p><strong>' + data.result.message + '</strong></p>');
            }

            $('#progress').hide();
            $('#progress .progress-bar').css('width', '');

        },
        fail: function(e, data) {
            $('#progress').hide();
            $('#progress .progress-bar').css('width', '');

            $('.alert').find('p').remove().end().show();
            var parsed = JSON.parse(data.jqXHR.responseText).errors;
            for (var p in parsed) {
                if (parsed.hasOwnProperty(p)) {
                    parsed[p].forEach(function (value) {
                        $('.alert').append('<p><strong>' + value + '</strong></p>');
                    });
                }
            }
        }
    });
});

$(function() {
    $('.chapter_content #drop a').click(function() {
        $(this).parent().find('input').click();
    });
    $('.alert').find('p').remove();

    var totalFiles = 0;
    var uploaded = 0;

    $('.chapter_content').bind('fileuploadadd', function (e, data) {
        totalFiles++;
    });

    $('.chapter_content').fileupload({
        url: uploadChapterUrl,
        dataType: 'json',
        sequentialUploads: true,
        formData: {
            '_token': $('input[name=_token]').val(),
            'chapter_id': $('input[name=chapter_id]').val() || 0
        },
        progressall: function(e, data) {
            $('#progress').show();
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function(e, data) {
            if (data.result.status == 'success') {
                tinymce.activeEditor.insertContent('<p><img src="' + data.result.url + '" /></p>');
                uploaded++;
                $('#progress .progress-bar').text(`${uploaded} / ${totalFiles}`);
            }
            else
            {
                $('.alert').show();
                $('.alert').append('<p><strong>' + data.result.message + '</strong></p>');
            }
        },
        fail: function(e, data) {
            var parsed = JSON.parse(data.jqXHR.responseText).errors;
            for (var p in parsed) {
                if (parsed.hasOwnProperty(p)) {
                    parsed[p].forEach(function (value) {
                        $('.alert').show();
                        $('.alert').append('<p><strong>' + value + '</strong></p>');
                    });
                }
            }
        }
    });
});

$(document).ready(function () {
    $('#upload_url_auto').on('click', function (data) {
        $('.alert').find('p').remove();

        var html = tinymce.activeEditor.getContent();
        var totalFiles = $(html).find('img').length;
        var uploaded = 0;

        $('#progress').show();
        $('#progress .progress-bar').text(`${uploaded} / ${totalFiles}`);

        var imgs = $(html).find('img');
        var currentUrlIndex = 0;

        (function autoUploadUrls() {
            if (currentUrlIndex < totalFiles) {
                var _this = imgs.eq(currentUrlIndex);
                var url = _this.attr('src');

                $.post(remoteUploadUrl, {
                    _token: $('input[name=_token]').val(),
                    remote_url: url,
                    chapter_id: $('input[name=chapter_id]').val() || 0
                }, function (data) {
                    if (data.status == 'success') {
                        var tinyDomQuery = tinymce.activeEditor.DomQuery;
                        tinyDomQuery('img[src="' + url + '"]').attr('src', data.url);
                        uploaded++;
                        $('#progress .progress-bar').text(`${uploaded} / ${totalFiles}`);
                    } else {
                        $('.alert').show();
                        $('.alert').append('<p><strong>' + data.message + '</strong></p>');
                    }

                    var progress = parseInt(uploaded / totalFiles * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );

                    currentUrlIndex++;
                    autoUploadUrls();
                }, 'json');
            }
        })();
    });
});
