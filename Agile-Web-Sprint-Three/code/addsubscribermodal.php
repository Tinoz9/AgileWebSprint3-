<div id="addsubscriberModal" class="modal fade" tabindex="-1">
    <?php
        include_once('connection.php');
        $database = new Connection();
        $db = $database->open();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;" id="addSubscriberLabel">Add New Subscriber</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="addsubscriber.php" enctype="multipart/form-data">
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Name:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name = "subscriberName">
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Email:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name = "subscriberEmail" required>
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Monthly:</label>
                            </div>
                            <div class="col-sm-8" style="margin-bottom:0.8rem;">
                                <input type="checkbox" name = "subscriberMonthly" value="1" checked="checked">
                            </div>
                        </div>
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-md-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Breaking:</label>
                            </div>
                            <div class="col-md-8" style="margin-bottom:0.8rem;">
                                <input type="checkbox" name = "subscriberBreaking" value="1" checked="checked">
                            </div>
                        </div>
                        <div class="modal-footer" style="margin-bottom:0.8rem;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name = "addsubscriber" class="btn bg-success">Subscribe</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>