<div class="content-wrapper">
	<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <?php foreach($list as $row): ?>
              <thead>
                <tr>
                  <th>Regional ID</th>
                  <th>User ID</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $row['Regional_ID']?></td>
                  <td><?= $row['user_id']?></td>
                </tr>
             <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>

</div>