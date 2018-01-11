<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#161616">
    <!-- All favicon metas here -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Profile | Oddslingers: Fast, Secure, Online Poker</title>

    <!-- Bootstrap Core -->    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Analytics and other scripts -->
  </head>
  <body>
      <header>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">MENU</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href=""><img src="images/main_logo.svg" width="270" alt="OddSlingers"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-television" aria-hidden="true"></i>  Watch <span class="sr-only">(current)</span></a></li>
                <li><a href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> Play</a></li>
                <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Leaderboard</a></li>
                <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Learn</a></li>
              </ul>
               
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Support</a></li>
                <li class="dropdown avatar-trigger">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Squash <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Get Chips</a></li>
                    <li><a href="#">Live Chat Support</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Setting Account</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          </nav>
      </header>
      <!-- End of Header -->
      <!-- Main content -->
      <section class="main-content">
        <div class="container">
          <div class="row profile-header">
            <div class="col-md-12">
              <div class="panel panel-xl">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="profile-header-main">
                        <div class="avatar text-center">
                          <img src="images/elephants.gif" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="profile-info">
                          <div class="profile-main-top">
                            <h1 class="name">Squash <small>(staff)</small></h1>
                          </div>
                          <div class="role">Royal admin of these lands. </div>
                          <div class="profile-actions">
                             <a href="#" class="btn btn-primary">Start Play</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="profile-header-info">
                        <dl class="profile-info-row">
                          <dt>Email:</dt>
                          <dd>yourmail@mail.com</dd>
                        </dl>
                        <dl class="profile-info-row">
                          <dt>Last Login:</dt>
                          <dd>Jan 10th 2018 11:04:50 pm</dd>
                        </dl>
                        <dl class="profile-info-row">
                          <dt>Hands Played:</dt>
                          <dd>425</dd>
                        </dl>
                        <dl class="profile-info-row">
                          <dt>Rank:</dt>
                          <dd>9 Worldwide</dd>
                        </dl>
                      </div>
                      <ul class="list-inline config-account">
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Edit profile information"><i class="fa fa-wrench" aria-hidden="true"></i> </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.row -->

          <div class="row info">
            <div class="col-xs-12">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#balance" aria-controls="balance" role="tab" data-toggle="tab">Balance</a></li>
                <li role="presentation"><a href="#badges" aria-controls="badges" role="tab" data-toggle="tab">Badges</a></li>
                <li role="presentation"><a href="#tables" aria-controls="tables" role="tab" data-toggle="tab">Tables</a></li>
              </ul>              
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="row">            
              <!-- Tab panes -->
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="balance">
                  <div class="col-md-9">
                    <div class="panel panel-sm">
                      <div class="panel-body">
                        <h6 class="section-subtitle"><small>Total Balance</small></h6>
                        <div class="data-balance">
                          <div class="actual-amount">
                           <h2><img src="images/diamond-chip.svg" width="50" alt=""> 101.300 Chips</h2> 
                          </div>
                          <div class="info-amount">
                            <h4>1 Ethereum Wei = 1 Chip</h4>
                          </div>
                          <div class="balance-actions">
                            <!-- Deposite button -->
                            <div class="btn-group">
                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Make a Deposit <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><img src="images/ethereum.svg" width="9" alt="Ethereum "> Deposit Ethereum</a></li>
                                <li><a href="#"><i class="fa fa-dollar"></i> Deposit USD</a></li>
                                <li><a href="#"><i class="fa fa-sign-in"></i> Deposit Shapeshift.io</a></li>
                              </ul>
                            </div>
                            <!-- withdraw button -->
                            <div class="btn-group btn-space">
                              <a class="btn btn-bordered dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Request a Withdraw <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><img src="images/ethereum.svg" width="9" alt="Ethereum "> Withdraw Ethereum</a></li>
                                <li><a href="#"><i class="fa fa-dollar"></i> Withdraw USD</a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i> Send chip to another user</a></li>
                              </ul>
                            </div>
                          </div>
                          <hr>
                          <a href="#" class="btn"><h5><i class="fa fa-file-o"></i> Download Movements</h5></a>
                          
                          <p><small>Minima cupiditate ex, illum saepe, aut nostrum, cum, quisquam distinctio esse quidem inventore. Sit nam, modi tempora ad dolorem fuga, ut, explicabo assumenda voluptatem eligendi quia at quasi culpa deleniti praesentium ullam.</small></p>
                         
                        </div>
                      </div>
                    </div>
                  </div><!-- /.col -->
                  <div class="col-md-3">
                    <div class="panel panel-sm panel-ad">
                      <div class="panel-body text-center">
                        <img src="images/chips.png"  class="img-responsive logo-ad" alt="Logo">
                        <h4>Not enough chips</h4>
                        <div class="hs-lead">Doloremque possimus odio vitae quaerat. Nesciunt, culpa?</div>
                        <a href="#" class="btn btn-primary">Make a Deposit</a>
                        <a href="#" class="learn-more">Learn more... </a>
                      </div>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.balance-pane -->

                <div role="tabpanel" class="tab-pane" id="badges">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel">
                          <div class="panel-body">
                            <h6 class="section-subtitle"><small>Badges (5)</small></h6>
                            <div class="container-fluid">
                              <div class="row">

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medal1.png" alt="" class="img-responsive" data-toggle="tooltip" title="One of the first 1000 accounts">
                                    Genesis 
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medal2.png" alt="" class="img-responsive" data-toggle="tooltip" title="Filled out profile information">
                                    Hello World                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medal3.png" alt="" class="img-responsive" data-toggle="tooltip" title="Bet or raise all-in">
                                    Shove x3                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medal4.png" alt="" class="img-responsive" data-toggle="tooltip" title="Raise 3x your initial budget">
                                    Gold Digger                            
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medal5.png" alt="" class="img-responsive" data-toggle="tooltip" title="Bet or raise all-in">
                                    Shove                              
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                                <div class="col-xs-6 col-md-2">
                                  <div class="badge-item">
                                    <img src="images/medalLock.png" alt="" class="img-responsive" data-toggle="tooltip" title="Locked">
                                    Locked                             
                                  </div><!-- /.item -->
                                </div><!-- /.col -->

                              </div>
                            </div>
                          </div>
                        </div><!-- /.panel -->
                      </div><!-- /.col -->
                    </div>
                  </div>                  
                </div><!-- /.Badges-pane-->

                <div role="tabpanel" class="tab-pane" id="tables">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="panel">
                          <div class="panel-body">
                            <h6 class="section-subtitle"><small>Tables</small></h6>
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-xs-12 col-md-4">
                                  <div class="table-field">
                                    <div class="heading"> 
                                      <h4>Tutorial Game </h4>
                                    </div>
                                    <div class="content">
                                      <div class="users"><i class="fa fa-users"></i> 5/6</div>
                                      <div class="data">Blinds: $1:2 | Min Buying: $100</div>
                                      <a href="#" class="btn btn-primary">Play Now</a>
                                    </div>
                                  </div><!-- /.table-field-->
                                </div>

                                <div class="col-xs-12 col-md-4">
                                  <div class="table-field">
                                    <div class="heading">
                                      <span class="fav"><i class="fa fa-star"></i></span>
                                      <h4>Featured Game </h4>
                                    </div>
                                    <div class="content">
                                      <div class="users"><i class="fa fa-users"></i> 5/6</div>
                                      <div class="data">Blinds: $1:2 | Min Buying: $100</div>
                                      <a href="#" class="btn btn-primary">Play Now</a>
                                    </div>
                                  </div><!-- /.table-field-->
                                </div>

                                <div class="col-xs-12 col-md-4">
                                  <div class="table-field">
                                    <div class="heading">
                                       
                                      <h4>Full Game | Disabled</h4>
                                    </div>
                                    <div class="content">
                                      <div class="users"><i class="fa fa-users"></i> 6/6</div>
                                      <div class="data">Blinds: $1:2 | Min Buying: $500</div>
                                      <a href="#" class="btn btn-default" disabled="disabled">Full Table</a>
                                    </div>
                                  </div><!-- /.table-field-->
                                </div>
                                
                              </div><!-- /.row -->
                            </div>
                          </div>
                        </div>
                      </div><!-- /.col -->
                      <div class="col-xs-12 col-md-3">
                        <div class="panel panel-sm panel-ad">
                          <div class="panel-body text-center">
                            <img src="images/chips.png"  class="img-responsive logo-ad" alt="Logo">
                            <h4>Not enough chips</h4>
                            <div class="hs-lead">Doloremque possimus odio vitae quaerat. Nesciunt, culpa?</div>
                            <a href="#" class="btn btn-primary">Make a Deposit</a>
                            <a href="#" class="learn-more">Learn more... </a>
                          </div>
                        </div>
                      </div><!-- /.col -->
                    </div>
                  </div>
                  
                </div><!-- tables-pane -->

              </div><!--/.tab-content -->
            </div><!-- /.row -->
          </div><!-- /.container -->
      </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="images/logo-footer.png" alt="Logo Footer" class="img-responsive">
            <p>Fast, safe, secure poker for all worldwide! <br>Play with play-chips or Ethereum on desktop and mobile.</p>
          </div><!-- /.col -->
          <div class="col-md-4">
            <ul>
              <li><a href="#">Tables</a></li>
              <li><a href="#">Leaderboard</a></li>
              <li><a href="#">Learn Poker</a></li>
            </ul>
          </div><!-- /.col -->
          <div class="col-md-4">
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container -->      
      <div class="copy text-center ">Oddslingers Poker © 2018
      </div>
    </footer>
    <!-- /.End of footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      /* only for effects purpose */
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>