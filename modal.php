<main class="container">

<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="./login.php" method="post">
        <div class="modal-body">
          
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail adres</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="emailadres" name="email">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="passwordL">Password</label>
              <input type="password" class="form-control" id="passwordL" placeholder="Password" name="password">
            </div>      
        </div>
        <div class="modal-footer">
          <button type="submit" name='login-submit' class="btn btn-primary">Log in</button>        
        </div>
      </form>
    </div>
  </div>
</div>

</main>