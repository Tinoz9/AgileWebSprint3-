<?php include_once('connection.php'); ?>
<div class="modal fade" id="editsubscriber_<?php echo $row['idSubscriber']; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myeditModal" style = "text-align=center">Edit Subscriber Details:</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editsubscriber.php?idSubscriber=<?php echo $row['idSubscriber']; ?>" enctype="multipart/form-data">
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Subscriber ID:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="idSubscriber" value="<?php echo $row['idSubscriber']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Subscriber Name:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="subscriberName" value="<?php echo $row['subscriberName']; ?>">
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Subscriber Email:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="subscriberEmail" value="<?php echo $row['subscriberEmail']; ?>" pattern=".+@gmail\.com">
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Monthly:</label>
                            </div>
                            <div class="col-sm-8" style="margin-bottom:0.8rem;">
                                <input type="checkbox" name = "subscriberMonthly" value="1" <?php if ($row['subscriberMonthly'] == '1') echo "checked='checked'"; ?>>
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-md-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Breaking:</label>
                            </div>
                            <div class="col-md-8" style="margin-bottom:0.8rem;">
                                <input type="checkbox" name = "subscriberBreaking" value="1" <?php if ($row['subscriberBreaking'] == '1') echo "checked='checked'"; ?>>
                            </div>
                        </div>
                        <div class="modal-footer" style="margin-bottom:0.8rem;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button type="submit" name="editsubscriber" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
