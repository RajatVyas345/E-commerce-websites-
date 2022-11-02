<?php include "includes/header.php";?>  
    <div style="padding-top: 100px;  padding-bottom: 233px ;margin: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>SIGN UP</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="e-mail" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact"
                                required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="address" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php";?>  