 <!-- editBranchModal -->
 <div class="modal fade" id="editBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('update.branch')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="branch_id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brand</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                       <div class="form-group">
                           <label for="brandName">Branch Name</label>
                           <input type="text" id="branchName" name="branchName" class="form-control py-2" placeholder="Enter Branch Name">
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
