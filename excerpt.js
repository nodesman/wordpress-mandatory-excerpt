/**
 * Created by raj on 11/3/14.
 */

(function($) {
    $(document).ready(function () {
        $("#publish").click(function() {
            var val = $("#excerpt").val();
            if (val.length === 0) {
                alert("The excerpt is empty. Please fill in a presentable excerpt.");
                return false;
            }
        })
    });
})(jQuery);
