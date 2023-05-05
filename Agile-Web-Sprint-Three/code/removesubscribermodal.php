<div id="removesubscriberModal" class="modal fade" tabindex="-1">
    <?php
        include_once('connection.php');
        $database = new Connection();
        $db = $database->open();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;" id="removeSubscriberLabel">Remove Subscriber</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="removesubscriber.php" enctype="multipart/form-data">
                        <div class="row form-group" style="margin-bottom:0.8rem;">
                            <div class="col-sm-4">
                                <label class="control-label" style="position: relative; top: 7px;">Subscriber Email:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name = "subscriberEmailName">
                            </div>
                        </div>
                        <div class="modal-footer" style="margin-bottom:0.8rem;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name = "removesubscriber" class="btn bg-success">Delete</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>