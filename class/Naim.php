<?php


require_once "Man.php";

class Naim extends Man
{
    public function message()
    {
        return "This Is Naim Info";
    }
}
$naim = new Naim();
$message = $naim->message();
$naim->info('Naim Miya', "Brahmanbaria, Bangladesh");
$naim->common("naim@gmail.com", "01775414256", "Brahmanbaria");
$name = $naim->name;
$email = $naim->email;
$number = $naim->number;
$city = $naim->city;
$address = $naim->address;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $message ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo $message ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $number ?></td>
                                        <td><?php echo $city ?></td>
                                        <td><?php echo $address ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>