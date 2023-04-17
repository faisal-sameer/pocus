<!DOCTYPE html>
<html lang="en">
<head>
  <title>
POCUS
  </title>
  <link rel="icon" href="Logo4.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/csslab.css') }}" rel="stylesheet">

  <link href="{{ asset('css/app-about.css') }}" rel="stylesheet">
  <script src="{{ asset('script/script.js') }}"></script>
  <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="width: 100%">
   
  @yield('navbar')


  {{-- <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card"  style="height: 15vh;">
    <div class="header" style="height: 5%">
        <a href="#home" class="logo  shake-lr"><img id="imglogo" src="/image/logo.png" width="90" height="80" alt="">

        <ul class="nav">
          <li><a onclick="test()" href=""><h3>Log in</h3></a></li>
           <li ><a href="#about"><h3>about us</h3></a></li>
            <li><a href="#courses"><h3>The Courses</h3></a></li>
      
        </ul>
        </div>
    </div>
</div>
   --}}

  <!-- Container (About Section) -->
  
  <main class="py-4">
  @yield('content')
</main>

</body>

<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
  </footer>


  

<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
  
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
  </script>
  <script> 
  
    function formore(){
              window.location.href = '{{ route('AboutCourse') }}'; 
            }
            function Register(){
              window.location.href = '{{ route('Register') }}'; 
            }
            function Login(){
              window.location.href = '{{ route('DashboardCourse') }}'; 
            }
            </script>
            <script>
              // Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btns = document.getElementsByClassName("open-modal-btn");

// Loop through all buttons and add a click event listener
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    // When the button is clicked, display the modal
    modal.style.display = "block";
  });
}

// Get the <span> element that closes the modal
var closeBtn = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

            </script>
  </body>
  </html>