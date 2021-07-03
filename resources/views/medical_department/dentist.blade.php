@extends('layout.main')
@section('content')


<style>
.go-down{
    position: absolute;
    bottom: 50px;
    width: 26px;
    height: 40px;
    border: 1px solid #fff;
    display: block;
    border-radius: 4px;
    text-align: center;
    left: 50%;
    margin-left: -13px;
}

 .go-down .fa{
    color: #fff;
    animation: goDown 1s ease infinite;
    -webkit-animation: goDown 1s ease infinite;
    -moz-animation: goDown 1s ease infinite;
    -o-animation: goDown 1s ease infinite;
}

@keyframes  goDown {
    0%{transform: translateY(0);opacity: 0.3;}
    100%{transform: translateY(11px);}
}

@-webkit-keyframes goDown {
    0%{transform: translateY(0);opacity: 0.3;}
    100%{transform: translateY(11px);}
}

@-moz-keyframes goDown {
    0%{transform: translateY(0);opacity: 0.3;}
    100%{transform: translateY(11px);}
}

@-o-keyframes goDown {
    0%{transform: translateY(0);opacity: 0.3;}
    100%{transform: translateY(11px);}
}


.single-blog-item-con{
  display: flex;
    flex-wrap: wrap;
}

</style>



 <!-- ***** Welcome Area Start ***** -->
 <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">
      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/Top-Internal-Medicine-Subspecialties-apply-now.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
                <p data-animation="fadeInUp" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                  offer you.</p>
                  <div class="welcome-btn-group">
<!--                                     <a href="http://127.0.0.1:8000/patient/register" class="btn dento-btn mx-2" data-animation="fadeInDown"
                                        data-delay="500ms">Join Us</a>
                                    <a href="http://127.0.0.1:8000/patient/login"" class="btn dento-btn mx-2 active" data-animation="fadeInDown"
                                        data-delay="700ms">Sign In</a> -->
                                          <!-- Start Go down -->



                                </div>
              </div>
            </div>
          </div>
        </div>
                                            <a href="#about" class="go-down">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </a>
                                        <!-- End Go down -->
      </div>

      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/Internal.png);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text text-center">
                <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
                <p data-animation="fadeInDown" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                  offer you.</p>
                  <div class="welcome-btn-group">
<!--                                     <a href="http://127.0.0.1:8000/patient/register" class="btn dento-btn mx-2" data-animation="fadeInDown"
                                        data-delay="500ms">Join Us</a>
                                    <a href="http://127.0.0.1:8000/patient/login"" class="btn dento-btn mx-2 active" data-animation="fadeInDown"
                                        data-delay="700ms">Sign In</a> -->

                                          <!-- Start Go down -->


                                </div>
              </div>
            </div>
          </div>
                                            <a href="#about" class="go-down">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </a> 
        </div>
      </div>
                                        
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ****** About Us Area Start ******* -->
  <section class="dento-about-us-area section-padding-100-0">
    <div class="container" id="about">
      <div class="row align-items-center">
        <!-- About Us Thumbnail -->
        <div class="col-12 col-md-6">
          <div class="about-us-thumbnail mb-50">
            <img style ="height:500px;"src="./img/bg-img/internal-medicine3.jpg" alt="">
          </div>
        </div>
        <!-- About Content -->
        <div class="col-12 col-md-6">
          <div class="about-us-content mb-50">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2>About</h2>
              <div class="line"></div>
            </div>
            <p>             also known as dental medicine and oral medicine, is a branch of medicine that consists of the study, diagnosis, prevention, and treatment of diseases, disorders, and conditions of the oral cavity, commonly in the dentition but also the oral mucosa, and of adjacent and related structures and tissues, particularly in the maxillofacial (jaw and facial) area.
