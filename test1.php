<?php
$b=array(2=>"Physics",3=>"Chemistry",4=>"Science",5=>"Earth Science",6=>"Biology",7=>"Mathematics",8=>"Advance Mathematics",9=>"Algebra",10=>"History",12=>"Accounting Basics",13=>"Cost Accounting",14=>"Financial Accounting",15=>"Managerial Accounting",16=>"Accounting Standards",17=>"Auditing",18=>"Taxation",20=>"Finance Basics",21=>"Corporate Finance",22=>"Risk Management",23=>"Financial Management",24=>"Financial Econometrics",25=>"Portfolio Management",26=>"Business Law and Ethics",28=>"Microeconomics",29=>"Macroeconomics",30=>"Business Economics",31=>"Econometrics",32=>"International Economics",33=>"Managerial Economics",34=>"Game Theory",35=>"Public Economics",37=>"Basic Statistics",38=>"Applied Statistics",39=>"Advanced Statistics",40=>"Sampling Theory",41=>"Descriptive Statistics",42=>"Central Tendency",43=>"Hypothesis Testing",44=>"ANOVA",45=>"Time Series Analysis",46=>"Operational Research",47=>"Stochastic Processes",48=>"Others",50=>"Management Theories",51=>"Operation Management",52=>"HR Management",53=>"Project Management",54=>"Business Management",55=>"Operation Research",56=>"Supply Chain Management",57=>"Marketing Management",58=>"Marketing Research",59=>"Strategic Management",60=>"Management Information  System",61=>"Other Management",63=>"Biotechnology",64=>"Civil Engineering",65=>"Chemical Engineering",66=>"Computer Science Engineering",67=>"Electrical Engineering",68=>"Electronics",69=>"Engineering Mathematics",70=>"Engineering Physics",71=>"Information Technology",72=>"Textile",73=>"Mechanical Engineering",74=>"Other Engineering",76=>"Artificial Intelligence",77=>"Basic Computer Science",78=>"Computer Graphics",79=>"Computer Networking",80=>"Data Structure &amp; Algorithms",81=>"Database Management System",82=>"Operating System",83=>"Software Engineering",84=>"Theory of Computation",85=>"Computer Network Security",87=>"C/C++ Programming",88=>"JAVA Programming",89=>"DOT NET Programming",90=>"Assembly Language",91=>"Python Programming",92=>"COBOL Programming",93=>"Visual Basic Programming",94=>"PHP Web Programming",95=>"PL-SQL Programming",96=>"Programming Languages",98=>"Basic MATLAB Programming",99=>"MATLAB in Mathematics",100=>"MATLAB in Statistics",101=>"MATLAB in Engineering",102=>"Simulation in MATLAB",104=>"PHP",105=>"MySQL",106=>"Javascript",107=>"CSS",108=>"HTML",109=>"HTML-5",110=>"Ajax",112=>"Unix/Linux/GNU",131=>"Drupal",132=>"Joomla",133=>"Wordpress",115=>"Case Study",116=>"English",117=>"History",118=>"Human Resource",119=>"Humanities",120=>"Law",121=>"Medical Science",122=>"Nursing",123=>"Physiology",124=>"Political Science",125=>"Psychology",126=>"Religion",127=>"Social Science",128=>"Sociology",129=>"Solidworks",130=>"Term Paper");


$a=array("SCIENCE/MATH"=>2,"ACCOUNTING"=>12,"FINANCE"=>20,"ECONOMICS"=>28,"STATISTICS"=>37,"MANAGEMENT"=>50,"ENGINEERING"=>63,"COMPUTER SCIENCE"=>76,"PROGRAMING"=>87,"MATLAB"=>98,"WEB DEVELOPMENT"=>104,"OPEN SOURCE"=>112,"CMS"=>131,"GENERAL"=>115);


$data=array();
foreach($a as $key=>$val)
	$data[$key]=array();
$keys=array_keys($a);
$i=0;
$limit=12;
foreach($b as $j=>$val){
	$limit=($i<count($keys)? $a[$keys[$i+1]]:1000+count($b) );
	if($j!=$limit){
		$data[$keys[$i]][]=array('disp'=>$val,'val'=>$j);
	}
	else{
		$i++;
	}
}

foreach($data as $key=>$val){
	echo '"'.$key.'"=>array(';
	foreach($val as $key1=>$val1){
		echo 'array('.$val1['val'].',"'.$val1['disp'].'")';
		if($key1!=count($val)-1)
			echo ",";
	}
	echo "),\n";
}

?>