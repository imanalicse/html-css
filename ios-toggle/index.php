<!DOCTYPE html>
<html>
<head>
    <title>IOs toggle</title>

    <style>
        .mylabel {
            position: relative;
            display: block;
            width: 60px;
            height: 30px;
            margin-bottom: 15px;
        }

        .mylabel input {
            display: none;
        }

        .slidinggroove {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: #ababab;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .slidinggroove:after {
            position: absolute;
            content: '';
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #fff;
            top: 1px;
            left: 1px;
            transition: all 0.3s ease;
        }

        input:checked + .slidinggroove {
            background: #5fcf80;
        }

        input:checked + .slidinggroove:after {
            transform: translateX(30px)
        }

        .display-text {
            position: relative;
            top: 5px;
            margin-left: 65px;
            font-size: 16px;
            color: #222;
            font-family: 'Roboto', sans-serif;
        }

    </style>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
   // var_dump($_POST);
}
?>


<form method="post">

    <div class="mylabel">
        <input type="checkbox" id="coding" name="skills">
        <div class="slidinggroove"></div>
        <label class="mylabel" for="coding"><p class="display-text">Coding</p></label>
    </div>

    <div class="mylabel">
        <input type="checkbox" id="design" name="design" checked>
        <div class="slidinggroove"></div>
        <label class="mylabel" for="design"><p class="display-text">Design</p></label>
    </div>

    <br/>
    <br/>
    <input type="submit" value="Submit" name="submit">
</form>


</body>
</html>