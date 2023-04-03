 <!-- addBranchModal -->
 <div class="modal fade" id="addBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <form action="{{route('add.branch')}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brand</h1>
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
