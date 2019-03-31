<!DOCTYPE html>
<html>
<head>
    <title> Radio Button Style </title>
    <style>
        *{font-family: 'Roboto', sans-serif;}

        @keyframes click-wave {
            0% {
                height: 40px;
                width: 40px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                height: 200px;
                width: 200px;
                margin-left: -80px;
                margin-top: -80px;
                opacity: 0;
            }
        }

        .option-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            top: 13.33333px;
            right: 0;
            bottom: 0;
            left: 0;
            height: 40px;
            width: 40px;
            transition: all 0.15s ease-out 0s;
            background: #cbd1d8;
            border: none;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 0.5rem;
            outline: none;
            position: relative;
            z-index: 1000;
        }
        .option-input:hover {
            background: #9faab7;
        }
        .option-input:checked {
            background: #40e0d0;
        }
        .option-input:checked::before {
            height: 40px;
            width: 40px;
            position: absolute;
            content: '✔';
            display: inline-block;
            font-size: 26.66667px;
            text-align: center;
            line-height: 40px;
        }
        .option-input:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #40e0d0;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
        }
        .option-input.radio {
            border-radius: 50%;
        }
        .option-input.radio::after {
            border-radius: 50%;
        }

        body {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: box;
            background: #e8ebee;
            color: #9faab7;
            font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
            text-align: center;
        }
        body div {
            padding: 5rem;
        }


    </style> 
</head>
<body>

<?php
if (isset($_POST['submit'])) {
     var_dump($_POST);
}
?>

<form class="form" method="post">

    <div>
        <label>
            <input type="radio" class="option-input radio" name="example" value="Javascript" checked />
            Javascript
        </label>
        <label>
            <input type="radio" class="option-input radio" name="example" value="HTML" />
            HTML 5
        </label>
        <label>
            <input type="radio" class="option-input radio" name="example" value="CSS"/>
            CSS
        </label>
    </div>

    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>