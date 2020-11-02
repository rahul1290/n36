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
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Url</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c=1; foreach($newsList as $news){ ?>
                            		<td><?php echo $c; ?></td>
                            		<td><?php 
                            			$pos = strpos($news['title_hindi'],' ',200);
                            			echo substr($news['title_hindi'],0,$pos );
                                        ?>
                            		</td>
                            		<td></td>
                            		<td></td>
                            		<td><a href="<?php echo base_url('admin/news/edit/').$news['id']; ?>"><i class="fa fa-pencil"></i></a></td>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>