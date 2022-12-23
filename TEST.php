


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orange</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-lt-std-55" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <div class="header">

   <div class="container">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

         <div class="carousel-indicators">
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         </div>

         <div class="carousel-inner">
            

            <div class="carousel-item active" >
               <div class="item-container">
                  
                  <div class="item-info">
                     <div class="header-title">Delivery <span>services</span></div>
                     <div class="header-subtitle">Many <span>delivery services</span> offer <br> tracking and insurance <br> for their <span>shipments</span></div>
                     <div class="btn-1"><a class='button-1' href='#'>Detalii aici</a></div>
                  </div>

                  <div class="item-img"><img src="./img/1.png" class="img-block" alt="..."></div>

               </div>
            </div>

            <div class="carousel-item">
               <div class="item-container">

               <div class="item-img"> <img src="./img/1.png" class="img-block" alt="..."></div>

               <div class="item-info">
                  <div class="header-title">Delivery <span>services</span></div>
                  <div class="header-subtitle">Many <span>delivery services</span> offer <br> tracking and insurance <br> for their <span>shipments</span></div>
                  <div class="btn-1"><a class='button-1' href='#'>Detalii aici</a></div>
               </div>

            </div>
            </div>
         </div>

      </div>

   </div>

  </div>


  <div class="cards">

   <div class="container">

      <div class="cards-holder">

         <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">

               <div class="card-component">

                  <div class="card-img" >
                     <img src=".//img/3.png" alt="">
                  </div>

                  <div class="card-text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, pariatur atque quisquam corrupti sint consequuntur quam ducimus distinctio commodi modi similique asperiores, molestias sit qui quasi soluta placeat dolore eius?
                     
                  </div>

               </div>

            </div>

            <div class="col">

               <div class="card-component">

                  <div class="card-img">
                     <img src=".//img/4.png" alt="">
                  </div>

                  <div class="card-text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, pariatur atque quisquam corrupti sint consequuntur quam ducimus distinctio commodi modi similique asperiores, molestias sit qui quasi soluta placeat dolore eius?
                     
                  </div>

               </div>

            </div>

            <div class="col">

               <div class="card-component ">

                  <div class="card-img">
                     <img src=".//img/2.png" alt="">
                  </div>

                  <div class="card-text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, pariatur atque quisquam corrupti sint consequuntur quam ducimus distinctio commodi modi similique asperiores, molestias sit qui quasi soluta placeat dolore eius?
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

  </div>


<div class="black-block">

   <div class="container">

      <div class="block-holder">

         <div class="block-text">Vreau să fiu contactat</div>

         <form method="post" >

            <div class="block-info">

               <div class="info-con" style="flex-wrap: nowrap;">
                  
                  <div class="info-left">

                     <div class="from-group">
                        <label for="name" class="from-label">Nume</label>
                        <input type="text" name="name" class="form-control" required id="name">
                     </div>

                     <div class="from-group">
                        <label for="email" class="from-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required id="email">
                     </div>

                     <div class="from-group">
                        <label for="Serviciul" class="from-label">Serviciul</label>
                        <select class="form-select" aria-label="Default select example" required id="select" name="select">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                     </div>

                     <div class=" sm-6 xs-12">

                        <div class="form-group"> 
                           <label class="from-label" for="date">Data când vrei să fii contactat</label>
                           <input class="form-select"  id="data" name="date" required type="form-select"/>
                        </div>

                     </div>

                  </div>

                  <div class="info-right" style="
                  display: flex;
                  flex-direction: column;
                  justify-content: space-between;">

                     <div class="block-comment">
                        <div class="mb-3">
                           <label for="exampleFormControlTextarea1" class="form-label">Messaj</label>
                           <textarea class="form-control" id="comment" rows="3" style="height: 250px;" name="comment" required></textarea>
                        </div>
                     </div>

                     <div class="block-check">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="check" for="check" id="check" required>
                           <p class="check-text">Sunt de accord cu prelucrarea datelor introduse</p>
                        </div>
                     </div>

                  </div>

                  
               </div> 

               <div class="col-12">
                  <button class="button-2"  type="submit">Tremite</button>
               </div>

            </div>

         </form>

      </div>

   </div>

</div>

<div class="footer">
   <footer>
         <div class="container">
         <div class="footer-text">Copyright by © Company name</div>
         </div>
   </footer>
</div>


<?php

require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/function.php';

if(!empty($_POST)){
    debug($_POST);
    $fields = load($fields);
    debug($fields);
    if($errors = validate($fields)){
        debug($errors);
    }else{
        echo 'OK';
    }
}

?>

   <script src="./script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>