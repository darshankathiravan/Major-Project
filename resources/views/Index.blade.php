<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ url('assets\images\Website_Icon.PNG') }}" type="image/x-icon">

</head>

<body>
    <style>
        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#252526, #000000);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#000000, #4f4c4f);
            overflow: hidden;
        }
    </style>

    <!-- Section: Design Block -->
    <div class="container my-5">

        <!-- text Area -->

        <div class="row text-center">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 2%, 19%)">
                Welcome to DEX! <br />
                <span style="color: hsl(0, 2%, 19%)">Smart Study</span>
            </h1>
        </div>

        <!-- card -->
        <div class="row d-flex justify-content-center">

            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>


            <div class="card border-dark" style="width: 24rem;">
                <div class="card-body px-4 py-5 px-md-5">
                    <form method="POST" action="#">
                        @csrf
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control border border-dark" />
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="form3Example4" class="form-control border border-dark" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <!-- Submit button -->
                        <div class="d-flex justify-content-center">
                            <a href = "{{ route('student.home') }}" type="submit" data-mdb-button-init
                                data-mdb-ripple-init class="btn btn-dark btn-block mb-4 d-flex">
                                Log in
                            </a>
                        </div>
                        <!-- Register buttons -->
                        <div class="text-center">

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google" style="color: black"></i>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Section: Design Block -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
