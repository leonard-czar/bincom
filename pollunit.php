<?php
include_once "elections.php";
include_once "nav.php";


$result = new Elections();
$pollresults = $result->GetPollUnitResult();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="row mt-2" style="justify-content:center ;">

        <div class="col-sm-1 ">
            <img src="images/unnamed.png" alt="" srcset="" class="img-fluid justify-content-center">

        </div>
    </div>
    <div class="container-sm text-center">
        <h1 class="mb-3 mt-3">2011 Elections</h1>
        <h4 class="mb-3 mt-2">Polling Unit Results</h4>
        <div class="row">
            <div class="col-sm">
                <table class="table table-hover table-striped">
                    <thead class="table-dark ">
                        <tr>
                            <th>Polling Unit ID</th>
                            <th>Party</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pollresults as $pollresult) {
                        ?>
                            <tr>
                                <td><?php echo  $pollresult['polling_unit_uniqueid'] ?></td>
                                <td><?php echo  $pollresult['party_abbreviation'] ?></td>
                                <td><?php echo  $pollresult['party_score'] ?></td>
                            </tr>
                        <?php

                        } ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>
<?php
include_once "footer.php";
?>