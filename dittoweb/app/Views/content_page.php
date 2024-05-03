<div id="loader">
    <img src="assets/images/loader.svg" height="60" width="60" alt="">
</div>
<!-- Header-->
    <header class="bg-custom">
        <div id="carouselWithSearch" class="position-relative">
            <div id="searchBar" class="overlay d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <form class="d-flex justify-content-center" method="post" action="/dittoweb.com/content">
                                <div class="input-group">
                                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url() ?>assets/images/slider1bg.jpg" class="d-block" style="background-size: cover;" alt="">
                            <div class="carousel-caption d-flex flex-column justify-content-center align-items-start">
                                <div class="container px-4 px-lg-5">
                                    <h1 class="display-2 text-white">Top Today</h1>
                                    <p class="lead fw-normal text-white-50 mb-0">Top handpicked movies and TV shows from yesterday</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo base_url() ?>assets/images/slider2bg.jpg" class="d-block" style="background-size: cover;" alt="">
                            <div class="carousel-caption d-flex flex-column justify-content-center align-items-start">
                                <div class="container px-4 px-lg-5">
                                    <h1 class="display-2 text-white">Top Yesterday</h1>
                                    <p class="lead fw-normal text-white-50 mb-0">Top handpicked movies and TV shows from yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>

<!-- Section-->
<section class="py-5 bg-custom">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="data">
            <?php foreach ($contentpayload as $item) { ?>
                <div class="col mb-5">
                    <a href="content/<?php echo $item['content-ID'] ?>">
                        <div class="card h-100 custom-rounded card-effect">
                            <!-- Product image-->
                            <img class="card-img-top custom-rounded " src="<?php echo $item['content-photo'] ?>" alt="...">
                            <div class="card-img-overlay custom-rounded">
                               
                                <p class="card-subtitle "><?php echo $item['content-type'] ?></p>
                                <p class="card-subtitle text-muted"><?php echo $item['content-year'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-custom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.onload = function() {
        // Hide the loader when all resources are loaded
        const loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('fade-out-loader');
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500);
        }
    };

    function showLoader() {
        const loader = document.getElementById('loader');
        loader.style.display = 'flex';
        setTimeout(function() {
            loader.classList.add('fade-in-loader');
        }, 500);
    }

    function hideLoader() {
        const loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('fade-out-loader');
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500);
        }
    }
    var loaderoffset = 5
    jQuery(document).ready(function() {
        jQuery(window).scroll(function() {
            if (jQuery(window).scrollTop() >= jQuery(document).height() - jQuery(window).height()) {
                showLoader();
                dynamicloader(loaderoffset);
            }
        })
    })

    function dynamicloader(offset) {
        var urlend = "<?php echo base_url('content/dynamicload'); ?>";

        jQuery.ajax({
            url: urlend,
            method: "POST",
            data: 'offset=' + offset,
            success: function(result) {
                if (result != 1) {
                    console.log(result);
                    jQuery('#data').append(result);
                    loaderoffset += 8;
                }
            },
            // error: function(xhr, status, error) {
            //     console.error("Error: " + error); // Log the error to console
            //     // Handle the error condition here if needed
            //     alert("You have reached the end of the record")
            // },
            complete: function(xhr, status) {
                console.log("Request completed with status: " + status);
                hideLoader();
            }
        });

    }
</script>
</body>

</html>