 <!-- editDepartmentModal -->
 <div class="modal fade" id="editDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('update.department')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="dept_id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Department</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                       <div class="form-group">
                           <label for="chamer_id">Branch Name</label>
                           <select name="chamer_id" id="chamer_id" class="form-control">
                            @foreach($branch as $items)
                            <option value="{{$items->id}}">{{$items->branchName}}</option>
                            @endforeach
                           </select>
                       </div>
                       <div class="form-group">
                        <label for="DeptName">Department Name</label>
                        <input type="text" id="DeptName" name="DeptName" class="form-control my-2" placeholder="Enter Department Name">
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
