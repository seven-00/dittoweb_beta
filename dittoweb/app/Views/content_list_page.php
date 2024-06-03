<div id="loader">
    <img src="assets/images/loader.svg" height="60" width="60" alt="">
</div>
<!-- Header--> 
<header class="bg-custom py-5">
       <div>
        <h1>list name will be here</h1>
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
                            <img class="card-img-top custom-rounded " src=<?php echo $item['content-photo'] ?> alt="...">
                            <div class="card-img-overlay custom-rounded">
                            <h5 class="card-title "><?php echo $item['content-name'] ?></h5>
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
 
</script>
</body>

</html>