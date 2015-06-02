<?php
$page="profile";
$tab="profile";
include "includes/app.php";

$uid=0;
if(User::isloginas('u'))
	$uid=User::loginId();
else if(User::isloginas('a') && (isset($_GET['uid']) && $_GET["uid"]>0 ) )
	$uid=$_GET["uid"];
else
	Fun::gotohome($DB,'',true);


$udata=User::userProfile($uid);
if($udata==null)
	Fun::gotohome($DB,'',true);

include "includes/top.php";
include "includes/menu/menu.php";
?>

<div align=center >
	<div class='maincontent' align=left style='width:960px;margin:5px;' >
		<div style='border:solid red 0px;' >
			<img src='photo/bg.jpg' class='img-thumbnail' />
			<img src='photo/mohit.jpg' class='img-thumbnail' style='margin-bottom:-150px;margin-top:-300px;margin-left:20px;' />
		</div>
		<div style='width:864px;margin-top:-20px;' >
			<ul class="nav nav-tabs" style='padding-left:200px;border-right: 1px solid #E9EAED;border-left: 1px solid #E9EAED;background-color:white;' >
				<li role="presentation" class="" style='border-right: 1px solid #E9EAED;border-left: 1px solid #E9EAED;' ><a href="#">Timeline</a></li>
				<li role="presentation" class="" style='border-right: 1px solid #E9EAED;' ><a href="#">About</a></li>
				<li role="presentation" class="" style='border-right: 1px solid #E9EAED;' ><a href="#">Follower</a></li>
				<li role="presentation" class="" style='border-right: 1px solid #E9EAED;' ><a href="#">Following</a></li>
				<li role="presentation" class="" style='border-right: 1px solid #E9EAED;' ><a href="#">Photos</a></li>
				<li role="presentation" class="" style='border-right: 1px solid #E9EAED;' ><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" >More <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="uprofile.php">Places</a></li>
						<li><a href="account.php">Groups</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div style='margin-top:20px;padding:0px;' >
			<div style='float:left;width:300px;margin-right:10px;' >
				<div class='leftinfo' >Mohit Saini...
					<div class='linedevider' ></div>
					Timepass...<br>
					Timepass...<br>
					Timepass...<br>
					Timepass...<br>
				</div>
				<div class='leftinfo'  >
					&nbsp;<b><a class='text' href='' >Total pics</a></b> 145
					<table>
						<?php
							for($j=0;$j<3;$j++){
						?>
						<tr>
							<?php
								for($i=0;$i<3;$i++){
							?>
							<td><img src='photo/pics/pic<?php echo $i+1; ?>.jpg' class='img-circle img-thumbnail' width=87 /></td>
							<?php
								}
							?>
						</tr>
						<?php
						}
						?>
					</table>
				</div>
			</div>
			<div style='float:left;width:551px;' >
				<div class='leftinfo' style='padding:0px;' >
					<ul class="nav nav-tabs" style='background-color:white;padding-left:10px;margin-top:-10px;' >
						<li role="presentation" class="" style='border-left:solid red 0px;' ><a >Upload Pics</a></li>
					</ul>
					<textarea rows=1 class='form-control status ' placeholder='Upload Pics' ></textarea>
					<input type=file name='uploadpics' style='margin-top:5px;margin-left:5px;' multiple onunload='alert(11);' />
					<div style='padding:5px;' >
						<button class='btn btn-default' style='margin:4px;' >Submit</button>
						<button class='btn btn-default' style='margin:4px;' >Cancel</button>
					</div>
				</div>
				<div class='leftinfo' >
					<div style='height:50px;' >
						<div style='float:right;' >
							<div style='padding-left:10px;' >
								<ul class="nav nav-tabs" style='border:solid gray 0px;' >
									<li role="presentation" style='padding:0px;border:solid gray 0px;' class='pull-left' >
										<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:3px 6px;border:solid gray 0px;' ><span class='caret' ></span></a>
										<ul class="dropdown-menu pull-right" role="menu" role="menu">
											<li><a  >Change Date</a></li>
											<li><a  >Turn on Notifications</a></li>
											<li><a  >Edit</a></li>
											<li><a  >Delete</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div style='float:left;margin-right:5px;' >
							<img src='photo/mohit.jpg' width='38' class='img-circle' />
						</div>
						<div style='float:left;' >
							<div>
								<a>Mohit Saini</a>
							</div>
							<table><tr>
								<td>
									<span class='timepassed' >12 min ago.</span>
								</td>
								<td style='padding-left:10px;' >
									<ul class="nav nav-tabs" style='border:solid gray 0px;' >
										<li role="presentation" style='padding:0px;border:solid gray 0px;' ><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:5px;border:solid gray 0px;' ><span class='glyphicon glyphicon-wrench' aria-hidden="true" ></span> <span class='caret' ></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="uprofile.php">Share publicly</a></li>
												<li><a href="account.php">Save privately</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr></table>
						</div>
						<div class='clear'></div>
					</div>
					<div class='linedevider'></div>
					<div style='margin-bottom:10px;' >
						Saini Mohit.....
						<img src='photo/upics/photo1.jpg' width='100%' class='uploadpic' >
						<img src='photo/upics/photo1.jpg' width='100%' class='uploadpic' >
					</div>

					<div style='background-color:#FEFEFE;' >
						<a>Like</a> &nbsp; <a>Comment</a> &nbsp; <a>Share</a>

						<div class='linedevider'></div>
						<div style='margin-top:2px;' >
							<a>Mohit Saini</a> , <a>Rohit Saini</a> Likes it.
						</div>
						<div class='linedevider'></div>
						<div class=comments  style='margin-top:10px;' >
							<?php
								for($i=0;$i<3;$i++){
							?>
							<div class=comment >
								<div style='float:left;margin-right:5px;' >
									<img src='photo/mohit.jpg' width='38' class='img-circle' />
								</div>
								<div style='padding-left:10px;float:right;' >
									<ul class="nav nav-tabs" style='border:solid gray 0px;' >
										<li role="presentation" style='padding:0px;border:solid gray 0px;' class='pull-left' >
											<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:3px 6px;border:solid gray 0px;' ><span class='caret' ></span></a>
											<ul class="dropdown-menu pull-right" role="menu" role="menu">
												<li><a  >Edit</a></li>
												<li><a  >Delete</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div style='float:left;width:446px;' >
									<div>
										<a>Mohit Saini</a> Mohit sd sd sd sd sd sd sd sd sd sd sd sd sd hs dhs gdh sgd hs gd sd sd g shd gsh dgs hdg s dh sd gs hdg sh dgs hd g sh d
									</div>
									<table><tr>
										<td>
											<span class='timepassed' >3 Dec. 2012 3:34 PM</span>
										</td>
										<td style='padding-left:10px;' >
											<a>Like</a>
										</td>
										<td style='padding-left:10px;' >
											<a><span class='glyphicon glyphicon-thumbs-up' ></span> 12</a>
										</td>
									</tr></table>
								</div>
								<div class='clear'></div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>


				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
				<div class='leftinfo' >Mohit Saini...</div>
			</div>
			<div style='clear:both;'></div>
		</div>
	</div>
</div>



<?php
include "includes/bottom.php";
$DB->close();
?>