<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>My Booking</title>
</head>

<body>
    <?php
    $nomor= rand();
    $nama = $_POST['nama'];
    $duration= $_POST['duration'];
    $tglawal= $_POST['checkin'];
    $checkin=date("d/m/Y",strtotime($tglawal));
    $checkout = date("d/m/Y",strtotime('+'.$duration.' days',strtotime($tglawal)));
    $roomtype = $_POST['roomtype'];
    $phone =$_POST['phonenumber'];
    $service = $_POST['cek'];
    ?>


    <!-- NAVBAR -->
    <ul class="nav justify-content-center list-group-item-primary">
        <li class="nav-item mt-2 ">
            <a class="nav-link active text-dark" href="home.php">Home</a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link text-dark" href="booking.php">Booking</a>
        </li>
    </ul>
    <!-- /NAVBAR -->

    <div class="container-sm">
        <br>
        <fieldset>
            <table class=" table css-serial">
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Room Type</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                    <th>Total Price</th>
                </tr>
                <tr>
                    <td><?= $nomor?></td>
                    <td><?= $nama?></td>
                    <td><?=  $checkin?></td>
                    <td><?=  $checkout?></td>
                    <td><?= $roomtype?></td>
                    <td><?= $phone?></td>
                    <td>
                        <ul>
                            <?php foreach($service as $a){ ?>
                                <?php $a= str_replace('$20','',$a) ?>
                                <li>
                                <?php echo $a; ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </td>
                    <!-- pusing kak,dah gatau lagi -->
                    <td>
                        <?php 
                        $sum = 0;
                        foreach($service as $b){ ?>
                            <?php 
                            $b= str_replace('Room Service','',$b);
                            $b= str_replace('Breakfast','',$b);
                            $a = floatval($b);
                            $sum+= $a;
                        }echo '$'.$sum;
                            ?>
                    </td>
            </table>
        </fieldset>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>