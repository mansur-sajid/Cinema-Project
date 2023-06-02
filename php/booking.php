<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/booking.css">
    <script type="text/javascript" src="Javascript/booking.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="booking-form">
                    <form action="" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-secondary">Book Now!</h4>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="inputCinema" class="form-label">Select Cinema</label>
                                <select id="inputCinema" class="form-select">
                                    <option>Universal</option>
                                    <option>Cinepax</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="inputTime" class="form-label">Select Time</label>
                                <select id="inputTime" class="form-select">
                                    <option>2:00-4:00</option>
                                    <option>5:00-7:00</option>
                                </select>
                                <div class="mb-3 col-md-2">
                                    <label for="inputTickets" class="form-label">Tickets</label>
                                    <select id="inputTickets" class="form-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="inputPrice" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="inputPrice">
                                </div>
                                <div class=" mb-3 col-md-12">
                                    <button class="btn btn-primary float-end">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



</body>

</html>