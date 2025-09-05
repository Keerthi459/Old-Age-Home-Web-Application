

<style>
    .container-fluid .fluid1{padding:16px 13px 0px 15px;}
    .modal-content{	width:800px;margin:auto;box-shadow: 0 0px 0px rgba(0,0,0,0.31)!important;background-color: #0000;}
    .modal-header {padding:0.7rem 1rem;border-bottom: 1px solid #e9ecef;border-radius:0;background-color:#1876c7;}
    .modal-title{font-size:16px;font-family: 'Nanum Gothic', sans-serif;text-transform:uppercase;color:#fff;text-align:center;}
    .modal-body{background-color: #e8e8e8;background-position:top left;background-size:contain;width:100%;padding:1.5rem 3rem 3rem 3rem; border-bottom: 10px solid #1876c7;
    }
    .modal-content{	width:700px;margin:auto;}
    .modal-content1{ width:700px;margin:auto;}
    .bullet li{
     list-style-image: url("<?php echo base_url().'assets/images/msg_icon.png' ?>") top center;
     background-image: url("<?php echo base_url().'assets/images/msg_icon.png' ?>");
     background-position: 0 10px;
     background-size:14px; 
     background-repeat: no-repeat;
     padding-left: 1.5em;
     list-style: none;
     text-align:left !important;
 }

 .modal .modal-content .modal-body {color: #777;padding: 36px 25px;}
 .cent{text-align: center;}
/*.form-div{background-color:#fff;padding:2em 1.5em;box-shadow:2px 2px 2px 2px rgb(156, 151, 151);border-radius: 50px;}*/
.not{width: 85%;
/*	transform: translateX(100%);
transition: all .6s cubic-bezier(0.5, -0.5, 0.3, 1.4);*/}
.notify.container{
	width: 350px;
    min-height: 100px;
    /*position: fixed;*/
    right: 10px;
    top: 50px;
    z-index: 999;
}
.notify.item{
	position:relative;
	width:100%;
	min-height:90px;
	box-shadow: 0 1px 10px 0 rgba(0,0,0,.1), 0 2px 15px 0 rgba(0,0,0,.05);
    border-radius: 5px 0 0 5px !important;
    background-color: #fff;
    border-left-width: 5px;
    border-left-style: solid;
    padding: 5px;
    /*margin-bottom: 15px;*/
/*    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
    transition: all .6s cubic-bezier(0.5, -0.5, 0.3, 1.4);*/

}
.notify.item.reminder{
	border-color: #47b4fd;
}
.notify .img{
    float: left;
    margin-right: 10px;
    margin-bottom: 5px;
    width: 48px;
    height: 48px;
    margin-top: 2px;
}

.notify .img-reminder{
    background: url(http://192.168.100.222/log_test/packages/admin/images/bell.gif);}

    .notify .header{
        font-size: 17px;
        color: #555;
        margin-left: 5px;
        color: #000000;
    }
    .notify .content{
        display: inline-block;
        font-size: 14px;
        color: #555;
        padding-top: 7px;
    }
    .notify img{
     margin-right: 10px;
 }
 .notify .close-btn{
     float: right;
     cursor: pointer;
     text-decoration: none;
     color: #ccc;
     width: 20px;
     height: 20px;
     background-color: #fff;
     text-align: center;
     font-weight: 700;
     vertical-align: middle;
     border-radius: 50%;
 }
 .notify .close-btn:hover{
    color: #444;
    background-color: #eee;
}
.flotrg{float: right;position: relative;top: -1332px;margin-left: 800px;}
.content1{line-height: 1.8;
    position: relative;
    top: 10px;}
/*.notify.show-notifier{
	-webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
}
*/

/*@keyframes slideInFromLeft {
  0% {
    	transform: translateX(100%);
    transition: all .6s cubic-bezier(0.5, -0.5, 0.3, 1.4);
  }
  100% {
    transform: translateX(0);
  }
  }*/

/*.shadow {  
   This section calls the slideInFromLeft animation we defined above 
  animation: 1s ease-out 0s 1 slideInFromLeft;

  }*/


  .padl{
     font-size: 18px;
 }
 .iconalg{    position: relative;
    top: -6px;
    padding-left: 6px;}
    .blk{
     color: #000000;
 }
 .modal .modal-content {
    box-shadow: 0 0px 0px rgba(0,0,0,0.31)!important;
}
.padsbt{padding-bottom: 10px;}
.padsbt0{padding-bottom: 0px !important;}
.padlfs{    padding-left: 0px;
    padding-right: 0px;}
    .textlength{    white-space: nowrap; 
        width: 200px; 
        overflow: hidden;
        text-overflow: ellipsis; }
        .collborder{    border-radius: 5px 0 0 5px !important;}
    </style>

    <section class="content" style="margin-top:60px;">
     <div class="container-fluid">
      <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    <div class="row clearfix">


        <!-- Widgets -->
        <div class="row clearfix">
    
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">DONATION COUNT</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo count($donations); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">DONATION AMOUNT</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $amount; ?> INR</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">GALLERY COUNT</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $photoscount; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->

        <div class="card" style="padding:10px;">






<div class="text-center" style="padding-bottom:10px" id="err_hide">
    <span class="errStyle"><?php echo $this->session->flashdata('Succ'); ?></span >
</div>  



<form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="clearfix">

        <div class="col-lg-3">
            <label for="password"> New Password <span style="color:#9d538e"> </span><span class="req">*</span></label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" id="password"  name="password" value="<?=set_value('password')?>" class="form-control no-resize auto-growth" placeholder="Enter password" rows="1" required>
                <label id="password" class="error" for="password">
                    <?php echo (!empty(form_error('password')))?form_error('password'):""; ?>
                </label>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <input type="submit" name="submit_pass" class="btn btn-success m-t-15 waves-effect" value="Change Password">
    </div>



</div>
</div>



</form>

</div>

<div class="col-lg-2">
</div>
<div class="col-lg-110 padlfs">



</div>
</div>
</div>
</section>
