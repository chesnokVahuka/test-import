<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Komibaloon</title>

   <meta name="description" content="Мы предоставляем услуги полёта на воздушном шаре" />
  <meta name="robots" content="index, nofollow" />
  <meta name="yandex" content="noyaca" />
  <meta name="google" content="noyaca" />
  <meta name="keywords" content="Полёт, Воздушный, Шар, Сыктывкар, Аэростат, полет на воздушном шаре сыктывкар, komiballoon, komibalon, komiballon, komibaloon, комибаллун, комибалун, комибалуун, комибаллуун" />

    <style>
        /*-------------HEADER-----------*/
        .not-work{
            width: 100%;
            height: 100vh;
            background: gray;
            z-index: 999;
            opacity: 80%;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
        }
        .not-work-title{
            width: 590px;
            height: 151px;
            color: #ffffff;
            /* font-family: "Roboto"; */
            font-size: 47px;
            font-weight: 400;
            text-transform: uppercase;
            margin: 0;

        }

        .header{
            width: 100%;
            height: 100vh;
            background-image: url("/images/header.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            box-shadow: 0 2px 37px 9px rgba(2, 4, 4, 0.14);
        }
        @media (max-width: 576px) {
            .header{
                height:80vh;
            }
        }

        .navbar-toggler{
            border: 1px solid #003547;

        }
        .logo{
            width: 487px;
            height: 56px;
            color: #ffffff;
            font-family: "Cormorant - Semi Bold";
            font-size: 30px;
            font-weight: 400;
            text-transform: uppercase;
        }

        @media (max-width: 576px) {
            .logo{
                font-size: 20px;
            }
        }
        .brand{
            margin-top: 42px;
        }
        .menu{
            display: flex;
            justify-content: space-around;
            align-items: center;
            list-style: none;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            margin-top:51px;
        }


        .menu-item > a{
            color: #fff;
            display: flex;
            justify-content: center;
            text-decoration: none;
        }
        .menu-item > a:after{
            content: '';
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: #ffffff;
            margin-top: 25px;
            opacity: 0;
        }
        .menu-item > a:hover:after{
            opacity: 1;
            transition: all 0.3s;
        }

        .nav-link{
            padding-left: 0px;
        }

        @media (max-width: 576px) {
            .main-menu{
                visibility:hidden;
            }
        }

        .title{
            width: 590px;
            height: 151px;
            color: #ffffff;
            font-family: "Cormorant - Semi Bold";
            font-size: 47px;
            font-weight: 400;
            text-transform: uppercase;
            margin: 0;
        }
        @media (max-width: 576px) {
            .title{
                font-size: 28px;
            }
        }
        .wrap-title{
            margin-top: 15%;

        }
        h1,h2,h3,h4,h5,p{
            font-family:Cormorant;
        }

        /*-------------HEADER END-----------*/


        /*------------ABOUTH-----------*/
        .abouth{
            height: 100vh;
        }
        img{
            width: 500px;
        }

        @media (max-width: 768px) {
            img{
                width: 100%;
            }
        }


        .gallery{
            /*margin-top: 150px;*/
        }

        .abouth-content{
            /*margin-top: 150px;*/
            display: flex;
            justify-content: flex-start;
        }
        .title-abouth{
            color: #003547;
            font-family: Cormorant;
            font-size: 32px;
            font-weight: 700;
        }

        .content{
            margin-top: 15%;
            color: #004a64;
            font-family: "SFUI Text";
            font-size: 16px;
            font-weight: 500;
            line-height: 22.38px;
        }

        @media (max-width: 768px) {
            .content: {
                margin-top: 10%;
            }
        }
        /*------------ABOUTH END-----------*/

        /*------------SERVICE-----------*/
        .service{
            margin-bottom: 10%;
            margin-top: 10%;
        }


        .title-service{
            color: #003547;
            font-family: Cormorant;
            font-size: 32px;
            font-weight: 700;
            margin-top: 30px;
        }
        .card-img{
            /*height: 140px;*/
            /*width: 361px;*/
            /*height: auto;*/
            width:100%;
            box-shadow: 0 2px 37px 9px rgba(2, 4, 4, 0.14);

        }
        .card-descriptions{
            background-color: #fff;
            position: relative;
            top:-5%;
            font-size: 14px;
            color:#404040;
            text-align: left;
            box-shadow: 0 2px 37px 9px rgba(2, 4, 4, 0.14);
        }
        .card-descriptions h5{
            font-weight: bold;
            padding: 10% 0% 5%;
            font-size: 20px;
        }



        .card-descriptions-price{
            margin-left: auto;
            text-align: center;
            top:-13%;
            border-radius: calc(.25rem - 1px);
            background-color: #004a64;
            color:#fff;
        }
        .card-descriptions-price span{
            font-size:20px;
        }

        @media (max-width: 768px) {
            .card-descriptions h5{
                text-align: center;
                padding: 5% 0% 5%;
            }
            .card-sescriptions-price{
                width: 100%;
            }

            .card-descriptions{
                padding: 2% 15% 15%;
            }
        }

        @media (min-width: 768px){
            .card-descriptions{
                height: 80%;
            }}
        /*------------SERVICE END-----------*/

        /*------------COMUNICATION-----------*/
        .comunication{
            width: 100%;
            height: 80vh;
            background-image: url("/images/comunication.png");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-size: contain;
        }

        @media (max-width: 768px){
            .comunication{
                background-size: cover;
            }}

        /*
        Форма обратной связи
        */
        .inline {
            width:450px;
            margin:0 auto;
            background:#FFF;
            opacity: 0.85;
            padding: 20px 20px;
            margin-left: 50%;
        }
        .txt {
            display:inline-block;
            color:#676767;
            width:400px;
            margin-bottom:10px;
            border:1px solid #CCC;
            padding:5px 9px;
            font-size:15px!important;
            line-height:1.4em;
        }
        .txtarea {
            display:inline-block;
            color:#676767;
            width:400px;
            margin-bottom:10px;
            border:1px solid #CCC;
            padding:5px 9px;
            font-size:15px!important;
            line-height:1.4em;
            height:80px;
        }
        .txt:focus, .txtarea:focus {
            border-style:solid;
            border-color:#BABABA;
            color:#444;
        }
        input.error, textarea.error {
            border-color:#973D3D;
            border-style:solid;
            background:#F0BEBE;
            color:#A35959;
        }
        input.error:focus, textarea.error:focus {
            border-color:#973D3D;
            color:#A35959;
        }
        #send {
            color:#FFFFFF;
            display:block;
            cursor:pointer;
            padding:5px 11px;
            font-size:1.2em;
            border:solid 1px #003547;
            border-radius:2px;
            background:#003547;
            width:400px;
            margin-bottom:20px;
        }
        #send:hover {
            background:#003457;
            opacity: 1;
        }

        @media (max-width: 768px) {
            .inline{
                width: 100%;
                margin-left: auto;
                text-align: center;
            }

            .txt{
                width: 90%;

            }
            .txtarea{
                width: 90%;

            }
            #send{
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                font-size: 16px;
            }
        }
        /*
        Форма обратной связи
        */

        /*------FOOTER-------*/
        .footer::before{
            content:"";
            background-image:linear-gradient(#fff,#f1f1f4);
            display: block;
            height: 20vh;
            opacity: 0.9;
        }

        .footer{
            width: 100%;
            height: 90vh;
            background-image: url("/images/footer.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        .links{
            margin-top: 200px;
            color: #003547;
            font-size: 40px;
            font-weight: 400;
        }
        @media (max-width: 768px) {
            .links{
                font-size: 26px;
            }
        }

        .telephone{
            text-align: center;

        }
        .mail{
            text-align: center;
        }
        .social{
            text-align: center;
            margin-top: 30px;
        }
        .social a{
            text-decoration: none;
            color: #003547;
        }
        #fb{
            margin-right: 30px;
            display:none;
        }
        #in{
            margin-left: 30px;
        }
    </style>

