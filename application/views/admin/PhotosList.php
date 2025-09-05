<script src="<?php echo base_url();?>assets/jquery-3.4.1.js"></script>
    <script src="<?php echo base_url();?>assets/sweetalert.min.js"></script>

    <?php if(!empty($this->session->flashdata('Succ'))){ ?>
  <script>
    $(function() {
      swal({
        text: "<?php echo $this->session->flashdata('Succ'); ?>",
        timer: 3000,
        buttons: false,
        type: 'success',
        icon: "success"
    });
  });
</script>
<?php } ?> 
<?php if(!empty($this->session->flashdata('Err'))){ ?>
  <script>
    $(function() {
      swal({
        text: "<?php echo $this->session->flashdata('Err'); ?>",
        timer: 3000,
        buttons: false,
        type: 'error',
        icon: "error"
    });
  });
</script>
<?php } ?>
<style type="text/css">
	.ellipsis {
		text-overflow: ellipsis;
		white-space: nowrap;
		display: block;
		overflow: hidden;
		width: 20em;
	}
	.datesel
	{
		border: none;
		border-bottom-style: solid;
		border-bottom-width: 3px;
		border-color: #4e85dc;
	}
	.datesel:focus
	{
		background-color: #fff;
	}
</style>
<script type="text/javascript">
	function delrecord(id){
		var yes = confirm("Are you Sure ?");
		if(yes){
			frmList.deleteid.value=id;
			frmList.submit();
			return true;
		}else{
			frmList.deleteid.value=null;
			return false;
		}
	}
	function getPdf(id){
		var yes = confirm("Are you Sure ?");
		if(yes){
			frmList.getpdf.value=id;
			frmList.submit();
			return true;
		}else{
			frmList.getpdf.value=null;
			return false;
		}
	}
	$(document).ready(function(){
		$("#fromdate").on("change", function() {
			$("#todate").on("change", function() {
				$("#betweendays").prop('disabled', false);

			});
		});
	}); 

</script>

<section class="content" style="margin-top:60px;">
	<div class="container-fluid">
		<!-- Exportable Table -->

		<?php $attr = array('id'=>'frmTaskList','name'=>'frmTaskList');
		echo form_open('',$attr); ?>
		
		
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header" style="padding:3px;">
						
						<h2>
						Photos List </h2>

						<?php 
						if(!empty($this->session->flashdata('Succ'))||(!empty($this->session->flashdata('DelSucc')))){ 
							?>
							<div class="text-center" style="padding-bottom:10px" id="err_hide">
								<span class="errStyle"><?php echo $this->session->flashdata('Succ'); ?></span >
								<span class="errStyle1"><?php echo $this->session->flashdata('DelSucc'); ?></span >
							</div> 
						<?php } ?> 
					</div>

					<div class="body">
						<div class="table-responsive">
							<input type="hidden" name="deleteid" id="deleteid">
							<input type="hidden" name="getpdf" id="getpdf">

							<table id="dataTable" class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr style="text-align: center">
										<th style="width:10%">Sl.No</th>
										<th style="width:40%">Name</th>
										<th width='10%'>Photo</th>
										<th width='10%'>Action</th>
									</tr>
								</thead>
								<tbody style="font-size:13.9px">
									<?php $i = 0; foreach ($dbGalleryData as $value) {
										$i++;	?>
										<tr style="text-align:left">
											<td ><?php echo $i; ?></td>
											<td style="font-size:13px" >
												<?php echo $value['name']; ?></td>
												<td><img src="<?php echo base_url();?>images/gallery/<?php echo $value['name']; ?>" style="height: 100px;width: 100px;"></td>	
												<td>
													<a class="btn btn-danger" style="color: white"
                               onclick="javascript:deleterecord(<?php echo $value['slno']; ?>,0)">Delete</a>

													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<?php echo form_close();?>

						</div>
					</div>
				</div>

				<!-- #END# Exportable Table -->
			</div>
		</section>

<script type="text/javascript">
	
 function deleterecord(j_id)
    {
        swal({
          title: 'Do You Want To Delete This Photo',
          icon: 'warning',
          buttons: {
            cancel: {
              visible: true,
              className: 'btn btn-danger'
          },              
          confirm: {
              className : 'btn btn-success'
          }
      },
  }).then((Delete) => {
      if (Delete) {
         $.ajax({
            type: "POST",
            url:'<?php echo site_url('AdminCon/delete_photo_ajax/'); ?>',
            data:{id:j_id},
            success: function (response) {
              if(response){
                swal("", "Deleted Successfully", "success");
                     setTimeout(function() {
                        location.reload();
                    }, 1000);

            }      
        }
    });
     } else {
      swal.close();
  }
});
}
</script>


<?php $this->session->set_flashdata("Succ",''); ?>
<?php $this->session->set_flashdata("Err",''); ?>