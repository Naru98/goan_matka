<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-2">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-dark d-inline-block mb-0 text-white">Add Website Info.</h6>
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
              <form id="addInfo">
                <div class="pl-lg-4">
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Type</label>
                        <select class="form-control" name="type">
                            <option value="1">Lucky Number</option>
                            <option value="2">Content</option>
                            <option value="3">Open To Close</option>
                            <option value="4">Content2</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Order</label>
                        <input class="form-control" type="number" name="que" >
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Header</label>
                        <textarea class="form-control" name="header" ></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Details</label>
                        <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG">
                        </div>
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