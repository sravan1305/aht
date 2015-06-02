<?php
include "includes/app.php";
Fun::gotohome($DB);//If not login then redirect to home page.
$myf=User::myprofile();
$aid=(isset($_GET["aid"])?(0+$_GET["aid"]):0);
$utype=User::loginType();
$uid=User::loginId();

if(isset($_FILES["postsoln"]) && $utype=='a') {
	Help::postsoln($aid,$_FILES["postsoln"]);
}
if(isset($_GET["notfid"])){
	Help::readnotf($_GET["notfid"]);
}

if(false){
$query="select questions.*,users.name as adminname from questions left join users on users.id=questions.adminid where questions.id=? AND (uid=? OR ".($utype=="a"?"1":"0").")  LIMIT 1";
$ainfo=Sql::getArray($query,'ii',array(&$aid,&$uid));
if(count($ainfo)>0)
	$ainfo=$ainfo[0];
else{
	Fun::redirectinv($DB);
}
}
?>


<?php
Disps::page_top2();
?>
 <body class="html front not-logged-in no-sidebars page-node parallax-active sff-7 slff-7 hff-7 pff-7 form-style-1" style="overflow-y:scroll;" >
  <div id="toTop">
   <i class="fa fa-angle-up">
   </i>
  </div>
  <?php
  	Disps::page_header();
  ?>

  <div id="banner" class="clearfix">
   <div id="banner-inside" class="clearfix">
    <div class="banner-area">
     <div class="region region-banner">
      <div id="block-views-slideshow-full-block-1" class="block block-views clearfix">
       <div class="content">
        <div class="view view-slideshow-full view-id-slideshow_full view-display-id-block_1 view-dom-id-ca4a06c1d84ecc516a437f8a94b5b30f">
         <div class="view-content">
          <div id="slideshow" class="fullwidthbanner-container main-slider">
           <div class="fullwidthbanner">
            <ul>
             <li data-transition="random" data-link="/startupgrowth/default/node/10" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide1.png?itok=ZF-WDm0n" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/10">
                 Innovation & Creativity
                </a>
               </div>
               <p>
                We do innovation, creativity, effectiveness in our assignment solutions and all that with love
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/10" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/12" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide2.png?itok=ZI7lmxNw" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/12">
                 Simplicity
                </a>
               </div>
               <p>
                We Make Education Simple : 24x7 Online Assignment and Homework Help.
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/12" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/11" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide3.png?itok=5y1DXt4H" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="">
                 Our Service
                </a>
               </div>
               <p>
                Our Service is Global : Crossing All Bariers To Help.
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/11" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/14" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide4.png?itok=zE1trovh" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/14">
                 Ultra Advanced
                </a>
               </div>
               <p>
                We Help You To Advance : Over 1300+ Expert From Across The World To Help .
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/14" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
             <li data-transition="random" data-link="/startupgrowth/default/node/15" data-masterspeed="800">
              <img data-bgposition="center top" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/slideshow/public/slide5.png?itok=RxGwIgat" title="" alt="" />
              <div class="tp-caption title-teaser-text sft fadeout" data-x="left" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <div class="title">
                <a href="/startupgrowth/default/node/15">
                 We are Passionate,Cool Nerds
                </a>
               </div>
               <p>
                Available when you need us 24x7 support , 100+ subjects, 3500+Experts.We create experiences that transform grades.<br> 90k Orders delivered , 98.39% satisfaction ratio, 1 millon satisfied customers
               </p>
              </div>
              <div class="tp-caption caption-link sft fadeout" data-x="right" data-y="bottom" data-speed="500" data-start="1200" data-voffset="-30" data-easing="Power0.easeIn">
               <a href="/startupgrowth/default/node/15" class="more">
                <i class="fa fa-info-circle">
                </i>
                View details
               </a>
              </div>
             </li>
            </ul>
            <div class="tp-bannertimer tp-bottom">
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div id="page" class="clearfix">


   <div id="top-content" class="clearfix">
    <div class="container">
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix">
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">


             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-6">





              <div id="main" class="clearfix">
               <div class="title" id="page-title" style="font-size:35px;font-weight:700;" >
                Submit Homework Questions here.
               </div>
               <div>
                Everything you provide us will be confidential. so chill.
               </div>
                     <form class="webform-client-form" enctype="multipart/form-data"  method="post" id="webform-client-form-22" accept-charset="UTF-8">
                      <div style="display:non" id="page1" >
                       <div class="form-item webform-component webform-component-textfield" id="webform-component-name">
                        <label for="edit-submitted-name">
                         Choose Topic
                        </label>
                        <select name="csubject" style="font-size:14px;" >
                         <optgroup style="margin-left:10px;" label="SCIENCE/MATH"><option value="2">Physics</option><option value="3">Chemistry</option><option value="4">Science</option><option value="5">Earth Science</option><option value="6">Biology</option><option value="7">Mathematics</option><option value="8">Advance Mathematics</option><option value="9">Algebra</option><option value="10">History</option></optgroup><optgroup style="margin-left:10px;" label="ACCOUNTING"><option value="12">Accounting Basics</option><option value="13">Cost Accounting</option><option value="14">Financial Accounting</option><option value="15">Managerial Accounting</option><option value="16">Accounting Standards</option><option value="17">Auditing</option><option value="18">Taxation</option></optgroup><optgroup style="margin-left:10px;" label="FINANCE"><option value="20">Finance Basics</option><option value="21">Corporate Finance</option><option value="22">Risk Management</option><option value="23">Financial Management</option><option value="24">Financial Econometrics</option><option value="25">Portfolio Management</option><option value="26">Business Law and Ethics</option></optgroup><optgroup style="margin-left:10px;" label="ECONOMICS"><option value="28">Microeconomics</option><option value="29">Macroeconomics</option><option value="30">Business Economics</option><option value="31">Econometrics</option><option value="32">International Economics</option><option value="33">Managerial Economics</option><option value="34">Game Theory</option><option value="35">Public Economics</option></optgroup><optgroup style="margin-left:10px;" label="STATISTICS"><option value="37">Basic Statistics</option><option value="38">Applied Statistics</option><option value="39">Advanced Statistics</option><option value="40">Sampling Theory</option><option value="41">Descriptive Statistics</option><option value="42">Central Tendency</option><option value="43">Hypothesis Testing</option><option value="44">ANOVA</option><option value="45">Time Series Analysis</option><option value="46">Operational Research</option><option value="47">Stochastic Processes</option><option value="48">Others</option></optgroup><optgroup style="margin-left:10px;" label="MANAGEMENT"><option value="50">Management Theories</option><option value="51">Operation Management</option><option value="52">HR Management</option><option value="53">Project Management</option><option value="54">Business Management</option><option value="55">Operation Research</option><option value="56">Supply Chain Management</option><option value="57">Marketing Management</option><option value="58">Marketing Research</option><option value="59">Strategic Management</option><option value="60">Management Information  System</option><option value="61">Other Management</option></optgroup><optgroup style="margin-left:10px;" label="ENGINEERING"><option value="63">Biotechnology</option><option value="64">Civil Engineering</option><option value="65">Chemical Engineering</option><option value="66">Computer Science Engineering</option><option value="67">Electrical Engineering</option><option value="68">Electronics</option><option value="69">Engineering Mathematics</option><option value="70">Engineering Physics</option><option value="71">Information Technology</option><option value="72">Textile</option><option value="73">Mechanical Engineering</option><option value="74">Other Engineering</option></optgroup><optgroup style="margin-left:10px;" label="COMPUTER SCIENCE"><option value="76">Artificial Intelligence</option><option value="77">Basic Computer Science</option><option value="78">Computer Graphics</option><option value="79">Computer Networking</option><option value="80">Data Structure &amp; Algorithms</option><option value="81">Database Management System</option><option value="82">Operating System</option><option value="83">Software Engineering</option><option value="84">Theory of Computation</option><option value="85">Computer Network Security</option></optgroup><optgroup style="margin-left:10px;" label="PROGRAMING"><option value="87">C/C++ Programming</option><option value="88">JAVA Programming</option><option value="89">DOT NET Programming</option><option value="90">Assembly Language</option><option value="91">Python Programming</option><option value="92">COBOL Programming</option><option value="93">Visual Basic Programming</option><option value="94">PHP Web Programming</option><option value="95">PL-SQL Programming</option><option value="96">Programming Languages</option></optgroup><optgroup style="margin-left:10px;" label="MATLAB"><option value="98">Basic MATLAB Programming</option><option value="99">MATLAB in Mathematics</option><option value="100">MATLAB in Statistics</option><option value="101">MATLAB in Engineering</option><option value="102">Simulation in MATLAB</option></optgroup><optgroup style="margin-left:10px;" label="WEB DEVELOPMENT"><option value="104">PHP</option><option value="105">MySQL</option><option value="106">Javascript</option><option value="107">CSS</option><option value="108">HTML</option><option value="109">HTML-5</option><option value="110">Ajax</option></optgroup><optgroup style="margin-left:10px;" label="OPEN SOURCE"><option value="112">Unix/Linux/GNU</option></optgroup><optgroup style="margin-left:10px;" label="CMS"><option value="131">Drupal</option><option value="132">Joomla</option><option value="133">Wordpress</option></optgroup><optgroup style="margin-left:10px;" label="GENERAL"><option value="115">Case Study</option><option value="116">English</option><option value="117">History</option><option value="118">Human Resource</option><option value="119">Humanities</option><option value="120">Law</option><option value="121">Medical Science</option><option value="122">Nursing</option><option value="123">Physiology</option><option value="124">Political Science</option><option value="125">Psychology</option><option value="126">Religion</option><option value="127">Social Science</option><option value="128">Sociology</option><option value="129">Solidworks</option><option value="130">Term Paper</option></optgroup>
                        </select>
                       </div>
                       <div class="form-item webform-component webform-component-textarea" id="webform-component-message">
                        <label for="edit-submitted-message">
                         Assignment
                        </label>
                        <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                         <textarea placeholder="Paste Your Assignment" id="edit-submitted-message" name="question" cols="60" rows="6" class="form-textarea required" style="font-size:14px;" ></textarea>
                         <div class="grippie">
                         </div>
                        </div>
                       </div>
                       <div class="form-actions form-wrapper" id="edit-actions">
                        <img src="photo/icons/attach1.png" style="float:left;cursor:pointer;" onclick="uploadfile(this);" />
                        <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                        <input id="edit-submit" value="Submit" class="form-submit" type="button" style="float:right;margin-top:0px;" onclick="hideshowdown('page1','page2');"  />
                        <div style="clear:both;"></div>
                       </div>
                      </div>
                      <div id="page2" style="display:none;" >
                       <div class="form-item webform-component webform-component-email" style="float:left;width:48%;" >
                       <label for="edit-submitted-email">Deadline</label>
                       <input class="email form-text form-email required" placeholder="Deadline in same format" id="edit-submitted-email" name="deadline" size="60" value="<?php echo Fun::timetostr(time()+2*3600*24); ?>" >
                       </div>
                       <div class="form-item webform-component webform-component-email" style="float:right;width:48%;" >
                       <label for="edit-submitted-email">Quotes in $</label>
                       <input class="email form-text form-email required" placeholder="Quotes Ex: 50" type="text" id="edit-submitted-email" name="quote" size="60"  value="50">
                       </div>
                       <?php clear(); ?>

                       <div class="form-actions form-wrapper" id="edit-actions">
                        <img src="photo/icons/left_arrow.png" style="float:left;cursor:pointer;" onclick="hideshowdown('page2','page1');"  />
                        <div id="uploadfilenamemain" style="float:left;margin-left:20px;margin-top:5px;" ></div>
                        <input id="edit-submit" value="Submit" class="form-submit" type="submit" style="float:right;margin-top:0px;"  />
                        <div style="clear:both;"></div>
                       </div>
                      </div>
                     </form>
              </div>

















             </div>

             <div class="views-row views-row-2 views-row-even col-sm-6 col-md-6" style="display:none;" >
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/30">
                 <i class="fa fa-cloud-download">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="/startupgrowth/default/node/30">
                 Make Your Payment 
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
                 Once you get the best price for your assignment , process the payment though paypal, credit card, debit card or online banking. 
                </p>
               </div>
              </div>
             </div>

            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>




   <div id="top-content" class="clearfix">
    <div class="container">
     <div id="top-content-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-top-content">
         <div id="block-views-benefits-block" class="block block-views clearfix">
          <h2 class="title">
           Our Simplest Process of Working.!
          </h2>
          <div class="content">
           <div class="view view-benefits view-id-benefits view-display-id-block row view-promoted-items view-dom-id-ef2378d2ba3c9547686c4e6282d8572d">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/31">
                 <i class="fa fa-thumbs-o-up">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content"  align=center  >
                <a href="/startupgrowth/default/node/31">
                 Submit Your Assignment
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
                 Submit your Assignment/Homework in our submission form, mention the assignment requirements and you can chat with our 24x7 assignment Experts to get the best price. 
                </p>
               </div>
              </div>
             </div>
             <div class="views-row views-row-2 views-row-even col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/30">
                 <i class="fa fa-cloud-download">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="/startupgrowth/default/node/30">
                 Make Your Payment 
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
                 Once you get the best price for your assignment , process the payment though paypal, credit card, debit card or online banking. 
                </p>
               </div>
              </div>
             </div>
             <div class="views-row views-row-3 views-row-odd views-row-last col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <a class="icon" href="/startupgrowth/default/node/29">
                 <i class="fa fa-globe">
                 </i>
                </a>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content" align=center >
                <a href="/startupgrowth/default/node/29">
                 Get Solution

                </a>
               </h3>
              </div>
              <div class="views-field views-field-body"  align=center  >
               <div class="field-content">
                <p>
