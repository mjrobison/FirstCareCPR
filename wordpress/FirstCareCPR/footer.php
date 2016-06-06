<footer>
				<div class="clearfix">
					<div class="footNavCon">
						<div class="center">
							<div class="footNav">
								<h3>First Care CPR</h3>
								<ul class="nav">
									<li><a href="<?php echo get_page_link(80);?>">About</a></li>
									<li><a href="<?php echo get_page_link(53);?>">Contact</a></li>
									<li><a href="<?php echo get_page_link(56);?>">Pay Registration</a></li>
								</ul>
							</div>
							<div class="courses">
								<h3>Courses</h3>
								<ul class="nav">
									<li><a href="<?php echo get_page_link(96);?>">CPR &amp; AED</a></li>
									<li><a href="<?php echo get_page_link(99);?>">First Aid</a></li>
									<li><a href="<?php echo get_page_link(103);?>">Pathogens</a></li>
									<li><a href="<?php echo get_page_link(101);?>">Survival</a></li>									
									<li><a href="http://osmanager4.com/summit/landing.aspx?id=25856">OSHA</a></li>
									<li><a href="<?php echo get_page_link(150);?>">Health Care Provider CPR</a></li>
									<li><a href="<?php echo get_page_link(152);?>">Early Childhood Emergency</a></li>									
								</ul>
							</div>
						</div>
					</div>
					<div class="footerRight">
						<div class="footImgCon">
							<img src="<?php echo site_url(); ?>/images/firstCareLogo.png" />
						</div>
						<div class="contain-contact">
							
							<section class="contact">
								
									<div class="email">
										<h3>Email</h3>
										<a href="mailto:firstcarecpr@gmail.com">firstcarecpr@gmail.com</a>
									</div>
									<div class="phone">
										<h3>James</h3>
										<a href="tel:615-260-4758">(615)260-4758</a>
									</div>
									<div class="phone">
										<h3>Christy</h3>
										<a href="tel:615-473-9746">(615)473-9746</a>
									</div>
								
							</section>
						</div>
					</div>
				</div>
				<div class="sub-footer">
					<div class="robros">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | Powered By: &#60;Robros/&#62; </div>
				</div>
			<!--</div>-->
		</footer>
		<script>
			$(document).ready(function(){
                $(window).scroll(function() { // check if scroll event happened
                    if ($(document).scrollTop() > 200) { // check if user scrolled more than 50 from top of the browser window
                        $("header").css("background-color", "#fff");
                        $("header").css("box-shadow", "0px 0px 3px #aaa"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                        $(".nav").css("border-bottom", "0px");
                        $(".nav a").css("color", "#272727");
                    } else {
                        $("header").css("background-color", "transparent");
                        $("header").css("box-shadow", "none"); // if not, change it back to transparent
                        $(".nav").css("border-bottom", "2px solid #eee");
                        $(".nav a").css("color", "#eee");
                    }
                    var scrollVar = $(window).scrollTop(); //Determine the pixels moved.
                    //console.log(scrollVar);
                    var height = $('.hero').height();
                    $('.bg-photo').css({'opacity': ((740-scrollVar)/740) });  //Adjust the opacity of the image
                });
			});
		</script>

		<script>
$(document).ready(function() {

  //GLOBALS
  var nav_menu = $('.nav-menu');
  var nav_menu_wrap = $('.nav-menu-wrap');
  var nav_menu_background = $('.nav-menu-background');

  //toggle the active states
  function toggle_menu() {
    nav_menu_wrap.toggleClass('active');
    nav_menu_background.toggleClass('active');
  }

  //toggling activate state when interacting with elements
  $('.nav-menu-toggle, .nav-menu-background, .nav-menu .close').on('click', function() {
    toggle_menu();
  });

  //sets the height of the menu to be the same height as the body
  function set_menu_height() {
    var body_height = $(window).height();
    nav_menu.height(body_height);
  }
  set_menu_height();

  //if we change orientation or resize, reculate menu
  $(window).resize(function() {
    set_menu_height();
  })

  //INDENTING
  //go through the menu and add indenting 
  function add_menu_depth() {

    var menus = $('.menu');
    //set depth width to be 5% of the nav menu
    var pad_depth = (nav_menu.outerWidth() / 20);

    //if we have menus
    if (menus.length != 0) {
      $.each(menus, function() {
        var depth_count = $(this).parents('.menu').length + 1;
        var child_elements = $(this).find('li > a');

      })
    }
  }
  add_menu_depth();
});
		</script>
	
 <!-- <php wp_footer(); ?> --> 
	<!-- Don't forget analytics -->
</body>
</html>