<!DOCTYPE html>
<html>
    <head>
    <style>
            <?php include "../templates/inc/css/main2.css"?>
            <?php include "../templates/inc/css/narrow.css"?>
            <?php include "./inc/css/footer.css"?>
   </style>
   <body>
    <div class="container">
            <div class="head clearfix">
                <div class="head">
                <ul class="head head-pills pull-right">
                    <li role="presentation" style=background-color:#49e4fa;border-radius:20px;><a href="index.php">Home</a></li>
                    <li role="presentation" style=background-color:#49e4fa;border-radius:20px;><a href="create.php">Create Listing</a></li>
                </ul>
            </div>
            <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
        </div><hr/>
<?php displayMessage();?> 
        <h2 class="page-header">Create Job Listing</h2>  
        <form method="post" action="create.php">
            <div class="form-group">
                <label>Company</label>
                <input type="text" class="form-control" name="company">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
                    <option value="0">Choose Category</option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Job Title</label>
                <input type="text" class="form-control" name="job_title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <div class="form-group">
                <label>Contact User</label>
                <input type="text" class="form-control" name="contact_user">
            </div>
            <div class="form-group">
			    <label>Contact Email</label>
			    <input type="text" class="form-control" name="contact_email">
		    </div>
            <input type="submit" style=background-color:#49e4fa;border-radius:20px;padding:12px; class="btn btn-default" value="Submit" name="submit">
        </form><br>
        <footer class="footer">
            <p>&copy; 2021,No-full-time.com</p>
        </footer>
    </div> <!-- /container -->
    </body>
</html>