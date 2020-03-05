<?php
include_once('../inc_settings.php');
$islem = $_GET['islem'];
$altislem = $_GET['altislem']
?>
<?php include 'check_member.php'; ?>
<!DOCTYPE html>
<html>

<!-- Coded by @mr.aydok -->


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>VeterinerVakti Klinik Otomasyonu v5.2 - <?=$klinik_getir['klinik_adi']?> - <?=$uye_getir['uye_yetki']?></title>
  <meta name="keyword" content="<%=inc_keyword%>">
  <meta name="description" content="<%=inc_description%>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="apple-touch-icon" href="apple-touch-icon.html">
  <!-- Place favicon.ico in the root directory -->
  <!-- Include external CSS. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

  <!-- Include Editor style. -->
  <link href="css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="css/froala_style.min.css" rel="stylesheet" type="text/css" />


  <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  
  <link type="text/css" rel="stylesheet" href="vendor/materializecss/css/materialize.min.css"  />


  <link href='vendor/fullcalendar/fullcalendar.css' rel='stylesheet' />
  <link href='vendor/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
  <!-- Custom Fonts -->
  <link href="vendor/font-a
  esome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- nuSlder range slider -->
  <link href="vendor/nuslider/nouislider.css" rel="stylesheet" type="text/css">

  <!--custome rockon materialize color  css-->
  <link type="text/css" rel="stylesheet" href="css/material_color_rockon.css" />
  <!--custome rockon css-->
  <link type="text/css" rel="stylesheet" href="css/rockon.css" />
  
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>


  <script type="text/javascript" src="js/ozel.js"></script> 
  <style type="text/css">
    a[href="https://www.froala.com/wysiwyg-editor?k=u"] {
      display: none !important;
      position: absolute;
      top: -99999999px;
    }</style>
    <style>
      .alert-danger{
        padding: 20px;
        background-color: #f44336;
        color: white;
      }

      .alert-success{
        padding: 20px;
        background-color: #4CAF50;;
        color: white;
      }

      .alert-warning{
        padding: 20px;
        background-color: #ff9800;
        color: white;
      }

      .alert-info{
        padding: 20px;
        background-color: #2196F3;
        color: white;
      }


      .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
      }

      .closebtn:hover {
        color: black;
      }
      .signal {
        border: 5px solid #333;
        border-radius: 30px;
        height: 30px;
        left: 50%;
        margin: -15px 0 0 -15px;
        opacity: 0;
        position: absolute;
        top: 50%;
        width: 30px;

        animation: pulsate 1s ease-out;
        animation-iteration-count: infinite;
      }

      @keyframes pulsate {
        0% {
          transform: scale(.1);
          opacity: 0.0;
        }
        50% {
          opacity: 1;
        }
        100% {
          transform: scale(1.2);
          opacity: 0;
        }
      }

    </style>
    <style type="text/css">

      .ploader {
        height: 4px;
        width: 102%;
        margin-left: -20px;
        margin-top: -10px;
        margin-bottom: 10px;
        position: relative;
        overflow: hidden;
        background-color: #2b5b9f;
      }
      .ploader:before{
        display: block;
        position: absolute;
        content: "";
        left: -200px;
        width: 200px;
        height: 5px;
        background-color: #f9f9f9;
        animation: loadings 2s linear infinite;
      }

      @keyframes loadings {
        from {left: -200px; width: 30%;}
        50% {width: 30%;}
        70% {width: 70%;}
        80% { left: 50%;}
        95% {left: 120%;}
        to {left: 100%;}
      }

    </style>
    <style type="text/css">
      input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
      }
    </style>
  </head>

  <body id="menu" class="side_fill <?php if($_SESSION['menu1']==1 and $_SESSION['menu2']==0)echo "";if(($_SESSION['menu1']==0 and $_SESSION['menu2']==1) or ($_SESSION['menu1']==0 and $_SESSION['menu2']==0))echo("menuclose");if($_SESSION['menu1']==1 and $_SESSION['menu2']==1) echo "menusmall"; ?>">

    <?php
    include('inc_menu.php');
    ?>
    <div class="page_wrapper ">
      <?php
      require_once('inc_headerone.php');
      ?>
      <?php 


      ?>
      <div class="page_content" id="searchresult" style="display: none;"> asd
      </div>
      <!-- Pages Starts Here -->
      <div class="page_content" id="page">
        <div class="ploader"></div><center><strong>Yükleniyor...</strong></center>
      </div>  




      <!-- Pages ends here -->
      <!--Footer starts here  -->
      <?php 

      include 'inc_footer.php';

      ?>
      <!--Footer ends here  --> 

    </div>
    <div class="chat_panel z-depth-2">
      <div class="row">
        <nav class="grey lighten-3 ">
          <div class="nav-wrapper"> <a href="#!" class="brand-logo"><i class="material-icons">chat</i>Chat</a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#"><i class="material-icons">search</i></a></li>
              <li><a class="chat-close"><i class="material-icons">close</i></a></li>
            </ul>
          </div>
        </nav>
        <div class="col s12 no-padding">
          <ul class="tabs">
            <li class="tab col s6"><a class="active" href="#test11">Contacts</a></li>
            <li class="tab col s6"><a  href="#test21">Chat</a></li>
          </ul>
        </div>
      </div>
    </div>



    <div class="canliyardim" id="canliyardim">

    </div>

    <script type="text/javascript">
      $(function(){$("#canliyardim").load("klinik_canliyardim.php")});
    </script>
    <button class="btn-floating btn-large theme-collapse" id="panelb" style="background-color: #2F5265;"> <i class="material-icons" style="font-size: 25px;margin-top: 2px;margin-right: 2px;">apps</i> </button>
    <div class="ipanel_panel z-depth-4 grey lighten-5" id="ipanel_panel">
      <div class="row">
        <nav class="grey lighten-5 ">
          <div class="nav-wrapper"> <a href="#!" class="brand-logo"><i class="material-icons">accessibility</i>Yardımcılar</a>
            <ul class="right hide-on-med-and-down">
              <li><a class="ipanel-close" id="ipanel-close"><i class="material-icons">close</i></a></li>
            </ul>
          </div>
        </nav>
        <div class="col s12 no-padding">
          <ul class="tabs grey lighten-5">
            <li class="tab col s6"><a class="active" id="ipanelgetir" href="#test12832">NOTLAR</a></li>
            <li class="tab col s6"><a  href="#test12313">GÖREVLER</a></li>
          </ul>
        </div>
        <div id="test12832" class="col s12">
          <div class="row" id="app_notlar" style=""></div>
          <div class="row" id="app_yeninot" style="display: none;">
            <a id="app_yeninotcb" class="btn-flat waves-effect right"  style=""><i class="material-icons ">close</i></a>

            <form autocomplete="off" method="post" action="pislem.php" id="appyeninotf">
              <div class="input-field col m12 s12">
                <input id="app_not" name="app_not" type="text" value="" class="form-control" required>
                <label for="app_not" style="font-size: 15px;" class="active" required>Not</label>
              </div>
              <div class="input-field col m12 s12">
                <input type="hidden" name="app_yeninot">
                <button type="button" id="yeni_appnot_gonder" name="yeni_appnot_gonder" class="btn btn-primary" >NOTU EKLE</button>
              </div>
            </form>

          </div>
          <script type="text/javascript">
            $(function(){

              $("#app_notlar").load("ajax/klinik_ajax24.php");

              $("#app_yeninotcb").click(function(){

                $("#app_yeninot").fadeOut(30);
                $("#app_notlar").load("ajax/klinik_ajax24.php").delay(30).fadeIn();


              });

              $("#yeni_appnot_gonder").click(function(){

                if($("#app_not").val()==""){

                  Materialize.toast("Lütfen Not Giriniz !",2000);
                }else{

                  var degerler = $("#appyeninotf").serialize();

                  $.ajax({
                    type:"POST",
                    url:"pislem.php",
                    data:degerler,
                    success:function(e)
                    {

                      Materialize.toast(e,2000);
                      $("#app_yeninot").fadeOut(30);
                      $("#app_notlar").load("ajax/klinik_ajax24.php").delay(30).fadeIn();

                    }
                  });
                }


              });

            })
          </script>
        </div>

        <div id="test12313" class="col s12">
          <div class="row" id="app_gorevler" style=""></div>
          <div class="row" id="app_yenigorev" style="display: none;">
            <a id="app_yenigorevcb" class="btn-flat waves-effect right"  style=""><i class="material-icons ">close</i></a>

            <form autocomplete="off" method="post" action="pislem.php" id="appyenigorevf">

              <div class="input-field col m12 s12">
                <input id="app_gorev" name="hatirlatici_aciklama" type="text" value="" placeholder="AÇIKLAMA" class="validate">
                <input id="yenihatirlatici" name="yenihatirlatici" type="hidden">
                <label for="hatirlatici_aciklama" style="font-size: 15px;" class="active" required></label>
              </div>
              <div class="input-field col m12 s12">
                <input type="date" id="gorevler_date" placeholder="TARİH"  name="hatirlatici_date" class="datepicker">
              </div>
              <div class="input-field col m12 s12">
                <input type="time" id="gorevler_time" placeholder="SAAT"  name="hatirlatici_time" class="timepicker">
              </div>
              <script type="text/javascript">
                $(document).ready(function(){
                  $('#gorevler_date').pickadate({
                    selectMonths: true,
                    selectYears: 200, 
                    format: 'yyyy/mm/dd',
                    monthsFull: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
                    weekdays: ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'],
                    monthsShort : ['Oca','Şub','Mar','Nis','May','Haz','Tem','Ağs','Eyl','Eki','Kas','Ara'],
                    weekdaysShort: ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmts', 'Paz'],
                    today: 'Bugün',
                    clear: 'Temizle',
                    close: 'Kapat', 
                    weekdaysAbbrev : ['P','P','S','Ç','P','C','C'],
                    min: new Date()

                  });

                });
              </script>

              <div class="row">
                <div class="col md6">
                  <button type="button" id="yeni_appgorev_gonder" class="btn btn-primary">GÖREV EKLE</button>
                </div>
              </div>


            </form>

          </div>
          <script type="text/javascript">
            $(function(){

              $("#app_gorevler").load("ajax/klinik_ajax25.php");

              $("#app_yenigorevcb").click(function(){

                $("#app_yenigorev").fadeOut(30);
                $("#app_gorevler").load("ajax/klinik_ajax25.php").delay(30).fadeIn();


              });

              $("#yeni_appgorev_gonder").click(function(){

                if($("#app_gorev").val()=="" || $("#gorevler_date").val()=="" || $("#gorevler_time").val()=="" ){

                  Materialize.toast("Lütfen Görevi Ve Tarihi Giriniz !",2000);
                }else{

                  var degerler = $("#appyenigorevf").serialize();

                  $.ajax({
                    type:"POST",
                    url:"pislem.php",
                    data:degerler,
                    success:function(e)
                    {

                      Materialize.toast(e,2000);
                      $("#app_yenigorev").fadeOut(30);
                      $("#app_gorevler").load("ajax/klinik_ajax25.php").delay(30).fadeIn();

                    }
                  });
                }


              });

            })
          </script>
        </div>
      </div>

    </div>

    <!-- Theme panel ends -->


    <!--Import jQuery before materialize.js--> 



    <script type="text/javascript" src="vendor/materializecss/js/materialize.min.js"></script> 


    <script src='vendor/fullcalendar/lib/moment.min.js'></script> 
    <script src='vendor/fullcalendar/lib/jquery-ui.custom.min.js'></script> 
    <script src='js/jquerysession.js'></script> 
    <script src='vendor/fullcalendar/fullcalendar.min.js'></script> 
    <script src='vendor/fullcalendar/locale-all.js'></script>


    <?php if($islem=="personel-islemleri"){?> 

      <script type="text/javascript">

        $(function(){


          $('#sertifikalar').material_chip({
            secondaryPlaceholder: 'Sertifikalar',
            placeholder: '+Daha fazla',
            autocompleteData: {
              'ABDOMEN AGUDO': null,
              ' ABDOMEN AGUDO': null,
              'ABDUCCIÓN DE LAS PATAS': null,
              'ABORTO': null,
              'ABSCESOS': null,
              'ABSCESOS EN GANGLIOS': null,
              'ACIDOSIS': null,
              'AFLOJAMIENTO DENTAL': null,
              'AGALACTIA': null,
              'AGALAXIA': null,
            }
          });
        });

      </script>
    <?php } ?>

    <!--Range slider nuSlider js--> 
    <script type="text/javascript" src="js/modal.js"></script>  


    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script> 
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script> 
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script> 


    <!--Custome js--> 
    <script type="text/javascript" src="js/rockon.js"></script> 
    <!--data table js--> 
    <!-- DataTables JavaScript --> 
    <script type="text/javascript" src="js/datatable.js"></script> 


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!-- Include Editor JS files. -->


    <script type="text/javascript" src="js/froala_editor.pkgd.min.js"></script>

    <script type="text/javascript" src="js/languages/tr.js"></script>



    <!-- jvectormap JavaScript --> 

    <script src="vendor/jquery-jvectormap/jquery-jvectormap.js"></script> 
    <script src="vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script> 

  </body>

  <!-- Coded By @mr.aydok  -->
  </html>