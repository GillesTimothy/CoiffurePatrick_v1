<div class="container" id="slider">
       <div class="col-md-12">
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               <ol class="carousel-indicators">
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
               </ol>   
               <div class="carousel-inner">
                  
                  <?php 
                   $get_slides = "select * from carousel LIMIT 0,1";                  
                   $run_slides = mysqli_query($con,$get_slides);                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       $slide_name = $row_slides['slide_nom'];
                       $slide_image = $row_slides['slide_image'];
                       echo "
                       <div class='item active'>        
                       <img src='admin_area/slides_images/$slide_image'>
                       </div>
                       ";       
                   }
                   $get_slides = "select * from carousel LIMIT 1,5";                   
                   $run_slides = mysqli_query($con,$get_slides);                   
                   while($row_slides=mysqli_fetch_array($run_slides)){                       
                       $slide_name = $row_slides['slide_nom'];
                       $slide_image = $row_slides['slide_image'];
                       echo "                      
                       <div class='item'>                       
                       <img src='admin_area/slides_images/$slide_image'>                      
                       </div>                      
                       ";                      
                   }
                   ?>                   
               </div>               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>                  
               </a>               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>                   
               </a>               
           </div>           
       </div>       
   </div>