<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goCorona</title>
    <link rel="shortcut icon" href="./assets/goCorona logo.png" type="image/x-icon">
    <?php include './link/links.php';?>
    <?php include './css/style.php';?>
</head>
<body onload="Fetch()">
    <nav class="navbar navbar-expand-lg nav_style">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="./assets/goCorona logo.png" alt="" width="50px">goCorona
        </a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navBar">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navBar">
            <ul class="navbar-nav ml-auto text-capitalize">
                <li class="nav-item ">
                    <a href="#prevention-section" class="nav-link">prevention</a>
                </li>
                <li class="nav-item ">
                    <a href="#symptoms-section" class="nav-link">symptoms</a>
                </li>
                <li class="nav-item ">
                    <a href="#about-section" class="nav-link">about virus</a>
                </li>
                <li class="nav-item">
                    <a href="#download-section" class="nav-link">download app</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!--main section-->
    <main>
        <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-5 order-lg-1 order-2">
                <div class="img-col"><img src="./assets/goCorona.png" alt=""></div>
            </div>
            <div class="col-12 col-md-7 col-lg-7 order-lg-2 order-1 main-heading">
                <h1 class="text-capitalize">let's stay safe & fight together against cor<span>
                    <img src="./assets/goCorona logo.png" alt="" width="50px">
                </span>na virus.</h1>
            </div>
        </div>
        </div>
    </main>
    <!--main section-->
    <!--Corona Update----------------------------------->
    <section class="corona-update">
      <div class="container">
        <div class="mb-4">
            <h3 class="text-uppercase text-center">covid-19 live updates of the world wide</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="table-value">
                <tr>
                    <th>country</th>
                    <th>total confirmed</th>
                    <th>total recovered</th>
                    <th>total deaths</th>
                    <th>new confirmed</th>
                    <th>new recovered</th>
                    <th>new deaths</th>
                </tr>
            </table>
        </div>
      </div>
    </section>
    <!--about section----------------------------------->
    <section class="about-section" id="about-section">
        <div class="container">
            <div class="section-header text-center mb-5 mt-4">
                <h1 class="text-capitalize">about covid-19</h1>
            </div>

            <div class="row mb-4">
                <div class="col-12 col-lg-6 col-md-6 about-img">
                    <img src="./assets/covid-19.jpg" alt="covid-19" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 col-md-6 about-col">
                    <h2>what is covid-19 (corona virus)?</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus</p>
                    <p>The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell</p>
                    <h2>HOW IT SPREADS.</h2>
                    <p>Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth</p>
                </div>
            </div>
        </div>
    </section>
    <!--corona symptoms----------------------------------->
    <section class="symptoms-section" id="symptoms-section">
        <div class="container my-5">
            <h1 class="text-center text-capitalize mb-5">corona virus symptoms</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center text-capitalize">
                        <img src="./assets/cough.png" alt="" width="120">
                        <figcaption>cough</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center text-capitalize">
                        <img src="./assets/cold.png" alt="" width="120">
                        <figcaption>cold</figcaption>
                    </figure>
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center text-capitalize">
                        <img src="./assets/breath.png" alt="" width="120">
                        <figcaption>breath</figcaption>
                    </figure>
                </div> 
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center text-capitalize">
                        <img src="./assets/fever.png" alt="" width="120">
                        <figcaption>fever</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center text-capitalize">
                        <img src="./assets/runny niose.png" alt="" width="120">
                        <figcaption>runny noise</figcaption>
                    </figure>
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center text-capitalize">
                        <img src="./assets/tiredness.png" alt="" width="120">
                        <figcaption>tiredness</figcaption>
                    </figure>
                </div> 
            </div>
        </div>

    </section>
    <!--prevention against virus section------------------->
    <section class="prevention-section" id="prevention-section">
        <div class="container my-5">
            <h1 class="text-center text-capitalize mb-5">6 steps prevention against corona virus</h1>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 col-12">
                   <div class="row">
                       <div class="col-lg-4 col-md-4 col-12">
                         <figure class="text-center text-capitalize">
                            <img src="./assets/stay-at-home.png" alt="" width="90">
                          </figure>
                       </div>
                       <div class="col-lg-8 col-md-8 col-12">
                        <p>stay home and self-isolate from others in the household if you feel unwell.</p>
                       </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center text-capitalize">
                                <img src="./assets/avoid-people-group.png" alt="" width="90">
                             </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>avoid close contact(1 meter or 3 feet) with people who are unwell</p>                         
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center text-capitalize">
                                <img src="./assets/clean area.png" alt="" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>always clean home and home's outside area.</p>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center text-capitalize">
                                <img src="./assets/news.png" alt="" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>stay informed by watching news & follow the recommended practices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                   <div class="row">
                       <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center text-capitalize">
                            <img src="./assets/wash-hand.png" alt="" width="90">
                        </figure>
                       </div>
                       <div class="col-lg-8 col-md-8 col-12">
                        <p>wash your hands regularly for 20 seconds with soap and alcohol-based hand rub.</p>
                       </div>
                   </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center text-capitalize">
                                <img src="./assets/epidemic-prevention.png" alt="" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>cover your noise and mouth with a disposable tissue or fiexed elbow when you cough or sneeze.</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>  
    </section>
    <!--download the app section-->
    <section class="download-section" id="download-section">
        <div class="container">
            <h1 class="text-center text-capitalize">download the govt. app</h1>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-12 download-bar-code-col">
                   <div class="bar-code-img">
                       <figure class="text-center">
                        <img src="./assets/Aarogya setu bar code.jpg" alt="Aarogya setu bar code" class="img-fluid">
                       </figure>
                   </div>
                   <h5 class="text-capitalize mt-4 text-center">avilable in 11 different langauges</h5>
                   <h2 class="text-capitalize  text-center">scan to download</h2>
                   <h1 class="text-capitalize  text-center">Aarogya Setu</h1>
                   <p class="text-capitalize text-center">app for IOS and ANDROID</p>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row">
                        
                        <div class="col-12 col-lg-6 col-md-6 ">
                            <a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu" target="_blank">
                                <figure class="text-center">
                                    <img src="./assets/android.png" alt="google play store" width="250px" class="download-icon">
                                </figure>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6">
                            <a href="https://apps.apple.com/in/app/aarogyasetu/id1505825357" target="_blank">
                                <figure class="text-center">
                                 <img src="./assets/apple store.png" alt="apple store" width="250px" class="download-icon">
                                </figure>
                            </a>
                        </div>
                        
                    </div>
                    <div class="site-address mt-5">
                        <h2 class="text-center">goto official site </h2>
                        <h3 class=" text-center">
                        <a href="https://www.mygov.in/aarogya-setu-app?app=aarogya" target="_blank">
                            www.mygov.in/aarogya-setu-ap
                        </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button id="top-button" onclick="topFunction()" title="Go to Top">
        <i class="fa fa-arrow-up"></i>
    </button>

    <footer>
        <div class="container">
            <p class="text-center text-capitalize mt-2">&copy;copyright: <a href="http://shubhamkhandal.cf/" target="_blank">mr. shubham khandal</a>, all rights resrved 2020</p>
        </div>
    </footer>

    <script>
        mybtn=document.getElementById("top-button");

        window.onscroll = function(){scrollFunction()};

        function scrollFunction(){
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop >20){
                mybtn.style.display = "block" ;
            }else{
                mybtn.style.display = "none";
            };
        };

        function topFunction(){
            document.documentElement.scrollTop = 0;
            document.body.scrollTop=0;

        }
       
           function Fetch(){
               $.get("https://api.covid19api.com/summary",
               function(data){
                   var tableValue = document.getElementById('table-value');

                   for(var i=1; i<(data['Countries'].length); i++){
                       var x = tableValue.insertRow();
                       x.insertCell(0);

                       tableValue.rows[i].cells[0].innerHTML =data['Countries'][i-1]['Country'];

                       tableValue.rows[i].cells[0].style.background='#7a4a91';
                       tableValue.rows[i].cells[0].style.color='#fff';

                       x.insertCell(1);
                       tableValue.rows[i].cells[1].innerHTML =data['Countries'][i-1]['TotalConfirmed'];

                       tableValue.rows[i].cells[1].style.background='#7a4a91';
                       tableValue.rows[i].cells[1].style.color='#000';

                       x.insertCell(2);
                       tableValue.rows[i].cells[2].innerHTML =data['Countries'][i-1]['TotalRecovered'];

                       tableValue.rows[i].cells[2].style.background='#7a4a91';
                       tableValue.rows[i].cells[2].style.color='#000';

                       x.insertCell(3);
                       tableValue.rows[i].cells[3].innerHTML =data['Countries'][i-1]['TotalDeaths'];

                       tableValue.rows[i].cells[3].style.background='#7a4a91';
                       tableValue.rows[i].cells[3].style.color='#000';

                       x.insertCell(4);
                       tableValue.rows[i].cells[4].innerHTML =data['Countries'][i-1]['NewConfirmed'];

                       tableValue.rows[i].cells[4].style.background='#7a4a91';
                       tableValue.rows[i].cells[4].style.color='#000';

                       x.insertCell(5);
                       tableValue.rows[i].cells[5].innerHTML =data['Countries'][i-1]['NewRecovered'];

                       tableValue.rows[i].cells[5].style.background='#7a4a91';
                       tableValue.rows[i].cells[5].style.color='#000';

                       x.insertCell(6);
                       tableValue.rows[i].cells[6].innerHTML =data['Countries'][i-1]['NewDeaths'];

                       tableValue.rows[i].cells[6].style.background='#7a4a91';
                       tableValue.rows[i].cells[6].style.color='#000';
                   }
               })
           }
   
    </script>
</body>
</html>