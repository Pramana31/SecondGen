<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondGen</title>
    <link rel="icon" href="logo.png">
</head>
<body>
    <?php include 'header.html'; ?>
    <center>   
        <div>
            <span>
            <h2>Add A New Address</h2></span>
            <div>
                <form method="POST" action="">

                    <div class="input-box">
                    <input type="text" name="name" required>
                    <label>Name</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="contact" required>
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
                    <input type="text" name="pincode" required>
                    <label>Pincode</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="landmark">
                    <label>Landmark (Optional)</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="alternate">
                    <label>Alternate Phone (Optional)</label>
                    </div>

                    <div class="input-box">
                    <input type="" name="area" required>
                    <label></label>
                    </div>
                    

                    <button type="submit" name="save">SAVE</button> <br>
                    <button type="submit" name="cancel">CANCEL</button>
                </form>
            </div>
        </div>
    </center>
    <?php include 'footer.html'; ?>
</body>
</html>