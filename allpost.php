
<!DOCTYPE html>
<?php  include'upper.php'; ?>
<div class="container " style="height:1000px; width: 1140px; background-color:white; border-radius: 7px; margin-top:15px;">
        
      <div class="container" id ="post">  
        
      </div>
</div>
  
   
    <?php include'bottom.php'; ?>
       
  </body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script> 
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
 <script type="text/javascript">
        $.ajax({
            type: 'post',
            dataType: 'jsonp',
            data: {key: 'postk'},
            url: 'index1.php',
            success: loadAll 
            
        });



        function loadAll(response) {
              
    
                   for(var i=0 ; i<2 ; i++){
                    var ids = response[i].id;
                      var input = '<div class="row">';
                    
                   input +=  '<br>';
               input += '<div class="col-md-2 col-sm-3 text-center">';
              
               input += '<img alt="" class="img-circle img-responsive blog"';
                input+=  '   src="img/' + response[i].circle_image + '">'
                 input+='<p>'+ ids + '</p>';
               input +='</a>';
               input +='</div>';
               input += '<div class="col-md-10 col-sm-9">';
               input += '<h3>';
                input += '<a href="get_post.php" class="left">';
                input += response[i].heading;
                input += '</a></h3>';
                input += '<p class="inside col-xs-12 ">';
                input += response[i].one_line + '....';
                input += '<a href="get_post.php' + ' " class="anchor">';
                input += 'Read more';
                input += '</a>';
                input += '</p>';
                input += '</div>';
                input += '</div>';
       
           
                     
                        
            
       
       $('#post').append(input);}}


                  
     
      

































        
    </script>









   





<!-- Mirrored from scienceoutreach.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Sep 2016 10:49:24 GMT -->
</html>
<!-- Hosting24 Analytics Code -->

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>