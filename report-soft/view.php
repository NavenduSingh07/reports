<?php
session_start();
$uname = $_SESSION['emp_emailid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
  <!--===============================================================================================-->
  <link rel="icon" href="image/logo.png.svg">
  <title>Profile Page | Happy Achievers Portal</title>
  <link href="css/app.css" rel="stylesheet">
  <link href="css/fullcalender.min.css" rel="stylesheet" />
  <link href="css/calendar.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/49d678eac9.js" crossorigin="anonymous"></script>
  <script src="js/3c-calendar.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/49d678eac9.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/49d678eac9.js" crossorigin="anonymous"></script>
  <!--===============================================================================================-->
  <!-- Chatbot CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <script src="js/jquery-3.6.0.js"></script>
  <!--===============================================================================================-->
  <link rel="stylesheet" href="css/report.css">



</head>
<style>
  .preloader {
    width: 100%;
    height: 100%;
    top: 500;
    position: fixed;
    z-index: 99999;
    background: #fff
  }

  .lds-ripple {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
    position: absolute;
    top: calc(50% - 3.5px);
    left: 0;
    right: 0;
    margin: 0 auto
  }

  svg.tea {
    --secondary: #33406f
  }

  svg.tea #teabag {
    transform-origin: top center;
    transform: rotate(3deg);
    animation: swing 2s infinite
  }

  svg.tea #steamL {
    stroke-dasharray: 13;
    stroke-dashoffset: 13;
    animation: steamLarge 2s infinite
  }

  svg.tea #steamR {
    stroke-dasharray: 9;
    stroke-dashoffset: 9;
    animation: steamSmall 2s infinite
  }

  @-moz-keyframes swing {
    50% {
      transform: rotate(-3deg)
    }
  }

  @-webkit-keyframes swing {
    50% {
      transform: rotate(-3deg)
    }
  }

  @-o-keyframes swing {
    50% {
      transform: rotate(-3deg)
    }
  }

  @keyframes swing {
    50% {
      transform: rotate(-3deg)
    }
  }

  @-moz-keyframes steamLarge {
    0% {
      stroke-dashoffset: 13;
      opacity: .6
    }

    100% {
      stroke-dashoffset: 39;
      opacity: 0
    }
  }

  @-webkit-keyframes steamLarge {
    0% {
      stroke-dashoffset: 13;
      opacity: .6
    }

    100% {
      stroke-dashoffset: 39;
      opacity: 0
    }
  }

  @-o-keyframes steamLarge {
    0% {
      stroke-dashoffset: 13;
      opacity: .6
    }

    100% {
      stroke-dashoffset: 39;
      opacity: 0
    }
  }

  @keyframes steamLarge {
    0% {
      stroke-dashoffset: 13;
      opacity: .6
    }

    100% {
      stroke-dashoffset: 39;
      opacity: 0
    }
  }

  div.polaroid {
    width: 22%;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, .125);
    border-radius: 7px;
  }

  .btn-1 {
    background: #CFECFE;
  }

  .btn-1:hover {
    background: #1e88e5;
  }

  .copyright {
    background-color: #2b354f;
    padding: 23px 0;
  }

  .copyright p {
    color: #fff;
    text-align: center;
  }

  .copyright p a {
    color: #1B7EBE;
  }

  li {
    list-style-type: none;
  }
</style>
</head>

