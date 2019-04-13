<modal class="modal fade" id="reg_p4">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="post" id="4" onsubmit="return false;">

                <div class="row justify-content-center">


                    <button class="col-sm-3 butn" type="button" onclick="setBtn(1); return false;">
                        <div class="butn" style="height: 100px;">
                            <div class="cnt">
                                <i class="fas fa-fist-raised icon"></i>
                                <br />
                                <strong>Attack</strong>
                            </div>
                        </div>
                    </button>

                    <div class="col-sm-1"></div>

                    <button class="col-sm-3 butn" type="button" onclick="setBtn(2); return false;">
                        <div class="butn" style="height: 100px;">
                            <div class="cnt">
                                <i class="fas fa-balance-scale icon"></i>
                                <br />
                                <strong>Balanced</strong>
                            </div>
                        </div>
                    </button>

                    <div class="col-sm-1"></div>

                    <button class="col-sm-3 butn" type="button" onclick="setBtn(3); return false; ">
                        <div class="butn" style="height: 100px;">
                            <div class="cnt">
                                <i class="fas fa-shield-alt icon"></i>
                                <br />
                                <strong>Defence</strong>
                            </div>
                        </div>
                    </button>

                </div>

                <input type="hidden" id="attr" />

            </form>

            <!-- Modal footer -->
            <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" onclick="submit(this);">Submit</button>
            </div>
            
        </div>
        
      </div>
    </div>
</modal>

<style>

    .butn {
        border: 3px solid skyblue;
        color: skyblue;
        border-radius: 5px;
        background-color: white;
        padding: 5px;
    }

    .butn:hover, .butn:focus {
        border-color: white;
        color:white;
        background-color: skyblue;
    }

    .cnt {
        position: relative;
        top: 24%;
    }

    .icon {
        font-size: 30px;
    }



</style>