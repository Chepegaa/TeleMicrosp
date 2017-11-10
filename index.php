
<html>  
  <head>      
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Intelligent Microscope by Chepe">
    <meta name="chepegaa@gmail.com" content="Jose Gonzalez">


    <title>Intelligent Microscope by Chepe</title>   
    <script src="http://cdn.pubnub.com/pubnub-3.7.1.min.js"></script>
    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.8.0.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">




    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepi.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/themes.css">
    <link rel="stylesheet" href="css/skate.css">
    <link rel="stylesheet" href="css/custom.css">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://cdn.pubnub.com/pubnub-3.7.11.min.js"></script>
  <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.8.0.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  

  <script type="text/javascript">
       
    function publishSampleMessage(mensaje) {


        var dialog = bootbox.dialog({
        title: mensaje,
        message: '<p><i class="fa fa-spin fa-spinner"></i> StepperA Forward...</p>'
});

setTimeout(function(){
        dialog.modal('hide');
    }, 500);

        var pubnub = new PubNub({
        publishKey :'pub-c-7581ef06-2ca4-4472-834c-74b43e7d85df',
        subscribeKey :'sub-c-eba3f01a-27a0-11e7-bc52-02ee2ddab7fe'
         });

        var publishConfig = {
            channel : "Channel-x1izfsa8x",
            message : mensaje
        };
    

        console.log("Subscribing..");


        pubnub.subscribe({
        channels: ['Channel-x1izfsa8x'], 
        message: mensaje
    });


        pubnub.publish(publishConfig);
    }
       

  </script>


 <script type="text/javascript">
            
    (function(){

  var settings = {
    channel: 'Channel-t5xjqkdul',
    publish_key: 'pub-c-c20380f7-57cf-4c65-87a8-9daea09445a7',
    subscribe_key: 'sub-c-cf156a46-2d45-11e7-9a1a-0619f8945a4f'
  };

  var pubnub = PUBNUB(settings);

  var lightLiving = document.getElementById('lightLiving');

  pubnub.subscribe(
    channel: settings.channel,  
  )


  function publishUpdate(data) {
    pubnub.publish({
      channel: settings.channel, 
      message: data
    });
  }

  lightLiving.addEventListener('change', function(e){
    publishUpdate({item: 'light-living', brightness: +this.value});
  }, false);
})();
      
  </script>

  </head>
  <body background="images/background-1.jpg">
  
<header class="m-header">
    <div class="container" id="menu-princ">
          <a href="#"><img src="images/SEDILAB.png" alt="logo-sedilab"></a>
      <div id="header-right">
                    Si tienes problemas con la Página<br>
                    Contáctanos:
               <span id="phone">
                    849-634-5002
               </span>
          </div>
        </div>
        </header>
  <br></br>  <br></br>  
  <div class="embed-responsive embed-responsive-16by9">
   <iframe class="embed-responsive-item" src="http://192.168.19.90:8081/" autoplay=1></iframe>
  </div>
    <section text-align: center;>
      <section text-align: center;>
        <div>
          <div class="caption">StepperA</div>
          <label for="door">
            <input  align="center" value="Adelante" type="button" class="action-button" onclick="publishSampleMessage('StepperAForward')">

            <input align="center" value="Atras" type="button" class="action-button" onclick="publishSampleMessage('StepperABack')">
            </div>
          </label>
        </div>

        <div>
          <div class="caption">StepperB</div>
          <label for="door">
           <input value="Adelante" type="button" class="action-button" onclick="publishSampleMessage('StepperBForward')">

            <input value="Atras" type="button" class="action-button" onclick="publishSampleMessage('StepperBBack')">
            <div class="">
            </div>
          </label>
        </div>

         <div>
          <div class="caption">StepperC</div>
          <label for="door">
            <input value="Adelante" type="button" class="action-button" onclick="publishSampleMessage('StepperCForward')">

            <input value="Atras" type="button" class="action-button" onclick="publishSampleMessage('StepperCBack')">
            <div class="">
            </div>
          </label>
        </div>

        <div>
        <!-- flickering light -->
          <div class="caption">Luminosodad</div>
          <label for="light-living" class="brightness fa">
          <input id="lightLiving" type="range" min="0" max="10" step="1" value="0">
          </label>
        </div>

      </section>

    </section>

<footer>
  <div class="container">
    <div id="footer-1">
      © 2017 <a id="logo-footer" href="#"><img src="images/logo-sedilab-footer.png" alt="logo-sedilab"></a><br>
      Proyecto Final By Chepe
      
    </div>
    <br>
    <div id="footer-2">
      <ul>
        <li class="li-footer" id="li-footer-1">
          <a href="//www.facebook.com"><span class="icon-facebook"></span></a>
        </li>
        <li class="li-footer" id="li-footer-2">
          <a href="//www.twitter.com"><span class="icon-twitter"></span></a>
        </li>
        <li class="li-footer" id="li-footer-3">
          <a href="//www.instagram.com"><span class="icon-instagram"></span></a>
        </li>
      </ul>
    </div>
  </div>
</footer>

  </body>
  <script src="js/app.js"></script>
</html>  
