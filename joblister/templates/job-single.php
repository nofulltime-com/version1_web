<!DOCTYPE html>
<html>
    <head>
    <style>
            <?php include "../templates/inc/css/main2.css"?>
            <?php include "../templates/inc/css/narrow.css"?>
            <?php include "./inc/css/footer.css"?>
   </style>
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
        <h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>) </h2> 
        <small style=font-size:18px;>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
        <hr>
	    <p class="lead"><?php echo $job->description; ?></p>
        <ul class="list-group">
		<li class="list-group-item" style=font-size:18px;><strong>Company:</strong> <?php echo $job->company; ?></li>
		<li class="list-group-item" style=font-size:18px;><strong>Salary:</strong> <?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->contact_email; ?></li>
	    </ul>
        <br><br>
	    <a href="index.php" style=color:#a367e7;font-size:20px;font-weight:500;>Go Back</a>
	    <br><br>
        <div class="well">
            <form style="display:inline;" method="post"action="job.php">
                <input type="hiddden" name="del_id" value="<?php echo $job->id;?>">
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>

        <footer class="footer">
                    <p>&copy; 2021,No-full-time.com</p>
                </footer>
                </div> <!-- /container -->
            </body>
        </html>