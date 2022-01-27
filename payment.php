<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>payment</title>
</head> 


<body>
<main>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- asied -->
            <?php include 'asied.php' ?>
            <!-- asied -->


            <div class="col ">

                 <!-- nnavbar -->
            <?php include 'navbar.php' ?>
                <!-- nnavbar -->

                <div class="col ">

                    <div class="container-fluid   ">
                        <div class="d-flex justify-content-between  border-bottom bg-light px-1 py-2">
                            <h1 class="fw-bold h3">Payments Details</h1>
                            <i class="far fa-sort me-3 fs-6 text-info  pt-2"></i>
                        </div>

                        <table class="table table-hover table-striped">
                            <thead >
                               
                                <tr class="fw-normal" style=" background-color:#F8F9FA " >
                                    <th class="text-secondary">Name</th>
                                    <th class="text-secondary">Payment Schedule</th>
                                    <th class="text-secondary">Bill Number</th>
                                    <th class="text-secondary">Amount Paid</th>
                                    <th class="text-secondary">Balance amount</th>
                                    <th class="text-secondary" colspan="2">Date</th>
                                    <th  style="display: none;" >a</th>
                                    
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                
                                <?php
                                 include 'tableux_payment.php '
                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


        </div>
    </div>
</main>
    
</body>

</html>