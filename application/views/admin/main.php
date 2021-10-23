<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0 text-white">Matka</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="border-0">
              <?php if(!empty($this->session->userdata('success'))) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Success!</strong> <?php echo $this->session->userdata('success');?></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php
                $this->session->set_userdata('success','');
                } ?>
                <?php if(!empty($this->session->userdata('error'))) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Error!</strong> <?php echo $this->session->userdata('error');?></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php
                $this->session->set_userdata('error','');
                } ?>
            </div>
            <div class="card-header border-0">
              <div class="row">
                <div class="col-12 text-right"><a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/matka/add');?>">Add</a></div>
              </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id="Datatable" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="sort" data-sort="date">Date</th>
                    <th scope="col" class="sort" data-sort="open_patti">Open Patti</th>
                    <th scope="col" class="sort" data-sort="open_ank">Open Ank</th>
                    <th scope="col" class="sort" data-sort="close_ank">Close Ank</th>
                    <th scope="col" class="sort" data-sort="close_patti">Close Patti</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
