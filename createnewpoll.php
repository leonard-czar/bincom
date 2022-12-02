<?php
include_once "elections.php";
include_once "nav.php";


$Obj= new Elections();

if (isset($_REQUEST['btnsubmit']) && !empty($_REQUEST['Polling_unit_id']) && !empty($_REQUEST['partyname'])&& !empty($_REQUEST['partyscore'])&& !empty($_REQUEST['agentname'])&& !empty($_REQUEST['userip'])) {
    $reg=$Obj->RegisterPollinUnit($_REQUEST['Polling_unit_id'],$_REQUEST['partyname'],$_REQUEST['partyscore'],$_REQUEST['agentname'],$_REQUEST['userip']);
    
        
    
}

?>
<div class="container justify-content-center">
    <div class="row ">
        <div class="col-sm text-center">
            <form  action="index.php?result=Result registered successfully" method="post" class="mt-3 mb-3">
                <h2>Polling Result Registration</h2>

                <div class="mt-2 mb-3">
                        <input type="number" name="Polling_unit_id" value="" class="form-control" placeholder="Polling unit id" required>
                        
                    </div>

                <div class="mb-3">
                        <input type="text" name="partyname" value="" class="form-control" placeholder="Party name" required>
                        
                    </label></div>

                <div class="mb-3">
                         <input type="number" name="partyscore" value="" class="form-control" placeholder="Partyscore"required>
                       
                    </label></div>

                <div class="mb-3">
                        <input type="text" name="agentname" class="form-control" value="" placeholder="Agent Name" required>
                        
                    </label></div>

                <div class="mt-2">
                
                        <input type="text" name="userip" value="" class="form-control" placeholder="User Ip" required>

                
                    <div>

                        <div class="mt-2">
                            <button type="submit" name="btnsubmit" value="submit" class="btn btn-primary">
                                Register</button>
                        </div>


            </form>



        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>