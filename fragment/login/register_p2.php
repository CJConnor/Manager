<modal class="modal fade" id="reg_p2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register...</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="#" method="post" id="2">

                <div class="form-group">
                    <label for="fname">First Name: </label>
                    <input type="text" class="form-control" name="forename" id="forename" />
                </div>
                
                <div class="form-group">
                    <label for="sname">Surname: </label>
                    <input type="text" class="form-control" name="surname" id="surname" />
                </div>
                
                <div class="form-group">
                    <label for="dob">Dob: </label>
                    <input type="date" class="form-control" name="dob" id="dob" />
                </div>
                
                <div class="form-group">
                    <label for="age">Age: </label>
                    <input type="text" class="form-control" name="age" id="age" />
                </div>
                
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" name="email" id="email" />
                </div>

            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="submit(this);">Submit</button>
        </div>
        
      </div>
    </div>
</modal>