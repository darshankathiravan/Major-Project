<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <title>STUDENT'S PORTAL</title>
    <link rel="icon" href="{{ url('assets\images\Website_Icon.PNG') }}" type="image/x-icon">

</head>

<body>
    <div class="bg-tertiary">
        <!--calling header-->
    
        @include('layouts.header')

    <!--header done-->

        <!--ALERT-->

        <div class="ms-4 my-4 me-5 alert alert-primary text-center display-2  fw-semibold" role="alert">
            <h1>SEMESTER 1</h1>
        </div>

        <!--ALERT CLOSED-->

        <!-- Accordion Starts-->

        <div class="ms-4 me-5 my-4">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Database Management Systems
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">

                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">                                   
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">                                    
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-inline list-group-flush ">
                                        <li class="list-inline-item"><a href="#" class="btn btn-primary d-flex justify-content-center">Book 1</a></li>
                                        <li class="list-inline-item"><a href="#" class="btn btn-primary d-flex justify-content-center">Book 2</a></li>
                                        <li class="list-inline-item"><a href="#" class="btn btn-primary d-flex justify-content-center">Book 3</a></li>
                                    </ul>      
                                   
                                        <a href="#" class="btn btn-primary mx-4 px-3">Modify</a>
                                   
                                </div>
                            </div>

                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                {{-- <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>

                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapsefour">
                            Accordion Item #4
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>

                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapsefive">
                            Accordion Item #5
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>

                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapsesix">
                            Accordion Item #6
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>

                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseseven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseseven">
                            Accordion Item #7
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseseven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseeight" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseeight">
                            Accordion Item #8
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseeight" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!--card group-->

                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-1)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-2)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Study Materials(CT-3)</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SEMESTER PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">QUESTION BANK</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>


                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">SOLVED PAPERS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary ms-2 px-4">View</a>
                                        <a href="#" class="btn btn-primary ms-3 px-3">Modify</a>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REFERENCE BOOKS</h5>
                                        <p class="card-text">Some quick example text to build on the CT-2 and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div> --}}
                
            </div>

            
        </div>

        <!--Accordion ends-->

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</html>