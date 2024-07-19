<!DOCTYPE html>
<html lang="en">

    <head>
        <style >
            
.languag-container .languag{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 0.6rem;
  font-family: 'lato', sans-serif;  
  
  }
  .languag-container .languag .right-languag .outer-layer{
    background-color:#BBBBBB;
    height: 0.4rem;
    width: 5rem;
    border-radius: 0.4rem;
  }
  .languag-container .languag .right-languag .inner-layer{
    background-color: #3d3d3d;
    height: 100%;
    border-radius: inherit;
  }
            </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description"
            content="0xFolio is a free HTML template designed by Ali Raza. It is highly responsive and contains clean code. It uses sass and bootstrap.">
        <meta name="keywords" content="0xFolio, Free HTML Template, Bootstrap Template, Free, CSS Template">
        <meta name="author" content="Ali Raza">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/cont/img/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/cont/img/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/favicon/site.webmanifest">
        <link rel="stylesheet" href="{{asset('/cont/css/main.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <title>0xFolio - Free portfolio template for developers</title>
    </head>

    <body>

        <header class="header" id="header">
            <!-- Top fixed navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark header__navbar">
                <div class="container-lg">
                    <a class="navbar-brand" href="#">{{$n}}</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTopCollapsible" aria-controls="navbarTopCollapsible" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTopCollapsible">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#header">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Profile">Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Education">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#work">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#languag">Languages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>


            <!-- Centered content -->
            <div class="header__content">
                <div class="header__img-box">
                    <img src="{{asset('/cont/img/developer.jpg')}}" alt="John Doe" class="header__img">
                </div>
                <h1 class="heading-primary">
                    <span class="heading-primary--main">{{$n}}</span>
                    <span class="heading-primary--sub">{{$sp}}</span>
                </h1>
                <div class="header__cta-box">
                    <a href="#Profile" class="btn btn--full">Profile</a>
                    <a href="#work" class="btn btn--ghost">Work</a>
                </div>
            </div>


            <!-- Absolute positioned social icons -->
            <div class="header__social-icons social-icons">
                <a href="https://www.facebook.com/khalid.alsaif.50" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-facebook')}}"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-twitter')}}"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/khaled.alsaif.50?igsh=OGQ5ZDc2ODk2ZA==" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-instagram')}}"></use>
                    </svg>
                </a>
                <a href="https://wa.me/qr/SWOKZQFR4XC5M1" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-whatsapp')}}"></use>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/khalid-alsaif-4b486a289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-linkedin')}}"></use>
                    </svg>
                </a>


            </div>

        </header>
        
        <section class="Profile" id="Profile">
            <div class="container">
                <h2 class="heading-secondary">Profile me</h2>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="Profile__content">
                            <p>{{$p1}}</p>
                            <p>{{$p2}}</p>
                            <p>{{$p3}}</p>
                            <p>{{$p4}}</p>
                        </div>
                        <div class="Profile__skills my-4">
                            <h3 class="heading-tertiary">Technologies I know:</h3>
                            <div class="Profile__skills-icons mt-2">
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-html5')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-css3')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-javascript')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-php')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-laravel')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-angular')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-jquery')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-mysql')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-bootstrap')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-sass')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-git')}}"></use>
                                </svg>
                                <svg class="icon Profile__skills-icon">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-linux')}}"></use>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="Profile__cta-box text-center" >
                    <a href="#" class="btn btn--ghost">
                        <svg class="icon btn__icon-left">
                            <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-file-pdf')}}"></use>
                        </svg>
                        Resume
                    </a>
                    <a href="#" class="btn btn--full">Contact</a>
                </div>
            </div>
        
        </section>
        
        <section class="blog-section"id = "Education">
            <div class="container">

                <h2 class="heading-secondary">Education</h2>

                <div class="row justify-content-center">


                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blog">
                            <div class="blog__img-box">
                                <img src="{{asset('/cont/img/blog-1.jpg')}}" alt="Blog 1" class="blog__img img-fluid">
                                <div class="blog__tags-box">
                                    
                                    <a href="#" class="blog__tag"> SANA'A UNIVERSITY</a>
                                </div>
                            </div>
                            <div class="blog__content-box">
                                <div class="blog__meta">
                                    <a href="#" class="blog__author">
                                        <svg class="icon blog__author-icon">
                                            <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-user')}}"></use>
                                        </svg>
                                        Information Technology</a>
                                    <a href="#" class="blog__date">
                                        <svg class="icon blog__date-icon">
                                            <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-calendar')}}"></use>
                                        </svg>
                                        2021- 2024</a>
                                </div>
                                <h3 class="heading-tertiary">College of Computer.</h3>
                                <p class="blog__details"> Bachelor of Science in Information Technology: This program qualifies students to work in various information technology fields, ranging from software design and development to database management and systems analysis. <span>...</span></p>
                                <div class="blog__cta-box text-center">
                                    <a href="#" class="btn btn--ghost blog__btn">Read more <svg
                                            class="icon btn__icon-right">
                                            <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-arrow_right_alt')}}"></use>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-12 mb-2 mt-n1 text-center"><a href="#" class="btn btn--full">Show all</a></div>
                </div>
            </div>
        </section>

        <section class="work" id="work">

            <div class="container">
                <h2 class="heading-secondary">Things I've made</h2>

                <ul class="nav nav-tabs justify-content-center mt-5 mb-4" id="workTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="projects-tab" data-toggle="tab" href="#projects" role="tab"
                            aria-controls="projects" aria-selected="true">PROGECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="snippets-tab" data-toggle="tab" href="#snippets" role="tab"
                            aria-controls="snippets" aria-selected="false"> TAKEN COURSES SECTION </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"> TECHNOLOGIES AND FRAMEWORKS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Linux</a>
                            <a class="dropdown-item" href="#">Kali Linux</a>
                            <a class="dropdown-item" href="#">ASP.NET(Entity Framework and MS
                                SQL)</a>
                            <a class="dropdown-item" href="#"> Bootstra</a>
                            <a class="dropdown-item" href="#">Flutter Flow</a>
                            <a class="dropdown-item" href="#">Laravel</a>
                            <a class="dropdown-item" href="#"> Operating systems(Windows
                                Server)</a>
                            <a class="dropdown-item" href="#"> DataBase SQL Server</a>
                            <a class="dropdown-item" href="#"> UI\UX FIGMA </a>
                            <a class="dropdown-item" href="#">ASP.NET Core Wep  APP(MVC)</a>
                            <a class="dropdown-item" href="#">Odoo</a>
                            <a class="dropdown-item" href="#"> Cisco Packet Tracer</a>

                        </div>
                    </li>

                </ul>

                <div class="tab-content">

                    <div class="work__content work__content--projects tab-pane fade show active" id="projects"
                        role="tabpanel" aria-labelledby="projects-tab">
                        <div class="row justify-content-center">
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="{{asset('/cont/img/project-1.jpg')}}" alt="Project 1" class="project__img img-fluid">
                                    </div>

                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Design Patterns.</h3>
                                        <p class="project__details"> Web Site and Windows application with a unified database.
                                            Adding a drug interaction feature.</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-earth')}}"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-github')}}"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="project-box col-sm-12 col-md-6 col-lg-4 mb-5">
                                <div class="project">
                                    <div class="project__img-box">
                                        <img src="{{asset('/cont/img/project-2.jpeg')}}" alt="Project 2" class="project__img img-fluid">
                                    </div>
                                    <div class="project__content-box">
                                        <h3 class="heading-tertiary">Graduation Project.</h3>
                                        <p class="project__details"> Smart Attendance System. A preparation system utilizing
                                            surveillance cameras to extract facial recognition data from
                                            the NVR device into a Windows application database,
                                            subsequently generating a dashboard using Laravel PHP.</p>
                                        <div class="project__cta-box text-center">
                                            <a href="#" class="btn btn--ghost">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-earth')}}"></use>
                                                </svg>
                                                Demo</a>
                                            <a href="#" class="btn btn--full">
                                                <svg class="icon btn__icon-left icon-earth">
                                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-github')}}"></use>
                                                </svg>
                                                Source</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-n1 text-center"><a href="#" class="btn btn--full">Show all</a>
                            </div>
                        </div>
                    </div>

                    <div class="work__content work__content--snippets tab-pane fade" id="snippets" role="tabpanel"
                        aria-labelledby="snippets-tab">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <table class="table table-sm table-responsive-sm table-bordered table-striped my-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">1</th>
                                            <th scope="col">PYTHON</th>
                                            <th scope="col"> Sana'a University</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">2</th>
                                            <th scope="col"> Web Design </th>
                                            <th scope="col"> Sana'a University</th>
                                            
                                        </tr>
                                     
                                    </tbody>
                                </table>

                                <nav aria-label="Work Code Snippets" class="my-4">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="blog-section"id = "languag">
            <div class="container">
               
             <h2 class="heading-secondary">Languages</h2>
            <div class="languag-container">
            <div class="languag">
                <div class="left-languag">
                    <p> Arabic </p>
                </div>
                <div class="right-languag">
                <div class="outer-layer">
            
               <div class="inner-layer" style="width: 100%">
    
            </div>
            </div>
            </div>
            </div>
            <div class="languag">
                <div class="left-languag">
                    <p> English </p>
                </div>
                <div class="right-languag">
                <div class="outer-layer">
            
               <div class="inner-layer" style="width: 90%">
    
            </div>
            </div>
            </div>
            </div>    
            </div> 
            </div>
        </section>

        
        <section class="contact" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <h2 class="heading-secondary ">Contact me</h2>
                        <form>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input required type="text" class="form-control" id="Username">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input required type="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input required type="text" class="form-control" id="subject">
                            </div>

                            <div class="form-group">
                                <label for="message">Your message</label>
                                <textarea required type="text" class="form-control" id="message" rows="4"></textarea>
                            </div>


                            <button type="submit" class="mt-2 btn btn--full float-right">Send <svg
                                    class="icon btn__icon-right">
                                    <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-paper-plane')}}"></use>
                                </svg></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
       
        
        
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-12  py-5 text-center mb-2">
                        <h3 class="mb-4 heading-tertiary footer__social-heading">{{$n}}</h3>
                        <!-- Absolute positioned social icons -->
                        <div class=" social-icons social-icons--lg">
