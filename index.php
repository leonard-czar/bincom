<?php
include_once "nav.php";
?>
<?php if (isset($_REQUEST['result'])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show text-center " role="alert">

                <strong><?php
                        echo $_REQUEST['result'];
                        ?>
                </strong>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-hidden="true"></button>

            </div>
        <?php

        }  ?>
<div class="container" >
    <div class="row">
        <div class="col-sm mt-3 text-center">
            <h1>
                Welcome!
            </h1>
        </div>
    </div>
    <div class="">
        <h5 class="text-center">Get Results for the 2011 Elections</h5>
    </div>
    <div class="row">
        <marquee behavior="" direction="">

            <div class="row justify-content-center m-sm-5">
                <div class="col-sm-3 text-center bg-primary text-light" style="box-shadow:2px 3px 6px #050C24;margin-left:15px;font-size: 1.1vw!important; ">
                    <div> Polling Unit Result</div>
                    <hr>
                    <div><img src="images/pollunit.png" alt="" class="img-fluid p-1"></div>
                </div>
                <div class="col-sm-3  text-center text-light" style="box-shadow:2px 3px 6px #050C24; background-color:#2274A5;margin-left:15px;font-size: 1.1vw!important; ">
                    <div>Sum of LGA Result</div>
                    <hr>
                    <div><img src="images/pollresult.jpeg" alt="" class="img-fluid p-1"></div>

                </div>
                <div class="col-sm-3 text-center text-light" style="box-shadow:2px 3px 6px #050C24;background-color:#E8AA14;margin-left:15px;font-size: 1.1vw!important; ">
                    <div>
                        <p>Reg. For New Polling Units</p>
                    </div>
                    <hr>
                    <div><img src="images/getpvc.jpg" alt="" class="img-fluid p-1"></div>

                </div>
            </div>
        </marquee>

    </div>
</div>



<?php
include_once "footer.php";
?>