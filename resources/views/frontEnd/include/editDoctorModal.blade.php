 <!-- editDoctorModal -->
 <div class="modal fade" id="editDoctorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('add.doctor') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Doctor</h1>
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
                        <label for="DoctorName">Doctor Name</label>
                        <input type="text" id="DoctorName" name="DoctorName" class="form-control my-2"
                            placeholder="Enter Doctor Name">
                    </div>
                    <div class="form-group">
                       <label for="DoctorQualification">Doctor Qualifications</label>
                       <input type="text" id="DoctorQualification" name="DoctorQualification" class="form-control my-2"
                           placeholder="Enter Doctor Qualifications">
                   </div>
                   <div class="form-group">
                       <label for="DoctorSpecialty">Doctor Specialty</label>
                       <input type="text" id="DoctorSpecialty" name="DoctorSpecialty" class="form-control my-2"
                           placeholder="Enter Doctor Specialty">
                   </div>
                   <div class="form-group">
                       <label for="languageSpoken">Language Spoken</label>
                       <input type="text" id="languageSpoken" name="languageSpoken" class="form-control my-2"
                           placeholder="Enter Language Spoken">
                   </div>
                   <div class="form-group">
                       <label for="Designation">Designation</label>
                       <input type="text" id="Designation" name="Designation" class="form-control my-2"
                           placeholder="Enter Designation">
                   </div>
                   <div class="form-group">
                       <label for="Institute">Institute</label>
                       <input type="text" id="Institute" name="Institute" class="form-control my-2"
                           placeholder="Enter Institute">
                   </div>
                   <div class="form-group">
                       <label for="chamber_time">Chamber Time</label>
                       <input type="text" id="chamber_time" name="chamber_time" class="form-control my-2"
                           placeholder="Enter chamber_time">
                   </div>
                   <div class="form-group">
                       <label for="off_day">Off Day</label>
                       <input type="text" id="off_day" name="off_day" class="form-control my-2"
                           placeholder="Enter off_day">
                   </div>
                   <div class="form-group">
                       <label for="floor_number">Floor Number</label>
                       <input type="text" id="floor_number" name="floor_number" class="form-control my-2"
                           placeholder="Enter floor_number">
                   </div>
                   <div class="form-group">
                       <label for="Room_number">Room Number</label>
                       <input type="text" id="Room_number" name="Room_number" class="form-control my-2"
                           placeholder="Enter Room_number">
                   </div>
                   <div class="form-group">
                       <label for="Charge">Charge</label>
                       <input type="text" id="Charge" name="Charge" class="form-control my-2"
                           placeholder="Enter Charge">
                   </div>
                   <div class="form-group">
                       <label for="Image">Image</label>
                       <input type="file" id="Image" name="Image" class="form-control my-2">
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
