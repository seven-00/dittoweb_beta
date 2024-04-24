<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>dittoweb</title>
    <style>
        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .img-cont {
            position: relative;
            display: inline-block;
            text-align: center;
            border: 1px solid red;
            height: 300px;

        }

        .img-hover:hover {
            transform: scale(1.1);
            /* Increase size on hover */
            transition: transform 0.5s ease;
            /* Smooth transition */
        }

        .search-box {
            background-color: #F5F5DC !important;
            color: black !important;
            max-height: 500px !important;
        }

        .autocomplete-popover {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            /* semi-transparent white background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
            /* Background color on hover */
            cursor: pointer;
        }

        html {
            scroll-behavior: smooth;
        }

        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            /* semi-transparent white background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            /* ensure it appears above other content */
        }

        .fade-out-loader {
            opacity: 0;
            transition: opacity 1s ease;
            /* Adjust the duration and easing as needed */
        }

        .fade-in-loader {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }
    </style>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div id="loader">
        <img src="assets/images/loader.svg" height="60" width="60" alt="">
    </div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dittoweb.com/content">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">content</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Movies</a></li>
                            <li><a class="dropdown-item" href="#!">TV shows</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Top today</h1>
                <p class="lead fw-normal text-white-50 mb-0">Top handpicked movies and tv shows</p>
            </div>
        </div>
        <div class="container mt-1 ">
            <div class="row justify-content-center ">
                <div class="col-md-6">
                    <form class="form-inline" action="#" method="">
                        <div class="input-group">
                            <input class="form-control search-box" id="searchInput" type="Search" placeholder="Search" aria-label="Search" autocomplete="off">

                            <div class="input-group-append">
                                <div class="dropdown ">
                                    <button class="btn btn-primary rounded-lg search" type="button">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($contentpayload as $contentId => $contentData) { ?>
                    <div class="col mb-5">
                        <div class="card img-cont">
                            <?php foreach ($contentData['content-photo'] as $photouri) { ?>
                                <a href="<?php echo "content/" . $contentId; ?>">
                                    <img class="card-img-top img-fluid img-hover" src="<?php echo $photouri; ?>" alt="..." />
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateButton(text) {
            document.querySelector('.search-dropdown').innerText = text;
        }
        const autocompleteData = [
            "Apple",
            "Banana",
            "Orange",
            "Grapes",
            "Pineapple",
            "Watermelon",
            "Strawberry",
            "Kiwi",
            "Mango",
            "Peach"
        ];

        // Function to update autocomplete suggestions
        function updateAutocomplete(input, arr) {
            let autocompleteList = document.getElementById('autocompleteList');
            autocompleteList.innerHTML = ''; // Clear previous suggestions
            for (let i = 0; i < arr.length; i++) {
                let item = arr[i];
                let listItem = document.createElement('a');
                listItem.classList.add('list-group-item', 'list-group-item-action');
                listItem.textContent = item;
                listItem.addEventListener('click', function() {
                    input.value = item;
                    autocompleteList.style.display = 'none'; // Hide autocomplete suggestions
                });
                autocompleteList.appendChild(listItem);
            }
            if (arr.length > 0) {
                autocompleteList.style.display = 'block'; // Show autocomplete suggestions
            } else {
                autocompleteList.style.display = 'none'; // Hide autocomplete suggestions if there are no matches
            }
        }

        // Function to search (for demonstration purposes)
        function search() {
            let query = document.getElementById('searchInput').value;
            // Perform search operation here
            console.log("Search query: " + query);
        }

        document.addEventListener('DOMContentLoaded', function() {
            let searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                let value = this.value.toLowerCase();
                let matches = autocompleteData.filter(item => item.toLowerCase().includes(value));
                updateAutocomplete(searchInput, matches);
            });
        });
        window.onload = function() {
            // Hide the loader when all resources are loaded
            const loader = document.getElementById('loader');
            if (loader) {
                loader.classList.add('fade-out-loader');
                setTimeout(function() {

                    loader.style.display = 'none';
                }, 1000);
            }
        };

        function showLoader() {
            const loader = document.getElementById('loader');
            loader.style.display = 'flex';
            setTimeout(function() {

                loader.classList.add('fade-in-loader');
            }, 10);
        }
    </script>
</body>

</html>