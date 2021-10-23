<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0 text-white">Website</h6>
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
                <div class="col-12 text-right"><a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/website/add/');?>">Add</a></div>
              </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id="athleteFormsDatatable" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Type</th>
                    <th scope="col" class="sort" data-sort="name">Order</th>
                    <th scope="col" class="sort" data-sort="name">Header</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    if(!empty($result))
                    {
                      foreach ($result as $r) {
                        if($r['type'] == '1')
                        {
                          $r['type'] = 'Lucky Number';
                        }
                        if($r['type'] == '2')
                        {
                          $r['type'] = 'Content';
                        }
                        if($r['type'] == '3')
                        {
                          $r['type'] = 'Open To Close';
                        }
                        if($r['type'] == '4')
                        {
                          $r['type'] = 'Content2';
                        }
                        ?>
                        <tr>
                          <td><?php echo $r['type'] ?></td>
                          <td><?php echo $r['que'] ?></td>
                          <td><?php echo $r['header'] ?></td>
                          <td class=" text-right">
                            <div class="dropdown">
                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="<?php echo base_url('/admin/website/edit/'.$r['id']);?>">Edit</a>
                              <a class="dropdown-item" onclick="deleteModal('website',<?php echo $r['id'] ?>)">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
