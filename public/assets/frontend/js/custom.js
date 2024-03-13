$(document).ready(function () {
    $('.itemCheckbox').change(function () {
        var checkedItemsValue = [];
        $('.itemCheckbox:checked').each(function () {
            var checkedValue = $(this).val();
            checkedItemsValue.push(checkedValue);
        });
        $('#selectedItemIds').val(checkedItemsValue.join(','));
    });
});