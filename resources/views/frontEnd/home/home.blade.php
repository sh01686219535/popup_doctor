<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>POPUP Curd</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        {{-- Branch start --}}
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-head">
                        <a href="" class="btn btn-primary my-3" style="margin-left:20px" data-bs-toggle="modal"
                            data-bs-target="#addBranchModal">Add Branch</a>
                        <h2 class="text-center text-success">{{ session('message') }}</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderd">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Branch Name</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($branch as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->branchName }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary editBranchBtn" title="edit"
                                                data-id={{ $item->id }} data-branch-name={{ $item->branchName }}
                                                data-bs-toggle="modal" data-bs-target="#editBranchModal">
                                                <i class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="{{ route('delete.branch', $item->id) }}"
                                                onclick="return confirm('Are you sure delete this!')"class="btn btn-danger"
                                                title="Delete"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- Branch end --}}
        {{-- Department start --}}
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-head">
                        <a href="" class="btn btn-primary my-3" style="margin-left:20px" data-bs-toggle="modal"
                            data-bs-target="#addDepartmentModal">Add Department</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderd">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Branch Name</th>
                                    <th>Department Name</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($department as $dept)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $dept->branchName }}</td>
                                        <td>{{ $dept->DeptName }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary editDeptBtn" title="edit"
                                                data-id="{{ $dept->id }}" data-branch-id="{{ $dept->chamer_id }}"
                                                data-dept-name="{{ $dept->DeptName }}" data-bs-toggle="modal"
                                                data-bs-target="#editDepartmentModal"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="{{ route('delete.department', $dept->id) }}"
                                                onclick="return confirm('Are you sure delete this!')"class="btn btn-danger"
                                                title="Delete"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- Department end --}}
        {{-- Doctor start --}}
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-head">
                        <a href="" class="btn btn-primary my-3" style="margin-left:20px" data-bs-toggle="modal"
                            data-bs-target="#addDoctorModal">Add Doctor</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-borderd">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Branch Name</th>
                                    <th>Department Name</th>
                                    <th>Doctor Name</th>
                                    <th>Qualification</th>
                                    <th>Specialty</th>
                                    <th>language</th>
                                    <th>Designation</th>
                                    <th>Institute</th>
                                    <th>Chamber time</th>
                                    <th>Off day</th>
                                    <th>Floor number</th>
                                    <th>Room number</th>
                                    <th>Charge</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($doctor as $doct)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $doct->branchName }}</td>
                                        <td>{{ $doct->DeptName }}</td>
                                        <td>{{ $doct->DoctorName }}</td>
                                        <td>{{ $doct->DoctorQualification }}</td>
                                        <td>{{ $doct->DoctorSpecialty }}</td>
                                        <td>{{ $doct->languageSpoken }}</td>
                                        <td>{{ $doct->Designation }}</td>
                                        <td>{{ $doct->Institute }}</td>
                                        <td>{{ $doct->chamber_time }}</td>
                                        <td>{{ $doct->off_day }}</td>
                                        <td>{{ $doct->floor_number }}</td>
                                        <td>{{ $doct->Room_number }}</td>
                                        <td>{{ $doct->Charge }}</td>
                                        <td>
                                            <img src="{{ asset($doct->Image) }}" width="50"
                                                height="50"alt="">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary editDoctorBtn" title="edit"
                                                data-id="{{ $doct->id }}" data-chamer-id="{{ $doct->chamer_id }}"
                                                data-dept-id="{{ $doct->dept_id }}"
                                                data-Doctor-Name="{{ $doct->DoctorName }}"
                                                data-Doctor-Qualification="{{ $doct->DoctorQualification }}"
                                                data-Doctor-Specialty="{{ $doct->DoctorSpecialty }}"
                                                data-language-Spoken="{{ $doct->languageSpoken }}"
                                                data-Designation="{{ $doct->Designation }}"
                                                data-Institute="{{ $doct->Institute }}"
                                                data-chamber-time="{{ $doct->chamber_time }}"
                                                data-off-day="{{ $doct->off_day }}"
                                                data-floor-number="{{ $doct->floor_number }}"
                                                data-Room-number="{{ $doct->Room_number }}"
                                                data-Charge="{{ $doct->Charge }}" data-Image="{{ $doct->Image }}"
                                                data-bs-toggle="modal" data-bs-target="#editDoctorModal"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>
                                            <a href="{{ route('delete.doctor', $doct->id) }}"
                                                onclick="return confirm('Are you sure delete this!')"class="btn btn-danger"
                                                title="Delete"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- Doctor End --}}
        {{-- Find Your Doctor --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center bg-primary py-2">FIND YOUR DOCTOR</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 150px">
            <div class="col-lg-12">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="BranchName" class="text-info" style="font-size:25px">Select Branch
                                    Name</label>
                                <select name="BranchName" id="BranchName" class="form-control my-2">
                                    <option value="">Select Branch</option>
                                    @foreach ($branch as $branchs)
                                        <option value="{{ $branchs->id }}">{{ $branchs->branchName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="departmentName" class="text-info" style="font-size:25px">Select
                                    Department Name</label>
                                <select name="departmentName" id="departmentName" class="form-control my-2">
                                    <option value="">Select Department</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" id="doct_form" style="display: none;margin-left:50px;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>






{{-- Appoinment table Start--}}

<div class="container" style="margin:200px 0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head ml-3">
                    <a href="" class="btn btn-primary my-3" title="Add Appoinment"
                    data-bs-toggle="modal" data-bs-target="#addAppoinmnetModal"
                    >Add Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-borderd">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Branch Name</th>
                                <th>Department Name</th>
                                <th>Doctor Name</th>
                                <th>Patient Name</th>
                                <th>Patient Age</th>
                                <th>Patient Number</th>
                                <th>Patient Email Address</th>
                                <th>Patient Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($patient as $patients)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$patients->branchName}}</td>
                                <td>{{$patients->DeptName}}</td>
                                <td>{{$patients->DoctorName}}</td>
                                <td>{{$patients->patient_name}}</td>
                                <td>{{$patients->patient_age}}</td>
                                <td>{{$patients->patient_number}}</td>
                                <td>{{$patients->patient_email}}</td>
                                <td>{{$patients->patient_details}}</td>
                                <td>
                                    <a href="" class="btn btn-primary addPatientModel"
                                    data-bs-toggle="modal" data-bs-target="#editAppoinmnetModal"
                                    data-id={{$patients->id}}
                                    data-chamer-id={{$patients->chamer_id}}
                                    data-dept-id={{$patients->dept_id}}
                                    data-doctor-id={{$patients->doctor_id}}
                                    data-patient-name={{$patients->patient_name}}
                                    data-patient-age={{$patients->patient_age}}
                                    data-patient-number={{$patients->patient_number}}
                                    data-patient-email={{$patients->patient_email}}
                                    data-patient-details={{$patients->patient_details}}
                                    ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('delete.patient',$patients->id)}}" onclick="return confirm('Are you sure delete this !')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Appoinment table End--}}





    {{-- Branch Model --}}
    @include('frontEnd.include.addBrandModal')
    @include('frontEnd.include.editBranchModal')

    {{-- Department Model --}}
    @include('frontEnd.include.addDepartmentModal')
    @include('frontEnd.include.editDepartmentModal')

    {{-- Doctor Model --}}
    @include('frontEnd.include.addDoctorModal')
    @include('frontEnd.include.editDoctorModal')

    {{-- Appoinment Model --}}
    @include('frontEnd.include.addAppoinmnetModal')
    @include('frontEnd.include.editAppoinmnetModal')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        //branch
        $(document).ready(function() {
            $('.editBranchBtn').on('click', function() {
                var editModal = $('#editBranchModal');
                editModal.find('input[name=branchName]').val($(this).data('branch-name'));
                editModal.find('input[name=branch_id]').val($(this).data('id'));
            });
        });
        //Department
        $(document).ready(function() {
            $('.editDeptBtn').on('click', function() {
                var editModal = $('#editDepartmentModal');
                editModal.find('input[name=chamer_id]').val($(this).data('chamer-id'));
                editModal.find('input[name=DeptName]').val($(this).data('dept-name'));
                editModal.find('input[name=dept_id]').val($(this).data('id'));
            });
        });
        //Doctor
        $(document).ready(function() {
            $('.editDoctorBtn').on('click', function() {
                var editModal = $('#editDoctorModal');
                editModal.find('input[name=chamer_id]').val($(this).data('chamer-id'));
                editModal.find('input[name=dept_id]').val($(this).data('dept-id'));
                editModal.find('input[name=DoctorName]').val($(this).data('Doctor-Name'));
                editModal.find('input[name=DoctorQualification]').val($(this).data('Doctor-Qualification'));
                editModal.find('input[name=DoctorSpecialty]').val($(this).data('Doctor-Specialty'));
                editModal.find('input[name=languageSpoken]').val($(this).data('language-Spoken'));

            });
        });
        //doctor hide
        $(document).ready(function() {
            $('#departmentName').on('click', function() {
                $('#doct_form').css("display", "block");
            });
            $('#BranchName').click(function() {
                $('#doct_form').empty();
            });
            $('#departmentName').click(function() {
                $('#doct_form').empty();
            });
        });

        //Multipule dropdown ajax
        $('select[name="BranchName"]').on('change', function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    url: "{{ url('/doctor-department/ajax') }}/" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="departmentName"]').html(
                            '<option value="" selected="" disabled="">Select Department</option>');
                        $.each(data, function(key, value) {
                            $('select[name="departmentName"]').append('<option value="' + value
                                .id + '">' + value.DeptName +
                                '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
        //Doctor
        $('select[name="departmentName"]').on('change', function() {
            var doctor_id = $(this).val();
            $('#doctorName').empty();
            if (doctor_id) {
                $.ajax({
                    url: "{{ url('/doctor-profile/ajax') }}/" + doctor_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            html = " ";
                            html =
                                '<div class="col-lg-5" style="display:inline-block; margin:20px;"><div class="card" id="doctorName" style="margin-top:15px;"><div class="card-body" style="display:flex"><div class="img"> <img src="' +
                                value.Image +
                                '" height="100" width="100"alt=""> </div><div class="doct-body" style="margin-left:50px;"> <h6>' +
                                value.DoctorName + '</h6> <h6>' + value.DoctorQualification +
                                '</h6> <h6>' + value.DoctorSpecialty + '</h6><h6>' + value
                                .Designation + '</h6> <a href="/doctor.profile/' + value.id +
                                '" class="btn btn-primary">View Profile</a>  </div></div></div></div>';
                            $('#doct_form').append(html);
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });


        //Patient

        $(document).ready(function(){
            $('.addPatientModel').on('click',function(){
                var editModel = $('#editAppoinmnetModal');

                // editModal.find('input[name=chamer_id]').val($(this).data('chamer-id'));

                editModel.find('select[name=chamer_id]').val($(this).data('chamer-id'));
                editModel.find('select[name=dept_id]').val($(this).data('dept-id'));
                editModel.find('select[name=doctor_id]').val($(this).data('doctor-id'));
                editModel.find('input[name=patient_name]').val($(this).data('patient-name'));
                editModel.find('input[name=patient_age]').val($(this).data('patient-age'));
                editModel.find('input[name=patient_number]').val($(this).data('patient-number'));
                editModel.find('input[name=patient_email]').val($(this).data('patient-email'));
                editModel.find('textarea[name=patient_details]').val($(this).data('patient-details'));
                editModel.find('input[name=patient_id]').val($(this).data('id'));
            });
        });
    </script>
</body>

</html>
