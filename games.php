<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        :root {
            --font1: 'Heebo', sans-serif;
            --font2: 'Fira Sans Extra Condensed', sans-serif;
            --font3: 'Roboto', sans-serif
        }

        body {
            font-family: var(--font3);
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
        }

        h2 {
            font-weight: 900
        }

        .container-fluid {
            max-width: 1200px
        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            border: 0;
            border-radius: 1rem
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(1rem - 1px);
            border-top-right-radius: calc(1rem - 1px)
        }

        .card h5 {
            overflow: hidden;
            height: 56px;
            font-weight: 900;
            font-size: 1rem
        }

        .card-img-top {
            width: 100%;
            max-height: 180px;
            object-fit: contain;
            padding: 30px
        }

        .card h2 {
            font-size: 1rem
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
        }

        .label-top {
            position: absolute;
            background-color: #8bc34a;
            color: #fff;
            top: 8px;
            right: 8px;
            padding: 5px 10px 5px 10px;
            font-size: .7rem;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase
        }

        .top-right {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            font-size: 1rem;
            font-weight: 900;
            background: #ff5722;
            line-height: 90px;
            text-align: center;
            color: white
        }

        .top-right span {
            display: inline-block;
            vertical-align: middle
        }

        @media (max-width: 768px) {
            .card-img-top {
                max-height: 250px
            }
        }

        .over-bg {
            background: rgba(53, 53, 53, 0.85);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(0.0px);
            -webkit-backdrop-filter: blur(0.0px);
            border-radius: 10px
        }

        .btn {
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            padding: 5px 50px 5px 50px
        }

        .box .btn {
            font-size: 1.5rem
        }

        @media (max-width: 1025px) {
            .btn {
                padding: 5px 40px 5px 40px
            }
        }

        @media (max-width: 250px) {
            .btn {
                padding: 5px 30px 5px 30px
            }
        }

        .btn-warning {
            background: none #f7810a;
            color: #ffffff;
            fill: #ffffff;
            border: none;
            text-decoration: none;
            outline: 0;
            box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
            border-radius: 100px
        }

        .btn-warning:hover {
            background: none #ff962b;
            color: #ffffff;
            box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
        }

        .bg-success {
            font-size: 1rem;
            background-color: #f7810a !important
        }

        .bg-danger {
            font-size: 1rem
        }

        .price-hp {
            font-size: 1rem;
            font-weight: 600;
            color: darkgray
        }

        .amz-hp {
            font-size: .7rem;
            font-weight: 600;
            color: darkgray
        }

        .fa-question-circle:before {
            color: darkgray
        }

        .fa-plus:before {
            color: darkgray
        }

        .box {
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
        }

        .box-img {
            max-width: 300px
        }

        .thumb-sec {
            max-width: 300px
        }

        @media (max-width: 576px) {
            .box-img {
                max-width: 200px
            }

            .thumb-sec {
                max-width: 200px
            }
        }

        .inner-gallery {
            width: 60px;
            height: 60px;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin: 1px;
            display: inline-block;
            overflow: hidden;
            -o-object-fit: cover;
            object-fit: cover
        }

        @media (max-width: 370px) {
            .box .btn {
                padding: 5px 40px 5px 40px;
                font-size: 1rem
            }
        }

        .disclaimer {
            font-size: .9rem;
            color: darkgray
        }

        .related h3 {
            font-weight: 900
        }

        footer {
            background: #212529;
            height: 80px;
            color: #fff
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img
                            src="‫images/guess.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">Guess a number</span> </div>
                            <h5 class="card-title">Here in this game you have to right guess a number between 1 to 100 and you have only 10 chances.</h5>
                            <div class="text-center my-4"> <a href="guess.php" class="btn btn-warning">Play game</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img
                            src="‫images/simon.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">Simon says</span> </div>
                            <h5 class="card-title">Here in this game you have to follow what the simon says. if you follow the correct order, you get it right and go to next round.</h5>
                            <div class="text-center my-4"> <a href="simon.php" class="btn btn-warning">Play game</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img
                            src="‫images/shotter.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">Shotter</span> </div>
                            <h5 class="card-title">Here in this game you have to shoot the incoming colourful bubbles and try not to let any bubble hit the white bubble in the center.</h5>
                            <div class="text-center my-4"> <a href="shotter.php" class="btn btn-warning">Play game</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>