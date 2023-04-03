<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-head">
                        <h3 class="text-center bg-primary py-3">Doctor Profile Details</h2>
                            <hr>
                    </div>
                    <div class="card-body" style="display:flex">
                        {{-- <h5>{{$doctor->DoctorName}}</h5> --}}
                        <div class="col-lg-4">
                            <img src="{{ asset($doctor->Image) }}" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h5>{{ $doctor->DoctorName }}</h5>
                            <b class="text-success"> Qualifications:</b>{{ $doctor->DoctorQualification }}<br>
                            <b class="text-success"> Specialty:</b>{{ $doctor->DoctorSpecialty }}<br>
                            <b class="text-success">Language Spoken:</b>{{ $doctor->languageSpoken }}<br>
                            <b class="text-success">Designation:</b>{{ $doctor->Designation }}<br>
                            <b class="text-success">Institute:</b>{{ $doctor->Institute }}<br>
                            <b class="text-success">Department Name:</b>{{ $doctor->department->DeptName ?? '' }}<br>
                        </div>
                        <div class="col-lg-4">
                            <b class="text-success">Chamber Time:</b>{{ $doctor->chamber_time }}<br>
                            <b class="text-success">Off Day:</b>{{ $doctor->off_day }}<br>
                            <b class="text-success">Floor Number:</b>{{ $doctor->floor_number }}<br>
                            <b class="text-success">Room Number:</b>{{ $doctor->Room_number }}<br>
                            <b class="text-success">Charge:</b>{{ $doctor->Charge }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
