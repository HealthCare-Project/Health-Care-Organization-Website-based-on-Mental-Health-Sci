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
            <p>     Psychology is the science of mind and behavior. Psychology includes the study of conscious and unconscious phenomena, as well as feelings and thought. It is an academic discipline of immense scope. Psychologists also seek an understanding of the emergent properties of brains, linking the discipline to neuroscience. As a social science, psychologists aim to understand the behavior of individuals and groups.

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
    Psychology 
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
     Psychology is the science of mind and behavior. Psychology includes the study of conscious and unconscious phenomena, as well as feelings and thought. It is an academic discipline of immense scope. Psychologists also seek an understanding of the emergent properties of brains, linking the discipline to neuroscience. As a social science, psychologists aim to understand the behavior of individuals and groups.
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
        <img src="https://www.uclahealth.org/vitalsigns/images/spring2016/doctor-shoulder-patient.jpg" alt="img">
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
      <li>Depression</li>

      <p>

Depression is not an easy thing to get rid of, and it is known as severe depression disorder, or clinical depression.

It is a disease that affects the soul and the body that affects the way of thinking and behaving and that would lead to many emotional and physical problems as it is one of the most prevalent diseases in the world, people with depression usually cannot continue their daily lives as usual, as depression causes them a feeling of lack of No desire for life.

Depression may affect all age groups, as it is not limited to a specific age, gender, race or group, but some statistics indicate that women who have been diagnosed with cancer more than men, because women seek treatment more than men.
      </p>

      <li>Chronic Fatigue Syndrome</li>
      <p>
      Chronic Fatigue Syndrome (CFS) causes you to feel constantly tired, to the point that you can't perform normal daily tasks. There are other additional symptoms, but severe fatigue lasting at least six months is the main symptom of CFS.

For many people with chronic fatigue syndrome, the situation improves within a year or two, as it does not recur, while others experience severe fatigue and other symptoms over many years. Chronic fatigue syndrome is poorly understood and the causes are unclear. The majority of specialists today believe that it is a disease in itself and has its own distinctive symptoms. But other doctors reject this hypothesis.

There are no tests to diagnose chronic fatigue syndrome. Therefore, many sufferers do not accept the reality of their injury and find it very difficult to convince their relatives and friends to believe it. A person with the syndrome needs people to certify the diagnosis and provide support. It is very important to have a doctor around the patient that the patient can trust and rely on.

The exhaustion is real. It is not a figment of the imagination. Chronic fatigue is the body's reaction to a combination of emotional and physical factors.
      </p>
      <li>Tourettes Disorder</li>
      <p>
     Tourette syndrome or (Tourette's disorder) is a neurological (brain) disease that often appears in childhood. The person with this syndrome produces involuntary sounds or words (vocal tics) or bodily movements (motor tics) that are involuntary and have no control over them (involuntary spasms).

This syndrome is also known as Gilles de la Tourette syndrome (GST).

Not all tics are caused by the syndrome alone, as there are children who have tics, vocal and motor (they produce involuntary movements and sounds), but they do not have Tourette's syndrome.

Motor tics begin to appear, usually, at the age of 2-8 years, while vocal tics can begin to appear at the age of two years, although they usually appear years after the start of motor tics. Tics, in general, reach their peak at the age of 12 years.

These tics reduce sharply, or disappear, in most children at puberty. But there are cases in which these tics remain even after puberty.

The effect of these tics varies from one boy to another. Some boys have mild tics that have little impact on their lives. But even mild tics, or those that appear infrequently, can affect the child's self-evaluation and his relationship with his friends and family. Severe and close tics sometimes require treatment, including drug therapy and counseling. Even in cases where the tics seem mild, they may have a serious impact on the child's ability to learn, which may cause him embarrassment.
  </p>
      <li>ADD/ADHD</li>
      <p>
     Attention deficit hyperactivity disorder, or ADHD, is a chronic condition that affects millions of children and continues into adulthood. Among the problems that have been attributed to attention and concentration disorder: lack of attention, hyperactivity, and impulsive behavior.

Children who develop this disorder, in particular, have low self-assessment, problematic social relationships and low achievement in educational settings.

Although the available treatment for this disorder is not able to cure it, it may contribute to treating the symptoms of the disorder. Treatment usually includes psychological counseling or taking appropriate pharmacological drugs, or it may consist of a combination of both.

A diagnosis of the disorder may trigger feelings of fear, even terror. The symptoms that accompany the disorder may also be a challenge that parents and children, alike, must face. However, the treatment of this disorder may be a positive turning point, and thus most children with the disorder may reach the stage to become active, full of life and successful.
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
      <li>Cognitive-behavioral therapy</li>

      <p>
     This type of treatment depends on modifying the thinking patterns of the patient, as the patient often has negative thinking about his life and towards those around him, and these negative views make him a hostile thinking, and he has the ability to create problems, and the patient may in these cases commit suicide because of a curse on The environment in which he lives, and here we find the role of this method through specialists in providing advice and working to improve the patient’s image in front of himself and his community until these negative thoughts dissolve.
      </p>


      <li>social therapy</li>

      <p>
    It is mentioned that whoever resorts to this type of treatment is affected by many external factors such as work pressures, and problems in social or family relationships, and here and before providing the necessary psychological treatment, the patient must talk to the patient and inform him of the actions that must be taken in order to avoid falling into mental illness, This type also offers possible treatment methods for people with psychosocial illness, and we have reached the optimal way to treat mental illness by providing social treatment for the psychiatric patient by helping family, friends and relatives in saving the patient from psychological fatigue, so that the patient feels safe and stable and can restore confidence. himself again.
      </p>


      <li>drug therapy</li>
      <p>
     This type is multifactorial, as it contains many drugs that are administered to each person according to the degree of his response. Before resorting to drug treatment, we must first know what are the most prominent drugs that are used in the treatment of mental illness, and they are as follows:

Antidepressant medications, which are used to treat depression, anxiety and other diseases, but it is necessary to consult your doctor when re-dosing or using them in the treatment of other mental disorders.
Anxiolytics, which affect anxiety disorders.
Antipsychotics used to treat bipolar disorders.
Mood stabilizers are a treatment for a mental illness called schizophrenia.
Neurostimulants are used in the treatment of mental disorder.
We may need the intervention of one or two of the previous types in the treatment of mental illness in general, and here you must adhere to your doctor's instructions until you reach the appropriate mental illness treatment for you.
  </p>


      <li>Meditation and relaxation</li>
      <p>
     This helps to go away negative feelings such as anxiety or depression, and other forms of mental illness, and is also one of the complementary types that provide the necessary mental illness treatment.
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
          <p> Dr/ sara advice to build new good habits like Reading , sport and sleeping well.
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
         Dr/ Ayman advice  When you feel that you are not well try to talk to your wife or one of your close friends, and if you do not feel better, do not hesitate to go to your psychiatrist
          
          </p>
        </div>
      
      </div>


    </div>
  </div>




</section>




@endsection