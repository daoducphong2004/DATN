<script>
$(document).ready(function() {
    $('#select-type').on('change', function() {
        var value = $(this).val();
        if (value == '3') {
            $('#select-group').parent().parent().hide();
        } else {
            $('#select-group').parent().parent().show();
        }
    });

    $('#select-group').select2();
    $('#select-genre').select2({
        closeOnSelect: false,
    });

    $('#select-status').on('change', function() {
        var value = $(this).val();
        if (value == '3') {
            $('#input-price').parent().parent().hide();
        } else {
            $('#input-price').parent().parent().show();  // Hiển thị lại #input-price thay vì #select-group
        }
    });
});

</script>
</div>
</div>

</div>
</div>
</div>
