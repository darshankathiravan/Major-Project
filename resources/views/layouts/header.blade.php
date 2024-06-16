        <!--navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-4 mt-4">
            <div class="container-fluid">



                <a class="navbar-brand" href="{{ route('student.home') }}"><img src="{{ url('assets\images\logo.jpg') }}"
                        alt="LOGO" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-3 ">
                            <a class="nav-link active fs-5" aria-current="page"
                                href="{{ route('student.home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link active dropdown-toggle fs-5" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Announcements<span
                                    class="badge rounded-pill badge-notification bg-danger ms-2">2</span></a>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item">CT-2 exams have been postponed</a></li>
                                <li><a class="dropdown-item">Last date for Registration XION</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link active dropdown-toggle fs-5" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Semester
                            </a>

                            <ul class="dropdown-menu">
                                @for ($sem = 1; $sem <= 8; $sem++)
                                    <li><a class="dropdown-item" href="{{ route('student.subjects') }}">Sem
                                            {{ $sem }}</a></li>
                                @endfor
                            </ul>

                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link active fs-5" href="{{ route('help&Support') }}" aria-disabled="true">Help
                                & Support</a>
                        </li>
                        <li>
                            <form class="d-flex mt-1 ms-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn text-white fs-5" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor"
                                class="bi bi-person ms-2 mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('stud_prof') }}">Profile</a></li>
                            <li><button class="dropdown-item" type="button" style="color: red;">Sign Out</button></li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
        </nav>

        <!-- navbar closed-->
        </div>
