
   /*
clothes.html
   */
   // $(function()
   //      {
   //        $('div.textFilter').click(function(){
   //        		$('div.hideFilters').toggleClass("slow");
   //        	});
   //
	//         });
   /*
index.html
   */
       const toggleBtn = document.getElementById('clicker');
       const div = document.getElementById("slide");

       function slideUp(height) {
           div.style.maxHeight = height + 'px';
           setTimeout(() => {
               div.setAttribute('aria-hidden', 'true');
           }, 1);
       }

       function slideDown() {
           div.style.maxHeight = div.scrollHeight + 'px';
           div.removeAttribute('aria-hidden');
       }

       function slideToggle() {
           console.log('hi');
           const height = div.offsetHeight;
           if (height <= 0 || div.hasAttribute('aria-hidden')) {
               return slideDown();
           }
           return slideUp(height);
       }

       toggleBtn.addEventListener('click', slideToggle);
       function f(){
           var width = window.innerWidth;
           if (width >= "1512"){
               let product = document.getElementsByClassName("product1");

               product[0].style.display = 'none';
               product[1].style.display = 'none';
           }
           if (width < "1512"){
               let product = document.getElementsByClassName("product1");

               product[0].style.display = 'grid';
               product[1].style.display = 'grid';
           }

       }
       f();

   function myFunction() {
       var width = window.innerWidth;

       if (width < "705"){

           slideUp();
       }
       if (width > "700"){

           slideDown();
       }
       if (width >= "1512"){
           let product = document.getElementsByClassName("product1");

           product[0].style.display = 'none';
           product[1].style.display = 'none';
       }
       if (width < "1512"){
           let product = document.getElementsByClassName("product1");

           product[0].style.display = 'grid';
           product[1].style.display = 'grid';
       }

   }