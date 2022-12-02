<?php
include_once "elections.php";
include_once "nav.php";

$result = new Elections();
$pollresults = $result->GetLgaResult();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>

<body>

    <div class="row mt-2" style="justify-content:center ;">

        <div class="col-sm-1 ">
            <img src="images/unnamed.png" alt="" srcset="" class="img-fluid justify-content-center">

        </div>
    </div>
    <div class="container-sm mt-2 text-center ">
        <h1 class="mb-3 mt-3">2011 Elections</h1>
        <h5 class="mb-3 mt-2">Total Polling Unit Results in LGA</h5>

        <?php if (isset($_REQUEST['msg'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show text-center " role="alert">

                <strong><?php
                        echo $_REQUEST['msg'];
                        ?>
                </strong>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-hidden="true"></button>

            </div>
        <?php

        }  ?>

        <div class="row">
            <div class="col-sm">
                <?php
                foreach ($pollresults as $pollresult) {
                ?>
                    <form action="pollunitsumresult.php">
                        <?php echo $pollresult['lga_name'] ?><label for="">
                            <ul style="list-style-type:none;">
                                <li>
                                    <input type="checkbox" value="<?php echo $pollresult['lga_id'] ?>" name="<?php echo $pollresult['lga_name'] ?>"required>
                                </li>

                            </ul>
                        </label>
                        <div>
                            <input type="submit" value="Get Result" name="btnresult" class="btn btn-outline-primary">
                        </div>

                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    
</body>


</html>
<?php
include_once "footer.php";
?>