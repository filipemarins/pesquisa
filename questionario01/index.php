<?php include('../header.php'); ?>

	<div class="flakes-frame">

		<?php include('../sidebar.php'); ?>

		<div class="flakes-content">

			<div class="flakes-mobile-top-bar">
				<a href="" class="logo-wrap">
					<img src="img/logo.png" height="30px">
				</a>

				<a href="" class="navigation-expand-target">
					<img src="img/site-wide/navigation-expand-target.png" height="26px">
				</a>
			</div>

			<div class="view-wrap">
				
				<div class="grid-2 gutter-40">
					<div class="span-2">
						<?php 
							if(isset($_GET['parte'])  && $_GET['parte']=="01"){ 
								include('forms/parte01.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="02"){ 
								include('forms/parte02.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="03"){ 
								include('forms/parte03.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="04"){ 
								include('forms/parte04.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="05"){ 
								include('forms/parte05.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="06"){ 
								include('forms/parte06.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="07"){ 
								include('forms/parte07.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="08"){ 
								include('forms/parte08.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="09"){ 
								include('forms/parte09.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="10"){ 
								include('forms/parte10.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="12"){ 
								include('forms/parte12.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="13"){ 
								include('forms/parte13.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="14"){ 
								include('forms/parte14.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="15"){ 
								include('forms/parte15.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="16"){ 
								include('forms/parte16.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="17"){ 
								include('forms/parte17.php');
							}elseif(isset($_GET['parte'])  && $_GET['parte']=="18"){ 
								include('forms/parte18.php');
							}else{
							include('forms/parte01.php');
							}
						?>
					</div>
					
				</div>


			
				</div>

			</div>
		</div>
	</div>

<?php include('../footer.php'); ?>