<a href="https://www.facebook.com/khalid.alsaif.50" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-facebook')}}"></use>
                    </svg>
                </a>
                <a href="#" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-twitter')}}"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/khaled.alsaif.50?igsh=OGQ5ZDc2ODk2ZA==" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-instagram')}}"></use>
                    </svg>
                </a>
                <a href="https://wa.me/qr/SWOKZQFR4XC5M1" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-whatsapp')}}"></use>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/khalid-alsaif-4b486a289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-icons__link">
                    <svg class="icon social-icons__icon">
                        <use xlink:href="{{asset('/cont/img/SVG/symbol-defs.svg#icon-linkedin')}}"></use>
                    </svg>
                </a>

                        </div>
                    </div>
                  
                    <div class="col-12 mt-auto">
                        <nav class="nav footer__nav justify-content-around">
                            <a class="nav-link active" href="#header">Home</a>
                            <a class="nav-link" href="#work">Projects</a>
                            <a class="nav-link" href="#Education">Education</a>
                            <a class="nav-link" href="#contact">Contact</a>
                        </nav>
                    </div>
                </div>
            </div>

        </footer>



        <script src="{{asset('/cont/js/vendors/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('/cont/js/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('/cont/js/vendors/popper/popper.min.js')}}"></script>
        <script src="{{asset('/cont/js/vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('/cont/js/script.js')}}"></script>
    </body>

</html>
