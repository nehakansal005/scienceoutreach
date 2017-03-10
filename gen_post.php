<!DOCTYPE html>
<html lang="en">
<?php include 'post_upper.php'; ?>


<div id="main_box">
    
</div>




<?php include 'bottom.php'; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script> 
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
 <script type="text/javascript">
        $.ajax({
            type: 'post',
            dataType: 'jsonp',
            data: {key: 'postk'},
            url: 'index1_post.php',
            success: loadAll 
            
        });



        function loadAll(response) {
              
    
                   for(var i=0 ; i<1 ; i++){ 
                      input = '<header class="intro-header" style="background-image: url(\'blogg/img/shobhamam.jpg\')">'
                      input += '</header>';
                      input += '<div style="height:150px; background-color: grey; color: white; ">';
                    
                   input +=  '<div class="row">';
               input += '<div class="col-lg-11 col-lg-offset-1 hover">';
              input += '<h1 class="section-heading" style="margin-bottom: 0px;">';
              input += response[i].tag_line;
              input += '</h1>';
              input += '<p style="text-align: center;text-justify: inter-word; font-family:Lora,\'Times New Roman\',serif; font-size: 2em; margin-top: 0px;">';
              input += 'Author:'+response[i].author_name;
              input += '</p>';
              input += '</div>';
              input += '</div>';
              input += '</div>';
              input += '<br>';
              input += '<article>';
              input += '<div class="container">';
              input += '<div class="row" style="font-size: 1.3em;">';
              input += '<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >';
              input += '<p style="text-align: justify;text-justify: inter-word; font-family:Lora,\'Times New Roman\',serif;">';
              input += response[i].first_para;
              input += '</p>';
               input += '<p style="text-align: justify;text-justify: inter-word; font-family:Lora,\'Times New Roman\',serif;">';
              input += response[i].second_para;
              input += '</p>';
              input += '<img src="blogg/img/' + response[i].first_image + '"class="img-responsive"';
                input += '<p style="text-align: justify;text-justify: inter-word; font-family:Lora,\'Times New Roman\',serif;">';
              input += response[i].third_para;
              input += '</p>';
                input += '<p style="text-align: justify;text-justify: inter-word; font-family:Lora,\'Times New Roman\',serif;">';
              input += response[i].fourth_para;
              input += '</p>';
              input += '</br>';
              input += '</ul>';
              input += '</div>';
              input += '</div>';
              input += '</div>';
              input += '</article>';
                            

       $('#main_box').append(input);}}
        
    </script>















  

</body>

</html>
