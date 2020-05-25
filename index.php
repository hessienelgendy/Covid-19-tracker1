<?php
    include 'logic.php';
?>


<!Doctype html>
<html lang='en'>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- stylesheet file -->
    <link href="./css/style.css" rel="stylesheet">
    <title>Covid-19 tracker</title>
    <link rel="icon" href="./img/coronavirus.svg">
</head>
<body>
    <div class="container-fluid text-center bg-light p-5 my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">this project to keep track of all COVID-19 cases around the world</h5>
    </div>
<div class="sections">
    <div class="container my-6">
        <div class="row text-center">
            <div class="calc col-md-4 col-sm-6 col-xs-12 bg-warning">
                <i class="fa fa-hospital-user fa-4x"></i>                
                <h5>Confirmed</h5>
                <h4>
                    <?php echo $total_confirmed ?>
                </h4>
            </div>
            <div class="calc col-md-4 col-sm-6 col-xs-12 bg-success">
                <i class="fa fa-check-circle fa-4x"></i>
                <h5>Recovered</h5>
                <h4>
                    <?php echo $total_recovered ?>
                </h4>
            </div>
            <div class="calc col-md-4 col-sm-6 col-xs-12 bg-danger">
            <i class="fa fa-shield-virus fa-4x"></i>
                <h5>Deceased</h5>
                <h4>
                    <?php echo $total_deaths ?>
                </h4>
            </div>
        </div>
    </div>
</div>
<div class="container text-center bg-light p-4 my-4">
        <h5 class="text-info">"prevention is the cure".</h5>
        <p class="text-muted">Stay Indoors Stay Save</p>
        <i class="fa fa-hands-wash fa-3x"></i> 
    </div>

    <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope='col'>Counteries</th>
                    <th scope='col'>Confirmed</th>
                    <th scope='col'>Recoverd</th>
                    <th scope='col'>Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $key => $value) {
                        $increase_confirmed = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                        $increase_recovered = $value[$days_count]['recovered'] - $value[$days_count_prev]['recovered'];
                        $increase_deaths = $value[$days_count]['deaths'] - $value[$days_count_prev]['deaths'];

                ?>
                <tr>
                    <th>
                        <?php echo $key; ?>
                    </th>
                    <td>
                        <?php echo $value[$days_count]['confirmed'] ?>
                        <?php if($increase_confirmed != 0){ ?>
                            <small class="text-danger pl-3"><i class="fa fa-arrow-up"></i><?php echo $increase_confirmed; ?></small>
                        <?php } ?>
                        
                    </td>
                    <td>
                        <?php echo $value[$days_count]['recovered'] ?>
                        <?php if($increase_recovered != 0){ ?>
                            <small class="text-danger pl-3"><i class="fa fa-arrow-up"></i><?php echo $increase_recovered; ?></small>
                        <?php } ?>
                    </td>
                    <td>
                        <?php echo $value[$days_count]['deaths'] ?>
                        <?php if($increase_deaths != 0){ ?>
                            <small class="text-danger pl-3"><i class="fa fa-arrow-up"></i><?php echo $increase_deaths; ?></small>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Copywright&COPY; By/Hussien elgendy</p>
            </div>
        </div>
    </div>

</body>
</html>