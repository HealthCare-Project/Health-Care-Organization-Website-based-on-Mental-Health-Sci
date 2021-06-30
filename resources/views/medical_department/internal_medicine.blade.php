@extends('layout.main')
@section('content')

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




<section class="about-section">
<div class="title-section">
  <div class="container">
    <h1 class="text-center ">
    internal medicine
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
      There are many systemic diseases that affect the motor performance of the digestive system.

      Gastrointestinal diseases listed below are the most common diseases or the most affecting the motor functioning of the digestive system.
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

     <!--    <ul>
        <li><a href="#">reasons</a></li>
        <li><a href="#">treadmint</a></li>
        <li><a href="#">refrence</a></li>
        <li><a href="#">timetable</a></li>
        </ul> -->
      </div>

      <!-- <button class="btn btn-outline-info"><a href="time table">move to time table</a></button> -->
      </div>



      <div class="col-6">
        <img src="https://static.webteb.net/images/content/tbl_diseases_disease_1269_91533a5ec18-abb6-4e3c-8c64-73b0012beadf.jpg" alt="img">
      </div>
    </div>
  </div>
</section>

<!-- Start reasons sections -->

<section class="reasons-section">

  <div class="container" id="reasons">
    <h3>Diseases</h3>
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
    <h3>treadmint</h3>
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
    <h3 class="text-center">refrence</h3>

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