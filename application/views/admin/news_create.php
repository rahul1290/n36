<main>
    <div class="container-fluid">
        <div class="card mb-4">
           
            <div class="card-body">
                
                <form>
                	<div class="form-group row">
                    	<label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                    	<div class="col-sm-10">
                      		<select class="multiselect form-control" name="category" id="category">
                      			<option>Other</option>
                      			<option>National</option>
                      		</select>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">News Headline Hindi</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" id="heading_hindi" placeholder="news heading hindi">
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">News Headline English</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" id="heading_english" placeholder="news heading english">
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label for="inputPassword" class="col-sm-2 col-form-label">Media Content</label>
                    	<div class="col-sm-10">
                      		<input type="file">
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label for="inputPassword" class="col-sm-2 col-form-label">News Content</label>
                    	<div class="col-sm-10">
                      		<textarea class="form-control" rows="8"></textarea>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Related News</label>
                    	<div class="col-sm-10">
                      		<select class="form-control" name="related_news" id="related_news">
                      			<option>Related news</option>
                      		</select>
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Meta Title</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="News meta title">
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Meta Keyword</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" id="meta_keyword" placeholder="News meta keyword">
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Meta Description</label>
                    	<div class="col-sm-10">
                      		<input type="text" class="form-control" id="meta_desc" placeholder="News meta desc.">
                    	</div>
                  	</div>
                  	<div class="form-group row">
                    	<label class="col-sm-2 col-form-label">Published</label>
                    	<div class="col-sm-10">
                      		<input type="radio" name="published" value="ON">YES
                      		<input type="radio" name="published" value="OFF">NO
                    	</div>
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


<script type="text/javascript">
  $(document).ready(function() {
    $('.multiselect').multiselect({
      buttonText: function(options, select) {
        if (options.length == 0) {
          return this.nonSelectedText + ' <b class="caret"></b>';
        }
        else {
          if (options.length > this.numberDisplayed) {
            return options.length + ' ' + this.nSelectedText + ' <b class="caret"></b>';
          }
          else {
            var selected = '';
            options.each(function() {
              var label = ($(this).attr('label') !== undefined) ? $(this).attr('label') : $(this).html();
 
              selected += label + ', ';
            });
            return selected.substr(0, selected.length - 2) + ' <b class="caret"></b>';
          }
        }
      }
    });
  });
</script>