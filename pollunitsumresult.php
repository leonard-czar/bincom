<?php
include_once "elections.php";
include_once "nav.php";


$result = new Elections();
$pollresults = $result->GetResult();
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
    <?php
    if (isset($_REQUEST['Sapele']) && $_REQUEST['Sapele']) {


    ?>

        <div class="row mt-2" style="justify-content:center ;">

            <div class="col-sm-1 ">
                <img src="images/unnamed.png" alt="" srcset="" class="img-fluid justify-content-center">

            </div>
        </div>

        <div class="container-sm mt-3 text-center ">
            <h1 class="mb-5 ">2011 Elections</h1>
            <h4 class="mb-3 mt-2">Total Polling Unit Results </h4>
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <table class="table table-hover table-striped">
                        <thead class="table-dark ">
                            <tr>
                                <th>LGA</th>
                                <th>Total Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color:rgb(88,188,130) ;">
                                <td>Sapele</td>
                                <td><?php echo array_sum($pollresults)  ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } else {
        $msg = "please tick the checkbox to view result!";
        header("Location: pollunitsum.php?msg=$msg");
    } ?>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
include_once "footer.php";
?>