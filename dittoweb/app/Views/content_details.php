
    <!-- Product section-->
    <section class="py-1  text-white bg-custom">
        <div class="container px-4 px-lg-5 my-5 ">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4">
                    <img class="card-img-top mb-5 mb-md-0 custom-rounded" src=<?php echo $contentdatapayload['content_photo_url'] ?> alt="..." />
                </div>
                <div class="col-md-6 text-white bg-dark custom-rounded">

                    <h1 class="display-5 fw-bolder"><?php echo $contentpayload['content_name'] ?></h1>
                    <div class="custom-title mb-2">
                        <span class="badge  bg-light text-dark"><?php echo $contentdatapayload['content_type'] ?></span>
                        <span class="badge  bg-light text-dark"><?php echo $contentdatapayload['content_length'] ?></span>
                        <span class="badge  bg-light text-dark"><?php echo $contentpayload['categories'] ?></span>
                        <span class="badge  bg-light text-dark"><?php echo $contentdatapayload['content_year'] ?></span>
                    </div>
                    <p class="lead"><?php echo $contentdatapayload['content_synopsis'] ?></p>
                    <p class="custom-title py-0.5 ">
                    <h4>Casts</h4>
                    <?php echo $contentpayload['casts'] ?>
                    <h4>Directed by</h4>
                    <?php echo $contentpayload['directors'] ?>
                    <h4>Available in languages</h4>
                    <?php echo $contentpayload['languages'] ?>

                </div>
            </div>

        </div>
    </section>
    <!-- Reviews section -->
    <section class="py-1  text-white bg-custom">
        <div class="container my-5">
            <h1 class="text-center mb-5"> Ratings and Reviews</h1>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="card bg-dark">
                        <div class="card-header text-white custom-theme">
                            <h4>Add Your Review</h4>
                        </div>
                        <div class="card-body">
                            <form action="/dittoweb.com/content/add_review/<?php echo $contentpayload['content_id']; ?>" method="POST">
                                <div class="form-group ">
                                    <label for="review">Review</label>
                                    <textarea class="form-control text-white bg-dark" name="review" id="review" rows="5" placeholder="Write your review" required></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-rounded ">
                    <div class="card mb-4 bg-dark ">
                        <div class="card-header  text-white custom-theme" style="overflow-y: auto; max-height: 200px;">
                            <h4>Reviews</h4>
                        </div>
                        <div class="card-body  " style="overflow-y: auto; max-height: 251px;">
                            <?php foreach ($contentreviewspayload as $review) { ?>
                                <div class="d-flex align-items-start mb-4">
                                    <img src="<?php echo base_url()?>assets/images/pfp.png" height="35" width="35" class="mr-3" alt="User Avatar">
                                    <div class="media-body mt-1" style="margin-left: 20px;">
                                        <h4 class="mt-0 mb-1"><?php print_r($review['user']) ?></h4>
                                        <p class="mb-0"><?php print_r($review['review']) ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        
                        <div class="card-body p-4">
                            <div class="text-center">
                                
                                <h5 class="fw-bolder">Fancy Product</h5>
                               
                                $40.00 - $80.00
                            </div>
                        </div>
                        
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                    
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                       
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                      
                        <div class="card-body p-4">
                            <div class="text-center">
                               
                                <h5 class="fw-bolder">Special Item</h5>
                               
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                              
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                      
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                      
                        <div class="card-body p-4">
                            <div class="text-center">
                                
                                <h5 class="fw-bolder">Sale Item</h5>
                                
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                       
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                       
                        <div class="card-body p-4">
                            <div class="text-center">
                            
                                <h5 class="fw-bolder">Popular Item</h5>
                                
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                
                                $40.00
                            </div>
                        </div>
                        <
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Dittoweb 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

</body>

</html>