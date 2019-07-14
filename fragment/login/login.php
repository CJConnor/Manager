<modal class="modal fade" id="log_p1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Log in...</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="#" method="post">

                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" id="username" required/>
                </div>


                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" name="password" id="password" required/>
                </div>

            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="submitLoginForm();">Submit</button>
        </div>
        
      </div>
    </div>
</modal>