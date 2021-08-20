<div class="modal fade" id="update_modal<?php echo $row1['ats_post_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_post_query.php" enctype="multipart/form-data">
            <div class="modal-header">
            <input type="hidden" id="post_id" name="post_id" required value="<?php echo $row1['ats_post_id']?>">
                <div style="margin-left:-1px;" class="container">
                    <h5 class="modal-title" id="exampleModalLong">Create a Post</h5>
                    <select style="font-size: 11px; height: 19px; padding: 0px; width:55px;" name="post_privacy" id="post_privacy" class="form-control">
                        <option value="public" <?php if($row1['ats_post_privacy']=="public") echo 'selected="selected"'; ?>>Public</option>
                        <option value="users" <?php if($row1['ats_post_privacy']=="users") echo 'selected="selected"'; ?>>Users</option> 
                        <option value="vendors" <?php if($row1['ats_post_privacy']=="vendors") echo 'selected="selected"'; ?>>Vendors</option> 
                        <option value="custom" <?php if($row1['ats_post_privacy']=="custom") echo 'selected="selected"'; ?>>Custom</option> 
                    </select> 

                    <a style="margin-top:-10%;" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>
                <div class="modal-body col-md-12">
                    <img class="user-avatar rounded-circle" style="width: 35px;" id="get_post_emp_passport_image" name="get_post_emp_passport_image" src="assets/images/avatars/2.jpg" alt="User Avatar">
                    <label style="font-weight: bold;" name="get_post_emp_fullname" id="get_post_emp_fullname" class=""></label>
                <div style="margin-top: 2%" class="">
                    <label style="font-weight: bold;" class="form-control-label">Heading</label><br/>
                    <input style="font-size:12px;" type="text" id="post_heading" name="post_heading" required placeholder="Enter Your Heading..." class="input-style form-control" value="<?php echo $row1['ats_post_heading']?>">
                    
                    <label style="font-weight: bold;" class="form-control-label">Description</label><br/>
                    <textarea style="font-size:12px;" id="post_description" name="post_description" row1s="5" placeholder="Enter Your Description..." class="form-control" value="<?php echo $row1['ats_post_description']?>"><?php echo $row1['ats_post_description']?></textarea>
                    <div class="image-upload">
                    <label style="font-weight: bold;" class="form-control-label">Picture</label><br/>
                        <label for="file" style="cursor: pointer;">
                        <i style="font-size: 35px" class="fa fa-picture-o"></i>
                        </label>
                        <input type="file" multiple accept="image/*" name="post_image[]" id="file" onchange="loadFile(event)" style="display: none;"/>
                    </div>
                    <p><img id="output" width="80"/></p>
                    <p style="font-size:12px; margin-top: -15px; color:black;">Upload Your Pictures</p>
                </div>
            </div>
				
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>