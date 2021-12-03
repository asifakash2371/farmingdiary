<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farming Diary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h1 {
            text-align: center;
            padding-top: 20px;
        }

        .a1 {
            padding-top: 10px;
            margin-left: 400px;
            margin-right: 400px;
            text-align: center;
        }





        .btn1 {
            margin-left: 700px;
            background-color:#12AD2B;
        }

        img {
            height: 300px;
            width: 400px;
            overflow: hidden;



        }
        .card-img-top{
            height:100%;
            width: 100%;
            overflow: hidden;
}
        .lastpic {
            padding-top: 40px;
        }
        body{
            overflow-x: hidden;
        }
    </style>
</head>

<body>

    <header style="background-color: #B0BF1A;">
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand text-secondary font-weight-bold font-italic" >FARMING DIARY</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="{{route('product')}}">Our Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="#">Contact Us</a>
                </li>
                @if (auth()->check())
                	<li><a class="nav-link text-white font-weight-bold" href="#">{{auth()->user()->name}}</a></li>
                  <a class="nav-link text-white font-weight-bold" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none;">
                    @csrf
                </form>
				@else 
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold" href="{{route('register')}}">Register</a>
                </li>
                @endif
            </ul>

        </nav>
        <h1>WELCOME TO FARMING DIARY</h1>
        <h1>EXPAND YOUR VISION TOWARDS AGRO-LIFE</h1>
        <p class="a1">This is a platform open for everyone in order to exploring knowledge regarding agricultural activities. You can collaborate, explore, co-operate or contribute here as your will wish. It is ready to serve you 24/7 hours however you want. Have a good day with the blessing of Farming Diary.</p>
        <button class="btn1" type="button">FIND OUT MORE</button>
    </header>
    <section>
        <div class="container" style="padding-top: 60px;">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <i class="fas fa-thumbs-up fa-3x"></i>
                    <h4>Easy Access</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium mollitia
                        autem veniam vero molestias ab velit recusandae? Error minus harum dolore pariatur, numquam
                        totam et dolorem sed itaque unde.</p>
                </div>

                <div class="col-lg-4 text-center">
                    <i class="fas fa-address-card fa-3x"></i>
                    <h4>Rich Information</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium mollitia
                        autem veniam vero molestias ab velit recusandae? Error minus harum dolore pariatur, numquam
                        totam et dolorem sed itaque unde.</p>
                </div>

                <div class="col-lg-4 text-center">
                    <i class="far fa-address-book fa-3x"></i>
                    <h4>Modern Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium mollitia
                        autem veniam vero molestias ab velit recusandae? Error minus harum dolore pariatur, numquam
                        totam et dolorem sed itaque unde.</p>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <i class="fas fa-thumbs-up fa-3x"></i>
                    <h4>Clean Code</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium mollitia
                        autem veniam vero molestias ab velit recusandae? Error minus harum dolore pariatur, numquam
                        totam et dolorem sed itaque unde.</p>
                </div>

                <div class="col-lg-4 text-center">
                    <i class="fas fa-ad fa-3x"></i>
                    <h4>Reasy To Shine</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium mollitia
                        autem veniam vero molestias ab velit recusandae? Error minus harum dolore pariatur, numquam
                        totam et dolorem sed itaque unde.</p>
                </div>

                <div class="col-lg-4 text-center">
                    <i class="fas fa-american-sign-language-interpreting fa-3x "></i>
                    <h4>Free For Everyone</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium mollitia
                        autem veniam vero molestias ab velit recusandae? Error minus harum dolore pariatur, numquam
                        totam et dolorem sed itaque unde.</p>
                </div>
            </div>
        </div>
    </section>
    <!--first row-->
    <section>

        <div class="row" style="padding-top: 60px;">
            <div class="col-lg-3 ">

                <img
                    src="https://thehealthyfish.com/wp-content/uploads/2017/05/tilapiafarm.jpeg" />
            </div>



            <div class="col-lg-3 ">
                <img
                    src="https://www.iberdrola.com/wcorp/gc/prod/en_US/comunicacion/smart_farming_mult_1_res/SmartFarming_746x419.jpg" />

            </div>

            <div class="col-lg-3 ">
                <img
                    src="https://www.dailypioneer.com/uploads/2019/story/images/big/farming-as-smart-business-2019-09-28.jpg" />

            </div>

            <div class="col-lg-3 ">
                <img
                    src="https://cdn.vox-cdn.com/thumbor/G-mlgGdUu1Jox3XEc-uU7DHjtlc=/0x0:4581x3021/920x613/filters:focal(2154x724:2886x1456):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/67557756/GettyImages_120083561.0.0.jpg" />
            </div>
        </div>

    </section>
    <!--second row-->
    <section>

        <div class="row">
            <div class="col-lg-3">

                <img
                    src="https://1.bp.blogspot.com/-b6Uy1vVgDR8/Uf80wPpCrYI/AAAAAAAAAMY/91JHKRWGlWE/s600/Dairy+Farming+India.jpg" />
            </div>



            <div class="col-lg-3 ">
                <img
                    src="https://cdn.britannica.com/39/95439-050-78B87F34/Adult-sheep-lambs.jpg" />

            </div>

            <div class="col-lg-3">
                <img
                    src="https://www.cleanenergywire.org/sites/default/files/styles/gallery_image/public/paragraphs/images/f2f-targets-eu-illustration.jpg?itok=lbkcVEnq" />

            </div>

            <div class="col-lg-3 text-center">
                <img
                    src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111.jpg" />
            </div>
        </div>

    </section><br><br>
