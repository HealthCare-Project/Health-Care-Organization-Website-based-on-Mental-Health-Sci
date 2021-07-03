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
            <p>     Nephology is the study of clouds and cloud formation. British meteorologist Luke Howard was a major researcher within this field, establishing a cloud classification system.

While this branch of meteorology still exists today, the term nephology, or nephologist is rarely used. The term came into use at the end of the nineteenth century, and fell out of common use by the middle of the twentieth. Recently, interest in nephology (if not the name) has surged as many meteorologists have begun to focus on the relationship between clouds and global warming which is a major source of uncertainty regarding "...estimates and interpretations of the Earth’s changing energy budget.

Since the late 1990s, some have suggested that when high solar activity lowers levels of cosmic rays, that in turn reduces cloud cover and warms the planet. Others say that there is no statistical evidence for such an effect. 
Some nephologists believe that an increase in global temperature could decrease the thickness and brightness (ability to reflect light energy), which would further increase global temperature. Recently research has been going on at CERN's CLOUD facility to study the effects of the solar cycle and cosmic rays on cloud formation.
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
    Nephrology
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
     Nephology is the study of clouds and cloud formation. British meteorologist Luke Howard was a major researcher within this field, establishing a cloud classification system.

While this branch of meteorology still exists today, the term nephology, or nephologist is rarely used. The term came into use at the end of the nineteenth century, and fell out of common use by the middle of the twentieth. Recently, interest in nephology (if not the name) has surged as many meteorologists have begun to focus on the relationship between clouds and global warming which is a major source of uncertainty regarding "...estimates and interpretations of the Earth’s changing energy budget.

Since the late 1990s, some have suggested that when high solar activity lowers levels of cosmic rays, that in turn reduces cloud cover and warms the planet. Others say that there is no statistical evidence for such an effect. 
Some nephologists believe that an increase in global temperature could decrease the thickness and brightness (ability to reflect light energy), which would further increase global temperature. Recently research has been going on at CERN's CLOUD facility to study the effects of the solar cycle and cosmic rays on cloud formation.
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
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBZOhTaeHTdNdI8vCWSObpeCROi9L-aJy_GQ&usqp=CAU" alt="img">
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
      <li>Urinary Tract Infection</li>

      <p>

Urinary tract infection is an infection that begins in the urinary system. The urinary system consists of the kidneys, urinary tubes, bladder, and urethra. Infection can attack any one of the components of the urinary tract, but the lower urinary tract, ie the urethra and bladder, are most susceptible to infection.

Women are more likely than men to get urinary tract infections. A UTI that is confined to the bladder only is very painful and irritating. But the infection can spread to one of the kidneys, too, and then the consequences can be dire.

The most accepted and popular treatment for urinary tract infections is antibiotics. But some measures, which are easy to take, can reduce the risk of infection and urinary tract infections from the start.
      </p>

      <li>Undescended Testicle</li>
      <p>
      Cryptorchidism, or "undescended testis" (or undescended testicle) is a testicle that has not descended to its intended place within the skin sac behind the penis (scrotum) before the birth of the male newborn.

2-5% of all male births suffer from an undescended testicle in one or both testicles. An undescended testicle is a very common phenomenon in male babies who were born before their due date, or before the completion of 37 weeks of gestation. The undescended testicle in both testicles together is a very rare phenomenon.

In most cases in which a male newborn is born with the phenomenon of undescended testicles in one of his testicles, or both, the problem resolves on its own during the first months of the infant's life. If the child suffers from the disappearance of the testicle, which does not descend on its own to the place prepared for it, the problem can be addressed by a surgical operation during which the testicle is transferred into the scrotum.
      </p>
      <li>Kidney Stone</li>
      <p>
     Kidney stones consist of salts and minerals, the source of which is urine, as they crystallize into small stones. Pebbles can be as small as grains of sand, or as large as a golf ball.
It is possible for the stones to remain inside the kidneys, or to move outside the body through the urinary system.

The urinary system is the system responsible for producing urine in the body and delivering it to the outside of the body. The urinary system consists of the kidneys, the ducts that connect the kidneys to the bladder (Ureter), the bladder (Urinary bladder), and the duct that leads from the bladder to the outside of the body (Urethra).

