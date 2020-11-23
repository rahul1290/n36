<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                News36 Video List
                <span class="float-right">
                	<a class="btn btn-success" href="javascript:void(0);" id="videocreate">Create</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-dark text-light text-center">
                            <tr>
                                <th>S.no</th>
                                <th>Video Thumb</th>
                                <th>Video Title</th>
								<th>Published</th>								<th>Order</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c=1; foreach($videos as $video){ ?>								<tr>
									<td><?php echo $c++; ?>.</td>
									<td>
										<img width="70" height="50" src="https://img.youtube.com/vi/<?php echo $video['video_id']; ?>/0.jpg" /></td>
									<td><?php echo $video['video_title']; ?></td>
									<td>
										<?php 
											if($video['is_published']){
												echo "<input type='checkbox' checked />";
											} else {
												echo "<input type='checkbox' />";
											}
										?>
									</td>									<td><?php echo $video['orderby']; ?></td>									<td>										<a href="javascript:void(0);" class="video_edit" data-v_id="<?php echo $video['id']; ?>" data-vid="<?php echo $video['video_id'];?>" data-title="<?php echo $video['video_title']; ?>" data-publish="<?php echo $video['is_published']; ?>" data-order="<?php echo $video['orderby']; ?>">											<i class="fa fa-pencil"></i>										</a>									</td>								</tr>
							<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main><div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog" role="document">    <div class="modal-content">      <div class="modal-header">        <h5 class="modal-title" id="exampleModalLabel">			<span id="modal_title">Video Create</span>		</h5>        <button type="button" class="close" data-dismiss="modal" aria-label="Close">          <span aria-hidden="true">&times;</span>        </button>      </div>      <div class="modal-body">        <span id="modal_body">			<form>				<div class="form-group row">					<label class="col-sm-2 col-form-label">Video Id</label>					<div class="col-sm-10">						<input type="hidden" id="video_id" value="" />						<input type="text" class="form-control" id="videoId" value="">					</div>				</div>				<div class="form-group row">					<label class="col-sm-2 col-form-label">Video Thumb</label>					<div class="col-sm-10">						<img id="video_image" width="70" height="50" src="" />					</div>				</div>				<div class="form-group row">					<label class="col-sm-2 col-form-label">Video Title</label>					<div class="col-sm-10">						<input type="text" class="form-control" id="videoTitle" placeholder="Video Title">					</div>				</div>				<div class="form-group row">					<label class="col-sm-2 col-form-label">Video Order</label>					<div class="col-sm-10">						<input type="text" class="form-control" id="videoOrder" placeholder="Video order">					</div>				</div>				<div class="form-group row">					<label class="col-sm-2 col-form-label">Published</label>					<div class="col-sm-10">						<select class="form-control" id="published">							<option value="1">Yes</option>							<option value="0">No</option>						</select>					</div>				</div>			</form>		</span>      </div>      <div class="modal-footer">        <button id="video_create" type="button" class="btn btn-primary">Create</button>		<button id="video_update" type="button" class="btn btn-warning" style="display:none;">Update</button>      </div>    </div>  </div></div><script>	var baseUrl = $('#baseUrl').val();		$(document).on('click','.video_edit',function(){		var vid = $(this).data('vid');		var title = $(this).data('title');		var publish = $(this).data('publish');		var order = $(this).data('order');				$('#modal_title').html('Video Edit');		$('#video_image').attr('src','https://img.youtube.com/vi/'+ vid +'/0.jpg');		$('#video_id').val($(this).data('v_id'));		$('#videoId').val(vid);		$('#videoTitle').val(title);		$('#published').val(publish);		$('#videoOrder').val(order);		$('#video_create').hide();		$('#video_update').show();				$('#exampleModal').modal({		  keyboard: false,		  backdrop: 'static'		})	});		$(document).on('click','#videocreate',function(){		var vid = $(this).data('vid');		var title = $(this).data('title');		var publish = $(this).data('publish');				$('#modal_title').html('Video Create');		$('#video_image').attr('src','');		$('#video_id').val('');		$('#videoId').val('');		$('#videoTitle').val('');		$('#published').val('');		$('#videoOrder').val('');		$('#video_create').show();		$('#video_update').hide();				$('#exampleModal').modal({		  keyboard: false,		  backdrop: 'static'		})	});		$(document).on('click','#video_create',function(){		$.ajax({			type:'POST',			url:baseUrl+'admin/Videos_ctrl/video_create',			data:{				'vId' : $('#videoId').val(),				'title' : $('#videoTitle').val(),				'publish' : $('#published').val(),				'order' : $('#videoOrder').val()			},			dataType:'json',			success:function(response){				alert(response.msg);				location.reload();			},		});	});		$(document).on('click','#video_update',function(){		$.ajax({			type:'POST',			url:baseUrl+'admin/Videos_ctrl/video_edit',			data:{				'v_id' : $('#video_id').val(),				'vId' : $('#videoId').val(),				'title' : $('#videoTitle').val(),				'publish' : $('#published').val(),				'order' : $('#videoOrder').val()			},			dataType:'json',			success:function(response){				alert(response.msg);				location.reload();			},		});	});	</script>