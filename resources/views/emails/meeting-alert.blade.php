
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Appointment Reminder Email Template</title>
    <meta name="description" content="Appointment Reminder Email Template">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin=

</head>
<style>
    a:hover {text-decoration: underline !important;}


    body{margin-top:20px;}
    .section {
        padding: 100px 0;
        position: relative;
    }
    .gray-bg {
        background-color: #f5f5f5;
    }
    .section-title h2 {
        font-weight: 700;
        color: #20247b;
        font-size: 45px;
        margin: 0 0 15px;
        border-left: 5px solid #fc5356;
        padding-left: 15px;
    }
    .section-title {
        padding-bottom: 45px;
    }
    .section-title p {
        margin: 0;
        font-size: 18px;
    }

    /* Resume Box
    ---------------------*/
    .resume-box {
        background: #ffffff;
        box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
        border-radius: 10px;
    }
    .resume-box ul {
        margin: 0;
        padding: 30px 20px;
        list-style: none;
    }
    .resume-box li {
        position: relative;
        padding: 0 20px 0 60px;
        margin: 0 0 30px;
    }
    .resume-box li:last-child {
        margin-bottom: 0;
    }
    .resume-box li:after {
        content: "";
        position: absolute;
        top: 0px;
        left: 20px;
        border-left: 1px dashed #fc5356;
        bottom: 0;
    }
    .resume-box .icon {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 0;
        right: 0;
        color: #fc5356;
        line-height: 40px;
        background: #ffffff;
        text-align: center;
        z-index: 1;
        border: 1px dashed;
        border-radius: 50%;
    }
    .resume-box .time {
        background: #fc5356;
        color: #ffffff;
        font-size: 10px;
        padding: 2px 10px;
        display: inline-block;
        margin-bottom: 12px;
        border-radius: 20px;
        font-weight: 600;
    }
    .resume-box h5 {
        font-weight: 700;
        color: #20247b;
        font-size: 16px;
        margin-bottom: 10px;
    }
    .resume-box p {
        margin: 0;
    }

    .resume-box li:after {
        content: "";
        position: absolute;
        top: 0px;
        left: 20px;
        border-left: 1px dashed #fc5356;
        bottom: 0;
    }
</style>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
{{--<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"--}}
{{--       style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">--}}
{{--    <tr>--}}
{{--        <td>--}}
{{--            <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"--}}
{{--                   align="center" cellpadding="0" cellspacing="0">--}}
{{--                <tr>--}}
{{--                    <td style="height:80px;">&nbsp;</td>--}}
{{--                </tr>--}}

{{--                <tr>--}}
{{--                    <td style="height:20px;">&nbsp;</td>--}}
{{--                </tr>--}}
{{--                <!-- Email Content -->--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"--}}
{{--                               style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">--}}
{{--                            <tr>--}}
{{--                                <td style="height:40px;">&nbsp;</td>--}}
{{--                            </tr>--}}
{{--                            <!-- Title -->--}}
{{--                            <tr>--}}
{{--                                <td style="padding:0 15px; text-align:center;">--}}
{{--                                    <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">Meeting Reminder</h1>--}}
{{--                                    <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece;--}}
{{--                                        width:100px;"></span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <!-- Details Table -->--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <table cellpadding="0" cellspacing="0"--}}
{{--                                           style="width: 100%; border: 1px solid #ededed">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">--}}
{{--                                                Property Name</td>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">--}}
{{--                                                {{$data['meeting']->property->title}}--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">--}}
{{--                                                Agent Name:</td>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">--}}

{{--                                                {{$data['meeting']->with_whom}}--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">--}}
{{--                                                Meeting Date:</td>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">--}}

{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">--}}
{{--                                                Meeting Time:</td>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td--}}
{{--                                                style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">--}}
{{--                                                Remark:</td>--}}
{{--                                            <td style="padding: 10px; color: #455056;">--}}
{{--                                                {{$data['meeting']->remark}}--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td style="height:40px;">&nbsp;</td>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                    </td>--}}
{{--                </tr>--}}

{{--            </table>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--</table>--}}


<section class="section gray-bg" id="resume">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Meeting Reminder</h2>
                    <p>
                        Details given below
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <span class="time">{{ \Carbon\Carbon::parse($data['meeting']->date)->format('D d M, Y')}} - {{ \Carbon\Carbon::parse($data['meeting']->date)->format('h:i A')}}--}}</span>
                            <h5>{{$data['meeting']->property->title}}</h5>
                            <h4> With :  {{$data['meeting']->with_whom}}</h4>
                            <p> {{$data['meeting']->remark}}</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>
