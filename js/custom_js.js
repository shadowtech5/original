$(document).ready(function(){
    $(window).scroll(function(){
        console.log("ai");
    });
    console.log("test");
    $("#booking-info").click(function(){
    	$("#booking-info").addClass("active");
    	$("#biography").removeClass("active");
        $("#photos").removeClass("active");
        $("#videos").removeClass("active");
    	$(".biography-container").addClass("hide");
    	$(".booking-info-container").removeClass("hide");
        $(".photos-container").addClass("hide");
        $(".video-container").addClass("hide");
    });
    $("#biography").click(function(){
    	$("#booking-info").removeClass("active");
    	$("#biography").addClass("active");
        $("#photos").removeClass("active");
        $("#videos").removeClass("active");
    	$(".biography-container").removeClass("hide");
    	$(".booking-info-container").addClass("hide");
        $(".photos-container").addClass("hide");
        $(".video-container").addClass("hide");
    });
    $("#photos").click(function(){
        $("#booking-info").removeClass("active");
        $("#photos").addClass("active");
        $("#biography").removeClass("active");
        $("#videos").removeClass("active");
        $(".biography-container").addClass("hide");
        $(".booking-info-container").addClass("hide");
        $(".photos-container").removeClass("hide");
        $(".video-container").addClass("hide");
    });
    $("#videos").click(function(){
        $("#booking-info").removeClass("active");
        $("#videos").addClass("active");
        $("#biography").removeClass("active");
        $("#photos").removeClass("active");
        $(".biography-container").addClass("hide");
        $(".booking-info-container").addClass("hide");
        $(".video-container").removeClass("hide");
        $(".photos-container").addClass("hide");
    });
    $(".budget-fix").click(function (e) {
        console.log("inside")
        var Id=$(this).attr('data-ids');
        var input = "<input type='hidden' value='"+Id+"' name='jishnu'/>"
        $('#append').append(input);
        $("#available_result").hide(); // appending data response to result-page div
        $('#available_form').show();  //hiding form
        $("#available_result").empty();
        console.log(Id);
    });
    $(".filter").click(function(){
        console.log("test111");
        $(".filter-options-details").slideToggle("slow");
    });
    $("#test").click(function (e) {
        var frm = $('#form1');
        e.preventDefault;
        $.ajax({
            url: 'check_rate.php',
            type: 'POST',
            data: frm.serialize(),
            success: function (data) 
            {
                $("#available_result").append(data).show(); // appending data response to result-page div
                $('#available_form').hide();  //hiding form
                setTimeout(function () {
                    $("#result-page").hide(); 
                    $("#link-page").show();
                }, 5000);
            }
        });
    });

    $("#price").slider({
        tooltip: 'always'
    });
    $("#performing_members").slider({
        tooltip: 'always'
    });
    $("#check_available_form_button").click(function (e) {
        console.log("fdjg");
        // this.disabled = true;
        $('#check_available_form_button').hide();
        var frm = $('#check_available_form');
        $.ajax({
            url: 'check_available.php',
            type: 'POST',
            data: frm.serialize(),
            success: function (data) {
                $(".price_container").append(data).show(); // appending data response to result-page div
                $('.check_available_form_contents').hide();  //hiding form
                $('#check_available_form_button').hide();
            }
        });
    });
    
});
