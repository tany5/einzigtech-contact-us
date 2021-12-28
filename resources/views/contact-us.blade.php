<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact Us</title>
    <style>
        .block {
            width: 100%;
        }

        .form-group .mt-4 {
            margin-top: 0px !important;
        }

    </style>
</head>

<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="card-body">
                            <x-form enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label name="name">Name</label>
                                    <x-form-input type="text" name="name" class="form-control"
                                        placeholder="Your Name" />
                                </div>

                                <div class="form-group">
                                    <label name="email">Email</label>
                                    <x-form-input type="email" name="email" class="form-control"
                                        placeholder="Your Email Address" />
                                </div>

                                <div class="form-group">
                                    <label name="subjec">Subject</label>
                                    <x-form-input type="text" name="subjec" class="form-control"
                                        placeholder="Your Subject" />
                                </div>
                                <div class="form-group">
                                    <label name="message">Message</label>
                                    <x-form-textarea name="message" placeholder="Your Message" class="form-control">
                                    </x-form-textarea>
                                </div>
                                <div class="form-group">
                                    <label name="date">Date</label>
                                    <x-form-input type="text" name="date" class="form-control"
                                        placeholder="Your Email Address" id="datepicker" />
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <x-form-select name="hour" :options="$hour" label="Select your interests" multiple />
                                        </div>
                                    </div>
                                </div>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $('#datepicker').datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'dd/mm/yyyy'
            });
            $('#datepicker').datepicker("setDate", new Date());

        </script>
</body>
</html>
