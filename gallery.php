<!DOCTYPE html>
<html>
<head>
	<title>law-firm.com</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- applied css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- my custom css -->
    <link rel="stylesheet" type="text/css" href="css/myCustomStyle.css">
	<link rel="stylesheet" type="text/css" href="css/mediaQuery.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<!-- AOS link -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style type="text/css">
	.banner{
      width: 100%;
      height: 330px!important;
      background-attachment: fixed!important;
   }
.cvgf{
	visibility: hidden;
}
.db-1 , .db-2 , .db-4 , .db-ex-1 , .db-ex-2 , .db-ex-3 , .db-ex-4, .db-ex-5{
  display: none!important;
}
</style>
</head>
<body>
   <?php include "header.php" ?>
  


<!-- gallery -->
<section class="gallery">
    <div class="container-fluid">
      <h2 class="text-center mt-5">Gallery</h2><hr class="gallery-head-txt-border mx-auto mt-n1">
      <div class="row gall-row-gap">
         <div class="col-md-6">
            <img src="images/gallery/gallery-img1.jpg" class="img-fluid gallery-img-w-6">
         </div>
         <div class="col-md-3">
             <img src="images/gallery/gallery-img2.jpg" class="img-fluid gallery-img-w-3">
         </div>
         <div class="col-md-3">
             <img src="images/gallery/gallery-img3.jpg" class="img-fluid gallery-img-w-3">
         </div>
      </div>
         <!-- --------- -->
         <div class="row gall-row-gap">
         <div class="col-md-3">
            <img src="images/gallery/gallery-img1.jpg" class="img-fluid gallery-img-w-3">
         </div>
         <div class="col-md-3">
             <img src="images/gallery/gallery-img2.jpg" class="img-fluid gallery-img-w-3">
         </div>
         <div class="col-md-6">
             <img src="images/gallery/gallery-img3.jpg" class="img-fluid gallery-img-w-6">
         </div>
      </div>
         <!-- ------- -->
         <div class="row mb-5 gall-row-gap">
         <div class="col-md-6">
            <img src="images/gallery/gallery-img1.jpg" class="img-fluid gallery-img-w-6">
         </div>
         <div class="col-md-3">
             <img src="images/gallery/gallery-img2.jpg" class="img-fluid gallery-img-w-3">
         </div>
         <div class="col-md-3">
             <img src="images/gallery/gallery-img3.jpg" class="img-fluid gallery-img-w-3">
         </div>
      </div>
    </div>
</section>



   <?php include "footer.php" ?>


<!-- AOS script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript">
         $(document).on("scroll", function(){
            if
              ($(document).scrollTop() > 46){
              $("#banner").addClass("shrink");
            }
            else
            {
               $("#banner").removeClass("shrink");
            }
         });
      </script>
</body>
</html>