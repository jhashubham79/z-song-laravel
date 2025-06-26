<script>
    $(document).ready(function(){
        $('#related_product').on('change', function () {
            // Count the number of selected options
            var selectedOptions = $(this).val();
            if (selectedOptions && selectedOptions.length > 2) {
                // If more than 2 options are selected, deselect the last one
                $(this).val(selectedOptions.slice(0, 2));
            }
        });
    });
</script>