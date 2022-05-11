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
                <form action="" type="multipart" method="POST">
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
                                        <div class="step" data-target="#address-information">
                                            <button type="button" class="step-trigger" role="tab"
                                                aria-controls="address-information" id="add-info-trigger">
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="bs-stepper-label">Address Information</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#credential-information">
                                            <button type="button" class="step-trigger" role="tab"
                                                aria-controls="credential-information" id="cred-info-trigger">
                                                <span class="bs-stepper-circle">4</span>
                                                <span class="bs-stepper-label">Credential Information</span>
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
                                                <div class="col-md-3">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="faculty">{{ __('Faculty') }}</label>
                                                                <select id="faculty"
                                                                    class="form-control form-control-sm @error('faculty') is-invalid @enderror"
                                                                    name="faculty">
                                                                    <option selected disabled>Select one</option>

                                                                </select>
                                                                @error('faculty')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="department">{{ __('Department') }}</label>
                                                                <select id="department"
                                                                    class="form-control form-control-sm @error('department') is-invalid @enderror"
                                                                    name="department">
                                                                    <option selected disabled>Select one</option>
                                                                </select>
                                                                @error('department')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                                <input id="selectedDepartment" type="text" hidden
                                                                    value="{{ old('department') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="program">{{ __('Program') }}</label>
                                                                <select id="program"
                                                                    class="form-control form-control-sm @error('program') is-invalid @enderror"
                                                                    name="program">
                                                                    <option selected disabled>Select one</option>

                                                                </select>
                                                                @error('program')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="modality">{{ __('Modality') }}</label>
                                                                <select id="modality"
                                                                    class="form-control form-control-sm @error('modality') is-invalid @enderror"
                                                                    name="modality">
                                                                    <option selected disabled>Select one</option>

                                                                </select>
                                                                @error('modality')
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

                                        <div id="address-information" class="content" role="tabpanel"
                                            aria-labelledby="add-info-trigger">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="addressType">Address Type</label>
                                                                <input name="addressType" id="addressType"
                                                                    class="form-control form-control-sm"
                                                                    value="Current Address" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <input name="country" id="country"
                                                                    class="form-control form-control-sm"
                                                                    value="Ethiopia" readonly />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="region">{{ __('Region') }}</label>
                                                                <select name="region" id="region"
                                                                    class="form-control form-control-sm @error('region') is-invalid @enderror">
                                                                    <option
                                                                        @if (old('region') === '') selected @endif
                                                                        disabled>select one</option>
                                                                    <option
                                                                        @if (old('region') === 'Addis Ababa') selected @endif>
                                                                        Addis Ababa</option>
                                                                    <option
                                                                        @if (old('region') === 'Amhara') selected @endif>
                                                                        Amhara</option>
                                                                    <option
                                                                        @if (old('region') === 'Oromia') selected @endif>
                                                                        Oromia</option>
                                                                </select>
                                                                @error('region')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">

                                                            <div class="form-group">
                                                                <label for="city">{{ __('City') }}</label>
                                                                <select name="city" id="city"
                                                                    class="form-control form-control-sm @error('city') is-invalid @enderror">
                                                                    <option
                                                                        @if (old('city') === 'Addis Ababa') selected @endif>
                                                                        Addis Ababa</option>
                                                                    <option
                                                                        @if (old('city') === 'Alemgena') selected @endif>
                                                                        Alemgena</option>
                                                                    <option
                                                                        @if (old('city') === 'Burayu') selected @endif>
                                                                        Burayu</option>
                                                                    <option
                                                                        @if (old('city') === 'Sendafa') selected @endif>
                                                                        Sendafa</option>
                                                                    <option
                                                                        @if (old('city') === 'Sululta') selected @endif>
                                                                        Sululta</option>
                                                                </select>
                                                                @error('city')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subCity">{{ __('Sub City') }}</label>
                                                                <select name="subCity" id="subCity"
                                                                    class="form-control form-control-sm @error('subCity') is-invalid @enderror">
                                                                    <option
                                                                        @if (old('subCity') === '') selected @endif
                                                                        selected disabled>select one</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Addis Ketema') selected @endif>
                                                                        Addis Ketema</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Akaki Kality') selected @endif>
                                                                        Akaki Kality</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Arada') selected @endif>
                                                                        Arada</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Bole') selected @endif>
                                                                        Bole</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Gullele') selected @endif>
                                                                        Gullele</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Kirkos') selected @endif>
                                                                        Kirkos</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Lemi Kura') selected @endif>
                                                                        Lemi Kura</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Lideta') selected @endif>
                                                                        Lideta</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Nefas Silk Lafto') selected @endif>
                                                                        Nefas Silk Lafto</option>
                                                                    <option
                                                                        @if (old('subCity') === 'Yeka') selected @endif>
                                                                        Yeka</option>
                                                                </select>
                                                                @error('subCity')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="zone">{{ __('Zone') }}</label>
                                                                <input type="text" id="zone"
                                                                    class="form-control form-control-sm @error('zone') is-invalid @enderror"
                                                                    name="zone" value="{{ old('zone') }}" />
                                                                @error('zone')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="woreda">{{ __('Woreda/Kebele') }}</label>
                                                                <input type="text" id="woreda"
                                                                    class="form-control form-control-sm @error('woreda') is-invalid @enderror"
                                                                    name="woreda" value="{{ old('woreda') }}" />
                                                                @error('woreda')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="houseNumber">{{ __('House Number') }}</label>
                                                                <input type="text" id="houseNumber"
                                                                    class="form-control form-control-sm @error('houseNumber') is-invalid @enderror"
                                                                    name="houseNumber"
                                                                    value="{{ old('houseNumber') }}" />
                                                                @error('houseNumber')
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
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="mobileNumber">{{ __('Mobile Number') }}</label>
                                                                <input id="mobileNumber" type="text"
                                                                    class="form-control form-control-sm @error('mobileNumber') is-invalid @enderror"
                                                                    name="mobileNumber"
                                                                    value="{{ old('mobileNumber') }}">
                                                                @error('mobileNumber')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="contactPersonName">{{ __('Contact Person Name') }}</label>
                                                                <input id="contactPersonName" type="text"
                                                                    class="form-control form-control-sm @error('contactPersonName') is-invalid @enderror"
                                                                    name="contactPersonName"
                                                                    value="{{ old('contactPersonName') }}" />
                                                                @error('contactPersonName')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="contactPersonPhone">{{ __('Contact Person Phone') }}</label>
                                                                <input id="contactPersonPhone" type="text"
                                                                    class="form-control form-control-sm @error('contactPersonPhone') is-invalid @enderror"
                                                                    name="contactPersonPhone"
                                                                    value="{{ old('contactPersonPhone') }}" />
                                                                @error('contactPersonPhone')
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
                                                <div class="col-md-3">
                                                    <div class="card card-primary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="credentialProgram">{{ __('Credential Program') }}</label>
                                                                <select id="credentialProgram" type="text"
                                                                    class="form-control form-control-sm @error('credentialProgram') is-invalid @enderror"
                                                                    name="credentialProgram">
                                                                    <option
                                                                        @if (old('credentialProgram') === '') selected @endif
                                                                        selected disabled>select one
                                                                    </option>
                                                                    <option
                                                                        @if (old('credentialProgram') === 'Preparatory') selected @endif>
                                                                        Preparatory</option>
                                                                    <option
                                                                        @if (old('credentialProgram') === 'Level IV') selected @endif>
                                                                        Level IV</option>
                                                                    <option
                                                                        @if (old('credentialProgram') === 'EGSECE') selected @endif>
                                                                        EGSECE</option>
                                                                    <option
                                                                        @if (old('credentialProgram') === 'ESLCE') selected @endif>
                                                                        ESLCE</option>
                                                                </select>
                                                                @error('credentialProgram')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="credentialField">{{ __('Credential Field') }}</label>
                                                                <select id="credentialField" type="text"
                                                                    class="form-control form-control-sm @error('credentialField') is-invalid @enderror"
                                                                    name="credentialField">
                                                                    <option
                                                                        @if (old('credentialField') === '') selected @endif
                                                                        selected disabled>select one
                                                                    </option>
                                                                    <option
                                                                        @if (old('credentialField') === 'Natural') selected @endif>
                                                                        Natural</option>
                                                                    <option
                                                                        @if (old('credentialField') === 'Social') selected @endif>
                                                                        Social</option>
                                                                </select>
                                                                @error('credentialField')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="credentialDepartment">{{ __('Credential Department') }}</label>
                                                                <input id="credentialDepartment" type="text"
                                                                    class="form-control form-control-sm @error('credentialDepartment') is-invalid @enderror"
                                                                    name="credentialDepartment"
                                                                    value="{{ old('credentialDepartment') }}"
                                                                    @if (old('credentialProgram') != 'Level IV') readonly @endif />
                                                                @error('credentialDepartment')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="gradeTenResult">{{ __('Grade Ten (10) Result') }}</label>
                                                                <input id="gradeTenResult" type="text"
                                                                    class="form-control form-control-sm @error('gradeTenResult') is-invalid @enderror"
                                                                    name="gradeTenResult"
                                                                    value="{{ old('gradeTenResult') }}"
                                                                    @if (old('credentialProgram') === 'Preparatory') readonly @endif />
                                                                @error('gradeTenResult')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="gradeTenResultYear">{{ __('Grade Ten (10) Result Year') }}</label>
                                                                <input id="gradeTenResultYear" type="text"
                                                                    class="form-control form-control-sm @error('gradeTenResultYear') is-invalid @enderror"
                                                                    name="gradeTenResultYear"
                                                                    value="{{ old('gradeTenResultYear') }}"
                                                                    @if (old('credentialProgram') === 'Preparatory') readonly @endif />
                                                                @error('gradeTenResultYear')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    for="gradeTwelveResult">{{ __('Grade Twelve (12) Result') }}</label>
                                                                <input id="gradeTwelveResult" type="text"
                                                                    class="form-control form-control-sm @error('gradeTwelveResult') is-invalid @enderror"
                                                                    name="gradeTwelveResult"
                                                                    value="{{ old('gradeTwelveResult') }}"
                                                                    @if (old('credentialProgram') != 'Preparatory') readonly @endif />
                                                                @error('gradeTwelveResult')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="gradeTwelveResultYear">{{ __('Grade Twelve (12) Result Year') }}</label>
                                                                <input id="gradeTwelveResultYear" type="text"
                                                                    class="form-control form-control-sm @error('gradeTwelveResultYear') is-invalid @enderror"
                                                                    name="gradeTwelveResultYear"
                                                                    value="{{ old('gradeTwelveResultYear') }}"
                                                                    @if (old('credentialProgram') != 'Preparatory') readonly @endif />
                                                                @error('gradeTwelveResultYear')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card card-secondary">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="cocDate">{{ __('COC Date') }}</label>
                                                                <input id="cocDate" type="date"
                                                                    class="form-control form-control-sm @error('cocDate') is-invalid @enderror"
                                                                    name="cocDate" value="{{ old('cocDate') }}"
                                                                    readonly />
                                                                @error('cocDate')
                                                                    <span class="invalid-feedback"
                                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label
                                                                    for="cocReferenceNumber">{{ __('COC Reference Number') }}</label>
                                                                <input id="cocReferenceNumber" type="text"
                                                                    class="form-control form-control-sm @error('cocReferenceNumber') is-invalid @enderror"
                                                                    name="cocReferenceNumber"
                                                                    value="{{ old('cocReferenceNumber') }}"
                                                                    readonly />
                                                                @error('cocReferenceNumber')
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
        /*         $(document).ready(function () {
                    // Define Swal-Toast Listen if there is a an error or success message in the session
                    $(function () {
                        let Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 6000
                        });
                        @if (session('success'))*/
        ) {
            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            });
        @endif
        if ( /*@if (session('error'))
            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            });
        @endif
        });
        // Get Student Id, Extract Serial Number and assign the value to IdNo field;
        $('#studentId').keyup(function() {
            let studentId = document.getElementById('studentId').value;
            let splitedStudentId = studentId.split('/');
            document.getElementById('idNo').value = splitedStudentId[1].trim();
        });
        // Get Student Id, Extract Entry Year and assign the value to entry Year field;
        $('#studentId').keyup(function() {
            let studentId = document.getElementById('studentId').value;
            let splitedStudentId = studentId.split('/');
            document.getElementById('entryYear').value = 20 + splitedStudentId[2].trim();
        });
        // fetch department's list and populate it to department dropdown when a specific faculty is selected.
        $('#faculty').change(function() {
                let faculty = $(this).val();
                $('#department').find('option').not(':first').remove();
                let mainUrl = '',
                    '')
        }
        }
        ' + ' / ';
        $.ajax({
        url: mainUrl + faculty,
        type: 'get',
        dataType: 'json',
        success: function(response) {
            let len = 0;
            if (response['data'] != null) {
                len = response['data'].length;
            }
            if (len > 0) {
                for (let i = 0; i < len; i++) {
                    let department = response['data'][i].department;
                    let option = "<option>" + department + "</option>";
                    $("#department").append(option);
                }
            }
        }
        });
        });
        // fetch department's list and populate it to department dropdown for an old selected faculty.
        let faculty = document.getElementById("faculty").value;
        if (faculty != '') {
            let selectedDepartment = document.getElementById("selectedDepartment").value;
            $('#department').find('option').not(':first').remove();
            let mainUrl = '' + '/';
            $.ajax({
                url: mainUrl + faculty,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    let len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }
                    if (len > 0) {
                        for (let i = 0; i < len; i++) {
                            let department = response['data'][i].department;
                            let s = '';
                            if (selectedDepartment === department) {
                                s = 'selected';
                            }
                            let option = "<option " + s + ">" + department + "</option>";
                            $("#department").append(option);
                        }
                    }
                }
            });
        }
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
        // Check if sponsorship is covered by institution and if the condition is false leave the sponsorInstitute
        // field readonly and value empty(as it's) else
        $('#sponsor').change(function() {
            if (document.getElementById('sponsor').value === 'Institute') {
                document.getElementById('sponsorInistitute').removeAttribute('readonly');
            } else {
                document.getElementById('sponsorInistitute').setAttribute('readonly', 'true');
                document.getElementById('sponsorInistitute').value = '';
            }
        });
        // zone
        $('#city').change(function() {
            zone();
            let city = $(this).val();
            if (city != 'Addis Ababa') {
                $('#subCity').find('option').remove();
                let option = "<option selected disabled>Nothing to Select</option>";
                $("#subCity").append(option);
                document.getElementById('subCity').setAttribute('readonly', 'true');
            } else {
                $('#subCity').find('option').remove();
                let option = "   " +
                    "   <option selected=\"\" disabled=\"\">select one</option>\n" +
                    "   <option>Addis Ketema</option>\n" +
                    "   <option>Akaki Kality</option>\n" +
                    "   <option>Arada</option>\n" +
                    "   <option>Bole</option>\n" +
                    "   <option>Gullele</option>\n" +
                    "   <option>Kirkos</option>\n" +
                    "   <option>Kolfe Keranio</option>\n" +
                    "   <option>Lemi Kura</option>\n" +
                    "   <option>Lideta</option>\n" +
                    "   <option>Nefas Silk Lafto</option>\n" +
                    "   <option>Yeka</option>";
                $("#subCity").append(option);
                document.getElementById('subCity').removeAttribute('readonly');
            }
        });

        // zone function
        function zone() {
            if (document.getElementById('city').value === 'Addis Ababa') {
                document.getElementById('zone').setAttribute('readonly', 'true');
                document.getElementById('zone').value = '';
            } else {
                document.getElementById('zone').removeAttribute('readonly');
            }
        }

        zone();
        //
        $('#credentialProgram').change(function() {
            let credentialProgram = $(this).val();
            if (credentialProgram === 'Preparatory') {
                $('#credentialField').find('option').remove();
                let option = "   " +
                    "   <option selected=\"\" disabled=\"\">select one</option>\n" +
                    "   <option>Natural</option>\n" +
                    "   <option>Social</option>";
                $("#credentialField").append(option);
                document.getElementById('credentialField').removeAttribute('readonly');
                document.getElementById('credentialDepartment').setAttribute('readonly', 'true');
                document.getElementById('cocDate').setAttribute('readonly', 'true');
                document.getElementById('cocReferenceNumber').setAttribute('readonly', 'true');
                document.getElementById('gradeTenResult').setAttribute('readonly', 'true');
                document.getElementById('gradeTenResultYear').setAttribute('readonly', 'true');
                document.getElementById('gradeTwelveResult').removeAttribute('readonly');
                document.getElementById('gradeTwelveResultYear').removeAttribute('readonly');
                document.getElementById('gradeTenResult').removeClass('is-invalid');
                document.getElementById('gradeTenResultYear').removeClass('is-invalid');

                document.getElementById('credentialDepartment').value = '';
                document.getElementById('cocDate').value = '';
                document.getElementById('cocReferenceNumber').value = '';
                document.getElementById('gradeTenResult').value = '';
                document.getElementById('gradeTenResultYear').value = '';
            } else if (credentialProgram === 'Level IV') {
                $('#credentialField').find('option').remove();
                let option = "   <option selected=\"\" disabled=\"\">select one</option>\n";
                $("#credentialField").append(option);
                document.getElementById('credentialDepartment').removeAttribute('readonly');
                document.getElementById('cocDate').removeAttribute('readonly');
                document.getElementById('cocReferenceNumber').removeAttribute('readonly');
                document.getElementById('credentialField').setAttribute('readonly', 'true');
                //document.getElementById('credentialField').removeClass('is-invalid');
                document.getElementById('gradeTenResult').removeAttribute('readonly');
                document.getElementById('gradeTenResultYear').removeAttribute('readonly');
                document.getElementById('credentialDepartment').value = '';
            } else if (credentialProgram === 'EGSECE') {

                $('#credentialField').find('option').remove();
                let option = "   <option selected=\"\" disabled=\"\">select one</option>\n";
                $("#credentialField").append(option);
                document.getElementById('credentialField').setAttribute('readonly', 'true');
                document.getElementById('credentialDepartment').setAttribute('readonly', 'true');
                document.getElementById('cocDate').setAttribute('readonly', 'true');
                document.getElementById('cocReferenceNumber').setAttribute('readonly', 'true');
                document.getElementById('gradeTwelveResult').setAttribute('readonly', 'true');
                document.getElementById('gradeTwelveResultYear').setAttribute('readonly', 'true');

                document.getElementById('credentialField').removeClass('is-invalid');
                document.getElementById('credentialDepartment').removeClass('is-invalid');
                document.getElementById('cocDate').removeClass('is-invalid');
                document.getElementById('cocReferenceNumber').removeClass('is-invalid');
                document.getElementById('gradeTwelveResult').removeClass('is-invalid');
                document.getElementById('gradeTwelveResultYear').removeClass('is-invalid');

                document.getElementById('credentialField').value = '';
                document.getElementById('credentialDepartment').value = '';
                document.getElementById('gradeTwelveResult').value = '';
                document.getElementById('gradeTwelveResultYear').value = '';
                document.getElementById('cocDate').value = '';
                document.getElementById('cocReferenceNumber').value = '';
            } else if (credentialProgram === 'ESLCE') {

                $('#credentialField').find('option').remove();
                let option = "   <option selected=\"\" disabled=\"\">select one</option>\n";
                $("#credentialField").append(option);
                document.getElementById('cocDate').setAttribute('readonly', 'true');
                document.getElementById('cocReferenceNumber').setAttribute('readonly', 'true');
                document.getElementById('credentialDepartment').setAttribute('readonly', 'true');
                document.getElementById('credentialField').setAttribute('readonly', 'true');

                document.getElementById('cocDate').removeClass('is-invalid');
                document.getElementById('cocReferenceNumber').removeClass('is-invalid');
                document.getElementById('credentialDepartment').removeClass('is-invalid');
                document.getElementById('credentialField').removeClass('is-invalid');

                document.getElementById('credentialDepartment').value = '';
                document.getElementById('credentialField').value = '';
                document.getElementById('cocDate').value = '';
                document.getElementById('cocReferenceNumber').value = '';
            }
        });
        $('#firstName').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#secondName').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#lastName').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#sex').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#dateOfBirth').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#dateOfRegistration').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#nationality').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#placeOfBirth').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#maritialStatus').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#physicallyChallenged').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#sponsor').change(function() {
            if ($(this).val() === 'Institute') {
                $(this).removeClass('is-invalid');
            }
        });
        $('#sponsorInistitute').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#studentId').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#idNo').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#entryYear').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#faculty').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#department').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#program').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#modality').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#studentGroup').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#section').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#curriculumId').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#entrySeason').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#campus').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#addressType').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#country').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#region').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#city').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#subCity').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#zone').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#woreda').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#houseNumber').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#email').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#mobileNumber').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#contactPersonName').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#contactPersonPhone').keyup(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#credentialProgram').change(function() {
            if ($.trim($(this).val()).length) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        });
        $('#gradeTenResultYear').inputmask('9999', {
            'placeholder': '9999'
        });
        $('#gradeTwelveResultYear').inputmask('9999', {
            'placeholder': '9999'
        });
        $('#gradeTenResult').inputmask('9.99', {
            'placeholder': '4.00'
        });
        $('#gradeTwelveResult').inputmask('999', {
        'placeholder': '700'
        });
        //let sponsor = document.getElementById("sponsor").value;
        //if(sponsor === 'Institute') {
        // console.log('inst');
        // document.getElementById("sponsor").removeClass('is-invalid');
        // document.getElementById('sponsorInistitute').removeClass('is-invalid');
        //}
        });*/
    </script>
</body>

</html>
