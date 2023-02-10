   //  for li active class on current page 
   
 let navlinks = document.querySelectorAll(".nav-link");
 navlinks.forEach(a=>{
   a.addEventListener('click',function() {
  navlinks.forEach (a=>a.classList.remove('active'));
  this.classList.add('active');
   });
 });
//  FOR  toggler button change icon style

   $(document).ready(function(){
    $(".open").click(function(){
       $(".close").addClass("active");
       $(this).addClass("close");
    })
    $(".close").click(function(){
       $(this).removeClass("active");
       $(".open").removeClass("close");
    })
       });
// FOR sticky navbar style 


       $(window).on('scroll',function(){
        if ($(window).scrollTop()) {
  $('nav').addClass('white')
 }
 else {
     $('nav').removeClass('white');
 }
         }); 

          