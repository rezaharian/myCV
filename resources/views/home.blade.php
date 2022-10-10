@extends('template')
@section('content')
    @include('nav')
    <div class="row ">
        <h1>

        </h1>
    </div>
    <div class="row " id="1">
        <div class="col-md-6   ">
            <p class=" mt-5 ms-4"
                style="font-size: 40pt; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">
                <strong style="font-size: 160%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                    class="text-warning">
                    About Me {
                </strong> <br>
                <strong class="text-warning">
                    My Porto |
                </strong>
                <b class="text-light "
                    style="font-size: 40pt; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">My Project</b>
            </p>
            <p class="text-light ms-4 fs-3">
                I am a beginner programmer who always tries new things and continues to deepen my skills in the programming
                world.
            </p>
            <div class=" ms-4">
                <button type="button  rounded-pill" class="btn btn-outline-warning text-center">Download</button>
            </div>
            <div class=" ms-4 mt-4 opacity-100  ">
                <a href="http://facebook.com"><i class="bi m-1 fs-3 bi-facebook"></i></a>
                <a href="http://facebook.com"><i class="bi m-1 fs-3 bi-instagram"></i></a>
                {{-- <a href="http://facebook.com"><i class="bi m-1 fs-3 bi-whatsapp"></i></a> --}}
                <a href="http://facebook.com"><i class="bi m-1 fs-3 bi-github"></i></a>
                <a href="http://facebook.com"><i class="bi m-1 fs-3 bi-linkedin"></i></a>
                {{-- <a href="http://facebook.com"><i class="bi m-1 fs-3 bi-envelope-fill"></i></a> --}}

                <div class=" ms-4  opacity-100 text-warning ">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
            </div>

        </div>

        <div class="col-md-6 ">
            <img style="width: 100%; " src="https://media1.giphy.com/avatars/nf-giphy/0LyJOrmShlZI.gif"
                class="img-fluid mt-5" alt="...">
        </div>
    </div>
    <div class="row mt-5" id="2">
        <div class="text-center mt-5">
            <strong style="font-size: 260%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="text-warning">
                Welcome To My Site
            </strong>
            <br>
            <p style="font-size: 150%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="">
                welcome to my website (rezaharian.site), please browse about me as you like,
                <br>
                on this website there is all information about me that is commercial. please don't
                <br>
                misuse the information about me, because it's a big offence. <br>
                I am also a teacher in the field of technology.
            </p>
        </div>
        <div class="text-center mt-3 mb-2 justify-content-center">
            <iframe src="https://www.youtube.com/embed/rgYwf6QGKh8" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="mt-5">
        <br class="mt-3">
    </div>
    <div class="row text-center mt-3 " id="3">
        <div class="text-center">
            <strong style="font-size: 260%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="text-warning">
                My Project
            </strong>
            <br>
            <p style="font-size: 150%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="mb-5">
                These are some of the projects that I have done and are currently working on
            </p>
            <div class="row  mb-5 justify-content-center ">
                <div class="col-md-3">
                    <div class="card bg-dark " style="width: 20rem;">
                        <img src="https://sokrates.id/wp-content/uploads/2019/07/apps.jpg" class="card-img-top"
                            src="www.smkattaqwa01.sch.id">
                        <div class="card-body ">
                            <b class="card-text ">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark " style="width: 20rem;">
                        <img src="https://sokrates.id/wp-content/uploads/2019/07/apps.jpg" class="card-img-top"
                            src="www.smkattaqwa01.sch.id">
                        <div class="card-body ">
                            <b class="card-text ">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark " style="width: 20rem;">
                        <img src="https://sokrates.id/wp-content/uploads/2019/07/apps.jpg" class="card-img-top"
                            src="www.smkattaqwa01.sch.id">
                        <div class="card-body ">
                            <b class="card-text ">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</b>
                        </div>
                    </div>
                </div>
                <div>
                    <br>
                </div>

            </div>
        </div>
    </div>
    <div class="row mb-5" id="4">
        <div class=" text-center">
            <strong style="font-size: 260%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="text-warning">
                Experience & Skill
            </strong>
        </div>
        <div class="col-md-6 bg-success ">
            <div class="row justify-content-center mt-3  m-5">
                <ul class="vertical-point-progress">
                    <li>
                        <b class="text-warning">SMK Ristek Kinik & SMK Global Cendekia Jakarta | 2018 & 2021 </b> <br>
                        As a computer network engineering teacher and web programmer
                    </li>
                    <li>
                        <b class="text-warning">PT Myconsulting Business Asia | 2018-2019 </b> <br>
                        As an external audit, graphic d esinger and IT support
                    </li>
                    <li>
                        <b class="text-warning">PT Star Jaya Sejahtera | 2019-2020 </b> <br>
                        As IT Support and digital marketing specialist
                    </li>
                    <li>
                        <b class="text-warning">SMK Attaqwa 01 Bekasi | 2021-2022 </b> <br>
                        As a computer network engineering teacher and web programmer
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6  bg-danger">
            <div class="row justify-content-center text-center mt-4"
                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <div class="col-md-8 m-3 text-warning">
                    <h5>Programming</h5>
                    <div class=" opacity-50">


                        <marquee scrollamount="5" behavior="alternate" direction="">
                            <img width="55px"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png"
                                class="img-thumbnail" alt="...">
                            <img width="55px"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png"
                                class="img-thumbnail" alt="...">
                            <img width="70px"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png"
                                class="img-thumbnail" alt="...">
                            <img width="60px" src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Vue.png"
                                class="img-thumbnail" alt="...">
                            <img width="60px"
                                src="https://seeklogo.com/images/P/postman-logo-0087CA0D15-seeklogo.com.png"
                                class="img-thumbnail" alt="...">
                            <img width="60px" src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                                class="img-thumbnail" alt="...">
                            <img width="60px"
                                src="https://seeklogo.com/images/W/wordpress-logo-24439D45A6-seeklogo.com.png"
                                class="img-thumbnail" alt="...">
                            <img width="110px"
                                src="https://www.freepnglogos.com/uploads/html5-logo-png/html5-logo-best-web-design-psd-html-cms-development-ecommerce-6.png"
                                class="img-thumbnail" alt="...">
                            <img width="100px"
                                src="https://rinaldojonathan.com/wp-content/uploads/2017/11/3-2-php-logo-png-picture.png"
                                class="img-thumbnail" alt="...">
                            <img width="85px" src="https://1000logos.net/wp-content/uploads/2020/09/Java-Logo.png"
                                class="img-thumbnail" alt="...">
                        </marquee>
                    </div>

                    <h5 class="mt-4">Networking & Design </h5>
                    <div class=" opacity-50">

                        <marquee scrollamount="1" behavior="alternate" direction="">
                            <img width="130px"
                                src="https://toko.nale.co.id/wp-content/uploads/2017/06/logo-mikrotik-png.png"
                                class="img-thumbnail" alt="...">
                            <img width="90px"
                                src="https://www.freepnglogos.com/uploads/cisco-png-logo/new-cisco-logo-png-1.png"
                                class="img-thumbnail" alt="...">
                            <img width="55px"
                                src="https://seeklogo.com/images/P/photoshop-2020-logo-37B02055A4-seeklogo.com.png"
                                class="img-thumbnail" alt="...">
                            <img width="55px"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Adobe_Premiere_Pro_Logo.svg/1200px-Adobe_Premiere_Pro_Logo.svg.png"
                                class="img-thumbnail" alt="...">
                            <img width="55px"
                                src="https://seeklogo.com/images/C/coreldraw-x7-logo-747B0DC253-seeklogo.com.png"
                                class="img-thumbnail" alt="...">
                            <img width="48px"
                                src="https://upload.wikimedia.org/wikipedia/commons/6/65/Microsoft_Office_logo_%282013%E2%80%932019%29.png"
                                class="img-thumbnail" alt="...">
                        </marquee>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <div class="row mb-5" id="4">
        <div class=" text-center">
            <strong style="font-size: 260%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="text-warning">
                Sertificate & Education
            </strong>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 justify-content-center ">
                <div class="text-center m-3">
                    <div class="row row-cols-3 row-cols-md-3 g-2">
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/jp.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/db sql.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/db design.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/ccna.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/ccna2.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/cmitc.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100"><br>
                                <img src="img/sertisem.jpg" class="card-img-top" alt="..."><br>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-30">
                                <img src="img/mtcna.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-30">
                                <img src="img/mtcna.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 justify-content-center">
                <div class="row justify-content-center mt-3  m-3">
                    <ul class="vertical-point-progress">
                        <li>
                            <b class="text-warning">Madrasah Ibtidaiyah Muh 02 Tulakan </b> <br>
                            Pacitan | 2004 - 2010
                        </li>
                        <li>
                            <b class="text-warning">Madrasah Tsanawiyah Muh 02 Tulakan </b> <br>
                            Pacitan | 2010 - 2013
                        </li>
                        <li>
                            <b class="text-warning">SMK Attaqwa 01 Tarumajaya </b> <br>
                            Teknik Komputer & Jaringan <br> Bekasi | 2016 - 2018
                        </li>
                        <li>
                            <b class="text-warning">STMIK Bani Saleh Bekasi</b> <br>
                            Teknik Informatika <br> Bekasi | 2018 - 2022
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5" id="4">
        <div class=" text-center">
            <strong style="font-size: 260%; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"
                class="text-warning">
                Contact
            </strong>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-6 mt-4">
            <h1>kontak</h1>
          </div>
          <div class="col-md-6 mt-4">
            <h1>kontak jg</h1>
          </div>
        </div>
      </div>
@endsection