<!--Developers-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="card">
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-photo/handsome-confident-smiling-man-with-hands-crossed-chest_176420-18743.jpg?size=626&ext=jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">JOHN</h4>
                            <h5>FOUNDER</h5>
                            

                        </div>
                    </div>

                </div>


                <div class="col-lg-3">

                    <div class="card">
                        <img class="card-img-top"
                            src="https://media.istockphoto.com/photos/smiling-man-outdoors-in-the-city-picture-id1179420343?k=20&m=1179420343&s=612x612&w=0&h=G2UGMVSzAXGAQs3pFZpvWlHNRAzwPIWIVtSOxZHsEuc="
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">JACK</h4>
                            <h5>CO-FOUNDER</h5>
                            

                        </div>
                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="card">
                        <img class="card-img-top"
                            src="https://img.freepik.com/free-photo/pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction_176420-15187.jpg?size=626&ext=jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">BILLI</h4>
                            <h5>REACT DEVELOPER</h5>
                            

                        </div>
                    </div>

                </div>

                <div class="col-lg-3 ">

                    <div class="card">
                        <img class="card-img-top"
                            src="https://media.istockphoto.com/photos/glasses-girl-in-white-picture-id1089633230?k=20&m=1089633230&s=612x612&w=0&h=LNxo51TlLc-a8hNjJk5foJC9CI842yor3RvgNosIuKw="
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">MARY</h4>
                            <h5>LARAVEL DEVELOPER</h5>
                            

                        </div>
                    </div>

                </div>

            </div>

    </section>
    

    
    <footer>
        <section class="bg-info text-white pt-5">
            
                <div class="row" style="text-align: center;">
                    <div class="col-4">
                        <h5>LOCATION</h5>
                        <h6>SHUKRABAD,DHANMONDI<br>DHAKA</h6>
                    </div>
                    <div class="col-4">
                        <h5>SHARE WITH LOVE</h5>
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-linkedin fa-2x"></i>
                    </div>
                    <div class="col-4">
                        <h5>FARMING DIARY</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt quod in itaque voluptate tenetur alias quae pariatur. Nobis quos vel quasi magni, veritatis at tempora rem pariatur ex molestiae voluptatem!</p>
                    </div>
                    
                </div>
                <div class="aka" style="text-align: center; background-color:#15317E; height: 90px; padding-top: 20px;" >
                    <p>COPYRIGHT@2021 FARMING DIARY ALL RIGHT RESERVED <br> MADE BY ASIF AKASH</p>
                </div>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

</html>