</p>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6> Our Experience</h6>
              <div id="bar1" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="80"></span>
              </div>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Modern Equipment</h6>
              <div id="bar2" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="90"></span>
              </div>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Friendly Staff</h6>
              <div id="bar3" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="85"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ****** About Us Area End ****** -->

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <!-- Cool Facts Area Start -->
  <section class="dento-cta-area">
    <div class="container">
      <div class="row">
        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_genius"></i>
            <h2><span class="counter">20</span></h2>
            <h5>Years Of Experience</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_heart_alt"></i>
            <h2><span class="counter">700</span>+</h2>
            <h5>Happy Patients</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_book_alt"></i>
            <h2><span class="counter">120</span></h2>
            <h5>Certificate</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_id"></i>
            <h2><span class="counter">40</span>+</h2>
            <h5>Doctors</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cool Facts Area End -->

  <!-- Dento Service Area Start -->

  <!-- Dento Service Area End -->
  <section class="dento-blog-area section-padding-100-0 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Do you know !</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Item -->
                
                <!-- Single Blog Item -->
                <div class="col-12 col-md-6 col-lg-4 single-blog-item-con">
                    <div class="single-blog-item mb-100">
                        <a href="#reasons">
                            <img src="./img/bg-img/medical 2.jpg" alt="reasons">
                        </a>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#reasons" class="post-title">The most common diseases</a>
                            <p>The most common disorder caused by metastases in the gastrointestinal tract, which ...
                            </p>
                            <div class="post-meta">
                                <a href="#"><i class="icon_clock_alt"></i> 28 jun 2021</a>
                            </div>
                        </div>
                    </div>
                </div>


                                <!-- Single Blog Item -->
                                <div class="col-12 col-md-6 col-lg-4 single-blog-item-con">
                    <div class="single-blog-item mb-100">
                        <a href="#treadmint">
                            <img src="././img/bg-img/31.jpg" alt="treadmint">
                        </a>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#treadmint" class="post-title">The Best Treatment Ways</a>
                            <p>It is one of the best-selling medicinal plants in the United States today, and its origin is the Native ...
                            </p>
                            <div class="post-meta">
                                <a href="#"><i class="icon_clock_alt"></i> 29 Jun 2021</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-md-6 col-lg-4 single-blog-item-con">
                    <div class="single-blog-item mb-100">
                        <a href="timetable">
                            <img src="./img/bg-img/timetable.jpg" alt="timetable">
                        </a>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="timetable" class="post-title">The most common diseases</a>
                            <p>The most common disorder caused by metastases in the gastrointestinal tract, which ...
                            </p>
                            <div class="post-meta">
                                <a href="#"><i class="icon_clock_alt"></i> 28 jun 2021</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




 <!-- Title section -->
 <style>
html {
  scroll-behavior: smooth;
}

.about-section{
  margin-bottom:60px
}

.title-section{

  padding:50px 0px;

}

.content-list{
  text-transform:capitalize;
}

.content-card{
  margin-top:20px;
  cursor: pointer;
}

.content-card:hover h5 i{
  color:#3498db
}

.content-card:hover p a{
  color:#3498db
}

.content-card p{
  font-size:17px;
  font-weight:500;
}

#reasons ol li{
  list-style:auto;
  font-size:17px;
  font-weight:500;
}

.reasons-section{
  background: whitesmoke;
  padding: 50px 30px;
}
.reasons-section h3{
  text-align:center
}

.treadmint-section{

  padding: 50px 30px;
}
.treadmint-section h3{
  text-align:center
}
.treadmint-section ol li{
  list-style:auto;
  font-size:17px;
  font-weight:500;
}


.refrence-section .doc-card img{
  height:150px;
  width:150px;
  display:block;border-radius: 50%;
}
</style>

<!-- 


