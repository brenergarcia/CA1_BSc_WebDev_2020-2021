<?php include('include/header.php');?>

<head>
    <title>Brener Garcia</title>
</head>
<body>
        <form action="show_data.php" class="form" method="post">
        <br>
        <h3 class="text-center">Leave me a message, I'd love to receive it</h3>
        <br>
        <div class="col-md-4 mb-3 ml-auto mr-auto">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder=" Enter name" required>
        </div>

        <div class="col-md-4 mb-3 ml-auto mr-auto">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
        </div>

        <div class="col-md-4 mb-3 ml-auto mr-auto">
            <label for="message">Leave me a message:</label>
            <textarea class="form-control" id="message" name="message" placeholder="Type your message here" required></textarea>
        </div>

        <div class="row justify-content-center">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary ml-2">Clear</button>
        </div>    

    </form>
        <br>
    <?php include('include/footer.php');?>
</body>
