
<html>
<head>
    <title>Feedback</title>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat");

        html,
        body {
            height: 100%;
            width: 100%;
            background-color: #334;
            overflow: hidden;
            color: white;
            font-family: "Montserrat", sans-serif;
        }

        .fb-form {
            width: 300px;
            top: 50%;
            left: 50%;
            position: relative;
            transform: translateY(-50%) translateX(-50%);
        }

        .fb-form h2 {
            text-align: center;
            font-size: 1.4em;
        }

        .fb-form input {
            margin: 15px 0;
        }

        .fb-form input[type="submit"] {
            margin-top: 0;
        }

        .fb-form textarea {
            height: 100px;
        }

        .rating {
            margin: 15px auto;
            transform: rotateY(180deg);
            width: 100%;
        }

        .rating .fa-star {
            font-size: 2em;
            cursor: pointer;
            margin: 0 5.1%;
            transition: all 0.5s ease;
        }

        .rating .fa-star.active-rating {
            transition: all 0.5s ease;
            animation: rating-highlight 0.5s ease forwards;
        }

        .rating .fa-star:nth-child(5).active-rating,
        .rating .fa-star:hover:nth-child(5) {
            color: yellow;
            transition: all 0.5s ease;
        }

        @keyframes rating-highlight {
            0% {
                transform: rotate(-10deg) scale(1.2);
            }
            20% {
                transform: rotate(10deg) scale(0.8);
            }
            50% {
                transform: rotate(-5deg) scale(1.1);
            }
            80% {
                transform: rotate(5deg) scale(0.9);
            }
            100% {
                transform: rotate(0deg) scale(1);
            }
        }

    </style>
</head>

<body>
<div class='fb-form'>
    <form action='#' class='form-group'>
        <h2>Tell us what you think</h2>
        <textarea class='form-control' id='fb-comment' name='' placeholder='Tell us what you think'></textarea>
        <div class='rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>
        <input class='form-control btn btn-primary' type='submit'>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(".rating .fa-star").click(function () {
        $(".rating .active-rating").removeClass("active-rating");
        $(this).toggleClass("active-rating");
    });

</script>

</body>
</html>
