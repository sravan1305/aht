<?php
include "includes/app.php";

Fun::issetlogout($DB);


$myf=User::myprofile();

if(Fun::isSetP("csubject","question","quote","deadline")  ){
 if (isset($_FILES["uploadfile"]))
  $fn=Fun::uploadfile($_FILES["uploadfile"],array(),"_".$_ginfo["ip"]);
 else
  $fn=array("ec"=>4,"fn"=>"");
 if($fn["ec"]>0){
  $_POST["quote"]=0+$_POST["quote"];
  $insdata=array( "subject" => $_POST["csubject"] , "content" => $_POST["question"] ,"time"=>time() ,"ufile"=>$fn['fn'],"status"=>($_POST["quote"]<=0?1:2),"quote"=>$_POST["quote"],"deadline"=>strtotime( $_POST["deadline"]) );
  if(User::islogin())
   $insdata["uid"]=User::loginId();
  $iid=Sqle::insertVal("questions",$insdata);
  if(!User::islogin()){
   $_SESSION["iid"]=$iid;
   $page_type="login";
   Fun::redirect($DB,HOST."login.php");
  }
  else{
   Help::assignuploadaction(array("student name"=>$myf["name"],"aid"=>$iid));
   Fun::redirect($DB,HOST."assignment.php?aid=".$iid);
  }
 }
 else
  $msg="Unable to upload file";
}




Disps::page_top2();
?>
 <body class="html front not-logged-in no-sidebars page-node parallax-active sff-7 slff-7 hff-7 pff-7 form-style-1" style="overflow-y:scroll;" >
  <div id="toTop">
   <i class="fa fa-angle-up">
   </i>
  </div>
  <header id="header" role="banner" class="clearfix">
   <div class="container">
    <div id="header-inside" class="clearfix">
     <div class="row">
      <div class="col-md-4">
       <div id="header-inside-left" class="clearfix">
        <div id="logo">
         <a href="<?php echo HOST; ?>" title="Home" rel="home">
          <img src="startupgrowth/grayorange/sites/all/themes/startupgrowth/logo3.jpg" alt="Home" />
         </a>
        </div>
        <div id="site-name">
         <a href="<?php echo HOST; ?>" title="Home">
          AHT
         </a>
        </div>
        <div id="site-slogan">
         Internet's #1 Assignment Help Provider
        </div>
       </div>
      </div>
      <div class="col-md-8">
       <div id="header-inside-right" class="clearfix">
        <div id="search-area" class="clearfix">
         <div class="region region-search-area">
          <div id="block-block-19" class="block block-block clearfix">
           <div class="content">
            <form action="/startupgrowth/default/" method="post" id="search-block-form" accept-charset="UTF-8">
             <div>
              <div class="container-inline">
               <h2 class="element-invisible">
                Search form
               </h2>
               <div class="form-item form-type-textfield form-item-search-block-form">
                <input onblur="if (this.value == '') {this.value = 'Enter terms then hit Search...';}" onfocus="if (this.value == 'Enter terms then hit Search...') {this.value = '';}" type="text" id="edit-search-block-form--2" name="search_block_form" value="Enter terms then hit Search..." size="15" maxlength="128" class="form-text" />
               </div>
               <div class="form-actions form-wrapper" id="edit-actions">
                <input value="" type="submit" id="edit-submit" name="op" class="form-submit" />
               </div>
               <input type="hidden" name="form_build_id" value="form-RzB66fXBLl91lePhVru0jn6lsuYM28ZRNVyf6UbhuNQ" />
               <input type="hidden" name="form_id" value="search_block_form" />
              </div>
             </div>
            </form>
           </div>
          </div>
         </div>
        </div>
        <div id="main-navigation" class="clearfix  with-search-bar ">
         <nav role="navigation">
          <div class="region region-navigation">
           <div id="block-superfish-1" class="block block-superfish clearfix">
            <div class="content">
             <ul id="superfish-1" class="menu sf-menu sf-main-menu sf-horizontal sf-style-none sf-total-items-6 sf-parent-items-4 sf-single-items-2">
              <li id="menu-366-1" class="first odd sf-depth-1 sf-total-children-3 sf-parent-children-1 sf-single-children-2 menuparent">
               <a href="" title="" class="sf-depth-1 menuparent">
                Services
               </a>
               <ul>
<?php
                foreach($_ginfo["services"] as $name=>$link){
?>
                <li id="menu-843-1" class="first odd sf-depth-2 sf-no-children">
                 <a href="<?php echo $link; ?>" title="" class="sf-depth-2">
                  <?php echo $name; ?>
                 </a>
                </li>
<?php
                }
