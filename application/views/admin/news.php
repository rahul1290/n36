<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                News36 News List
                <span class="float-right">
                	<a class="btn btn-success" href="<?php echo base_url('admin/news/create');?>">Create</a>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-dark text-light text-center">
                            <tr>
                                <th>Id</th>
                                <th>News Type</th>
                                <th>News Title</th>
                                <th>Detail</th>
                                <th>Url</th>
								<th>Published / Date</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c=1; foreach($newsList as $news){ ?>
                        		<tr>
                        			<td><?php echo $c; ?></td>
                        			<td>
                        				<?php 
                        				    $newsTypes = explode(',', $news['news_types']);
                        				    foreach($newsTypes as $x){ ?>
                        						<span class="mt-4" style="background-color: blanchedalmond;padding: 4px;"><?php echo $x; ?></span>        
                        			    <?php } ?>
                        			</td>
                        			<td><?php echo substr($news['title_hindi'],0,200); ?></td>
                        			<td></td>
                        			<td>
										<a href="<?php echo base_url().'news/'.$news['slug']; ?>">News Link</a>
									</td>
									<td>
										<?php 
											if($news['publish']){
												echo '<input type="checkbox" checked>';
											} else {
												echo '<input type="checkbox">';	
											}
											
											if(is_null($news['published_at'])){
												echo '';
											} else { 
												echo date('d-m-y :: h:i A',strtotime($news['published_at'])); 
											} ?>
									</td>
                        			<td>
                        				<a href="<?php echo base_url('admin/news/edit/').$news['id']; ?>">
                        					<i class="fa fa-pencil"></i>
											Edit
                        				</a>
										
										<a href="javascript:void(0);" class="news_del" data-id="<?php echo $news['id']; ?>">Delete</a>
                        			</td>
                        		</tr>
                            <?php $c++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
	$(document).on('click','.news_del',function(){
		var baseUrl = $('#baseUrl').val();
		var newsId = $(this).data('id');
		$.ajax({
			type:'POST',
			url:baseUrl+'admin/news_ctrl/news_delete/'+newsId,
			data:{
				'n_id' : newsId,
			},			
			dataType:'json',
			success:function(response){				
				alert(response.msg);				
				location.reload();			
			},		
		});
	});
</script>