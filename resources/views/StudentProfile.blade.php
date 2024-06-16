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
    <!-- calling header -->
    @include('layouts.header')

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-10 col-xl-4 col-sm-10 col-lg-5 col-10">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                        <div class="mt-3 mb-4 text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <div class="mt-5 border border-black  p-4 mb-2 border-opacity-25 rounded-start">
                            <div class="mb-3 row">
                                <label for="inputName" class="col-1 mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path
                                            d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                                        </path>
                                    </svg></label>
                                <div class="ms-3 mt-1 col">
                                    <h5>Darshan K</h5>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputMobilenumber" class="col-1 mt-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24 "
                                        fill="currentColor" class="bi bi-r-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.5 4.002V12h1.335V8.924H8.52L9.98 12h1.52L9.856 8.701c.828-.299 1.495-1.101 1.495-2.238 0-1.488-1.03-2.461-2.74-2.461zm1.335 1.09v2.777h1.549c.995 0 1.573-.463 1.573-1.36 0-.913-.596-1.417-1.537-1.417z" />
                                    </svg>
                                </label>
                                <div class="ms-3 mt-1 col">
                                    <h5>RA2011043040001</h5>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-1 mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path
                                            d="M1.75 3h20.5c.966 0 1.75.784 1.75 1.75v14a1.75 1.75 0 0 1-1.75 1.75H1.75A1.75 1.75 0 0 1 0 18.75v-14C0 3.784.784 3 1.75 3ZM1.5 7.412V18.75c0 .138.112.25.25.25h20.5a.25.25 0 0 0 .25-.25V7.412l-9.52 6.433c-.592.4-1.368.4-1.96 0Zm0-2.662v.852l10.36 7a.25.25 0 0 0 .28 0l10.36-7V4.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25Z">
                                        </path>
                                    </svg></label>
                                <div class="ms-3 mt-1 col">
                                    <h5>dk8709@srmist.edu.in</h5>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputMobilenumber" class="col-1 mt-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <path
                                            d="M10.25 5.25A.75.75 0 0 1 11 4.5h2A.75.75 0 0 1 13 6h-2a.75.75 0 0 1-.75-.75ZM12 19.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z">
                                        </path>
                                        <path
                                            d="M4 2.75C4 1.784 4.784 1 5.75 1h12.5c.966 0 1.75.784 1.75 1.75v18.5A1.75 1.75 0 0 1 18.25 23H5.75A1.75 1.75 0 0 1 4 21.25Zm1.75-.25a.25.25 0 0 0-.25.25v18.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V2.75a.25.25 0 0 0-.25-.25Z">
                                        </path>
                                    </svg></label>
                                <div class="ms-3 mt-1 col">
                                    <h5>6383107610</h5>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputIssue" class="col-1 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                                    <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                                    <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                                  </svg></label>
                                <div class="ms-3 mt-1 col">
                                    <h5>SRM INSTITUTE OF SCIENCE AND TECHNOLOGY</h5>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputIssue" class="col-1 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                    <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                                  </svg></label>
                                <div class="ms-3 mt-1 col">
                                    <h5>Electronics and computer Engineering</h5>
                                </div>
                            </div>

                            <div class="text-center row">
                                <div class="class col">
                                    <h5> Current Status<button type="button" class="btn btn-success ms-2">Active</button></h5>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>


</html>
