<?php


require_once "class/Man.php";

class AllMan extends Man
{
    public function message()
    {
        return "All Man Information";
    }
}
$naim = new AllMan();
$message = $naim->message();
$naim->info('Naim Miya', "Brahmanbaria, Bangladesh");
$naim->common("naim@gmail.com", "01775414256", "Brahmanbaria");

$sohel = new AllMan();
$sohel->info('Sohel Rana', "Sirajgong, Bangladesh");
$sohel->common("sohel@gmail.com", "01775484658", "Sirajgong");

$jashim = new AllMan();
$jashim->info('Jashim Uddin', "Nobinagor, Bangladesh");
$jashim->common("jashimuddin@gmail.com", "01745258569", "Nobinagor");

$all_mans = array(
    array("name" => $naim->name, "email" => $naim->email, "number" => $naim->number, "city" => $naim->city, "address" => $naim->address),
    array("name" => $sohel->name, "email" => $sohel->email, "number" => $sohel->number, "city" => $sohel->city, "address" => $sohel->address),
    array("name" => $jashim->name, "email" => $jashim->email, "number" => $jashim->number, "city" => $jashim->city, "address" => $jashim->address),
);
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
                        <h3 class="text-center"><?php echo $message ?></h3>
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
                                    <?php foreach ($all_mans as $key => $all_man) { ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $all_man['name'] ?></td>
                                            <td><?php echo $all_man['email'] ?></td>
                                            <td><?php echo $all_man['number'] ?></td>
                                            <td><?php echo $all_man['city'] ?></td>
                                            <td><?php echo $all_man['address'] ?></td>
                                        </tr>
                                    <?php } ?>
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