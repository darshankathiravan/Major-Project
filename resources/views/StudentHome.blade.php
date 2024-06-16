<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>STUDENT'S PORTAL</title>
    <link rel="icon" href="{{ url('assets\images\Website_Icon.PNG') }}" type="image/x-icon">

</head>

<body>
    <!--calling header-->

    @include('layouts.header')
    <div class="d-flex justify-content-center row">

    @foreach ($coursename as $name)
    <div class="bg-tertiary my-5 col d-flex justify-content-center">
        <div class="card bg-primary-subtle p-1" style="width: 22rem;">
            <div class="card-body mx-3 my-3">
                <h5 class="card-title"><center>{{ $name->course_full_name }}</center></h5>
                <p class="card-text">Some quick example text to build on the CT-2 and make
                    up
                    the
                    bulk of the card's content.</p>
                
                    <p class="card-text">Some quick example text to build on the CT-2 and make up the bulk of the card's content.</p>
                    <div class="row">
                        @for($sem = 1; $sem <= 8; $sem++)                            
                            <a class="btn btn-primary mx-1 my-1 p-1" style="width: 4rem" href="/studenthome/{{ $sem }}">Sem {{ $sem }}</a>
                        @endfor
                    </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    <!--header done-->
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <script>
    // const myDefaultAllowList = bootstrap.Tooltip.Default.allowList
    // myDefaultAllowList.br = []
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')    
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

    </script>

</html>
