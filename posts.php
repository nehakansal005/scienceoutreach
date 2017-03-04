
<!DOCTYPE html>

   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.structure.css">
   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">
<?php  include'upper.php'; ?>
<div class="container " style="height:1000px; width: 1140px; background-color:white; border-radius: 7px; margin-top:15px;">
        
      <div class="container" id ="selected_post">  
        
      </div>
</div>
  
   
   <?php include'bottom.php'; ?>
       
  
 

<!--<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
-->
    <script type="text/javascript">
//     
//var sel_key={value:'postk'};

$(document).ready(function(){

  $('#physical_science').click(function(){
  
        $.ajax({
            type: 'post',
            dataType: 'jsonp',
            data: {key: 'physical_science'},
            url: 'index1.php',
            success: loadAll 

        });

  });

  $('#mathematics').click(function(){
     
        $.ajax({
            type: 'post',
            dataType: 'jsonp',
            data: {key: 'postk'},
            url: 'index1.php',
            success: loadAll 

        });

  });


  });


        function loadAll(response) {
              
         
                   for(var i=0 ; i<2 ; i++){
                   	try{
                      var input = '<div class="row">';
                    
                    
                   input +=  '<br>';
               input += '<div class="col-md-2 col-sm-3 text-center">';
               input += '<a href="blogg/">';
               input += '<img alt="" class="img-circle img-responsive blog"';
                input+=  '   src="img/' + response[i].circle_image + '">'
               input +='</a>';
               input +='</div>';
               input += '<div class="col-md-10 col-sm-9">';
               input += '<h3>';
                input += '<a href="blogg/ " class="left">';
                input += response[i].heading;
                input += '</a></h3>';
                input += '<p class="inside col-xs-12 ">';
                input += response[i].one_line+ '....';
                input += '<a href="blogg/' + ' " class="anchor">';
                input += 'Read more';
                input += '</a>';
                input += '</p>';
                input += '</div>';
                input += '</div>';
       
       
                    } catch(err){
                      console.log(err);
                    } 
                        
            
       
       $('#selected_post').append(input);}}
        
    </script>



</body>


   





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