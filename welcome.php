<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />


</head>

<body>

    <!-- 
    <nav class="navbar navbar-light bg-light justify-content-between">


        <form class="form-inline">

            <a href="logout.php" class="mr-3">Logout</a>
        </form>
    </nav> -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <?php echo "<h3 >Welcome " . $_SESSION['username'] . "</h3>"; ?>
            <form class="d-flex">
                <a href="logout.php" class="btn btn-success stretched-link">Logout</a>
            </form>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-6">
                        <label for="completename" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="completename" placeholder=" Enter company name">
                    </div>

                    <div class="col-md-6">
                        <label for="completewebsite" class="form-label">Company Website</label>
                        <input type="text" class="form-control" id="completewebsite" placeholder=" Enter  company website">
                    </div>

                    <div class="col-md-6">
                        <label for="completeph" class="form-label">Company Phone Number</label>
                        <input type="text" class="form-control" id="completeph">
                    </div>

                    <div class="col-md-6">
                        <!-- <label for="completeindustry" class="form-label">Company Industry</label>
                        <input type="text" class="form-control" id="completeindustry"> -->
                        <label for="completeindustry" class="form-label">Company Industry</label>
                        <select id="completeindustry" class="form-select">
                            <option selected>Account</option>
                            <option>IT</option>
                            <option>Sales</option>
                            <option>Healthcare</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="completeaddress" class="form-label">Company Address</label>
                        <input type="text" class="form-control" id="completeaddress" placeholder="1234 Main St">
                    </div>

                    <div class="col-md-4">
                        <label for="completecity" class="form-label">City</label>
                        <input type="text" class="form-control" id="completecity">
                    </div>

                    <div class="col-md-4">
                        <label for="completestate" class="form-label">State</label>
                        <input type="text" class="form-control" id="completestate">
                    </div>

                    <div class="col-md-4">
                        <label for="completecountry" class="form-label">Country</label>
                        <input type="text" class="form-control" id="completecountry">
                    </div>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- update modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Company Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-6">
                        <label for="updatename" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="updatename" placeholder=" Enter company name">
                    </div>

                    <div class="col-md-6">
                        <label for="updatewebsite" class="form-label">Company Website</label>
                        <input type="text" class="form-control" id="updatewebsite" placeholder=" Enter  company website">
                    </div>

                    <div class="col-md-6">
                        <label for="updateph" class="form-label">Company Phone Number</label>
                        <input type="text" class="form-control" id="updateph">
                    </div>

                    <div class="col-md-6">
                        <!-- <label for="completeindustry" class="form-label">Company Industry</label>
                        <input type="text" class="form-control" id="completeindustry"> -->
                        <label for="updateindustry" class="form-label">Company Industry</label>
                        <select id="updateindustry" class="form-select">
                            <option selected>Account</option>
                            <option>IT</option>
                            <option>Sales</option>
                            <option>Healthcare</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="updateaddress" class="form-label">Company Address</label>
                        <input type="text" class="form-control" id="updateaddress" placeholder="1234 Main St">
                    </div>

                    <div class="col-md-4">
                        <label for="updatecity" class="form-label">City</label>
                        <input type="text" class="form-control" id="updatecity">
                    </div>

                    <div class="col-md-4">
                        <label for="updatestate" class="form-label">State</label>
                        <input type="text" class="form-control" id="updatestate">
                    </div>

                    <div class="col-md-4">
                        <label for="updatecountry" class="form-label">Country</label>
                        <input type="text" class="form-control" id="updatecountry">
                    </div>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-dark" onclick="updateDetails()">Update</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-3">

        <h1 class="text-center">List of companies</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark mb-5" data-bs-toggle="modal" data-bs-target="#completeModal">
            Add companies
        </button>
        <div id="displayDataTable"></div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {
            displayData();
        });



        //display function

        function displayData() {
            var displayData = "true";
            $.ajax({
                url: "display.php",
                type: "post",
                data: {
                    displaySend: displayData
                },
                success: function(data, status) {
                    $('#displayDataTable').html(data)
                }
            });
        }


        function adduser() {
            var nameAdd = $('#completename').val()
            var websiteAdd = $('#completewebsite').val()
            var phAdd = $('#completeph').val()
            var addressAdd = $('#completeaddress').val()
            var cityAdd = $('#completecity').val()
            var stateAdd = $('#completestate').val()
            var countryAdd = $('#completecountry').val()
            var industryAdd = $('#completeindustry').val()

            $.ajax({
                url: "insert.php",
                type: "post",
                data: {
                    nameSend: nameAdd,
                    websiteSend: websiteAdd,
                    phSend: phAdd,
                    addressSend: addressAdd,
                    citySend: cityAdd,
                    stateSend: stateAdd,
                    countrySend: countryAdd,
                    industrySend: industryAdd,

                },
                success: function(data, status) {
                    // console.log(status);
                    //function to display data
                    $('#completeModal').modal('hide');
                    displayData();
                }
            })

        }

        //Delete record
        function deleteUser(deleteid) {
            $.ajax({
                url: "delete.php",
                type: 'post',
                data: {
                    deletesend: deleteid
                },
                success: function(data, status) {

                    displayData();
                }
            });
        }


        //update function
        function getDetails(updateid) {
            $('#hiddendata').val(updateid);


            $.post("update.php", {
                updateid: updateid
            }, function(data, status) {
                var userid = JSON.parse(data);
                $('#updatename').val(userid.c_name)
                $('#updatewebsite').val(userid.c_website)
                $('#updateph').val(userid.c_ph)
                $('#updateaddress').val(userid.c_address)
                $('#updatecity').val(userid.c_city)
                $('#updatestate').val(userid.c_state)
                $('#updatecountry').val(userid.c_country)
                $('#updateindustry').val(userid.c_industry)
            });

            $('#updateModal').modal("show");
        }

        //onclick update event function
        function updateDetails() {

            var updatename = $('updatename').val();
            var updatewebsite = $('updatewebsite').val();
            var updateph = $('updateph').val();
            var updateaddress = $('updateaddress').val();
            var updatecity = $('updatecity').val();
            var updatestate = $('updatestate').val();
            var updatecountry = $('updatecountry').val();
            var updateindustry = $('updateindustry').val();
            var hiddendata = $('hiddendata').val();




            $.post("update.php", {
                updatename: updatename,
                updatewebsite: updatewebsite,
                updateph: updateph,
                updateaddress: updateaddress,
                updatecity: updatecity,
                updatestate: updatestate,
                updatecountry: updatecountry,
                updateindustry: updateindustry,
                hiddendata: hiddendata
            }, function(data, status) {
                $('#updateModal').modal('hide');
                displayData();
            });

        }
    </script>
</body>

</html>