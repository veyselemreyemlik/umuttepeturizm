<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Edit Location</h2>
        </div>
        <div class="card-body">
            <form class="database_operation_form" data-url="<?= base_url("admin/update_location/".$location["id"]) ?>">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" value="<?php echo $location["name"] ?>" required name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    
                 <button class="btn btn-info" >Update Location</button>
                </div>
            </form>
        </div>
    </div>
</div>
