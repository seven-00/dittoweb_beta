

    <div class="container-xl mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0 text-dark" href="#profileTab" data-bs-toggle="tab">Profile</a>
            <a class="nav-link text-dark" href="#billingTab" data-bs-toggle="tab">Billing</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="profileTab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid mb-3 rounded-circle">
                                <input type="email" class="form-control mb-3" id="inputEmail" placeholder="Email Address" value="<?php echo $userData['userEmail']?>">
                                <input type="text" class="form-control mb-3" id="inputFirstName" placeholder="First Name" value="<?php echo $userData['userFirstName']?>">
                                <input type="text" class="form-control mb-3" id="inputLastName" placeholder="Last Name" value="<?php echo $userData['userLastName']?>">
                                <button type="button" class="btn btn-primary me-2">Save Changes</button>
                                <button type="button" class="btn btn-secondary">Reset Password</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                            <p class="mt-3">Last Login: <?php echo $userData['userLastLogin']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="billingTab">
            <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header">Billing Details</div>
                            <div class="card-body">
                            <p class="mt-3">Renewal on: <?php echo $userData['userRenewalDate']?></p>
                            <p class="mt-3">Subscription: <?php echo $userData['userSubPlan']?></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
