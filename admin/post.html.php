

      
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread">Post Products</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.php">Home</a></span>
            <span>Post Products<</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class=" bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <?php echo $message; ?>
        <div class="col-md-5 mt-4 d-flex">
          <form method="post" class="cart-detail bg-white p-3 p-md-4 contact-form" data-parsley-validate   enctype="multipart/form-data"      >
            <h3 class="mb-4 billing-heading text-center">Add Products</h3>

            <!-- <div class="form-group">
              <label for="firstname">Category</label>
              <input type="text" name="name" class="form-control" required="" maxlength="15">
            </div> -->

            <div class="form-group">
              <label for="firstname">Product Name</label>
              <input type="text" name="name" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="lastname">Description</label>
              <textarea name="description" class="form-control" id="" cols="10" rows="4" required=""></textarea>
              <!-- <input type="text" name="description" class="form-control"  maxlength="40"> -->
            </div>
            <div class="form-group">
              <label for="emailaddress"> Price </label>
              <input type="text" name="price" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="emailaddress"> In Stock </label>
              <input type="text" name="QuantityInStock" class="form-control" required="" maxlength="30">
            </div>


            <div class="form-group">
              <label for="emailaddress"> Photo </label>
              <input type="file" name="photo" class="form-control" required="">
            </div>



           
            <div class="form-group">
              <input type="submit" name="submit" value="Add products" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  	<!--Update User's' Info Modal -->
	<div class="modal fade" id="createAccountModal" tabindex="-1" role="dialog" aria-labelledby="createAccountModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
        <div class="modal-header bs-success">
					<h5 class="modal-title" id="exampleModalLongTitle">Post Successful</h5>
            <a href="dashboard.php" class="close">&times;</a>
				</div>
				<div class="modal-body">
          <p>
          Thanks!<br>
          Your post has been successfully created. <br>
          </p>
				</div>
			</div>
        </div></div>

  <!-- scripts -->
  <?php require '../sections/scripts.php'; ?>

  <script>
    $(document).ready(function(){
      var text=$('#title').html();
      if (text === 'Post Successful'){
        $('#createAccountModal').modal({
          backdrop: 'static',
          keyboard: false
        })
      }
    });
  </script>

</body>
</html>