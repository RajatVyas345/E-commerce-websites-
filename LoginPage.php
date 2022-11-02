<?php include "includes/header.php";?>  
    <div style="padding-top: 139px;  padding-bottom: 250px ;margin: auto;">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                        </form><br/>
                    </div>
                    <div class="panel-footer"><p>Don't have an account? <a href="#">Register</a></p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php";?>  