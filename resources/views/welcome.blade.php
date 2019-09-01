@extends('layouts.base')
@section('title','Home')

@section('content')
{{-- preloaderpage --}}
<div class="preloader"></div>
<div class="preloader-2"></div>

{{-- nav --}}
<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar bg-white">
          <div class="container">
            <a class="navbar-brand absolute" href="index.php"> <img src="images/fav-icon.png" height="50" width="50" class="img mr-2" alt="logo"><strong> Loreto High School Limuru</strong>
            </a></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href='#about'>About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('academics') }}">Academics</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route ('departments') }}">Departments</a>
                  </li>

                <li class="nav-item">
                  <a class="nav-link" href='#staff'>Staff</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="{{ route ('login') }}">Portal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href='#contact'>Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
{{-- end nav --}}
{{-- parallax --}}
<div class="parallax"></div>
{{-- endparallax --}}

{{-- aboutus --}}
<section id="about">

        <div class="container mt-5 about-div">
        <!-- about content -->
        <div class="col-md-12 mt-5 ">
        <h3 style="text-align:center"> <b>About Us</b> </h3>
        <p class="text-justify">Loreto High School Limuru is a National girls school in Limuru Sub-County, Kiambu County. It was founded by the Loreto sisters from Ireland in 1936. Sr. Teresa Joseph O&rsquo;Sulivan, S.M. Dolores Stafford and S.M. Veronica Bradley were the pioneer.The school started with a population of 7 girls and has grown to the current 6 stream with a student population of 1074. The first two students who sat for senior Cambridge certificate examination in 1954 registered excellent performance. These pioneers started a record of excellence in examinations which has maintained to date.</p>
        <h5> <b>KCSE Trend Analysis</b> </h5>

        <div class="wow slideInRight">
        <p><img src="http://loretolimuru.sc.ke/public/resources/content/about2.png" class="img-fluid" alt="image" /></p>

        </div>

        &nbsp;
        <p class="text-justify">Loreto High School Limuru is also very active in co-curricular activities where students compete and excel upto National level. Some of the events include; Technovation challenge (organized by safaricom), Music festivals and Science and Engineering Fair among others. In sports and games it has excelled in Athletics, Basketball, Swimming and badminton among others. This is a result of teamwork between the administration, teachers and students.</p>
        <p class="text-justify">Loreto High School Limuru has also grown in terms of infrastructure. The most recent accomplishment was the completion of four storey dormitory building with capacity of 400 students. This has been made possible by the support from the Government and parents. Our school aspires to develop holistic students by also providing spiritual nourishment. Our sponsor, the Catholic Church through the parish priest has enabled this by providing priests who celebrate every day at 6.30 a.m. To accommodate students from other faiths, Sunday service are conducted as follows; Catholics attend mass in church, Protestants hold service in the school hall while Muslims pray in their allocated room. Loreto sisters offer pastoral programs in the school apart from teaching their subjects of specialization.</p>
        <p class="text-justify">The school has for the last 4 years been ranked 1st position in the Arch-diocese of Nairobi both in academics and holistic education.The school has a well-established information communication technology (ICT) infrastructure which supports both curriculum and co-curriculum well-being of the entire school entity.</p>
        <p class="text-justify">The fruits of education given by Loreto Limuru are visible throughout the country and indeed globally from the contributions of its Alumnae. The school has produced many doctors, lawyers, engineers, architects, teachers, accountants, wonderful mothers and many other outstanding role models like the late Nobel Laureate Prof. Wangari Maathai to mention but a few. <br /> May the Loreto spirit live on. <br/> <i>Cruci Dum Spiro Fido.</i></p>
        </div>
        </div>
        <!-- End content -->

        </div>
    </section>
    <div class="container about-more">
    <a href="#read-more" class="ml-3 mt-4" id="AboutreadMore">More...</a>
    </div>

    <hr>
{{-- endaboutus --}}

{{-- staff --}}

<section id="staff">
        <div class="container mt-3 staff-div">
                <h2 class="text-center  ">Our Staff</h2>
                 <!-- staff content -->
