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
    });
</script>
</div>
</div>

</div>
</div>
</div>
