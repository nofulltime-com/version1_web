<!DOCTYPE html>
<html>

<head>
    <style>
        <?php include "../templates/inc/css/main2.css" ?><?php include "../templates/inc/css/narrow.css" ?><?php include "./inc/css/footer.css" ?>
    </style>
    <div class="container">
        <div class="head clearfix">
            <div class="head">
                <ul class="head head-pills pull-right">
                    <li role="presentation" style=background-color:#8c78f1;border-radius:20px;><a href="index.php">Home</a></li>
                </ul>
            </div>
            <h3 class="text-muted" style=font-size:35px;><?php echo SITE_TITLE; ?></h3>
        </div>
        <hr />
        <div class="jumbotron" style=background-color:#8c78f1;>
            <h1 style="color:white">Find the latest opportunities!</h1>
            <form method="GET" action="index.php">
                <select name="category" class="form-control">
                    <option value="0">Choose Category</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select> <br><br>
                <input type="submit" class="btn btn-lg btn-success" value="FIND" style=background-color:white;color:#8c78f1;padding-left:20px;padding-right:20px;border-radius:20px;>
            </form>
        </div>
        <?php displayMessage(); ?>
        <h3 style=font-size:25px;color:#6f42c1;font-weight:500;><?php echo $title; ?></h3>
        <?php foreach ($jobs as $job) : ?>
            <div class="row marketing">
                <div class="col-md-10">
                    <h4 style=font-size:20px;font-weight:800;><?php echo $job->job_title; ?></h4>
                    <p style=font-size:15px;font-weight:400;><?php echo $job->description; ?></p>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-default" style=background-color:#8c78f1;color:white;border-color:#8c78f1;border-radius:20px;font-size:15px;padding:6px;width:70%; href="job.php?id=<?php echo $job->id; ?>">View</a>
                </div>
            </div>
        <?php endforeach; ?>
        <footer class="footer">
            <p>&copy; 2021,No-full-time.com</p>
        </footer>
    </div> <!-- /container -->
    </body>

</html>