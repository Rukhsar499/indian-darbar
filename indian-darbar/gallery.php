<?php include_once('header.php');?>
  
  <style>
      .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 33.3%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
 
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s linear;
}
.column iframe {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
 
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s linear;
}
.column img:hover {
  filter: grayscale(0);
}
.clg{
    margin-bottom: 20px;
}

@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
  .column img {
    filter: grayscale(0) brightness(1);
  }
}
  </style>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">

                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        
        
     
        
        
        
        
        
        
        <!-- Navbar & Hero End -->
  <section class="sticky">
         <div class="icons">
            <a class="call"><i class="fas fa-phone-alt" onclick="openpopup1()"></i>
            </a>
            <a class="whatsapp" onclick="openpopup()"><img src="img/what.png"></a>

        </div>
        </section>
        <div class="online">
            <h4>Order Online</h4>
        </div>

        <!-- Menu Start -->
        <div class="container clg">
             
         <div class="row">
      <div class="column">
        <img src="img/indian.png" />
        <img src="img/indian1.png" />
       <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Findiandarbaratcharoenkrung%2Fvideos%2F761325788460666%2F&show_text=false&width=476&t=0" width="428" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        <img src="img/indian3.png" />
        <img src="img/indian4.png" />
        <img src="img/indian11.png" />
         <img src="img/indian16.png" />
         <img src="img/indian20.png" />
         <img src="img/indian23.png">
         <img src="img/indian25.png">
         <img src="img/indian27.png" />
         <img src="img/indian31.png">
         <img src="img/indian34.png">
      </div>
      <div class="column">
        <img src="img/indian14.png">
        <img src="img/indian8.png">
        <img src="img/indian13.png">
        <img src="img/indian15.png">
        <img src="img/indian12.png">
        <img src="img/indian18.png">
        <img src="img/indian21.png">
         <img src="img/indian24.png">
         <img src="img/indian29.png">
         <img src="img/indian30.png">
         <img src="img/indian33.png">
      </div>
      <div class="column">
        <img src="img/indian5.png" />
        <iframe  src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Findiandarbaratcharoenkrung%2Fvideos%2F1740759462971356%2F&show_text=false&width=476&t=0" width="428" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        <img src="img/indian9.png">
        <img src="img/indian10.png">
        <img src="img/indian17.png">
        <img src="img/indian7.png">
        <img src="img/indian19.png">
        <img src="img/indian22.png">
        <img src="img/indian26.png">
        <img src="img/indian28.png">
         <img src="img/indian32.png">
      </div>
    </div>
  
        </div>
        <!-- Menu End -->
        <div id="overlay">
    <div><h2><a class="popup-close-btn" onclick="closepopup()">&times;</a></h2></div>
    <div class="form2">
      <img src="img/logo.png" alt="" width="130px" height="100px">
      <h4 style="color: #fff;">Select Your Location</h4>
    
    
    <div class="mb-3 tx">
      
     <a href="https://api.whatsapp.com/send?phone=66846718318" style="color:#fff;">
      Nonthaburi 11120, Thailand</a>
    </div>
   
    <div class="mb-3 tx">
      
     <a href="https://api.whatsapp.com/send?phone=66821493269" style="color:#fff;">
      Bang Kho Laem, Bangkok 10120, Thailand</a>
    </div>
    <div class="mb-3 tx">
      
     <a href="https://api.whatsapp.com/send?phone=66801699149" style="color:#fff;">
      Ratchathewi, Bangkok 10400, Thailand</a>
    </div>
    
      
    
    </div>
    </div>
    <div id="openit">
    <div><h2><a class="popup-close-btn" onclick="closepopup1()">&times;</a></h2></div>
    <div class="form2">
      <img src="img/logo.png" alt="" width="130px" height="100px">
      <h4 style="color: #fff;">Select Your Location</h4>
    
    
    <div class="mb-3 tx">
      
     <a href="tel:+66846718318" style="color:#fff;">
      Nonthaburi 11120, Thailand</a>
    </div>
   
    <div class="mb-3 tx">
      
     <a href="tel:+66821493269" style="color:#fff;">
      Bang Kho Laem, Bangkok 10120, Thailand</a>
    </div>
    <div class="mb-3 tx">
      
     <a href="tel:+66801699149" style="color:#fff;">
      Ratchathewi, Bangkok 10400, Thailand</a>
    </div>
    
      
    
    </div>
    </div>

<?php include_once('footer.php');?>
<div class="sticky-footer mobile">
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-danger phone"><i class="fas fa-phone-alt" onclick="openpopup1()"></i></button>
  
  <button type="button" class="btn btn-warning what"><i class="fab fa-whatsapp" onclick="openpopup()"></i></button>
  <button type="button" class="btn btn-success con">Book A Table</button>
</div>
  </div>
  
  
  
  
  
  
  
  
    <script type="text/javascript">
      function closepopup(){
        document.getElementById('overlay').style.display='none';
      }
      function openpopup(){
        document.getElementById('overlay').style.display='block';
      }
    </script> 

 <script type="text/javascript">
      function closepopup1(){
        document.getElementById('openit').style.display='none';
      }
      function openpopup1(){
        document.getElementById('openit').style.display='block';
      }
    </script> 
  
 
  
  
  
  

</body>

</html>