<div class="container">

        <div class="col-md-12">

        <h3 class="text-center mb-3">Administrators</h3>
        </div>

        <div class="row wow slideInLeft">
        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/ChiefPrincipal.jpg" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mrs. Eunice Njenga</h3>
        <p class="staffTitle">Chief Principal</p>
        <a href="#" class="readmore" data-toggle="modal" data-target="#ChiefPrincipal" title="Read More">Read More</a>
        </div>
        </div>
        </div>

            <div class="modal video-modal fade" id="ChiefPrincipal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mrs. Eunice Njenga <span style="font-size: 16px;"> &nbsp; Chief Principal </span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/ChiefPrincipal.jpg" alt="modal image" class="img-fluid" />
                                <p><p>The fruits of education given by Loreto Limuru are visible throughout the country and indeed globally from the contributions of its Alumnae. The school has produced many doctors, lawyers, engineers, architects, teachers, accountants, wonderful mothers and many other outstanding role models like the late Nobel Laureate Prof. Wangari Maathai to mention but a few. <br /> May the Loreto spirit live on. <br /> Cruci Dum Spiro Fido.</p></p>
                            </div>
                    </div>

                </div>

            </div>

        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/DeputyPrincipalAcademic.jpg" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mrs. Mary Kimani</h3>
        <p class="staffTitle">Deputy Principal (Academics)</p>
        <a href="#" data-toggle="modal" data-target="#DeputyPrincipalAcademics" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>

            <div class="modal video-modal fade" id="DeputyPrincipalAcademics" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mrs. Mary Kimani <span style="font-size: 16px;">&nbsp; Deputy Principal (Academics) </span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/DeputyPrincipalAcademic.jpg" alt="modal image" class="img-fluid" />
                                <p><p>In order to cope with rapidity with which knowledge itself changes, today&rsquo;s students must seek to achieve academic excellence. Though education is the most powerful weapon, which you can use to change the world our girls in Loreto know that academic excellence is not just achieving good grades or superior performance but its maximum development of one&rsquo;s intellectual capacities and skills in service to humanity.<br />With this in mind Loreto High School steps up to impact our society by impacting the girl&rsquo;s status of mind, body and spirit. Consequently giants, heroes, doctors, lawyers, architects and teachers have been borne from this esteemed school.Loreto High School is an example of the mustard seed that is so small yet brings forth a great tree. The input of all stakeholders: sponsors, teachers, parents and students is what takes us to the peak academically.<br />Haxley said: Everyman who knows how to read has it in his power to magnify himself, to multiply the ways in which he exists, to make his life full, significant and interesting&rdquo;&nbsp; This is our great calling towards our girls.<br />May God make the girls future worthy of dreams.<br />God bless Loreto High School.</p></p>
                            </div>
                    </div>
                </div>
            </div>

        <div class="col-md-4">

        <div class="staff-card text-center probootstrap-animate">

        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/DeputyPrincipalAdminstration.jpg" alt="staff image" width="203" height="250" /></figure>

        <div class="text">

        <h3>Mrs. Patricia Weber</h3>
        <p class="staffTitle">Deputy Principal (Admin)</p>
        <a href="#" data-toggle="modal" data-target="#DeputyPrincipalAdmin" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="DeputyPrincipalAdmin" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mrs. Patricia Weber <span style="font-size: 16px;">&nbsp; Deputy Principal (Admin) </span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/DeputyPrincipalAdminstration.jpg" alt="modal image" class="img-fluid" />
                                <p><p>Every parent with a girl child dreams of joining Loreto High School Limuru because of the values instilled at the institution. Our core values; justice, sincerity, joy and truth, which are the pillars on which women of integrity emanate. A well rounded person is positively productive in the society and leaves a lasting impact wherever she goes.<br />It is, therefore, our endeavour as the Loreto fraternity, to work in unity, love and peace to take the institution to greater heights of achievement. Listening, following instructions as well as cooperating with others ensures that the Loreto girl leaves the institution well prepared to face the challenging world.<br />The springboard to our excellence in performance has been self-discipline. The young women in our Loreto home know that to compete with the world, knowledge is of essence. It is knowledge that gives power, while discipline defines the character of an individual. As such, all &lsquo;Kotetians&rsquo; agree that intelligence well wrapped with character, is what true education is all about.<br />Young people have inborn talents that are well brought out in high school. Loreto high school has an environment where great talent is discovered and actualize. This is a home of winners and champions, where we mould women of integrity and substance.<br />God bless Loreto Limuru. <br /><br /><br /></p></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>


        <br><br>

        <h3 class="text-center">Head of Departments</h3>
        <br>

        <div class="row wow slideInLeft">
        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/4.jpg" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mr. Frankline Olila</h3>
        <p class="staffTitle">Clubs and Societies</p>
        <a href="#" data-toggle="modal" data-target="#ClubsandSocieties" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="ClubsandSocieties" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mr. Frankline Olila
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/4.jpg" alt="modal image" class="img-fluid" />
                                <p><p>In conformity with the policy of the Ministry of Education Science and Technology to award schools in non-academic areas, Loreto High school Limuru has taken the centre stage in achieving this.This school has 20 active clubs, 4 movements and 6 societies. The programme has Wednesdays from 4.10 to 5.10 pm set aside for club activities and meetings. This is when club meetings are held under the guidance and supervision of various patrons. </p></p>
                            </div>
                    </div>
                </div>
            </div>


        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/5.PNG" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Ms. Waweru</h3>
        <p class="staffTitle">Boarding</p>
        <a href="#" data-toggle="modal" data-target="#Boarding" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>

            <div class="modal video-modal fade" id="Boarding" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Ms. Waweru
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/5.PNG" alt="modal image" class="img-fluid" />
                                <p><p>Loreto Limuru opened its doors in 1936 with seven girls. With time, it has grown from a one stream school to six streams in form one and five streams in forms two, three and four. The school is shy of 1200 students who are housed in ten dormitories. Among the dormitories, there still stand two of them that reminds us of 1936; Haiti, and Rusinga. Each dormitory has a dorm mistress to oversee the welfare of the students.<br />Being a national school, we receive students from all over the country and the boarding team ensures that the girls live in harmony and cohesion. The dormitories were named after famous islands. Plans are underway to name them after its founders. We thank the entire Loreto Limuru parents&rsquo; body for providing their daughters with personal effects so as to make their stay in school comfortable.<br />God bless Loreto Limuru.</p></p>
                            </div>
                    </div>
                </div>
            </div>

        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/Mrs.MaryChege.jpg" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mrs. Mary Chege</h3>
        <p class="staffTitle">Technical and Applied science</p>
        <a href="#" data-toggle="modal" data-target="#TechnicalandAppliedscience" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>

            <div class="modal video-modal fade" id="TechnicalandAppliedscience" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mrs. Mary Chege
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/Mrs.MaryChege.jpg" alt="modal image" class="img-fluid" />
                                <p><p>In form 1 &amp; 2 students are supposed to take one subject from technical 1 and one subject from technical 2. Computer studies is compulsory in form 1. In form 2 second term, students are supposed to choose one of the two technical subjects that they took in form 1. The subject they take should be one that they have passion and perform best. Music, computer studies, art &amp; design and French have fewer students compared to the other three subjects because they require talent and creativity. By and large technical department is very dynamic contributing greatly to the overall performance of the School Mean. The department has a workforce of nine teachers namely:</p></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row wow slideInLeft">
        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/7.png" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mr. Thandi</h3>
        <p class="staffTitle">Games</p>
        <a href="#" data-toggle="modal" data-target="#Games" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="Games" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mr. Thandi
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/7.png" alt="modal image" class="img-fluid" />
                                <p><p>This department is one of the most vibrant and successful among others. It&rsquo;s the department that takes care of the physical health of the girls all the year round. The head of the department is Mr. Thandi, who is also the patron Young farmers club. He has a wide knowledge in all the common ball games, racket games, swimming and athletics. He involved in actual teaching, training and also coaching. The department is a host of several teachers who teaches other subjects but they also offer their valued, expertise in various disciplines that have excelled well. The school offers many games and sports to the girls</p></p>
                            </div>
                    </div>
                </div>
            </div>
        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/8.jpg" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mrs. Rosemary Kuru</h3>
        <p class="staffTitle">Guidance</p>
        <a href="#" data-toggle="modal" data-target="#Guidance" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="Guidance" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mrs. Rosemary Kuru
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/8.jpg" alt="modal image" class="img-fluid" />
                                <p><p>The Loreto High School Guidance and Counselling department aims to deliver a counseling program that promotes student academic achievement, their social and spiritual growth and identification/ awareness and development of their talents and skills.Our guiding principles are grounded in Biblical values and are therefore Christian based. Our core functions support the school&rsquo;s mission to produce women of integrity who will be agents of positive change in the global society. Our focus which primarily is on the student, is two-pronged, that is, continuous improvement in the services we offer our students and the students own performance in and out of class.</p></p>
                            </div>
                    </div>
                </div>
            </div>

        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/9.PNG" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Celina Wanja Mutwiri</h3>
        <p class="staffTitle">Humanities</p>
        <a href="#" data-toggle="modal" data-target="#Humanities" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="Humanities" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Celina Wanja Mutwiri
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/9.PNG" alt="modal image" class="img-fluid" />
                                <p><p>Bed. (arts) Geography and History, Med.(Education psychology)<br /> Department of humanities is made up Christian Religion of Education, History and Geography.</p></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row wow slideInLeft">
            <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/10.PNG" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Dinah Osango</h3>
        <p class="staffTitle">Language</p>
        <a href="#" data-toggle="modal" data-target="#Language" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="Language" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Dinah Osango
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/10.PNG" alt="modal image" class="img-fluid" />
                                <p><p>The Head of Department holds a Bachelor of Education degree from Kenyatta University. She also holds a Masters degree in Kiswahili from the University of Nairobi. The language department senior head is a dedicated Kiswahili teacher, who possesses a wealth of experience in her specialization. She is an ardent Kiswahili teacher and has taught in various Kenyan schools. She has a good record of performance in her teaching career. She has held this position since 2013 to date. Through her leadership, the department has grown from strength to strength over the years.</p></p>
                            </div>
                    </div>
                </div>
            </div>

        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/11.png" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Mrs Elsy Njagi</h3>
        <p class="staffTitle">Mathematics</p>
        <a href="#" data-toggle="modal" data-target="#Mathematics" title="Read More" class="readmore">Read More</a>
        </div>
        </div>
        </div>
            <div class="modal video-modal fade" id="Mathematics" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Mrs Elsy Njagi
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/11.png" alt="modal image" class="img-fluid" />
                                <p><p>The Mathematics Department comprises of nine staff members. The department is headed by Mrs Elsy Njagi. The Mathematics department senior head is a dedicated maths teacher, who possesses a wealth of experience in her specialization. She has taught in various schools in Kenya. She has a good record of performance in her teaching career. She has held this position since 2014 to date. Through her leadership, the department has grown from strength to strength over the years. The success of the department is attributed to the strong team work and commitment amongst the members. The members play crucial role in curriculum delivery and implementation.</p></p>
                            </div>
                    </div>

                </div>

            </div>
        <div class="col-md-4">
        <div class="staff-card text-center probootstrap-animate">
        <figure class="media"><img class="img-fluid" src="http://loretolimuru.sc.ke/public/resources/staff/12.PNG" alt="staff image" width="203" height="250" /></figure>
        <div class="text">
        <h3>Stephen Obuong’</h3>
        <p class="staffTitle">Science</p>
        <a href="#" data-toggle="modal" data-target="#Science" title="Read More" class="readmore">Read More</a>

        </div>

        </div>

        </div>

            <div class="modal video-modal fade" id="Science" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Stephen Obuong’
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>

                            <div class="modal-body text-justify">
                                <img src="http://loretolimuru.sc.ke/public/resources/staff/12.PNG" alt="modal image" class="img-fluid" />
                                <p><p>It is with great pleasure that we welcome you to the science Department &ndash; Loreto High School, Limuru. The Department is an exciting place to be. This department has 3 subjects on offer: Biology, Physics and Chemistry. As per our academic curriculum, chemistry is offered as the compulsory central science while students have the option to take either Biology or Chemistry or both. It&rsquo;s amazing that majority of students at Loreto High School, Limuru opt for three sciences. The fact that a good number of our alumni occupy strategic positions in science oriented industries and organizations is testimony to the quality of training we deliver. We have a team of passionate, highly skilled and committed staff always ready to provide a ladder for any student yearning to move to the next level.</p></p>

                            </div>
                    </div>

                </div>
            </div>

        </div>

        </div>

        </div>
        <!-- end staff content -->
        </div>

        </section>
        <!-- toggle action -->
        <div class="container staff-more wow slideInLeft">
        <a href="#more-staff" class="ml-3 mt-4" id="readMore">More...</a>
        </div>
{{-- end staff --}}


