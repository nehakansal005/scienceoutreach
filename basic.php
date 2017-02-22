
<!DOCTYPE html>
<?php  include'upper.php'; ?>
<div class="container " style="height:1000px; width: 1140px; background-color:white; border-radius: 7px; margin-top:15px;">
        
      <div class="container">  
        <div class="row" id="maths1">    
            <br>
          </div>
      </div>
</div>

  
    <?php include'bottom.php'; ?>
  </body>

 <script type="text/javascript">
        $.ajax({
            type: 'post',
            dataType: 'jsonp',
            data: {key: 'mathematics'},
            url: 'index1.php',
            success: loadMoodha 
            
        });


<script
        function loadMoodha(response) {
               var input = '<div class="row">';
                    input+= '<p> Hello </p>';
                   input += '</div>'
            }
       
       $('#maths1').append(input);
        }
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