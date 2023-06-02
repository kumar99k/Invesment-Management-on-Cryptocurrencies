<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Blogs</h4>
                </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <input type="text" name="blog_title" placeholder="Title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="blog_body" placeholder="Description" id="blog" cols="0" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="blog_image" class="form-control">   
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="" value="" class="btn btn-primary">Add</button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>