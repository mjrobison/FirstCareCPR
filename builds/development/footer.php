        <footer>
                <div class="clearfix">
                    <div class="footNav">
                        <ul class="nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Online Courses</a></li>
                            <li><a href="#">Pay Registration</a></li>
                            <li>list classes</li>
                        </ul>
                    </div>
                    <div class="contain-contact">
                        <section class="contact">
                            <ul>
                                <li class="email"><a href="mailto:firstcarecpr@gmail.com">firstcarecpr@gmail.com</a></li>
                                <li class="phone"><a href="tel:615-260-4758">(615)260-4758</a></li>
                                <li class="phone"><a href="tel:615-473-9746">(615)473-9746</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            <!--</div>-->
                <div class="sub-footer">
                    <div class="robros">&copy; <?php echo date('Y'); ?>  Nashville First Care CPR | Powered By: &#60;Robros/&#62; </div>
                </div>
            <!--</div>-->
        </footer>
         <script>
            $(document).ready(function(){
                $(window).scroll(function() { // check if scroll event happened
                    var scrollVar = $(window).scrollTop(); //Determine the pixels moved.
                    var height = $('.hero').height();
                    console.log(scrollVar);
                    $('.bg-photo').css({'opacity': ((740-scrollVar)/740) });  //Adjust the opacity of the image               
                    if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
                        $("header").css("background-color", "#fff");
                        $("header").css("box-shadow", "0px 0px 3px #aaa"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                        $(".nav").css("border-bottom", "0px");
                        $(".nav dropdownItem a").css("color", "green");
                        $(".nav menuItem a").css("color", "#000000");
                    } else {
                        $("header").css("background-color", "transparent");
                        $("header").css("box-shadow", "none"); // if not, change it back to transparent
                        $(".nav").css("border-bottom", "2px solid #eee");
                        $(".nav menuItem dropdown a").css("color", "#fff");
                        $(".nav .menuItem a").css("color", "#272727");
                    }
                });
            });
        </script>
            
</body>
</html>
