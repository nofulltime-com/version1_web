<?php Session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recruiters Details</title>
        <style>
            <?php include "./css/bootstrap.css" ?>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Recruiters Details</h1>
                    </div>
                    <div class="panel-body">
                        <form action="connect.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required/>                          
                            </div>
                            <div class="form-group">
                                <label for="organization">Organization</label>
                                <input type="text" class="form-control" id="organization" name="organization" required/>                          
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" required/>                          
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location" required/>                          
                            </div>
                            <div class="form-group">
                                <label for="industry">Industry</label>
                                <input type="text" class="form-control" id="industry" name="industry" required/>                          
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="panel-footer text-right">
                        <small>&copy; Nofulltime.com</small>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>