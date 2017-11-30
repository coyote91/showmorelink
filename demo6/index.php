<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>jQuery Read More/Less Toggle Example</title>
<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

<!-- fuente

   ESTE EJERCICIO FUNCIONA CON SOLO CSS

https://codepen.io/Idered/pen/AeBgF

 -->

 <div>
   <input type="checkbox" class="read-more-state" id="post-1" />

   <p class="read-more-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="read-more-target">Libero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatem!</span></p>

   <label for="post-1" class="read-more-trigger"></label>
 </div>

 <div>
   <input type="checkbox" class="read-more-state" id="post-2" />

   <ul class="read-more-wrap">
     <li>lorem</li>
     <li>lorem 2</li>
     <li class="read-more-target">lorem 3</li>
     <li class="read-more-target">lorem 4</li>
   </ul>

   <label for="post-2" class="read-more-trigger"></label>
 </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="./js/app.js" charset="utf-8"></script>


  </body>
</html>
