<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-2">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-dark d-inline-block mb-0 text-white">Add Matka Info.</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add Info. </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div id="success" class="alert alert-success" role="alert" style="display:none;">
                </div>
                <div id="error" class="alert alert-warning" role="alert" style="display:none;">
                </div>
              <form id="addMatka">
                <div class="pl-lg-4">
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Type</label>
                        <select class="form-control" name="type">
                            <?php
                            if($games)
                            {
                              foreach($games as $g)
                              {
                                ?>
                                <option value="<?php echo $g['id'];?>"><?php echo $g['name'];?></option>
                                <?php
                              }
                            }
                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Date</label>
                        <input class="form-control" type="date" name="date" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Open Patti</label>
                        <input class="form-control" type="number" name="open_patti" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Open Ank</label>
                        <input class="form-control" type="number" name="open_ank" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Close Patti</label>
                        <input class="form-control" type="number" name="close_patti" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Close Ank</label>
                        <input class="form-control" type="number" name="close_ank" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="checkbox" name="holiday" value="1" >
                        <label class="form-control-label">Holiday</label>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Add</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>