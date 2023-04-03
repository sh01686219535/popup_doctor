 <!-- addBranchModal -->
 <div class="modal fade" id="addAppoinmnetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('add.patient')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Appoinmnet</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="brandName">Branch Name</label>
                        <select name="chamer_id" id="brandName" class="form-control">
                            @foreach ($branch as $items)
                                <option value="{{ $items->id }}">{{ $items->branchName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deptName">Department Name</label>
                        <select name="dept_id" id="deptName" class="form-control">
                            @foreach ($department as $dept)
                                <option value="{{ $dept->id }}">{{ $dept->DeptName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="doctor_name">Department Name</label>
                        <select name="doctor_id" id="doctor_name" class="form-control">
                            @foreach ($doctor as $doctors)
                                <option value="{{ $doctors->id }}">{{ $doctors->DoctorName }}</option>
                            @endforeach
                        </select>
                    </div>
                       <div class="form-group">
                           <label for="patient_name">Patient Name</label>
                           <input type="text" id="patient_name" name="patient_name" class="form-control py-2" placeholder="Enter Patient Name">
                       </div>
                       <div class="form-group">
                        <label for="patient_age">Patient Age</label>
                        <input type="text" id="patient_age" name="patient_age" class="form-control py-2" placeholder="Enter Patient Age">
                    </div>
                    <div class="form-group">
                        <label for="patient_number">Patient Number</label>
                        <input type="text" id="patient_number" name="patient_number" class="form-control py-2" placeholder="Enter Patient Number">
                    </div>
                    <div class="form-group">
                        <label for="patient_email">Patient Email</label>
                        <input type="email" id="patient_email" name="patient_email" class="form-control py-2" placeholder="Enter Patient Email">
                    </div>
                    <div class="form-group">
                        <label for="patient_details">Patient Details</label>
                        <textarea id="patient_details" name="patient_details" class="form-control py-2" placeholder="Enter Patient Details"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
