<?php include "includes/header.php";?>  
    <div style="padding-top: 100px;  padding-bottom: 404px ;margin: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h4>Change Password</h4>
                    <form>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type Password" name="password"
                                required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php";?>  