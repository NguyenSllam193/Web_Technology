<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đề tài 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./scss/style.scss">
    <link rel="stylesheet" href="../css/style_profile.css">
</head>

<body class="bg-primary">

    <div class="container rounded bg-white mt-5 mb-5">


        <div class="row">

            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span>
                </div>
            </div>


            <div class="col-md-5 border-right">
                <form class="form" method="post">
                    <div class="p-3 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>

                        <?php
                        $conn = mysqli_connect('localhost','root','','web');

                        $id=$_GET['id'];

                        $sql = "SELECT * FROM users WHERE id = $id";

                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res)==1){
                        $row = mysqli_fetch_assoc($res);

                        $name = $row['fullname'];
                        $date = $row['datebirth'];
                        $gt = $row['gender'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $addr = $row['addr'];
                        $coun = $row['country'];
                        }
                        ?>


                        <div class="row mt-3">

                            <div class="col-md-12 pro"><label class="labels">Fullname</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="<?php echo $name; ?>">
                            </div>

                            <div class="col-md-12 pro"><label class="labels">Date of birth</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="<?php echo $date; ?>">
                            </div>

                            <div class="col-md-12 pro"><label class="labels">Gender</label>
                                <select class="form-control" name="gt" id="gt">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>

                            <div class="col-md-12 pro"><label class="labels">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    value="0<?php echo $phone; ?>">
                            </div>

                            <div class="col-md-12 pro"><label class="labels">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?php echo $email; ?>">
                            </div>

                            <div class="col-md-12 pro"><label class="labels">Address</label>
                                <input type="text" class="form-control" id="addr" name="addr"
                                    value="<?php echo $addr; ?>">
                            </div>

                            <div class="col-md-12 pro"><label class="labels">Country</label>
                                <input type="text" class="form-control" id="coun" name="coun"
                                    value="<?php echo $coun; ?>">
                            </div>
                        </div>

                        <div class="mt-5 text-center"><button  type="submit" name="submit" class="btn btn-primary ">Save
                                Profile</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                            Experience</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                            class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                            class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>

        </div>

    </div>

    <?php include "../footer_file.php";

if(isset($_POST['submit']))
{
/*$name = $_POST['name'];
$date = $_POST['date'];
$gt = $_POST['gt'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$coun = $_POST['coun'];

$sql = " UPDATE tbl_profile
SET fullname = '$name',
    datebirth = '$date',
   gender = '$gt',
   phone ='$phone',
   addr = '$addr',
   country  = '$coun'
   WHERE id = '$id'";

$res = mysqli_query($conn, $sql);

if($res==true){

}

mysqli_close($conn);*/

header("Location:User/profile_user.php");
}
?>