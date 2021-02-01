<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /php/index.php");
    die();
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/autonumeric"></script>
    <?php
    include("./main_css.php");
    ?>
</head>

<body>
    <div class="alert alert-success d-none w-25 float-right fade">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong> Success! </strong> Successfully Saved.
    </div>
    <div class="alert alert-danger w-25 float-right fade">
        <button type="button" class="close" data-dismiss="alert"></button>
       <strong> Failed! </strong><span class="notification">Already exist.</span>
    </div>
    <div class="container-fluid">
        <div class="p-3">
            <button id="logout" class="btn btn-secondary float-right px-3">
                <i class="fa fa-sign-out"></i> Logout
            </button>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2 col-0"></div>
            <div class="col-sm-8 col-12 mt-5 p-5 rounded content text-dark">
                <div id="page_1">
                    <p class="h1">PAGE 1</p>
                    <table class="table table-hover mt-5" id="expenditure">
                        <thead>
                            <tr>
                                <th style="width: 10%;">HE1000</th>
                                <th style="width: 3%;">
                                    <img width="25px" height="25px" src="../../assets/page1/holiday.png">
                                </th>
                                <th>Holiday Expenditure</th>
                                <th style="width: 3%">
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </th>
                                <th style="width: 25%;">
                                    <input type="text" class="budget form-control text-right">
                                </th>
                                <th style="width: 10%">AUD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HE1000.10</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/flight.png">
                                </td>
                                <td>Flights</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.253044654939107">
                                </td>
                                <td>AUD</td>
                            </tr>
                            <tr>
                                <td>HE1000.20</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/hotel.png">
                                </td>
                                <td>Hotels</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.282814614343708">
                                </td>
                                <td>AUD</td>
                            </tr>
                            <tr>
                                <td>HE1000.30</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/sightseeing.png">
                                </td>
                                <td>Sightseeing</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.156211096075778">
                                </td>
                                <td>AUD</td>
                            </tr>
                            <tr>
                                <td>HE1000.40</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/meal.png">
                                </td>
                                <td>Meals</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.136671177266576">
                                </td>
                                <td>AUD</td>
                            </tr>
                            <tr>
                                <td>HE1000.50</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/gift.png">
                                </td>
                                <td>Gifts</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.0143572395128552">
                                </td>
                                <td>AUD</td>
                            </tr>
                            <tr>
                                <td>HE1000.60</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/transportation.png">
                                </td>
                                <td>Transportation</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.0825439783491204">
                                </td>
                                <td>AUD</td>
                            </tr>
                            <tr>
                                <td>HE1000.70</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page1/other.png">
                                </td>
                                <td>Entertainment & Other</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span id="ratio"></span>
                                    <input type="hidden" class="ratio" value="">
                                </td>
                                <td>AUD</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="py-3">
                        <p class="h5 text-success"><i>Recommend a category not covered above?</i></p>
                        <div class="d-flex">
                            <input type="text" class="form-control w-50 text-center" id="page1_category" name="page1_category" placeholder="Type category and press plus to recommend" autocomplete="off">
                            <span class="px-2 py-1 text-primary" id="page1_add_category"><i class="fa fa-plus-circle fa-2x"></i></span>
                        </div>
                    </div>
                    <div class="py-3">
                        <p class="h5 text-success"><i>Feedback you'd like to share?</i></p>
                        <textarea rows="4" class="w-75 border-secondary p-2 text-dark" id="page1_feedback" placeholder="We value and appreciate your feedback."></textarea>
                    </div>
                    <div class="d-flex justify-content-between pt-4">
                        <button class="btn btn-secondary disabled" id="prev">
                            <i class="fa fa-arrow-left"></i>
                            <span class="px-2">Back</span>
                        </button>
                        <button class="btn btn-primary px-4" id="next">
                            <span class="font-weight-bold">Next</span>
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div id="page_2" class="d-none">
                    <p class="h1">PAGE 2</p>
                    <table class="table table-hover mt-5" id="leisure">
                        <thead>
                            <tr>
                                <th style="width: 10%;">LT2000</th>
                                <th style="width: 3%;">
                                    <img width="25px" height="25px" src="../../assets/page2/leisure.png">
                                </th>
                                <th>Leisure Time</th>
                                <th style="width: 3%">
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </th>
                                <th style="width: 25%;">
                                    <input type="text" class="time budget text-right form-control">
                                </th>
                                <th style="width: 10%">Min/Day</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>LT2000.10</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/reading.png">
                                </td>
                                <td>Reading</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.06530446549391">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                            <tr>
                                <td>LT2000.20</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/tv.png">
                                </td>
                                <td>Watching TV, YouTube, NetFlix, etc</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.342814614343708">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                            <tr>
                                <td>LT2000.30</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/nap.png">
                                </td>
                                <td>Nap</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.056211096075778">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                            <tr>
                                <td>LT2000.40</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/social.png">
                                </td>
                                <td>Social Media</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.236671177266576">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                            <tr>
                                <td>LT2000.50</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/game.png">
                                </td>
                                <td>Games</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.154357239512855">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                            <tr>
                                <td>LT2000.60</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/meditation.png">
                                </td>
                                <td>Meditation & Relaxing</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span></span>
                                    <input type="hidden" class="ratio" value="0.0225439783491204">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                            <tr>
                                <td>LT2000.70</td>
                                <td>
                                    <img width="25px" height="25px" src="../../assets/page2/other.png">
                                </td>
                                <td>Other</td>
                                <td>
                                    <a href="#" title="Help" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">
                                        <i class="fa fa-question-circle-o fa-lg"></i>
                                    </a>
                                </td>
                                <td class="price">
                                    <span id="ratio"></span>
                                    <input type="hidden" class="ratio" value="">
                                </td>
                                <td>Min/Day</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="py-3">
                        <p class="h5 text-success"><i>Recommend a category not covered above?</i></p>
                        <div class="d-flex">
                            <input type="text" class="form-control w-50 text-center" id="page2_category" name="page1_category" placeholder="Type category and press plus to recommend" autocomplete="off">
                            <span class="px-2 py-1 text-primary" id="page2_add_category"><i class="fa fa-plus-circle fa-2x"></i></span>
                        </div>
                    </div>
                    <div class="py-3">
                        <p class="h5 text-success"><i>Feedback you'd like to share?</i></p>
                        <textarea rows="4" class="w-75 border-secondary p-2 text-dark" id="page2_feedback" placeholder="We value and appreciate your feedback."></textarea>
                    </div>
                    <div class="d-flex justify-content-between pt-3">
                        <button class="btn btn-primary" id="LT_prev">
                            <i class="fa fa-arrow-left"></i>
                            <span class="px-2">Back</span>
                        </button>
                        <button class="btn btn-primary px-4" id="submit">
                            <span class="font-weight-bold">Submit</span>
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-0"></div>

    </div>

</body>

</html>

<?php
include("./main_js.php");
?>