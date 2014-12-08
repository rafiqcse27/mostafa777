    <!-- BEGIN #footer-wrapper -->
    <div id="footer-wrapper">
        
        <!-- BEGIN #footer -->
        <div id="footer">           
            
            <div id="footer-bottom" class="clearfix">
                <p class="fl">&copy; Copyright - <a href="#">hhs.gov.bd</a> by <a href="#">Harpar High School</a></p>
                <p class="go-up fr"><a href="#top" class="scrollup">Top</a></p>
            </div>
                    
        </div>
        <!-- END #footer -->

    </div>
    <!-- END #footer-wrapper -->
<script>
// $(document).ready( function () {
//     var pathname = (window.location.pathname.match(/[^\/]+$/)[0]);

//     //alert(pathname);
//     $("#main-menu li").removeClass("current_page_item");
//     $("#container li [href='" + pathname  + "']").addClass("current_page_item");
// });
// jQuery(document).ready(function() {       
//    // initiate layout and plugins
//    App.init();
//    FormWizard.init();
//    var pathname = $(location).attr('href');

//    $('[href="'+pathname+'"]').parent("li").addClass("current_page_item");
//    //$('[href="'+pathname+'"]').parent("li").parent("ul").parent("li").addClass("current_page_item");
// });

</script>

<script type="text/javascript" charset="utf-8">
//<![CDATA[
$(document).ready(function(){
$('ul#main-menu li').click(
    function(e)
    {
        $('ul#main-menu li').removeClass('current_page_item');
        $(e.currentTarget).addClass('current_page_item');
    }
);
});
//]]>
</script>


</body>
<!-- END body -->
</html>