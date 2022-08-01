<script>
    $(function () {
        bsCustomFileInput.init(); // Để hiện tên ảnh khi được chọn trong input file

        $(".data-bootstrap-switch").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        function convertToSlug(Text) {
            return Text.toLowerCase()
                        .replace(/ /g, '-')
                        .replace(/[^\w-]+/g, '');
        }
        $('.numeral-input').on('input', function() {
            $(this).val($(this).val().replace(/[^0-9.,]/gi, ''));
        });

        // Khi phần tử .numeric bị rời bỏ sự "tập trung"
        $(".numeral-input").on('blur', function() {
            const val = $(this).val();
            const result = number_format(val,0,',','.');
            $(this).val(result);
        });

        function formatCurrency(val, currency = 'EU') {

        }

        function number_format (number, decimals, dec_point, thousands_sep) {
            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            console.log(number);
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }
    });

</script>