<meta property = "og:image" content = "https://komiballoon.ru/images/card_3.jpg" />


  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(51392395, "init", {
        id:51392395,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51392395" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

{{--     <link rel="shortcut icon" href="../../public/images/icon.ico" type="image/x-icon">--}}
    <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- ==== Font Awesome ==== -->
     <script src="https://use.fontawesome.com/44280ec540.js"></script>



</head>
<body>
  <div class="not-work">
    <div class="col wrap-title">
      <span class="not-work-title">На текущий момент полеты не производятся</span>
    </div>
  </div>
 <div class="page">
  <header class="header">

    <div class="container">
      <div class="row">
       <div class="col-lg-6 col-md-6 brand">
         <span class="logo">Федерация воздухоплавания республики коми</span>
       </div>
       <div class="col-lg-6 col-md-6">
          <nav class="main-menu  navbar-expand-sm" id="main-menu">
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapse-menu" aria-controls="collapse-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="collapse-menu">
              <ul class="menu">
                <li class="menu-item">
                <a class="nav-link" href="#abouth">О нас</a>
               </li>
               <li class="menu-item">
                <a class="nav-link" href="#service">Услуги</a>
               </li>
               <li class="menu-item">
                <a class="nav-link" href="#comunication">Обратная связь</a>
               </li>
               <li class="menu-item">
                <a class="nav-link" href="#contact">Контакты</a>
               </li>
             </ul>
             </div>
            </nav>
           </div>
          </div>
{{--           <div class="col wrap-title">--}}
{{--            <span class="title">Взгляни на свой город с высоты птичьего полета</span>--}}
{{--          </div>--}}
     </div>
  </header>

 	<!-- <section class="abouth" id="abouth">
 		<div class="container">
 			<div class="row justifly-content-between align-items-center abouth">
 				<div class="col-md-6 gallery">
 					<img src="../images/gallery.png">
 				</div>
 				<div class="col-md-6 abouth-content">
 					<span class="content">
            <span class="title-abouth">Поднимись над суетой</span>
            <p></p>
Наша команда уже более 20 лет организовывает полеты на воздушном шаре в Сыктывкаре и Республике Коми. В нашем распоряжении только сертифицированное оборудование и квалифицированные пилоты.
Во время полета вам удастся проплыть над верхушками деревьев, полюбоваться пейзажами нашей Республики, взмыть в небо на высоту птичьего полета и убедиться что земля круглая.
 				</span>
 				</div>
 			</div>
 		</div>
 	</section>

  <section class="service" id="service">
    <div class="container text-center">
      <span class="title-service">Услуги</span>
      <div class="row justify-content-center" style="margin-top:5%;">
        <div class="col-md-3 service-card-1">
          <img class="card-img" src="../images/card_1_new.jpg"></img>
          <div class="col-md-10 card-descriptions mx-auto">
            <h5>Свобоный полет</h5>
           <p> Для того чтобы отправиться в полет Вам необходимо приобрести подарочнй сертификат на 2-х перосн. Обладатель сертификата получит возможность парить над землей в любой удобный день. Полет длится около 1 часа.</p>
          </div>
           <div class="col-md-8 card-descriptions-price">
           <p> от <span>14 000</span> руб</p>
          </div>
        </div>
        <div class="col-md-3 service-card-2">
          <img class="card-img" src="../images/card_2.jpg"></img>
          <div class="col-md-10 card-descriptions mx-auto">
            <h5>Подъемы на привязи</h5>
            <p>Во время подъемов воздушный шар зафиксирован очень прочными канатами, которые обеспечивают возможность подниматься на высоту в пределах 50 метров. Например, высота 8-ти этажного дома около 30 метров!</p>
          </div>
           <div class="col-md-8 card-descriptions-price">
            <p>от <span>20 000</span> руб</p>
          </div>
        </div>
        <div class="col-md-3 service-card-3">
         <img class="card-img" src="../images/card_3.jpg"></img>
          <div class="col-md-10 card-descriptions mx-auto">
            <h5>Реклама</h5>
            <p>Размещение рекламного полотнища на оболочке или корзине воздушного шара. Поднимем имя вашей компании до небес!</p>
          </div>
          <div class="col-md-8 card-descriptions-price">
           <p> <span>Цена договорная </span></p>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="comunication" id="comunication">

  <div class="container">
     <div class="row">
  <div class="col-md-12">
    <div class="inline">
      <form action="https://formspree.io/komi.balloon@yandex.ru" method="POST">
         <input type="hidden" name="_next" value="/index.html" />
         <input type="hidden" name="_subject" value="Сообщение с моего сайта" />
         <input type="text" name="_gotcha" style="display:none" />
         <p><input class="txt" type="text" name="Имя" required placeholder="Имя" /></p>
         <p><input class="txt" type="text" name="Телефон" required placeholder="Телефон" /></p>
         <p><input class="txt" type="email" name="Email" required placeholder="Email" /></p>
         <p><textarea class="txtarea" name="Сообщение" required placeholder="Ваше сообщение" rows="7"></textarea></p>
         <input id="send" type="submit" value="Оставить заявку на услугу" />
      </form>
    </div>
  </div>
  </div>
  </div>
</section> -->


<!--
<footer class="footer" id="contact">
  <div class="container links">
   <div class="telephone"> 8 (904) 103-43-36</div>
   <div class="mail"> komi.balloon@yandex.ru</div>
   <div class="social">
     <span id="vk"><a href="https://vk.com/fvrkru"><i class="fa fa-vk" aria-hidden="true"></i></a></span>
     <span id="in"><a href="https://www.instagram.com/komi_balloon/"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
   </div>
  </div>
</footer>
 </div> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#main-menu").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
    });
</script>

</body>
</html>
