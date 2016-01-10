$(function() {
    /**
     * Created by PhpStorm.
     * User: Matus Kacmar
     * Date: 7. 12. 2015
     * Time: 14:23
     */
    $(".login-frame").css("visibility","visible");
    $(".subnav").hide();
    $(".addToCart").hide();
    $(".login-frame").hide();

    /*
     * LOGIN FORM
    */
    $("#login").click(function(){
        $(".login-frame").stop(true, false).slideToggle();
    });

    /*
     * PAGE NAVIGATION
     */

    $(".button").hover(function() {
        $(this).children(".subnav").stop(true, false).slideToggle(600);
    });

    /*
     * SEARCH BAR
     */

    $("#search").on('keypress', function(event){
        if(event.which == 13) {
            $("#searchForm").submit();
            return false;
        }
    });

    var sliderWidth = $(".slider").width() - 35;
    $("#right-arrow").css({"margin-left":sliderWidth + "px"});

    /*
     * TABS
     */

    $(".link").hover(function() {
        $(this).css("color", "#34A994");
	}, function() {
        $(this).css("color", "#595959");
    });

    $(".product-item").hover(function() {
        $(this).stop(true, false).animate({
            height: "470px"
        });
        $(this).children('.product-description').children('.addToCart').stop(true, false).slideDown();
    }, function() {
        $(this).stop(true, false).animate({
            height: "424px"
        });
        $(this).children('.product-description').children('.addToCart').stop(true, false).slideUp();
    });

    /*
    * Image scaling
    */

    /*
     * Slides
     */
    var sliderWidth = $(".slider-wrapper").width();
    var sliderHeight = $(".slider-wrapper").height();

    $(".slides").css({"width": sliderWidth + "px","height": sliderHeight + "px"});

    /*
    * Prduct items
    */
    var maxWidth = $(".product-photo").width() - 20;
    var maxHeight = $(".product-photo").height() - 20;

    $(".thumbnailImage").each(function(){
        var ratio = 0;
        var width = $(this).width();
        var height = $(this).height();

        if(width > maxWidth){
            ratio = maxWidth / width;
            $(this).css("width", maxWidth);
            $(this).css("height", height * ratio);
            height = height * ratio;
            width = width * ratio;
        }

        if(height > maxHeight){
            ratio = maxHeight / height;
            $(this).css("height", maxHeight);
            $(this).css("width", width * ratio);
            width = width * ratio;
        }

        var newWidth = this.width;
        var newHeight = this.height;

        var marginTop = ((maxHeight+20) - newHeight) / 2;
        var marginLeft = ((maxWidth+20) - newWidth) / 2;
        $(".thumbnailImage").css({"margin-top":marginTop+"px","margin-left":marginLeft+"px"});
    });
    //$(".thumbnailImage").css({"margin":"10px"});
});