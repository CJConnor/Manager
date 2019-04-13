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


                    <button class="col-sm-3 butn" type="button" onclick="setBtn(1); return false; submit(this);">
                        <div class="innerBtn">
                            <div class="cnt">
                                <i class="fas fa-fist-raised icon"></i>
                                <br />
                                <strong>Attack</strong>
                            </div>
                        </div>
                    </button>

                    <div class="col-sm-1"></div>

                    <button class="col-sm-3 butn" type="button" onclick="setBtn(2); return false; submit(this);">
                        <div class="innerBtn">
                            <div class="cnt">
                                <i class="fas fa-balance-scale icon"></i>
                                <br />
                                <strong>Balanced</strong>
                            </div>
                        </div>
                    </button>

                    <div class="col-sm-1"></div>

                    <button class="col-sm-3 butn" type="button" onclick="setBtn(3, this); return false; ">
                        <div class="innerBtn">
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
        </div>
        
      </div>
    </div>
</modal>

<script>

    

</script>

<style>

    .butn {
        border: 1px solid black;
        border-radius: 5px;
        background-color: white;
        padding: 5px;
    }

    .innerBtn {
        border: 1px solid black; 
        border-radius: 5px; 
        background-color: white; 
        padding: 5px; 
        height: 100px; 
        margin: 0 auto; 
        text-align: center;
    }

    .cnt {
        position: relative;
        top: 24%;
    }

    .icon {
        font-size: 30px;
    }



</style>