    $(document).ready(function(){
          $("#sub-1, #subsub-1").hover(function(){
            $('#subsub-1').addClass(' _hover _active _active-current');
            $('#header-main').addClass('_active');
            }, function(){
            $('#subsub-1').removeClass('_hover _active _active-current');
            $('#header-main').removeClass('_active');
          });
          $("#sub-2, #subsub-2").hover(function(){
            $('#subsub-2').addClass(' _hover _active _active-current');
            $('#header-main').addClass('_active');
            }, function(){
            $('#subsub-2').removeClass('_hover _active _active-current');
             $('#header-main').removeClass('_active');
          });
          $("#sub-3, #subsub-3").hover(function(){
            $('#subsub-3').addClass(' _hover _active _active-current');
            $('#header-main').addClass('_active');
            }, function(){
            $('#subsub-3').removeClass('_hover _active _active-current');
             $('#header-main').removeClass('_active');
          });
          $("#sub-4, #subsub-4").hover(function(){
            $('#subsub-4').addClass(' _hover _active _active-current');
            $('#header-main').addClass('_active');
            }, function(){
            $('#subsub-4').removeClass('_hover _active _active-current');
             $('#header-main').removeClass('_active');
          });
          $("#sub-5, #subsub-5").hover(function(){
            $('#subsub-5').addClass(' _hover _active _active-current');
            $('#header-main').addClass('_active');
            }, function(){
            $('#subsub-5').removeClass('_hover _active _active-current');
             $('#header-main').removeClass('_active');
          });
          $("#sub-6, #subsub-6").hover(function(){
            $('#subsub-6').addClass(' _hover _active _active-current');
            $('#header-main').addClass('_active');
            }, function(){
            $('#subsub-6  ').removeClass('_hover _active _active-current');
             $('#header-main').removeClass('_active');
          });
          $('#btn-search').click(function(){
            if($('#search-img').attr('src') === 'assets/img/search.png'){
              $('#search-img').attr('src', 'assets/img/x.png');
              $('#search-form').show();
            }else{
              $('#search-img').attr('src', 'assets/img/search.png');
              $('#search-form').hide();
            }
           
          })

        });
