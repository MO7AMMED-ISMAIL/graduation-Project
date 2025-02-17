<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Admins</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $post){ ?>
                        <tr>
                            <td><?=$id++?></td>
                            <td><?=$post['post_title']?></td>
                            <td><?=$post['post_content']?></td>
                            <td><img <?=$post['post_img']!= null ? "src='Posts/Images/{$post['post_img']}' width='50px' height='50px'" :''?> ></td>
                            <td>
                                <?php
                                    if($post['user_role']=='1' || $post['users_id']==$_SESSION['Admin_id']){
                                ?>
                                <a class="btn action" href="Posts/delete.php?post_id=<?=$post['post_id']?>">Delete</a>
                                <a class="btn action1" href="?edit=<?=$post['post_id']?>">Edit</a>
                                <a href="?view=<?=$post['post_id']?>" class="btn action1" data-toggle="modal" data-target="#exampleModalToggle" >View </a>
                            </td>
                            <?php }else{?>
                            <a href="?view=<?=$post['post_id']?>" class="btn action1" data-toggle="modal" data-target="#exampleModalToggle" >View </a>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">View</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>User Post</label>
                        <input type="text" class="form-control form-control-user" readonly value="<?=$post['user_name']?>">
                        <label>Data</label>
                        <input type="text" class="form-control form-control-user" readonly value="<?=$post['post_date']?>">
                    </div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal" aria-label="Close">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>