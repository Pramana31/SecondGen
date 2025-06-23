<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondGen</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="address_style.css">
</head>
<body>
    <?php include 'header1.html'; ?>
    <center>   
        <div class="address-details">
            <span>
            <h2>Add A New Address</h2></span>
            <div class="input-div">
                <form method="POST" action="">

                    <div class="input-box">
                    <input type="text" name="name" required>
                    <label>Name</label>
                    </div>

                    <div class="input-box">
                    <input type="digit" name="contact" required>
                    <label>10-digit mobile number</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="area" required>
                    <label>Address (Area and Street)</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="city" required>
                    <label>City/Town</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="district" required>
                    <label>District</label>
                    </div>

                    <div class="input-box">
                    <input type="digit" name="pincode" required>
                    <label>Pincode</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="landmark">
                    <label>Landmark (Optional)</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="alternate">
                    <label>Alternative Phone Number(Optional)</label>
                    </div>
                    
                    <div class="button1">
                        <button type="submit" name="save">SAVE</button>
                    </div>
                    <div class="button2">
                        <button type="submit" name="cancel">CANCEL</button>
                    </div>
                </form>
            </div>
        </div>
    </center>
    <?php include 'footer.html'; ?>
</body>
</html>