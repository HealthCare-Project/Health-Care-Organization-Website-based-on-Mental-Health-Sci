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
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/pediatric.23.jpg);">
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
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/pediatric.2.jpg);">
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
            <img style ="height:500px;"src="./img/bg-img/pediatric.1.jpg" alt="">
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
            <p>       Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18. The word “paediatrics” means “healer of children”; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer). Paediatrics is a relatively new medical specialty, developing only in the mid-19th century. Abraham Jacobi (1830–1919) is known as the father of paediatrics.
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
                            <img src="./img/bg-img/pediatric.dess.jpg" alt="reasons">
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
                            <a href="timetable" class="post-title">timetable</a>
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
    pediatric
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
      Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18. The word “paediatrics” means “healer of children”; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer). Paediatrics is a relatively new medical specialty, developing only in the mid-19th century. Abraham Jacobi (1830–1919) is known as the father of paediatrics.
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
        </div>

      </div>

      </div>



      <div class="col-6">
        <img src="https://417studies.com/wp-content/uploads/2020/04/Female-healthcare-professional-and-young-boy-both-smiling-placing-a-finger-on-the-others-nose-playfully.jpg" alt="img">
      </div>
    </div>
  </div>
</section>
 -->
<!-- Start reasons sections -->

<section class="reasons-section">

  <div class="container" id="reasons">
    <h3>Diseases</h3>
    <p>
    <ol>
      <li>physiological yellow</li>

      <p>
      It is a common condition among newborns, as the baby’s blood contains a large proportion of bilirubin, a substance formed as a result of the breakdown of red blood cells, and because the liver is not able to perform its function and gets rid of bilirubin through the stool, bile appears.
      </p>

      <li>constipation</li>
      <p>
      Constipation in infants is very common, as the child feels abdominal pain and severe cramps, and is caused by a change in diet, such as using new milk or moving to solid foods, and often constipation disappears by itself within a few days, but you must help Your child by giving him more fluids, or doing some exercises for your child that your doctor advises.
      </p>
      <li>High temperature</li>
      <p>
      One of the common diseases of infants, and it constitutes an alarm bell that predicts the occurrence of many diseases, as the child’s temperature rises more than 38 degrees, and it may be due to colds or infection with various types of infections and sometimes due to some vaccinations, the mother should consult a doctor to find out the reason for the high temperature The child's body temperature, and cold compresses made for him so that the heat does not affect the child's brain.
  </p>
      <li>Stomach pain, cramps and vomiting</li>
      <p>
      Babies always suffer from stomach pain and colic that hinders their ability to breastfeed and makes them scream hysterically, as a result of the wrong feeding method and the introduction of air with feeding and not burping after that, and this may lead to vomiting and nausea that occurs as a result of excessive feeding. That there are regular times to breastfeed the child and the mother breastfeed her child properly
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
      <li>Breastfeeding</li>

      <p>
     
      Beginning breastfeeding within an hour of birth is the most valuable gift a mother can give her new baby, as it significantly reduces the chances of the baby dying in the first 28 days of life. Unfortunately, less than half of the world's children benefit from the most powerful and life-saving thing: exclusive breastfeeding.
      </p>


      <li>vaccinations</li>

      <p>
      Within the first 24 hours of a child's life: The first dose of the hepatitis B vaccine, which is available in hospitals, health offices and units, must be taken within only the first 24 hours of a child's life.
From the first 24 hours, the child begins to take the first dose of the oral polio vaccine, as well as the dose of tuberculosis by injection, which are available in health offices and units.
From the first day of the third to the seventh: When you go to the health office to obtain the birth certificate and vaccinate the child, a blood sample will be drawn from the child's heel to analyze the activity of the thyroid gland.. This is a routine procedure to check on the child's development at this stage.
      </p>


      <li>Education and skill development</li>
      <p>
      Provide your child with ways he can see, hear, move arms and legs freely and touch you. Skin contact is also very good and can be done from time to time. You should see your baby's arms and legs moving erratically. Your baby is slowly learning how to control his movement.
  </p>


      <li>sleep</li>
      <p>
      Newborns do not follow a regular sleep pattern. In general, they sleep for 16-20 hours a day, distributed between
Three to four hours and they sleep during the day and during the night. After a few months, sleep periods during the night become longer.
Newborns should sleep close to their parents in a place free of toys, pillows and covers to avoid suffocation. It is possible that
Co-sleeping - that is, when the newborn sleeps in the same bed as his parents - improves breastfeeding and good sleep.
Parents avoid injuring or strangling their young. Young children should be placed on their right or left side while sleeping, as this position reduces the risk of death
Sudden infant death or sudden death of unknown cause in children under one year of age.
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
          <p> Dr/ sara advice To avoid winter illnesses in young children.Giving the child vaccinations in the first two years of his life, such as influenza vaccinations and pneumonia vaccinations.
          To search for healthy foods that strengthen children's immunity, according to what the doctor prescribes
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
          Dr/ Ayman  recommends some steps to reduce the pain of teething
          Bring your child soothing drinks that help him relax and sleep peacefully, such as star anise, mint and chamomile.

  Wash your finger well and press on your baby's gums. This movement relieves the pain of irritated teeth.
          </p>
        </div>
      
      </div>


    </div>
  </div>




</section>


@endsection