<body>
  <!-- -------------------------------------------------------------- -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- -------------------------------------------------------------- -->
  <!--<div>-->
  <!--    <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">-->
  <!--      <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#1e88e5" stroke-width="2"></path>-->
  <!--      <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#1e88e5" stroke-width="2"></path>-->
  <!--      <path id="teabag" fill="#1e88e5" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>-->
  <!--      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#1e88e5"></path>-->
  <!--      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#1e88e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
  <!--    </svg>-->
  <!--</div>-->

  <body>
    <div class="wrapper">
      <nav id="sidebar" class="sidebar collapsed">
        <div class="sidebar-content js-simplebar" style="overflow-x: scroll;">


          <a class="sidebar-brand" style="padding: 10px;" href="profile.php"><img src="image/logo.png" style="margin-top: 20px;height:70px;width:200px;"></img>
          </a>

          <ul class="sidebar-nav">
            <li class="sidebar-header">
              Pages
            </li>

            <li class="sidebar-item active">
              <a class="sidebar-link" href="pages-profile.php">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
              </a>
            </li>


            <li class="sidebar-item">
              <a class="sidebar-link" href="profile.php">
                <i class="align-middle far fa-calendar-alt"></i> <span class="align-middle">Calendar</span>
              </a>
            </li>


            <li class="sidebar-item">
              <a class="sidebar-link" href="social.php">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Social</span>
              </a>
            </li>


            <li class="sidebar-item">
              <a class="sidebar-link" href="pages-ProfileMain.php">
                <i class="align-middle fas fa-cog fa-spin"></i> <span class="align-middle">Settings</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="to-do-list.php">
                <i class="align-middle fas fa-tasks"></i> <span class="align-middle">To-do-list</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="kra.php">
                <i class="align-middle fas fa-award"></i> <span class="align-middle">KRA </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="sopdisp.php">
                <i class="align-middle far fa-clipboard"></i></i> <span class="align-middle">SOP</span>
              </a>

            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="jd1.php">
                <i class="align-middle fas fa-briefcase"></i></i> <span class="align-middle">JD</span>
              </a>
            </li>

            <!-- CUSTOM FORMS -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="custom_forms/empForms.php">
                <i class="align-middle far fa-clipboard"></i></i> <span class="align-middle">Forms</span>
              </a>
            </li>

            <!-- CUSTOM LETTERS -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="custom_letters/empLetters.php">
                <i class="align-middle far fa-clipboard"></i></i> <span class="align-middle">Letters</span>
              </a>
            </li>


            <li class="sidebar-item">
              <a class="sidebar-link" href="contactus.php">
                <i class="align-middle fas fa-question-circle"></i></i><span class="align-middle">FAQs</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Display_emp_training.php">
                <i class="align-middle far fa-clipboard"></i></i><span class="align-middle">Training</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="user_quiz.php">
                <i class="align-middle far fa-clipboard"></i></i><span class="align-middle">Quiz</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="php_tutorial.php">
                <i class="align-middle far fa-clipboard"></i></i><span class="align-middle">PHP Tutorials</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo ' report.php?from_date=' . date('Y/m/d') . '&to_date=' . date('Y/m/d') . ' ' ?>">
                <i class="align-middle far fa-clipboard"></i></i><span class="align-middle">Reports</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="graph2.php">
                <i class="align-middle fas fa-chart-bar"></i></i><span class="align-middle">My Performance</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="mark-attendance.php">
                <i class="align-middle" data-feather="edit"></i></i><span class="align-middle">Mark Attendance </span>
              </a>
            </li>
            <li class="sidebar-item active">
              <a data-target="#leave-options1" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Leaves</span>
              </a>
              <ul id="leave-options1" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                <li class="sidebar-item active"><a class="sidebar-link" href="apply-leave.php">Apply for leave</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="leavehistory.php">Leave History</a></li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="loan_add.php">
                <i class="align-middle" data-feather="edit"></i></i><span class="align-middle">Add Loan </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ITdeclaration.php">
                <i class="align-middle" data-feather="edit"></i></i><span class="align-middle">IT declaration </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a data-target="#expense-options1" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Expense Management</span>
              </a>
              <ul id="expense-options1" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="add_expense.php">Add Expense</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="manage_expense.php">Manage Expense </a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="reportexp.php">Expense Reports </a></li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./Resignation/resign_emp.php">
                <i class="align-middle" data-feather="edit"></i></i><span class="align-middle">Resign</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a data-target="#case-options1" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Case Management</span>
              </a>
              <ul id="case-options1" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="./case/my_cases.php">My Cases</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./case/createcase.php">Create New Case</a></li>
              </ul>
            </li>


            <li class="sidebar-item">
              <a data-target="#adddetail-options" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Add Details</span>
              </a>
              <ul id="adddetail-options" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/personal_details.php">Personal Details</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/job_details.php">Job Details</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/bank_details.php">Bank Details</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/work_exp.php">Work Experience</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/dependent_details.php">Dependent Details</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/identity_details.php">Identity Details</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/qualification_details.php">Qualification Details</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="./Employee_onboarding/family_details.php">Family Details</a></li>

              </ul>
            </li>

            <li class="sidebar-header">
              Management
            <li><a class="sidebar-link" href="courses.php"><i class="align-middle" data-feather="edit"></i> Add Course</a></li>
            <li><a class="sidebar-link" href="add_media.php"><i class="align-middle" data-feather="edit"></i> Add Media Content</a></li>
            <li><a class="sidebar-link" href="updte_del_media.php"><i class="align-middle" data-feather="edit"></i>Delete/Update Media</a></li>
            <li><a class="sidebar-link" href="graph3.php"><i class="align-middle" data-feather="edit"></i>All Employee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performances</a></li>
            <li><a class="sidebar-link" href="admin_quiz.php"><i class="align-middle" data-feather="edit"></i>Assign Quiz</a></li>

            <li class="sidebar-item">
              <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Employee Jobs</span>
              </a>
              <ul id="forms" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="jdform.php">Job Description Form </a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="kraform.php">KRA Form</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="SOP.php">SOP/Policies Form</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="todoListForm.php">To-do-List Form</a></li>

              </ul>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="manrate.php">
                <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Manager Rating</span>
              </a>
            </li>
          </ul>
          </li>
          </ul>
        </div>
      </nav>



      <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
          <a class="sidebar-toggle d-flex">
            <i class="hamburger align-self-center"></i>
          </a>
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
              <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="courseDropdown" data-toggle="dropdown">
                  <div class="position-relative">
                    <i class="align-middle" data-feather="book-open"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <div class="dropdown-menu-header">

                  </div>
              <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                  <div class="position-relative">
                    <i class="align-middle" data-feather="bell"></i>
                    <span class="indicator"></span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <div class="dropdown-menu-header">
                    New Notifications
                  </div>
                  <div class="list-group">

                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-danger" data-feather="clipboard"></i>
                        </div>

                        <div class="col-10">


                          <div class="text-dark">SOP</div>
                          <div class="text-muted small mt-1">Example SOP</div>
                          <div class="text-muted small mt-1">2022-12-20</div>

                          <div class="text-muted small mt-1">Submit soon past deadline</div>
                    </a>

                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-danger" data-feather="clipboard"></i>
                        </div>

                        <div class="col-10">


                          <div class="text-dark">SOP</div>
                          <div class="text-muted small mt-1">Example SOP</div>
                          <div class="text-muted small mt-1">2022-11-20</div>

                          <div class="text-muted small mt-1">Submit soon past deadline</div>
                    </a>

                  </div>
                  <div class="dropdown-menu-footer">
                    <a href="pages-profile.php#note" class="text-muted">Show all notifications</a>
                  </div>
                </div>
          </div>

          </li>

          <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
              <i class="align-middle" data-feather="settings"></i>
            </a>
            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
              <img style="cursor:pointer;" width="30" height="30" src="image/profile.png"><span style="color:#cff5f5;"> <?php echo "$uname" ?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="pages-profile.php"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
              <a class="dropdown-item" href="graph2.php"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="pages-ProfileMain.php"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
              <a class="dropdown-item" href="contactus.php"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log out</a>
            </div>
          </li>
          </ul>


        </nav>
        <div class="page-titles">
          <div class="col-12">
            <h3 class="text-themecolor mb-0">Reports<i class="fas fa-video" aria-hidden="true" style="position: absolute;right: 20px;color:red"><span style="color:#1B7EBE;font-family: var(--bs-font-sans-serif);font-size: .9375rem;font-weight: 300;"><a href="allvideo.php#dashboard" target="_blank"> Check the tutorial of this page on</a> </span></i></h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="pages-profile.php">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo ' report.php?from_date=' . date('Y/m/d') . '&to_date=' . date('Y/m/d') . ' ' ?>">Reports</a></li>
              <li class="breadcrumb-item active">View Others</li>
            </ol>
          </div>
        </div>

        <?php include 'conn_rep.php'; ?>

        <div class="table">
          <label>
            <h2>Your Reports</h2>
          </label>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">S. NO</th>
                <th scope="col">Employee</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <?php
              $sql = "SELECT DISTINCT `emp_emailid` FROM `reports`";
              $result = mysqli_query($conn, $sql);
              $sno = 0;
              while ($row = mysqli_fetch_assoc(($result))) {
                $sno = ++$sno;
                $name = $row['emp_emailid'];
                echo '<tr>
      <th scope="row">' . $sno . '</th>
      <td>' . $name . '</td>
      <td><a href="emp_report.php?emp_emailid=' . $name . '&from_date=' . date('Y/m/d') . '&to_date=' . date('Y/m/d') . '" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View</a></td>
    </tr>';
              }
              ?>
            </tbody>
          </table>
        </div>

        <div class="copyright" style="text-align: center; background-color: #1e88e5;">
          <p>© All rights reserved. Made by Salahkaar Consultants.</p>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- footer -->
    <!-- -------------------------------------------------------------- -->

    </div>
    </div>


    </div>
    </div>

    <!--===============================================================================================-->
    <script src="js/app.js"></script>
    <script>
      $('document').ready(function() {
        var count = 1;
        var name = [];
        var like = [];
        var span = [];
        for (var i = 0; i < count; i++) {
          name.push('#name'.concat(i));
          like.push('#like'.concat(i));
          span.push($('#change' + i).attr('id'));
          $(like[i]).click(function() {
            var n = $(this).attr('name');
            var c = $(this).attr('count');
            $(this).attr("disabled", true);
            var t = $(this).attr('text');
            var j = $(this).attr('dis');
            $.ajax({
              url: 'updatelike.php',
              data: {
                n: n,
                c: c,
                j: j
              },
              type: 'POST',
              dataType: "text",
              success: function(data) {
                text = 'Got ' + data + ' claps! <br> Clap here for appreciation';
                $(t).html(text);
                return false;
              },
              error: function() {}
            });
          });
        }

      });
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="js/app.min.js"></script>
    <script src="js/app.init.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/feather.min.js"></script>
    <script src="js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/cal-init.js"></script>
    <!--===============================================================================================-->
    <!-- Chatbot JavaScript -->
    <script src="assets/js/custom-index.js"></script>
    <!--===============================================================================================-->

  </body>
</body>

</html>