Receive your high quality, plagiarism free, accurately referenced assignment solution before the deadline in your Assignmentshelptutors.com’s student account.

                </p>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>




   <div id="highlighted">
    <div class="container">
     <div id="highlighted-inside" class="clearfix">
      <div class="row">
       <div class="col-md-12">
        <div class="region region-highlighted">
         <div id="block-views-promoted-posts-block-1" class="block block-views clearfix">
          <h2 class="title" >
           Our Services
           <div align=center style='font-size:15px;padding-top:5px;' >A highly skilled professional academic help with a creative touch</div>
          </h2>
          <div class="content">
           <div class="view view-promoted-posts view-id-promoted_posts view-display-id-block_1 row view-promoted-items view-dom-id-d37b5d8e2dbcb9c0b9a8bba2d2d9f8fe">
            <?php
            $images=array("http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/service-1.jpg","http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/service-2.jpg","http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/service-3.jpg");
            $sl=Funs::services_list();
            for($i=0;$i<3;$i++){
            ?>
            <div class="view-content">
             <?php
             for($j=0;$j<3;$j++){
              $title=$sl[$i*3+$j]["title"];
              $body=$sl[$i*3+$j]["body"];
             ?>
             <div class="views-row views-row-<?php echo $i+1; ?> views-row-odd views-row-first col-sm-4 col-md-4">
              <div class="views-field views-field-field-font-awesome-classes">
               <div class="field-content">
                <div class="views-field-field-image">
                 <a class="overlayed" href="">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="<?php echo $images[($i+$j+rand(0,1000))%3]; ?>" width="750" height="501" alt="Appropriately communicate adaptive imperatives rather than value-added potentialities." title="Title of First Slide" />
                 </a>
                </div>
               </div>
              </div>
              <div class="views-field views-field-title">
               <h3 class="field-content">
                <a href="">
                 <?php echo $title; ?>
                </a>
               </h3>
              </div>
              <div class="views-field views-field-body">
               <div class="field-content">
                <p>
                 <?php echo $body; ?>
                </p>
               </div>
              </div>
              <div class="views-field views-field-view-node">
               <span class="field-content more-link">
                <a href="">
                 Know more
                </a>
               </span>
              </div>
             </div>
             <?php
             }
             ?>
           </div>
           <?php
           }
           ?>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div id="main-content">
    <div class="container">
     <div class="row">
      <section class="col-md-12">
       <div id="main" class="clearfix">
        <div class="tabs">
        </div>
       </div>
      </section>
     </div>
    </div>
   </div>
  </div>
  <div id="highlighted-bottom">
   <div id="highlighted-bottom-transparent-bg">
   </div>
   <div class="container">
    <div id="highlighted-bottom-inside" class="clearfix">
     <div class="row">
      <div class="col-md-8">
       <div id="highlighted-bottom-left">
        <div class="region region-highlighted-bottom-left">
         <div id="block-views-testimonials-block-2" class="block block-views clearfix">
          <div class="content">
           <div class="view view-testimonials view-id-testimonials view-display-id-block_2 testimonials-block highlighted view-dom-id-e9e9210bbf74449a7290fe3c7d7e15d2">
            <div class="view-content">
             <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
              <div class="views-field views-field-body">
               <div class="field-content">
                <p>
                 AHT is such an awesome service. It helps everybody in their assignments. It not just helps, but also make their assignment.
                </p>
               </div>
              </div>
              <div class="views-field views-field-title">
               <span class="field-content">
                <a href="">
                 Mohit Saini
                </a>
               </span>
              </div>
              <div class="views-field views-field-field-subtitle">
               <div class="field-content">
                <p>
                 Student at IITD
                </p>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div id="highlighted-bottom-right">
        <div class="region region-highlighted-bottom-right">
         <div id="block-block-21" class="block block-block clearfix">
          <div class="content">
           <div class="call-to-action">
            <p>
             Not sure yet?
             <a href="#">
              <br />
              Get in touch
             </a>
             with us or take our
             <a href="#">
              free trial
             </a>
             .
            </p>
            <p>
             <a href="#" class="more">
              get the free trial
             </a>
            </p>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div id="bottom-content" class="clearfix">
   <div class="container">
    <div id="bottom-content-inside" class="clearfix">
     <div class="row">
      <div class="col-md-12">
       <div class="region region-bottom-content">
        <div id="block-views-showcases-block-1" class="block block-views clearfix">
         <h2 class="title">
          Our Unmatched Features
          <div align=center style='font-size:15px;padding-top:5px;' >
           These features are the reasons why you love us
          </div>
         </h2>
         <div class="content">
          <div class="view view-showcases view-id-showcases view-display-id-block_1 row view-promoted-items view-dom-id-b584bb1de55826478c8984bbaed8e8eb">
           <?php
            $images=array();
            for($i=0;$i<6;$i++){
             $images[]="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-".($i+1).".jpg";
            }
            $fl=Funs::features_list();
            $flid=0;
            for($j=0;$j<3;$j++){
           ?>
           <div class="view-content">
            <?php
             $mylimit=8;
             for($i=0;$i<4 && $flid<count($fl) && $flid<$mylimit ;$i++,$flid++){
            ?>
            <div class="views-row views-row-<?php echo $i+1; ?> views-row-odd views-row-first col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="<?php echo $images[rand(0,5)]; ?>" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info"  style='display:none;'  >
                  <span class="date">
                   Jun 4
                  </span>
                  <a href="" class="comments">
                   3
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="">
                <?php echo $fl[$flid]["title"]; ?>
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                <?php echo $fl[$flid]["body"]; ?>
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="">
                Read more
               </a>
              </span>
             </div>
            </div>
            <?php
            }
            if(false){
            ?>
            <div class="views-row views-row-2 views-row-even col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="/startupgrowth/default/node/21">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-3.jpg?itok=vg_5wJN5" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info">
                  <span class="date">
                   Dec 4
                  </span>
                  <a href="/startupgrowth/default/node/21#comments" class="comments">
                   1
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="/startupgrowth/default/node/21">
                Company name
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform...
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="/startupgrowth/default/node/21">
                Read more
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-3 views-row-odd col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="/startupgrowth/default/node/19">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-2.jpg?itok=3eyZfK8h" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info">
                  <span class="date">
                   Dec 4
                  </span>
                  <a href="/startupgrowth/default/node/19#comments" class="comments">
                   1
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="/startupgrowth/default/node/19">
                Company name
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform...
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="/startupgrowth/default/node/19">
                Read more
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-4 views-row-even views-row-last col-md-3 col-sm-6">
             <div class="views-field views-field-field-font-awesome-classes">
              <div class="field-content">
               <div class="views-field-field-image">
                <div class="overlayed-wrapper">
                 <a class="overlayed-inner" href="/startupgrowth/default/node/18">
                  <span class="overlay">
                   <i class="fa fa-link">
                   </i>
                  </span>
                  <img typeof="foaf:Image" src="http://demo.morethanthemes.com/startupgrowth/default/sites/default/files/styles/large/public/showcase-6.jpg?itok=FwuCT5Q0" width="750" height="501" alt="Donec pretium nisl sit amet nulla pharetra eiusmod tempor incididun vulputate." title="The title of the caption" />
                 </a>
                 <span class="info">
                  <span class="date">
                   Dec 4
                  </span>
                  <a href="/startupgrowth/default/node/18#comments" class="comments">
                   0
                  </a>
                  <span class="author">
                   By admin
                  </span>
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="views-field views-field-title">
              <h2 class="field-content">
               <a href="/startupgrowth/default/node/18">
                Company name
               </a>
              </h2>
             </div>
             <div class="views-field views-field-body">
              <div class="field-content">
               <p>
                Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform...
               </p>
              </div>
             </div>
             <div class="views-field views-field-view-node">
              <span class="field-content more-link">
               <a href="/startupgrowth/default/node/18">
                Read more
               </a>
              </span>
             </div>
            </div>
            <?php
            }
            ?>
           </div>
           <?php
           }
           ?>
           <div class="more-link" style='display:none;' >
            <a href="/startupgrowth/default/showcase">
             View All
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>



  <?php
   Disps::page_footer();
  ?>


  <div class="region region-page-bottom">
  </div>
 </body>
 <?php
Disps::bottom_js();
 ?>
<script>
jQuery(document).ready(function($) { 
  $("a").click(function(){
//    return false;
  });
});
</script>
</html>






<?php
$DB->close();
?>