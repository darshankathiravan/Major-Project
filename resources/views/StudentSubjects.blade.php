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
    
<style>

/* Change the background color of the accordion body */
/* .accordion-button{
    background-color: #35383d; 
    color: #35383d;
} */
.accordion-body {
    background-color: #ffffff;
}
.card-title{
    color: #ffffff;
}

.card-text{
    color: #ffffff;
}
.card{
    background-color: #232D3F;
}
.card-button{
    background-color: #008170; /* Adjust the color code to the desired lighter shade */
        color: #fff; /* Text color */
}

</style>
    
    <div class="bg-tertiary">
        <!--calling header-->

        @include('layouts.header')

        <!--header done-->

        <!--ALERT-->

        <center>
            <h1 class="display-3 my-2"><b>SEMESTER 1</b></h1>
        </center>

        <!--ALERT CLOSED-->

        <!-- Accordion Starts-->
        @foreach ($subs as $subData)
            <div class="ms-4 me-5 my-4">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne{{ $subData->sub_id }}" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                <span class="fs-2">{{ $subData->sub_full_name }}</span>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne{{ $subData->sub_id }}" class="accordion-collapse collapse  ">
                            <div class="accordion-body">

                                <!--card group-->
                                
                                    
                                <div class="row">
                                    @for ($materials=0;$materials<=5;$materials++)
                                    {{-- @foreach($data as $i) --}}
                                    <div class="card mx-2 my-2" style="width: 18rem;">

                                        <div class="card-body">
                                            <h5 class="card-title">Study Materials(CT-1)</h5>
                                            <p class="card-text">Some quick example text to build on the CT-2 and make
                                                up
                                                the
                                                bulk of the card's content.</p>
                                                <a href="{{ url('assets\images\computer comunication networks ct paper.pdf') }}" download="computer communication.pdf" class="btn card-button d-flex justify-content-center mx-4">View</a>

                                        </div>
                                    </div>
                                    {{-- @endforeach  --}}
                                    @endfor


                                    <div class="card mx-2 my2" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">REFERENCE BOOKS</h5>
                                            <p class="card-text">Some quick example text to build on the CT-2 and make
                                                up
                                                the bulk of the card's content.</p>
                                        </div>
                                        <ul class="list-inline list-group-flush ">
                                            <li class="list-inline-item" ><a href="#"
                                                    class="btn d-flex justify-content-center" style="background-color: #005b41; color:#fff" >Book 1</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                    class="btn d-flex justify-content-center" style="background-color: #005b41; color:#fff">Book 2</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                    class="btn d-flex justify-content-center" style="background-color: #005b41; color:#fff">Book 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--CARD GROUP CLOSED-->

                        </div>
                    </div>
                </div>




            </div>
   
        @endforeach


    <!--Accordion ends-->   
            
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>


</html>