<!-- some other info -->
<div class="container mt-5 ">
        <div class="row wow slideInLeft" data-wow-duration="2s">
          <div class="col-md-4">
                  <h3><i class="fas fa-wrench text-danger mr-3"></i>Vision</h3>
                  <hr>
                  <p class="text-justify">To be a centre for instilling positive values and attaining high academic standards.</p>
          </div>
          <div class="col-md-4">
                  <h3> <i class="far fa-gem text-danger mr-3"></i>Motto</h3>
                  <hr>
                  <p>United in Love and Peace</p>
          </div>
          <div class="col-md-4">
                  <h3> <i class="fas fa-pen text-danger mr-3"></i>Mision</h3>
                  <hr>
                  <p class="text-justify">
                  Provision of quality education through holistic growth of the girl-child in order to nurture women of integrity and intellect who will be agents of positive change.
                  </p>
          </div>

        </div>

        <div class="row mt-5 wow slideInRight" data-wow-duration="2s">

          <div class="col-md-12 text-center">

          <h3 class="h3">
          <i class="fas fa-graduation-cap text-danger mr-3"></i><br>
          Loresto Spirit</h3>
              <hr>
              <p class="text-center text-sm"><i>Cruci Dum Spiro Fido.</i></p>
              <p class="text-center text-sm space-top">(In the Cross, while I breathe, I trust.)</p>
              <p class="text-center text-sm space-top">To be women of <q>Freedom, jusctice and sincerity</q></p>

