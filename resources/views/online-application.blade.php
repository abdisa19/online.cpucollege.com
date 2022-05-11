<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPU Business & Information Technology College | Online Registration</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img class="brand-image img-circle elevation-3" src="{{ asset('logo.svg') }}">
                    <span class="brand-text font-weight-light">CPU Buss. & Info. Tech. College</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ __('Online Application') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">

                {{-- {{ Session::get('message') }}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('online.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="card card-default">
                            <div class="card-body p-0">
                                <div class="bs-stepper">
                                    <div class="bs-stepper-header" role="tablist">
                                        <div class="step" data-target="#basic-information">
                                            <button type="button" class="step-trigger" role="tab"
                                                aria-controls="basic-information" id="basic-info-trigger">
                                                <span class="bs-stepper-circle">1</span>
                                                <span class="bs-stepper-label">Basic Information</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#enrollment-information">
                                            <button type="button" class="step-trigger" role="tab"
                                                aria-controls="enrollment-information" id="edu-info-trigger">
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="bs-stepper-label">Enrollment Information</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#credential-information">
                                            <button type="button" class="step-trigger" role="tab"
                                                aria-controls="credential-information" id="cred-info-trigger">
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="bs-stepper-label">Credential Documents</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#address-information">
                                            <button type="button" class="step-trigger" role="tab"
                                                aria-controls="address-information" id="add-info-trigger">
                                                <span class="bs-stepper-circle">4</span>
                                                <span class="bs-stepper-label">Address Information</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content">
                                        <div id="basic-information" class="content" role="tabpanel"
                                            aria-labelledby="basic-info-trigger">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="firstName">{{ __('First Name') }}</label>
                                                                <input id="firstName" type="text"
                                                                    class="form-control form-control-sm @error('firstName') is-invalid @enderror"
                                                                    name="firstName" value="{{ old('firstName') }}">
                                                                @error('firstName')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="secondName">{{ __('Second Name') }}</label>
                                                                <input id="secondName" type="text"
                                                                    class="form-control form-control-sm @error('secondName') is-invalid @enderror"
                                                                    name="secondName"
                                                                    value="{{ old('secondName') }}">
                                                                @error('secondName')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="lastName">{{ __('Last Name') }}</label>
                                                                <input id="lastName" type="text"
                                                                    class="form-control form-control-sm @error('lastName') is-invalid @enderror"
                                                                    name="lastName" value="{{ old('lastName') }}">
                                                                @error('lastName')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="sex">{{ __('Sex') }}</label>
                                                                <select id="sex" type="text"
                                                                    class="form-control form-control-sm @error('sex') is-invalid @enderror"
                                                                    name="sex">
                                                                    <option
                                                                        @if (old('sex') == '') selected @endif
                                                                        disabled>select one</option>
                                                                    <option
                                                                        @if (old('sex') == 'Female') selected @endif>
                                                                        Female</option>
                                                                    <option
                                                                        @if (old('sex') == 'Male') selected @endif>
                                                                        Male</option>
                                                                </select>
                                                                @error('sex')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="dateOfBirth">{{ __('Date of Birth') }}</label>
                                                                <input id="dateOfBirth" type="date"
                                                                    class="form-control form-control-sm @error('dateOfBirth') is-invalid @enderror"
                                                                    name="dateOfBirth"
                                                                    value="{{ old('dateOfBirth') }}">
                                                                @error('dateOfBirth')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="nationality">{{ __('Nationality') }}</label>
                                                                <select id="nationality" type="text"
                                                                    class="form-control form-control-sm @error('nationality') is-invalid @enderror"
                                                                    name="nationality">
                                                                    <option
                                                                        @if (old('nationality') == 'Ethiopian') selected @endif>
                                                                        Ethiopian</option>
                                                                    <option
                                                                        @if (old('nationality') == 'Other') selected @endif>
                                                                        Other</option>
                                                                </select>
                                                                @error('nationality')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="reset" class="btn btn-primary disabled">Reset</button>
                                            <button class="btn btn-primary btn-success float-right"
                                                onclick="event.preventDefault(); stepper.next()">Next</button>
                                        </div>
                                        <div id="enrollment-information" class="content" role="tabpanel"
                                            aria-labelledby="edu-info-trigger">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="current_education_level">{{ __('Curent Education Level') }}</label>
                                                                <select id="current_education_level"
                                                                    class="form-control form-control-sm @error('current_education_level') is-invalid @enderror"
                                                                    name="current_education_level">
                                                                    <option selected disabled>Select one</option>
                                                                    <option
                                                                        @if (old('current_education_level') == 'Under Graduate') selected @endif>
                                                                        Under Graduate</option>
                                                                    <option
                                                                        @if (old('current_education_level') == 'Post Graduate') selected @endif>
                                                                        Post Graduate</option>
                                                                </select>

                                                                @error('current_education_level')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="current_education_department">{{ __('Curent Education Department') }}</label>
                                                                <input id="current_education_department" type="text"
                                                                    class="form-control form-control-sm @error('current_education_department') is-invalid @enderror"
                                                                    name="current_education_department"
                                                                    value="{{ old('current_education_department') }}">
                                                                @error('current_education_department')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="applying_program">{{ __('Program') }}</label>
                                                                <select id="applying_program"
                                                                    class="form-control form-control-sm @error('applying_program') is-invalid @enderror"
                                                                    name="applying_program">
                                                                    <option selected disabled>Select one</option>
                                                                    <option
                                                                        @if (old('current_education_level') == 'Under Graduate') selected @endif>
                                                                        Under Graduate</option>
                                                                    <option
                                                                        @if (old('current_education_level') == 'Post Graduate') selected @endif>
                                                                        Post Graduate</option>
                                                                </select>
                                                                @error('applying_program')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label
                                                                    for="applying_department">{{ __('Department') }}</label>
                                                                <select id="applying_department"
                                                                    class="form-control form-control-sm @error('applying_department') is-invalid @enderror"
                                                                    name="applying_department">
                                                                    <option selected disabled>Select one</option>
                                                                    <option disabled>---Master's---</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'MBA') selected @endif>
                                                                        MBA</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Project Management') selected @endif>
                                                                        Project Management</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Project Management') selected @endif>
                                                                        Project Management</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Software Engineering') selected @endif>
                                                                        Software Engineering</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Leadership') selected @endif>
                                                                        Leadership</option>

                                                                    <option disabled>---Degree---</option>

                                                                    <option
                                                                        @if (old('applying_department') == 'Accounting and Finance') selected @endif>
                                                                        Accounting and Finance</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Business Management') selected @endif>
                                                                        Business Management</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Marketing Management') selected @endif>
                                                                        Marketing Management</option>
                                                                    <option
                                                                        @if (old('applying_department') == 'Computer Science') selected @endif>
                                                                        Computer Science</option>
                                                                </select>
                                                                @error('applying_department')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label
                                                                    for="applying_enrollment">{{ __('Modality') }}</label>
                                                                <select id="applying_enrollment"
                                                                    class="form-control form-control-sm @error('applying_enrollment') is-invalid @enderror"
                                                                    name="applying_enrollment">
                                                                    <option selected disabled>Select one</option>
                                                                    <option
                                                                        @if (old('applying_enrollment') == 'Regular') selected @endif>
                                                                        Regular</option>
                                                                    <option
                                                                        @if (old('applying_enrollment') == 'Extension') selected @endif>
                                                                        Extension</option>
                                                                    <option
                                                                        @if (old('applying_enrollment') == 'Weekend') selected @endif>
                                                                        Weekend</option>

                                                                </select>
                                                                @error('applying_enrollment')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary"
                                                onclick="event.preventDefault(); stepper.previous()">Previous</button>
                                            <button class="btn btn-primary btn-success float-right"
                                                onclick="event.preventDefault(); stepper.next()">Next</button>
                                        </div>
                                        <div id="credential-information" class="content" role="tabpanel"
                                            aria-labelledby="cred-info-trigger">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label>{{ __('Undergraduate Degree Copy') }}</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="profile_ud_degree_file"
                                                                        name="profile_ud_degree_file">
                                                                    <label class="custom-file-label"
                                                                        for="profile_ud_degree_file">Choose file</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="profile_ud_transcript_file">{{ __('Undergraduate Transcript Copy') }}</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="profile_ud_transcript_file"
                                                                        name="profile_ud_transcript_file">
                                                                    <label class="custom-file-label"
                                                                        for="profile_ud_transcript_file">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="profile_hs_transcript_file">{{ __('High School Transcript Copy') }}</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="profile_hs_transcript_file"
                                                                        name="profile_hs_transcript_file">
                                                                    <label class="custom-file-label"
                                                                        for="profile_hs_transcript_file">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="profile_id_card_file">{{ __('Renewed Id-Card/Passport') }}</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="profile_id_card_file"
                                                                        name="profile_id_card_file">
                                                                    <label class="custom-file-label"
                                                                        for="profile_id_card_file">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary"
                                                onclick="event.preventDefault(); stepper.previous()">Previous</button>
                                            <button class="btn btn-primary btn-success float-right"
                                                onclick="event.preventDefault(); stepper.next()">Next</button>
                                        </div>
                                        <div id="address-information" class="content" role="tabpanel"
                                            aria-labelledby="add-info-trigger">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <input name="country" id="country"
                                                                    class="form-control form-control-sm"
                                                                    value="Ethiopia" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="city">{{ __('City') }}</label>
                                                                <input id="city" type="text"
                                                                    class="form-control form-control-sm @error('city') is-invalid @enderror"
                                                                    name="city" value="{{ old('city') }}">
                                                                @error('city')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="mobile">{{ __('Mobile') }}</label>
                                                                <input id="mobile" type="phone"
                                                                    class="form-control form-control-sm @error('mobile') is-invalid @enderror"
                                                                    name="mobile" value="{{ old('mobile') }}">
                                                                @error('mobile')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">{{ __('Email') }}</label>
                                                                <input type="email" id="email"
                                                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                                                    name="email" value="{{ old('email') }}" />
                                                                @error('email')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <label
                                                                for="agrement">{{ __('Statement by the applicant') }}</label>
                                                            <br>
                                                            I here by certify that all information given in this form is
                                                            complete and correct. I fully relize that the college is
                                                            entitled to take any action on me including dismissal if the
                                                            information given by me is found to be incorrect or
                                                            misleading. I shall ask no reimbursment of whatever fee i
                                                            have paid incase the college takes any action as a result of
                                                            any incorrcet or misleading information i gave. Provided i
                                                            get admission as per this application, i am aware of the
                                                            fact that the college reserves the legal right to raise the
                                                            tuition fee at any time during my stay in the college before
                                                            i complete the program for which i am applying.

                                                            I further undertake to observe all the rules and regulations
                                                            of the college. I shall take full responsibility to abide by
                                                            the rules and regulations of the college provided in the
                                                            student hand book that is made available in the school
                                                            library, or rules and regulations communicated in the form
                                                            of notice.
                                                            <br>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="agrement"
                                                                    class="form-control form-control-sm @error('agrement') is-invalid @enderror">
                                                                <label for="agrement">Agree to terms and conditions
                                                                </label>
                                                                @error('agrement')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary"
                                                onclick="event.preventDefault(); stepper.previous()">Previous</button>
                                            <button type="submit"
                                                class="btn btn-primary btn-success float-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a href="https://cpucollege.com">CPU Business & Information Technology
                    College</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <script type="text/javascript">
        // Instantiate bs-stepper
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        });
        // Instantiate bs-custom file input
        $(function() {
            bsCustomFileInput.init();
        });
        // Instantiate select2
        $(function() {
            $('.select2').select2()
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            @if (Session::has('message'))
                let type = "{{ Session::get('alert-type') }}"

                switch (type) {
                    case 'info':
                        Toast.fire({
                            icon: 'info',
                            title: '{{ Session::get('message') }}'
                        });
                        break;
                    case 'success':
                        Toast.fire({
                            icon: 'success',
                            title: '{{ Session::get('message') }}'
                        });
                        break;
                    case 'warning':
                        Toast.fire({
                            icon: 'warning',
                            title: '{{ Session::get('message') }}'
                        });
                        break;
                    case 'error':
                        Toast.fire({
                            icon: 'error',
                            title: '{{ Session::get('message') }}'
                        });
                        break;
                }
            @endif
            //console.log({{ Session::get('message') }});
        });
    </script>
</body>

</html>
