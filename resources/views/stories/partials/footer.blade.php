<script>
    $(document).ready(function() {
        // $('#input-price').parent().parent().hide();

        // // Kiểm tra giá trị ban đầu của #select-status
        // if ($('#select-status').val() == '3') {
        //     $('#input-price').parent().parent().show();
        // }
        $('#select-type').on('change', function() {
            var value = $(this).val();
            if (value == '3') {
                $('#select-group').parent().parent().hide();
            } else {
                $('#select-group').parent().parent().show();
            }
        });

        // $('#select-group').select2();
        // $('#select-genre').select2({
        //     closeOnSelect: false,
        // });
        // $('#select-status').on('change', function() {
        //     var value = $(this).val();
        //     if (value == '3') {
        //         $('#input-price').parent().parent().show();
        //     } else {
        //         $('#input-price').parent().parent()
        //     .hide(); // Hiển thị lại #input-price thay vì #select-group
        //     }
        // });
    });
</script>
</div>
</div>

</div>
</div>
</div>