<section class="about-section">
<div class="title-section">
  <div class="container">
    <h1 class="text-center ">
    dentistry
    </h1>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-6">

      <h3>
      About
      </h3>

      <p>
      also known as dental medicine and oral medicine, is a branch of medicine that consists of the study, diagnosis, prevention, and treatment of diseases, disorders, and conditions of the oral cavity, commonly in the dentition but also the oral mucosa, and of adjacent and related structures and tissues, particularly in the maxillofacial (jaw and facial) area.
      </p>
      <div class="content-list row">

        <div class="content-card col-3 col-md-3">
        <h5 class="text-center"><a href="#reasons"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a></h5>
        <p class="text-center"><a href="#reasons"> Diseases</a></p>
        </div>

        <div class="content-card col-3 col-md-3">
        <h5 class="text-center"><a href="#treadmint"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a></h5>
        <p class="text-center"><a href="#treadmint">treadmint</a></p>
        </div>

        <div class="content-card col-3 col-md-3">
        <h5 class="text-center"><a href="#refrence"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a></h5>
        <p class="text-center"><a href="#refrence"> refrence </a></p>
        </div>

        <div class="content-card col-3 col-md-3">
        <h5 class="text-center"><a href="#timetable"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a></h5>
        <p class="text-center"><a href="#timetable"> timetable </a></p>
        </div> -->

     <!--    <ul>
        <li><a href="#">reasons</a></li>
        <li><a href="#">treadmint</a></li>
        <li><a href="#">refrence</a></li>
        <li><a href="#">timetable</a></li>
        </ul> -->
      <!-- </div> -->

      <!-- <button class="btn btn-outline-info"><a href="time table">move to time table</a></button> -->
<!--       </div>



      <div class="col-6">
        <img src="https://kheranidentalataspen.com/wp-content/uploads/2020/09/is-cosmetic-dentistry-covered-by-insurance-1024x576.jpg" alt="img">
      </div>
    </div>
  </div>
</section> -->

<!-- Start reasons sections -->

<section class="reasons-section">

  <div class="container" id="reasons">
    <h3>Diseases</h3>
    <p>
    <ol>
      <li>Dental cavities</li>

      <p>
      These are parts of the teeth affected by rotting that may gradually develop into small or large holes.

    Tooth decay is one of the most prevalent health problems in different parts of the world, and it is prevalent primarily among children and adolescents, but every person in his mouth may develop cavities, and if tooth decay is not treated, the holes may grow and expand, causing severe pain, infections. And even tooth loss and other complications.
      </p>

      <li>Dental Pain</li>
      <p>
      Toothache from ivory: This toothache appears due to external factors, such as cold, hot or sweet foods. Toothache is short and disappears at the moment when the external factor is removed. The toothache is of medium intensity and is not concentrated in a specific point, so that the affected person finds it difficult to determine the source of this toothache, whether it is from the toothache in the upper or lower jaw. The cause of toothache is most likely related to tooth decay (Caries / Cavity), which can be observed by looking directly into the eye, or by x-ray imaging (Rentgen - X - Ray). This tooth decay treatment includes tooth filling and tooth cleaning. And the toothache goes away with the completion of treatment.
      </p>
      <li>Gingivitis and Periodontal Disease</li>
      <p>
      Gingivitis, sometimes called gum disease or periodontal disease - describes cases of bacterial accumulation in the oral cavity that, if not treated properly, can eventually lead to gum loss Teeth, as a result of damage to the layer that covers the teeth.
  </p>
      <li>Bad Breath</li>
      <p>
      The smell of the mouth is widespread, and because of the people’s demand for products or preparations to treat this problem, the shelves of shops are filled with mint-flavored products, mouthwash solutions and other preparations aimed at fighting and preventing bad breath (bad breath / halitosis), only temporarily.

      Certain types of food, certain diseases and certain habits - are part of the factors and causes of bad breath. In many cases, it is possible to reduce bad breath by maintaining good oral hygiene. In cases where simple personal care and treatment methods do not solve the problem, it is advisable to consult a dentist in order to ensure that there is no more serious problem causing bad breath.
      </p>
    </ol>
    
    </p>
  </div>

</section>