?>
               </ul>
              </li>
              <li id="menu-530-1" class="middle even sf-depth-1 sf-no-children">
               <a href="" title="" class="sf-depth-1">
                How It Works
               </a>
              </li>
              <li id="menu-312-1" class="middle odd sf-depth-1 sf-no-children">
               <a href="" class="sf-depth-1">
                Faq
               </a>
              </li>

              <?php
               Disps::disp_mymenu();
              ?>

             </ul>
            </div>
           </div>
          </div>
         </nav>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </header>
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
  <div id="footer-top" class="clearfix">
   <div class="container">
    <div id="footer-top-inside" class="clearfix">
     <div class="row">
      <div class="col-md-12">
       <div class="region region-footer-top">
        <div id="block-block-16" class="block block-block clearfix">
         <div class="content">
          <ul class="social-bookmarks text-right">
           <li class="text">
            Follow us on social media
           </li>
           <li class="facebook">
            <a href="https://www.facebook.com/AssignmentsHelpTutors">
             <i class="fa fa-facebook">
             </i>
            </a>
           </li>
           <li class="twitter">
            <a href="https://twitter.com/Assignments_H_T">
             <i class="fa fa-twitter">
             </i>
            </a>
           </li>
           <li class="googleplus">
            <a href="https://plus.google.com/u/0/b/105455772845615681168/">
             <i class="fa fa-google-plus">
             </i>
            </a>
           </li>
           <li class="linkedin">
            <a href="http://in.linkedin.com/pub/assignments-help-tutors/65/b1b/9b8">
             <i class="fa fa-linkedin">
             </i>
            </a>
           </li>
           <li class="youtube">
            <a href="https://www.youtube.com/AssignmentHelpTutors">
             <i class="fa fa-youtube-play">
             </i>
            </a>
           </li>
           <li class="instagram">
            <a href="">
             <i class="fa fa-instagram">
             </i>
            </a>
           </li>
           <li class="flickr">
            <a href="">
             <i class="fa fa-flickr">
             </i>
            </a>
           </li>
           <li class="vimeo">
            <a href="">
             <i class="fa fa-vimeo-square">
             </i>
            </a>
           </li>
           <li class="pinterest">
            <a href="http://www.pinterest.com/assignmenthelps/">
             <i class="fa fa-pinterest">
             </i>
            </a>
           </li>
           <li class="skype">
            <a href="">
             <i class="fa fa-skype">
             </i>
            </a>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <footer id="footer" class="clearfix">
   <div class="container">
    <div class="row">
     <div class="col-sm-6">
      <div class="footer-area">
       <div class="region region-footer-first">
        <div id="block-block-17" class="block block-block clearfix">
         <h2 class="title">
          About us
         </h2>
         <div class="content">
          <p>
           AssignmentsHelpTutors.com is a global team and our true initiative is to bring education and technology together, and providing a single platform across the world. Here at Assignmentshelptutors.com, we have gathered some brilliant minds for you, who will create the difference in your life and will make your career a success. We are a team who thought of providing services and help with the assignments to those students nationally and world wide, who initially finds difficulty while doing their assignments, and need a way to come out of their problem.
          </p>
          <div class="more-link">
           <a href="">
            Read more
           </a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-sm-3">
      <div class="footer-area">
       <div class="region region-footer-third">
        <div id="block-views-popular-tags-block" class="block block-views clearfix">
         <h2 class="title">
          Popular Tags
         </h2>
         <div class="content">
          <div class="view view-popular-tags view-id-popular_tags view-display-id-block view-dom-id-81eacddc8320e44bdd68cbc6bfc529e0">
           <div class="view-content">
            <div class="views-row views-row-1 views-row-odd views-row-first">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/13">
                #maths
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-2 views-row-even">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/11">
                #coding
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-3 views-row-odd">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/10">
                #ahtIsAwesome
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-4 views-row-even">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/14">
                #Deadline
               </a>
              </span>
             </div>
            </div>
            <div class="views-row views-row-5 views-row-odd">
             <div class="views-field views-field-name">
              <span class="field-content">
               <a href="/startupgrowth/default/taxonomy/term/12">
                #Ontime
               </a>
              </span>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-sm-3">
      <div class="footer-area">
       <div class="region region-footer-fourth">
        <div id="block-menu-menu-footer-menu" class="block block-menu clearfix">
         <h2 class="title">
          Footer menu
         </h2>
         <div class="content">
          <ul class="menu">
           <li class="first leaf">
            <a href="/startupgrowth/default/node/2" title="">
             About
            </a>
           </li>
           <li class="collapsed">
            <a href="/startupgrowth/default/blog" title="">
             Blog
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/contact-us" title="">
             Contact
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/node/26" title="">
             Team
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/services" title="">
             Careers
            </a>
           </li>
           <li class="leaf">
            <a href="/startupgrowth/default/showcase" title="">
             Tutor Registration
            </a>
           </li>
           <li class="last leaf">
            <a href="/startupgrowth/default/node/1" title="">
             T &C
            </a>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </footer>
  <div id="subfooter" class="clearfix">
   <div class="container">
    <div id="subfooter-inside" class="clearfix">
     <div class="row">
      <div class="col-md-6">
       <div class="subfooter-area left">
        <div class="region region-sub-footer-left">
         <div id="block-block-9" class="block block-block clearfix">
          <div class="content">
           <p>
            Copyright &copy; 2015 Assignments Help Tutors. All rights reserved.
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-6">
       <div class="subfooter-area right">
        <div class="region region-footer">
         <div id="block-menu-menu-footer-bottom-menu" class="block block-menu clearfix">
          <div class="content">
           <ul class="menu">
            <li class="first leaf">
             <a href="/startupgrowth/default/services" title="">
              Services
             </a>
            </li>
            <li class="leaf">
             <a href="" title="">
              About us
             </a>
            </li>
            <li class="last leaf">
             <a href="" title="">
              Contact
             </a>
            </li>
           </ul>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="region region-page-bottom">
  </div>
 </body>
 <?php
//Disps::bottom_js();
 ?>
</html>
