<?php
include_once "elections.php";
include_once "nav.php";


$Obj= new Elections();

if (isset($_REQUEST['btnsubmit']) && !empty($_REQUEST['Polling_unit_id']) && !empty($_REQUEST['partyname'])&& !empty($_REQUEST['partyscore'])&& !empty($_REQUEST['agentname'])&& !empty($_REQUEST['userip'])) {
    $reg=$Obj->RegisterPollinUnit($_REQUEST['Polling_unit_id'],$_REQUEST['partyname'],$_REQUEST['partyscore'],$_REQUEST['agentname'],$_REQUEST['userip']);

    if( isset($reg)) {
        $result="Result registered successfully";
        header("location: index.php?result=$result");
    }
}

?>
<div class="container justify-content-center">
    <div class="row ">
        <div class="col-sm text-center">
            <form action="" method="post" class="mt-3 mb-3">
                <h2>Polling Result Registration</h2>

                <div class="mt-2 mb-3">
                        <input type="number" name="Polling_unit_id" value="" class="form-control" placeholder="Polling unit id">
                        <?php
                        if (isset($_REQUEST['Polling_unit_id'])  && empty($_REQUEST['Polling_unit_id'])) {
                            echo "<div style='color:red'>Field is required </div>";
                        }
                        ?>
                    </div>

                <div class="mb-3">
                        <input type="text" name="partyname" value="" class="form-control" placeholder="Party name">
                        <?php
                        if (isset($_REQUEST['partyname']) && empty($_REQUEST['Party'])) {
                            echo "<div style='color:red'>Field is Required </div>";
                        }
                        ?>
                    </label></div>

                <div class="mb-3">
                         <input type="number" name="partyscore" value="" class="form-control" placeholder="Partyscore">
                        <?php
                        if (isset($_REQUEST['partyscore']) && empty($_REQUEST['partyscore'])) {
                            echo "<div style='color:red'>Field is Required</div>";
                        }
                        ?>
                    </label></div>

                <div class="mb-3">
                        <input type="text" name="agentname" class="form-control" value="" placeholder="Agent Name">
                        <?php
                        if (isset($_REQUEST['agentname']) && empty($_REQUEST['agentname'])) {
                            echo "<div style='color:red'>Field is Required</div>";
                        }
                        ?>
                    </label></div>

                <div class="mt-2">
                
                        <input type="text" name="userip" value="" class="form-control" placeholder="User Ip">

                
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