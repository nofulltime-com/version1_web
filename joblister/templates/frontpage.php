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
        <div class="jumbotron">
            <h1>Find a Job</h1>
            <form method="GET" action="index.php">
                <select name="category" class="form-control">
                    <option value="0">Choose category</option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select><br>
                <input type="submit" class="btn btn-lg btn-success" style="background-color:#49e4fa;border-color:#49e4fa;color:black;border-radius:30px;" value="FIND">
            </form>
        </div>
        <h3><?php echo $title; ?></h3>
            <?php foreach($jobs as $job): ?>
                <div class="row marketing">
                    <div class="col-md-10">
                    <h4><?php echo $job->job_title; ?></h4>
                    <p><?php echo $job->description; ?></p>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-default"style=background-color:#49e4fa;color:black;border-color:#49e4fa;border-radius:20px; href="job.php?id=<?php echo $job->id; ?>">View</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <footer class="footer">
            <p>&copy; 2021,No-full-time.com</p>
        </footer>
        </div> <!-- /container -->
    </body>
</html>