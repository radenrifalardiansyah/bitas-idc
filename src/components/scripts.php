    <!-- Plugin Js -->
    <script src="../js/jquery.min.js"  type="text/javascript"></script>
    <script src="../js/slick/slick.min.js"  type="text/javascript"></script>
    <script src="../js/wow.min.js" type="text/javascript"></script>
    <script src="../js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/main.js"  type="text/javascript"></script>
    <script type="text/javascript">
      console.log('tes');
      //Back To Top
      $(window).scroll(function(){		
          if ($(this).scrollTop() >= 10){
              $('.backtop').fadeIn(300);
              $('.header').addClass("fixed");
              console.log('tes');
          } else{
              $('.backtop').fadeOut(300);	
              $('.header').removeClass("fixed");
          }
      });
    </script>
    
    <!-- Isotope Filter-->
    <script>    
        var $grid = $('.tab-content').isotope({
            itemSelector: '.tab-content__item',
            layoutMode: 'fitRows'
            });
            
            // Function Click Filter
            $('.tab').on("click", function(){

            // Active Tab
            $('.tab').removeClass('active');
            $(this).addClass('active');

            var value = $(this).attr('data-filter');
            $grid.isotope({
                filter: value
            })
        })
    </script>
</body>
</html>