</p>
              <p class="text-center"><b><q>Mary Ward</q></b></p>


          </div>
        </div>
</div>




{{-- contact us --}}
<section id="contact">
        <div class="container mt-5" data-wow-duration="2s">
                <div class="row">

                <!-- map -->
                        <div class="col-md-4">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0546870793046!2d36.65476461425448!3d-1.1210123991823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f265236e6f6bd%3A0xc30d336b369042f!2sLoreto+High+School+Limuru!5e0!3m2!1sen!2ske!4v1558437181310!5m2!1sen!2ske" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                         </div>

                                <!-- endmap -->
                                <!-- form -->
                    <div class="col-md-4 ml-5">
                    <form>
                        <div class="form-group">
                            <label for="senderName">Names</label>
                            <input type="text" class="form-control" id="senderName" required>
                        </div>
                        <div class="form-group">
                            <label for="senderEmail">Your Email</label>
                            <input type="email" class="form-control" id="senderEmail" required>
                        </div>

                        <div class="form-group">
                            <label for="messageSubject">Subject</label>
                            <input type="text" class="form-control" id="messageSubject" required>
                        </div>

                        <div class="form-group">
                            <label for="Message mr-auto">Message</label>
                            <textarea class="form-control" id="Message" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm btn-block float-left" onClick="alert('Thank you, we will get back asap')">Send Message</button>
                        </div>
                    </form>

                    </div>
                    <!-- endform -->



                        <!-- contact details -->
                        <div class="col-md-3">
                        <div class="mb-2 mt-2 ml-2">
                            <i style="color: #FF0000;" class="fa fa-home" aria-hidden="true"></i>
                            <span class="mb-4 ml-2">Postal Code 00217-Limuru</span>
                         </div>

                         <div class="mb-2 mt-2 ml-2">
                         <i style="color: #FF0000;" class="fa fa-phone"></i>
                        <span class=" ">+254721747039 /733921900</span>
                         </div>

                         <div class="mb-2 mt-2 ml-2">
                            <i style="color: #FF0000;" class="fa fa-envelope" aria-hidden="true"></i>
                            <span class="mt-2 ml-2">admin@loretolimuru.co.ke</span>
                         </div>
                        </div>
                        <!-- endcontact details -->
                </div>
        </div>
        </section>


{{-- end contact us --}}
@endsection
