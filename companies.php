<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
</head>

<body>



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

    <div class="container my-3">

        <h1 class="text-center">List of companies</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            Add companies
        </button>
    </div>



















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
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
                    console.log(status);
                }
            })

        }
    </script>
</body>

</html>