<div class="content-wrapper">
	<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  Regional Accounts</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Regional ID</th>
                      <th>User ID</th>
                      <th>First Name</th>
                    </tr>
                  </thead>

            <?php foreach($list as $row): ?>
                <tbody>
                <tr>
                  <td><?= $row['Regional_ID']?></td>
                  <td><?= $row['user_id']?></td>
                  <td><?= $row['Regional_Fname']?></td>
                </tr>
             <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>

</div>