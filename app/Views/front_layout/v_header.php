<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title><?= $judul; ?></title>

        <style>
        body {
            background-color: #B0BEC5;
        }
        .judul {
            /*color: #fff;*/
            color: #1A237E;
            text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
            font-size:3.5em;
        }
        .item{
            padding-left:5px;
            padding-right:5px;
        }
        .item-card{
            transition:0.5s;
            cursor:pointer;
        }
        .card1:hover{
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
        }
        .card1::before, .card1::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }
        .card1::before {
            transform-origin: left top;
        }
        .card1::after {
            transform-origin: right bottom;
        }
        .card1:hover::before, .card1:hover::after, .card1:focus::before, .card1:focus::after {
            transform: scale3d(1, 1, 1);
        }
        .bg-blue {
            color: #fff;
            background-color: #1A237E
        }
        </style>
    </head>
    <body>