You likely won't feel any pain when the stones pass through the bladder. But it is possible that this process is accompanied by the appearance of severe pain and lead to the emergence of other symptoms.
  </p>
      <li>Hypercalcemia</li>
      <p>
     Hypercalcemia, a condition defined when the calcium level exceeds 10.5 mg/dL per 100 milliliters after repeated examination. In general, the level of calcium in the blood serum is maintained in a narrow range (8.8-10.3 mg/100 mg/dL). Up to 2-3 years of age, the recommended level is 11 mg/dL per 100 milliliters.

Care must be taken when performing the examination, as if the vein blocker used when taking the blood sample is placed for more than three minutes, it may increase the calcium level in the sample and thus reflect false results.

Calcium is a widely available element in the body. It constitutes (2%) of the body weight (meaning that for a person weighing 70 kg, 1.3 kg of their weight is calcium). (99%) of this calcium is found in the skeleton and in the teeth, and only (0.1%) of it is found in the blood serum. Half of the amount of calcium in the blood serum is ionized, that is, positively charged, while the other half is bound to albumin in the blood serum.

Ionic calcium (free) is responsible for transmitting electrical signals between nerve cells and muscle contraction. It also participates in the process of blood clotting, affects the activity of many enzymes in the cell, and also participates in the process of cell division. Calcium is also of paramount importance in building and strengthening the skeleton and teeth.

The level of calcium in the body is maintained by modulating calcium absorption in the intestine, by excretion in urine, and by exchanges between bones and blood. As for those responsible for equalizing the level of calcium in the body, they are special and main hormones, including: Parathyroid/ Parathormone, Calcitonin and Vitamin D.

Parathyroid hormone is secreted in four small glands located in the front of the neck, at the base of the neck and around the thyroid gland. The thyroid hormone modulates the level of calcium in the blood, by the release of calcium from the bones and by decreasing the excretion of calcium in the urine.

As for vitamin D (which comes from food and the effect of sunlight on the skin), it increases the absorption of calcium and phosphorous in the intestine.

Calcitonin is a hormone that reduces the absorption of calcium in the bones, thus reducing the level of calcium in the blood.

Hypercalcemia affects various body systems, especially the central nervous system and the kidneys.

The primary treatment of hypercalcemia is by increasing urination, by drinking large quantities of water, or by intravenous infusion of fluids (according to the severity of the hypercalcemia level), as well as by administering laxatives, taking care to monitor fluid balance and checking salts in the blood.
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
      <li>Keep drinking water</li>

      <p>
     Drinking ample amounts of water helps the body to function properly in the kidneys. When exercising or strenuous activities, the body needs to replace fluids lost through sweating, to prevent kidney stones.
      </p>


      <li>blood pressure monitoring</li>

      <p>
   Blood pressure should be checked regularly, as high blood pressure does not usually have symptoms, but it increases the risk of kidney problems. When the blood pressure is high, the doctor suggests to the patient some changes in his lifestyle or prescribe antihypertensive drugs for him.
      </p>


      <li>Beware of sedatives</li>
      <p>
     Do not take over-the-counter pain relievers without a doctor's order. It is known that common medications such as anti-inflammatory drugs cause kidney damage and kidney failure if taken regularly. And consult your doctor for a healthy way to manage pain without putting your kidneys at risk.
  </p>


      <li>Maintaining an ideal weight</li>
      <p>
    A large increase in body weight leads to high blood pressure, which is dangerous for the kidneys, so you must maintain a healthy weight, avoid overeating, and do moderate sports activities five times a week for at least 30 minutes.
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
          <p> Dr/ sara advice to Eating healthy, avoiding smoking and alcohol, annual kidney examination     </p>
        </div>
      </div>


      <div class="col-6 doc-card">
      <div class="pic">
          <img class="img-fluid ml-auto mr-auto" src="https://t4.ftcdn.net/jpg/03/20/52/31/360_F_320523164_tx7Rdd7I2XDTvvKfz2oRuRpKOPE5z0ni.jpg" alt="doc">
          <span class="text-center"> <p>Dr/ ayman ahmed</p></span>
        </div>
        <div class="advice">
          <p>
          Dr/ Ayman advice to Follow the doctor's instructions, keep drinking an appropriate amount of water, avoid drinking alcohol, and avoid excessive use of painkillers .
          
          </p>
        </div>
      
      </div>


    </div>
  </div>




</section>


@endsection