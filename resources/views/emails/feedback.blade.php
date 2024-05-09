
<html>
<head>
    <title>Feedback</title>

    <style>
        #feedback-form {
            width: 280px;
            margin: 0 auto;
            background-color: #fcfcfc;
            padding: 20px 50px 40px;
            box-shadow: 1px 4px 10px 1px #aaa;
            font-family: sans-serif;
        }

        #feedback-form * {
            box-sizing: border-box;
        }

        #feedback-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        #feedback-form input {
            margin-bottom: 15px;
        }

        #feedback-form textarea {
            display: block;
            padding: 6px 16px;
            width: 100%;
            border: none;
            background-color: #f3f3f3;
        }

        #feedback-form label {
            color: #777;
            font-size: 0.8em;
        }

        #feedback-form input[type="checkbox"] {
            float: left;
        }

        #feedback-form input:not(:checked) + #feedback-phone {
            height: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        #feedback-form #feedback-phone {
            transition: 0.3s;
        }

        #feedback-form button[type="submit"] {
            display: block;
            margin: 20px auto 0;
            width: 150px;
            height: 40px;
            border-radius: 25px;
            border: none;
            color: #eee;
            font-weight: 700;
            box-shadow: 1px 4px 10px 1px #aaa;

            background: #207cca; /* Old browsers */
            background: -moz-linear-gradient(
                left,
                #207cca 0%,
                #9f58a3 100%
            ); /* FF3.6-15 */
            background: -webkit-linear-gradient(
                left,
                #207cca 0%,
                #9f58a3 100%
            ); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(
                to right,
                #207cca 0%,
                #9f58a3 100%
            ); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#207cca', endColorstr='#9f58a3',GradientType=1 ); /* IE6-9 */
        }

    </style>
</head>

<body>
<div id="feedback-form">
    <h2 class="header">Plz Share your valuable Feedback</h2>
    <h4 class="header2">Meeting Details Given Below</h4>

    <div>
        <div>
            <span><span style="font-weight: bold; color: black">Property:</span> {{$data['meeting']->property->title}}</span>
        </div>
        <div>
            <span><span style="font-weight: bold; color: black">Time:</span> {{ \Carbon\Carbon::parse($data['meeting']->date)->format('D d M, Y H:i A') }}</span>
        </div>
        <div>
            <span><span style="font-weight: bold; color: black">Description:</span> {{$data['meeting']->description}}</span>
        </div>
        <div>
            <span><span style="font-weight: bold; color: black">With:</span>: {{$data['meeting']->with_whom}}</span>
        </div>


    <div>
        <div style="background-color: deepskyblue; color: black; font-weight: bold; padding: 20px 10px; border-radius: 3px; display: flex; justify-content: center; margin-top: 20px">
            <a href="{{route('feedbackForm',$data['meeting'])}}">Submit</a>
        </div>
    </div>
</div>


</body>
</html>
