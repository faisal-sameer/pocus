@extends('welcome')
@section('navbar')
    <header class="header">
        <div class="brand">
            <div id="nav-burger" class="nav-burger is-active">
                <img src="/image/hamburger-button.png" alt="Menu" class="nav-icon">
            </div>
            <a href="/" class="brand-logo">
                <img id="imglogo" src="/image/logo.png" width="100" height="100" alt="">
            </a>
            <div id="nav-search" class="nav-search is-hidden">

                <img src="/image/cancel-button.png" alt="" id="nav-search-cancel" class="nav-icon">
            </div>
        </div>
        <nav id="nav" class="nav">
            <div id="nav-cancel" class="nav-cancel">
                <img src="/image/cancel-button.png" alt="" class="nav-icon">
            </div>
           {{-- 
            <div class="w3-dropdown-hover nav-link">
                <img src="/image/arabic.png" width="50" height="50" alt="" class="nav-icon">
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">English</a>
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">عربي</a>
                </div>
            </div>comment --}}
            <a href="{{ route('Register') }}" class="nav-link">
                <h3>Register Course</h3>
            </a>
            <a href="{{ route('login') }}" class="nav-link">
                <h3>Log in</h3>
            </a>
            <a href="/" class="nav-link">
                <h3>Home</h3>
            </a>
        </nav>
    </header>
@endsection
@section('content')
    <div id="about" style="direction: ltr" class="container-fluid bounce-in-top ">
        <div class="row">           
             <div class="col-sm-8 notification-dashboard bounce-in-top">

          <p>
            Welcome to The POCUS!

At The POCUS, we are dedicated to providing high-quality online training in Point-of-Care Ultrasound (POCUS) to healthcare professionals. Our mission is to empower students with the knowledge and skills necessary to effectively utilize POCUS in their clinical practice. Through our comprehensive courses and expert instruction, we strive to transform patient care and enhance diagnostic accuracy.

Expert Instructors:

The POCUS boasts a team of expert instructors who are highly experienced and accomplished in the field of POCUS. Our instructors are recognized for their expertise, passion for teaching, and commitment to the success of our students. With their guidance, you will receive comprehensive instruction and personalized support throughout your POCUS learning journey.

Mission and Objectives:

Our mission is to revolutionize healthcare by equipping professionals with the skills to integrate POCUS seamlessly into their practice. By the end of our courses, participants will:

- Develop a solid foundation in POCUS principles and techniques.
- Gain proficiency in performing various POCUS examinations across different medical specialties.
- Enhance diagnostic accuracy and improve patient management through the integration of POCUS findings.
- Acquire the ability to interpret and communicate POCUS results effectively.

Course Features and Curriculum:

The POCUS offers a comprehensive curriculum tailored to meet the diverse needs of healthcare professionals. Our courses feature:

- Engaging lectures delivered by our expert instructors, simplifying complex concepts.
- Interactive learning materials, including quizzes and practical exercises, to reinforce understanding and application.
- Extensive coverage of POCUS applications in various medical specialties, ensuring a well-rounded education.
- Access to supplementary resources, reference materials, and ongoing support for an enhanced learning experience.

Join The POCUS today and embark on a transformative journey in POCUS education!

Enroll now to unlock the full potential of POCUS in your clinical practice. Whether you are a seasoned practitioner looking to expand your diagnostic capabilities or a beginner eager to explore the world of ultrasound, our comprehensive courses will equip you with the knowledge and skills to excel.

For inquiries or more information, please contact us using the form below. We look forward to being your trusted partner in your POCUS education.
          </p>
             </div>
            <div class="col-sm-3" style="margin-top: 1.2%">
                <img id="im" src="/image/p1.png" alt="">
            </div>

        </div>
    </div>


    @endsection

    @section('script')

 
      <script>
       var x = 0;
        var images = new Array("/image/p1.png","/image/p2.jpeg");
        var i = setInterval(auto, 3000);

        function auto()
          {
            x++;
            if (x == images.length)
               x=0;
            document.getElementById('im').src=images[x];      
          }
              </script>

              
@endsection