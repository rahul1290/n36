<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<main>
    <div class="container-fluid">
        <div class="card mb-4">
           
            <div class="card-body">
                
				<?php echo $this->session->flashdata('msg'); ?>
                <form method="POST" name="f1" action="<?php echo base_url('admin/news/create');?>" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label for="staticEmail" class="col-sm-2 col-form-label">News Type<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
							<select id="category" class="form-control" name="type[]" multiple="multiple">
							<?php 
								if(set_value('category') != ''){
									$selected_type = set_value('type'); 
								}
							?>
								<?php foreach($news_types as $news_type){ ?>
									<option value="<?php echo $news_type['id']; ?>" <?php if(set_value('type') != ''){ if(in_array($news_category['id'],$selected_type)){ echo 'selected'; }}?>>
										<?php echo $news_type['display_name']; ?>
									</option>
								<?php } ?>
							</select>
							<?php echo form_error('category'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">News Headline Hindi<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
                      		<input type="text" name="heading_hindi" class="form-control" id="heading_hindi" value="<?php echo set_value('heading_hindi');?>" placeholder="news heading hindi">
							  <?php echo form_error('heading_hindi'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">News Headline English<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
                      		<input type="text" name="heading_english" class="form-control" id="heading_english" value="<?php echo set_value('heading_english');?>" placeholder="news heading english">
							<?php echo form_error('heading_english'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label for="inputPassword" class="col-sm-2 col-form-label">Media Content</label>
                    	<div class="col-sm-10">
                      		<input type="file" name="file[]" id="gallery-photo-add" multiple>
							<span class="gallery"></span>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label for="inputPassword" class="col-sm-2 col-form-label">News Content<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
                      		<textarea class="form-control" id="editor" name="content" rows="8">
							  <?php echo set_value('content');?>
							</textarea>
							<?php echo form_error('content'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Meta Title<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" id="meta_title" name="meta_title" value="<?php echo set_value('meta_title');?>" placeholder="News meta title">
							<?php echo form_error('meta_title'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Meta Keyword<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="<?php echo set_value('meta_keyword');?>" placeholder="News meta keyword">
							<?php echo form_error('meta_keyword'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Meta Description<span class="text-danger">*</span></label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" name="meta_desc" id="meta_desc" value="<?php echo set_value('meta_desc');?>" placeholder="News meta desc.">
							<?php echo form_error('meta_desc'); ?>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Published</label>
                    	<div class="col-sm-10">
                      		<input type="radio" name="published" value="ON">YES
                      		<input type="radio" name="published" value="OFF" checked>NO
                    	</div>
						<?php echo form_error('published'); ?>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label"></label>
                    	<div class="col-sm-10">
                      		<input type="submit" class="btn btn-success" value="Submit"/>
                      		<input type="reset" class="btn btn-warning" value="Cancel"/>
                    	</div>
                  	</div>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
	$(document).ready(function() {
		initSample(); //CKeditor

		var imagesPreview = function(input, placeToInsertImagePreview) {
			if (input.files) {
				var filesAmount = input.files.length;

				for (i = 0; i < filesAmount; i++) {
					var reader = new FileReader();

					reader.onload = function(event) {
						$($.parseHTML('<img class="img-thumbnail" width="200" height="200">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
					}

					reader.readAsDataURL(input.files[i]);
				}
			}
		};

		$('#gallery-photo-add').on('change', function() {
			imagesPreview(this, 'span.gallery');
		});
	});
</script>