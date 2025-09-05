<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo base_url(); ?>packages/user/images/icon.png">
	<title><?php echo $this->lang->line('title');?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>packages/css/font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>packages/css/font-icon.css">
	<link href="<?php echo base_url(); ?>packages/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url(); ?>packages/admin/plugins/node-waves/waves.css" rel="stylesheet" /> -->
	<link href="<?php echo base_url(); ?>packages/admin/plugins/animate-css/animate.css" rel="stylesheet" />
	<!-- <link href="<?php echo base_url(); ?>packages/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" /> -->
	<link href="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>packages/admin/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>packages/admin/css/themes/all-themes.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>packages/admin/js/datepicker.js"  />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/plugins/momentjs/moment.js"></script>
	<link href="<?php echo base_url(); ?>packages/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />



	<link rel="stylesheet" href="<?php echo base_url(); ?>packages/js/timepicker_new.js">
	<script src="<?php echo base_url(); ?>packages/css/timepicker_new.css"></script>

	<script src="<?php echo base_url(); ?>packages/js/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript">
		$('.newtime').timepicker();
	</script>

	<link href="<?php echo  base_url(); ?>packages/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?php base_url(); ?>packages/admin/css/jquery-ui.css">
	<script src="<?php echo base_url(); ?>packages/admin/js/jquery-ui.js"></script>
	<style type="text/css">
		.errStyle{color:green;font-weight:bold;font-size:16px;}
		.errStyle1{color:red;font-weight:bold;font-size:16px;}
		.req{color:red;font-weight:bold;}

		.bg-lightred{background-color:#ff0404a6;}

		section.content { margin-top: 80px !important; }
	</style>






</head>
<!-- <body class="theme-blue-grey"> -->
	<body class="theme-pink">

		<!-- Page Loader -->
		<div class="page-loader-wrapper">
			<div class="loader">
				<div class="preloader">
					<div class="spinner-layer pl-red">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
				<p>Please wait...</p>
			</div>
		</div>
		<div class="overlay"></div>	
		<div class="search-bar">
			<div class="search-icon">
				<i class="material-icons">search</i>
			</div>
			<input type="text" placeholder="START TYPING...">
			<div class="close-search">
				<i class="material-icons">close</i>
			</div>
		</div>
		<nav class="navbar">
			<div class="container-fluid colors">

				<div class="navbar-header">
					<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
					<a href="javascript:void(0);" class="bars"></a>
					<a class="navbar-brand headertxt navtb logosectop" href="#"><span style="line-height: 2.2;padding-left: 9px;" class="logotxthg"><?php echo $this->lang->line('title');?></span></a>
					<span class="displayname" > 				
						<?php 
						echo (!empty($_SESSION['userdetails']['name'])?' <span class="name">Hi, '.$_SESSION['userdetails']['name'].'</span>':" ");
					// echo $_SESSION['userdetails']['emp_name']
						?>
					</span>   
				</div>




			<!-- <div class="navbar-header  ">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<span style="padding-left: 0px"	></span>

				<span class="headertxt">ONLINE TIMESHEET MANAGEMENT</span>

				<span class="displayname"> 
					<span></span>				
					<?php 
					echo (!empty($_SESSION['userdetails']['emp_name'])?' <span class="name">'.$_SESSION['userdetails']['emp_name'].'</span>':" ");
					// echo $_SESSION['userdetails']['emp_name']
					?>
				</span> 
			</div> -->

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a  class="btn loginicon" href="logout" >
							<i class="material-icons">https</i>Log Out
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section>
		<aside id="leftsidebar" class="sidebar">
			<div class="user-info">
				<div class="image">
					<span>
						<img src="<?php echo base_url(); ?>images/admin.png" width="100" height="100" alt="User"></span><span style="color: white;font-size: 18px;margin-left: 20px;">
							<b style="color: blue !important;margin-left: -13px;margin-top: -10px;"><?php echo $this->lang->line('admin_name');?></b>

						</div> 
						<div class="info-container">

							<div class="btn-group user-helper-dropdown">
								<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">person</i>Profile</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">group</i>Followers</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">shopping_cart</i>Sales</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">favorite</i>Likes</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">input</i>Sign Out</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="menu" style="overflow-y: hidden;overflow-x: hidden;height: 510px;">
						<ul class="list">
							<li class="<?php echo(($url=='admin/dashboard')?'active':"");?>">
								<a href="    
								<?php if(($this->session->userdata('superadmin_auth'))){
									echo 'SuperadminDashboard';
								}else{echo 'dashboard';}?>">
								<i class="material-icons">home</i>
								<span>Home</span>
							</a>
						</li>

						<li class="<?php echo(($url=='admin/donations')?'active':"");?>">
								<a href="<?php echo base_url(); ?>admin/donations">
								<i class="material-icons">money</i>
								<span>Donations</span>
							</a>
						</li>



                <li class="<?php echo(($url=='admin/AddPhotos')||($url=='admin/PhotosList')?'active':"");?>">
                	<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                		<i class="material-icons">perm_media</i>
                		<span>Gallery</span>
                	</a>
                	<ul class="ml-menu" style="display: none;">
                		<li class="<?php echo(($url=='admin/AddPhotos')?'active':"");?>">
                			<a href="<?php echo base_url(); ?>admin/AddPhotos"> 
                				<i class="material-icons">note_add</i>
                				<span>Add Photos</span>	
                			</a>
                		</li>
                		<li class="<?php echo(($url=='admin/PhotosList')?'active':"");?>">
                			<a href="<?php echo base_url(); ?>admin/PhotosList"> 
                				<i class="material-icons">notes</i>
                				<span>Photos List</span>	
                			</a>
                		</li>
                	</ul>
                </li>
	</ul>
</div>




</aside>
</section>
<?php  
$this->load->view($url);
?>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/bootstrap/js/bootstrap.js"></script>
<!-- <script src="<?php echo base_url(); ?>packages/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->
<script src="<?php echo base_url(); ?>packages/admin/plugins/node-waves/waves.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script> 
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>packages/admin/plugins/sweetalert/sweetalert.min.js"></script> <-->
	<script src="<?php echo base_url(); ?>packages/admin/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/js/pages/tables/jquery-datatable.js"></script>
	<script src="<?php echo base_url();?>packages/admin/js/jquery.validate.min.js"> </script>
	<script src="<?php echo base_url();?>packages/admin/js/validate.js"></script>
	<script src="<?php echo base_url();?>packages/admin/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/plugins/autosize/autosize.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/js/pages/forms/basic-form-elements.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/js/pages/ui/tooltips-popovers.js"></script>
	<script src="<?php echo base_url(); ?>packages/admin/js/pages/ui/notifications.js"></script>


	<script src="<?php echo base_url();?>assets/js/functions.js" type="text/javascript"></script>



	<script>
		dateCall();
		function dateCall(){
			$( ".dateValidity" ).datepicker({
				changeMonth:true,
				changeYear:true,
				dateFormat:"dd-mm-yy",
				minDate:'01-10-2018',
				maxDate:"<?php echo date('d-m-Y'); ?>"
			});
			$( ".dateValidity1" ).datepicker({
				changeMonth:true,
				changeYear:true,
				dateFormat:"dd-mm-yy",
				minDate:'14-09-2018',
				maxDate:"<?php echo date('d-m-Y'); ?>"
			});
			$( ".dateValidity2" ).datepicker({
				changeMonth:true,
				changeYear:true,
				dateFormat:"yy-mm-dd",
				minDate:'01-09-2018'
			});
		// $( ".dateBirth" ).datepicker({
		// 	changeMonth:true,
		// 	changeYear:true,
		// 	dateFormat:"dd-mm-yy",
		// 	yearRange:'-80:-18',
		// 	maxDate:'0d 0m -18y'
		// });
	}
</script>



<script type="text/javascript">
		// task
		$(function(){
			$('#FrmTaskReminder').validate({
				rules:{
					// taskdate:{required:true},
					task:{required:true,minlength:5},
				},	
				messages:{
					// taskdate:{required:"Enter the date"},
					task:{required:"Enter task Name"},
				}
			})
		});
// log
$(function(){
	$('#FrmLogDetails').validate({
		rules:{
			date:{required:true},
			// date:{required:true}, 
			project:{required:true,maxlength:500},
			proj_client_name:{required:true,maxlength:100},
			typeofwork:{required:true},
			starttime:{required:true},
			proj_status:{required:true}
		},
		messages:{
			date:{required:"Enter the date",min:"Date is accepted from 1-10-2018 to Today",max:'Date is accepeted from 1-10-2018 to Today'},
			proj_client_name:{required:'Enter Project / Client Name'},
			project:{required:"Work / Task Description  Name"},
			typeofwork:{required:'Select Type of Work'},
			starttime:{required:"Enter Start time"},
			proj_status:{required:"Select Project Status"}
		}
	})
});
$(function(){
	$('#FrmLogEditDetails').validate({
		rules:{
			project:{required:true,maxlength:500},
			proj_client_name:{required:true,maxlength:100},
			typeofwork:{required:true},
			starttime:{required:true},
			proj_status:{required:true}
		},
		messages:{
			date:{required:"Enter the date",min:"Date is accepted from 1-10-2018 to Today",max:'Date is accepeted from 1-10-2018 to Today'},
			proj_client_name:{required:'Enter Project / Client Name'},
			project:{required:"Work / Task Description  Name"},
			typeofwork:{required:'Select Type of Work'},
			starttime:{required:"Enter Start time"},
			proj_status:{required:"Select Project Status"}
		}
	})
});








setTimeout(
	function(){
		$('#err_hide').fadeOut("slow");
	},1500);

$(document).ready(function(){
	$('#md_checkbox_40').change(function(){
		$('#delButtonPopUp').toggle();
	});
});
</script>
</body>
</html>