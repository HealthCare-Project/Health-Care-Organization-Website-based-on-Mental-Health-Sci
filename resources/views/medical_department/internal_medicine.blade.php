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
            <p>       There are many systemic diseases that affect the motor performance of the digestive system.

Gastrointestinal diseases listed below are the most common diseases or the most affecting the motor functioning of the digestive system.
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
  .reasons-section h2{
    text-align:center
  }

  .treadmint-section{

    padding: 50px 30px;
  }
  .treadmint-section h2{
    text-align:center
  }
  .treadmint-section ol li{
    list-style:auto;
    font-size:17px;
    font-weight:500;
  }

  .refrence-section{
    background: whitesmoke;
    padding: 50px 30px;
  }
  .refrence-section .doc-card img{
    height:150px;
    width:150px;
    display:block;border-radius: 50%;
  }

  .refrence-section .doc-card .advice p{
    text-align:center
  }
</style>





<!-- Start reasons sections -->

<section class="reasons-section">

  <div class="container" id="reasons">
    <h2>Diseases</h2>
    <p>
    <ol>
      <li>Rheumatic Diseases</li>

      <p>
      Diffuse Systemic Sclerosis is characterized by the growth of connective tissue and scarring (Cicatrization) in many organs.

        82% of people with this disease suffer from an infection in the digestive system.

        The primary damage is a severe disturbance of esophageal motility, which is represented by a sharp decrease in the functioning of the esophagus and its sphincter, leading to the development of severe gastroesophageal reflux. Later, narrowing and ulcers can appear in the esophagus, and even the appearance of pre-cancerous changes in the esophageal mucosa (Barrett's esophagus). In addition, severe disruption of the small intestine, rectal prolapse, and loss of voluntary control of the anal sphincter may occur.
      </p>

      <li>malignant tumors</li>
      <p>
      The most common disorder caused by metastases in the gastrointestinal tract, which can have its primary source from the lungs, breasts, ovaries or from malignant melanoma, is obstruction of the small intestine.

      There are other phenomena, as well: Paraneoplastic syndrome, which is mainly embodied in intestinal obstruction, constipation and disturbances in the swallowing process (Dysphagia).

      These disorders result from direct damage to the nerve plexus responsible for the sebaceous system by metastases, by the formation of antibodies against neuronal compounds, or as a result of the secretion of hormones that affect intestinal motility.
      </p>
      <li>Endocrinic</li>
      <p>
      Diabetes: In this disease, it is very common to have damage to the digestive system, with all its components: swallowing problems (dysphagia), damage to the motor performance of the esophagus, gastroparesis / diabetic gastroparesis (Gastroparesis diabeticorum), disturbances in the work of the esophagus Small intestine and colon: abdominal pain, constipation, diarrhea and loss of sphincter control. These disorders occur as a result of injury to the autonomic nervous system (diabetic autonomic neuropathy).
      Hypothyroidism: It is mainly characterized by the appearance of constipation, rectal prolapse and stool stones.
      Hyperthyroidism: It is characterized by vomiting, diarrhea, abdominal pain and a sharp drop in weight.
      Hyperparathyroidism: It is characterized by a high level of calcium in the blood, which causes constipation, nausea and vomiting.
  </p>
      <li>Neurological diseases</li>
      <p>
      Spinal injuries: Gastrointestinal diseases vary according to the severity of the spinal injury. Injury to the cervical vertebrae (Vertebrae cervicales) causes disturbances in gastric emptying. Patients who have paralysis of the four limbs are more likely to be affected than those who have paralysis of the two legs only. Gastroesophageal reflux disease, constipation and incontinence (involuntary descent of urine or stool / incontinence) - are common among these patients.
      Extrapyramidal diseases (Parkinson's disease): The main symptoms of these diseases are: problems swallowing (dysphagia), hypersalivation, difficulties in emptying the stomach and constipation caused by disturbances in the movement of the colon or disorders in the intestines. defecation;
      Multiple sclerosis: Gastrointestinal disorders are very common among patients with multiple sclerosis. The most common disorders are: swallowing problems (dysphagia), constipation and fecal incontinence (fecal incontinence).
      Degenerative diseases (atrophy) of the muscles / nerves: Diseases of this group result in disturbances in swallowing, disturbances in the functioning of the esophagus, constipation and loss of control of the anal sphincter.
      Trauma and stroke: Trauma (injury to the brain) may cause intracranial/intracranial hypertension, which is reflected in vomiting. As for the disorders caused by stroke, most of them are in swallowing (oropharyngeal dysphagia), as well as constipation, which is secondary to physical inactivity.
      </p>
    </ol>
    
    </p>
  </div>

</section>



<section class="treadmint-section">

  <div class="container" id="treadmint">
    <h2>treadmint</h2>
    <p>
    <ol>
      <li>Echinacea</li>

      <p>
        It is one of the best-selling medicinal plants in the United States today, and its origin is the Native American culture.

        Its importance lies in the fact that it helps prevent colds and treat wounds, and is also believed to have a beneficial effect on upper respiratory infections, cancer and more.
      </p>

      <li>dandelion</li>

      <p>
      Originated in Asia, it is used within herbal medicine to cleanse the liver and digestive system, increase bile secretion, and help lower blood sugar due to its ability to stimulate pancreatic cells.
      </p>


      <li>nettle</li>
      <p>
      The herb helps to clean the body, treat infections, intestinal pain, irritable bowel, liver disease, urinary tract infections, and treat kidney and skin problems.
  </p>


      <li>Green tea</li>
      <p>
      It contains substances called catechins, which are one of the best sources of natural antioxidants.

Green tea helps break down fats, prevent mutations in cells that can become cancerous, and is known to act as a stimulant and tonic.
      </p>
    </ol>
    
    </p>
  </div>

</section>





<section class="refrence-section">

  <div class="container" id="refrence">
    <h2 class="text-center">refrence</h2>

    <div class="row">
      <div class="col-6 doc-card">
        <div class="pic">
          <img class="img-fluid ml-auto mr-auto" src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fGRvY3RvcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="doc">
          <span class="text-center"> <p>Dr/ Ragab mohsen </p></span>
        </div>
        <div class="advice">
          <p> Dr/ Ragab advice to use ansulin for Diabetics ,
          Decrease the effects of symptoms of high blood sugar , such as fatigue and frequent need to urinate.
          Reduce the risk of developing diabetic complications.

          </p>
        </div>
      </div>


      <div class="col-6 doc-card">
      <div class="pic">
          <img class="img-fluid ml-auto mr-auto" src="https://t4.ftcdn.net/jpg/03/20/52/31/360_F_320523164_tx7Rdd7I2XDTvvKfz2oRuRpKOPE5z0ni.jpg" alt="doc">
          <span class="text-center"> <p>Dr/ ayman ashraf </p></span>
        </div>
        <div class="advice">
          <p>
          Dr/ Ayman advice to use degistion for Digestive disorders ,
          Learn what you can do to prevent symptoms. Learn what you can do to get on top of you Crohn's Disease and reduce symptoms
          
          </p>
        </div>
      
      </div>


    </div>
  </div>




</section>






@endsection