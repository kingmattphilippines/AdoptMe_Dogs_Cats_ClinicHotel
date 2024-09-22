<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Pet</h4>
            </div>
            <div class="modal-body">
                <form action="admin_add_pets_func.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="petname">Pet Name</label>
                        <input type="text" class="form-control" placeholder="eg. Brownie" name="PET_NAME">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" placeholder="eg. Sample description" name="PET_DESC"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="display">Display Image</label>
                        <input type="file" name="PET_DISPLAY">
                    </div>
                    <!-- added -->
                    <div class="form-group">
                        <label for="display">Picture #1</label>
                        <input type="file" name="PET_D[]">
                    </div>
                    <div class="form-group">
                        <label for="display">Picture #2</label>
                        <input type="file" name="PET_D[]">
                    </div>
                    <div class="form-group">
                        <label for="display">Picture #3</label>
                        <input type="file" name="PET_D[]">
                    </div>
                    <div class="form-group">
                        <label for="display">Picture #4</label>
                        <input type="file" name="PET_D[]">
                    </div>
                    <!-- added -->
                    <div class="modal-footer">
                        <button type="button" class="w3-button w3-red" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="w3-button w3-green" name="submit" id="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>