<!DOCTYPE html>
<html>
<head>
    <title>IOs toggle</title>

    <style>
        .ios_checkbox_label {
            position: relative;
            display: block;
            width: 60px;
            height: 30px;
            margin-bottom: 15px;
        }

        .ios_checkbox_label input {
            display: none;
        }

        .sliding_groove {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: #ababab;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .sliding_groove:after {
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

        input:checked + .sliding_groove {
            background: #5fcf80;
        }

        input:checked + .sliding_groove:after {
            transform: translateX(30px)
        }

        .display_text {
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

    <div class="ios_checkbox_label">
        <input type="checkbox" id="coding" name="skills">
        <div class="sliding_groove"></div>
        <label class="ios_checkbox_label" for="coding"><p class="display_text">Coding</p></label>
    </div>

    <div class="ios_checkbox_label">
        <input type="checkbox" id="design" name="design" checked>
        <div class="sliding_groove"></div>
        <label class="ios_checkbox_label" for="design"><p class="display_text">Design</p></label>
    </div>

    <br/>
    <br/>
    <input type="submit" value="Submit" name="submit">
</form>


</body>
</html>