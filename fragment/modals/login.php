<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Login Please...</h4>
      </div>

      <div class="modal-body">
        <div id="errorMessage" class="alert alert-danger">
          <strong>Oh no!!</strong> It appears something has gone wrong... please try again
        </div>
        <div class="logMod">
          <form action="#" class="form-horizontal">

            <div class="form-group">
              <label class="control-label" for="username">Username: </label>
              <input type="text" name="username" id="username" />
            </div>

            <div class="form-group">
              <label class="control-label" for="password">Password: </label>
              <input type="password" name="password" id="password" />
            </div>

          </form>

        </div>

      </div>
      <div class="modal-footer">
        <div class="form-group">
          <button class="btn btn-primary" onclick="submitLoginForm();" type="submit">Submit</button>
        </div>
      </div>
    </div>

  </div>
</div>
