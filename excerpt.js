/**
 * Created by raj on 11/3/14.
 */

(function($) {
    $(document).ready(function () {
        $("#publish").click(function() {
            var val = $("#excerpt").val();
            if (val.length === 0) {
                alert("Excerpt is empty. Please fill in a good excerpt");
                return false;
            }
        })
    });
})(jQuery);