<section class="treadmint-section">

  <div class="container" id="treadmint">
    <h3>treadmint</h3>
    <p>
    <ol>
      <li>Tooth Filling Procedure</li>

      <p>
     
      Dental cavity filling aims to repair damaged teeth that have been damaged as a result of decay and gradual erosion due to low level of oral hygiene, and may also aim to repair cracked teeth within the so-called dental restoration.
     
      Dental fillings are performed in the dental clinic under conditions of complete sterilization, and the filling process may take more than one session, each of which lasts from 20 to 30 minutes, in the event that there are a number of teeth that need treatment.
      </p>


      <li>Tooth Extraction</li>

      <p>
      The goal of the tooth extraction process is to completely remove the affected tooth, in cases where all layers of the tooth are affected by decay, or when there is a need to extract a prominent or hidden wisdom tooth to prevent affecting the adjacent teeth, and tooth extraction is done in a simple manual way using pliers, or Surgical method by making an incision in the gums
      Tooth extraction is performed in a specialized clinic under sterile conditions by a dentist, and surgical extraction is performed by a dentist who specializes in oral and maxillofacial surgery.

      After local or complete anesthesia, the doctor uses the pliers to do a simple extraction by holding the tip of the tooth visible to the eye and swinging it until it moves and then it is pulled out from its place, then gently presses the place to stop the bleeding.

      In cases of surgical tooth extraction, an incision is made in the gum below the tooth to remove the tooth with the supporting tissues that surround it, then the incision is stitched using self-absorbing sutures, and the process usually takes approximately 30 minutes.
      </p>


      <li>Periodontal Surgery</li>
      <p>
      Periodontal surgery aims to treat periodontitis (periodontitis) in cases that do not respond to non-surgical methods or in cases where the inflammation is exacerbated, as damaged gum cells are regenerated.
      This surgery is done under local or general anesthesia, and patients must do some imaging tests.

      Some antibiotics are given to patients at high risk of developing endocarditis, and people with blood clotting disorders are also required to have a blood test to check their clotting functions before surgery.
  </p>


      <li>Dental Crowns</li>
      <p>
      Dental crowns aim to preserve teeth that are prone to damage as a result of a fracture in the tooth structure, or undergo complex treatments, such as: dental root canal treatment and dental implants.

This is done by covering the tooth with a cover that protects it, which helps to restore the structure of the teeth after treatment, protect the teeth from decay, and also prevents future tooth breakage or infection of the tooth.
      </p>
    </ol>
    
    </p>
  </div>

</section>





<section class="refrence-section">

  <div class="container" id="refrence">
    <h3 class="text-center">refrence</h3>

    <div class="row">
      <div class="col-6 doc-card">
        <div class="pic">
          <img class="img-fluid ml-auto mr-auto" src="https://c8.alamy.com/comp/R82H2C/young-woman-black-doctor-in-dental-clinic-the-dentist-is-standing-with-a-dummy-and-talking-about-health-medical-technology-R82H2C.jpg" alt="doc">
          <span class="text-center"> <p>Dr/ sara mohsen </p></span>
        </div>
        <div class="advice">
          <p> Dr/ sara advice to use Paracetamol for Dental Pain ,
          It is used to relieve mild to moderate pain and reduce fever
          </p>
        </div>
      </div>


      <div class="col-6 doc-card">
      <div class="pic">
          <img class="img-fluid ml-auto mr-auto" src="https://t4.ftcdn.net/jpg/03/20/52/31/360_F_320523164_tx7Rdd7I2XDTvvKfz2oRuRpKOPE5z0ni.jpg" alt="doc">
          <span class="text-center"> <p>Dr/ ayman ahmed</p></span>
        </div>
        <div class="advice">
          <p>
          Dr/ Ayman advice to use Nimesulide for Gingivitis and Periodontal Disease ,
          This medicine is used to relieve the pain caused by the third infection
          
          </p>
        </div>
      
      </div>


    </div>
  </div>




</section>






@endsection