<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2> Manage Bus Schedule <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm float-right">Add New</a> </h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Bus Number</th>
                        <th>Leaving From</th>
                        <th>Going Destination</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                foreach ($schedules as $key => $obj) {
                ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $obj['bus_number'] ?></td>
                        <td><?php echo $obj['start_location'] ?></td>
                        <td><?php
                        $objNew = $this->CM->select_data("bms_location","name",array("id"=>$obj['end']));
                        echo $objNew[0]['name']; 
                        ?></td>
                        <td><?php echo date("d, M,Y",strtotime($obj['date']))?></td>
                        <td><?php echo $obj['amount'] ?></td>
                        <td>
                            <a href="<?php echo base_url("admin/bus_schedule_edit/".$obj['id']) ?>" class="btn btn-info btn-sm">Edit</a>
                            <a href="<?php echo base_url("admin/bus_schedule_delete/".$obj['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add new Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="database_operation_from" data-url="<?php echo base_url('admin/bus_schedule') ?>">
                    <div class="form-group">
                        <label>Bus Number</label>
                        <input type="text" name="bus_number" required class="form-control" placeholder="Enter Number" />
                    </div>
                    <div class="form-group">
                        <label>Leaving From</label>
                        <select name="start" required class="form-control">
                            <option value="">Select Start</option>
                            <?php
                            foreach ($locations as $loc) {
                            ?>
                                <option value="<?php echo $loc['id'] ?>"><?php echo $loc['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Going Destination</label>
                        <select name="end" required class="form-control">
                            <option value="">Select End</option>
                            <?php
                            foreach ($locations as $loc) {
                            ?>
                                <option value="<?php echo $loc['id'] ?>"><?php echo $loc['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" required class="form-control" placeholder="Enter Amount" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info">Add</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>