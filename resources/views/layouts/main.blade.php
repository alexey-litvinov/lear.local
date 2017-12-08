@section('head')
  <!doctype html>
  <html lang="ru">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="/img/logo-mini.png">

      <title>{{$title}} | Финансовая компания Рост</title>

      <!-- Bootstrap core CSS -->
      <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
      <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">


    </head>
@show

{{-- Всплывашка с заявкой на кредит --}}
  <body>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Заявка на кредит</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{ Form::open() }}
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Ваше имя']) }}
            {!! Form::close() !!}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary">Отправить</button>
          </div>
        </div>
      </div>
    </div>
{{-- Всплывашка с заявкой на кредит --}}
    @section('header')
    <header class="row">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info col-12">
        <a class="navbar-brand text-success col-2" href="/"><img src="/img/logo-mini.png" width="30" height="30" class="d-inline-block align-top" alt=""> Финансовая компания "Рост"</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto col-7">
            <li class="nav-item">
              <a class="nav-link text-dark ion-ios-home-outline" href="{{route('index')}}"> Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark ion-ios-people" href="{{route('index') }}"> Частным лицам</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark ion-ios-people" href="{{route('index')}}"> Юридическим лицам</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark ion-location" href="{{route('index')}}"> Отделения</a>
            </li>
            <li class="nav-item">
              <button class="text-center btn btn-danger" data-toggle="modal" data-target="#exampleModal">Оставить заявку на кредит</button>
            </li>
          </ul>

          <ul class="navbar-nav mr-auto row align-items-end">

            <li class="nav-item">
              <a class="nav-link text-dark ion-briefcase" href="{{route('vacancies')}}"> Вакансии</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark ion-ios-home" href="{{route('contacts')}}"> Контакты</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  @endsection
    @yield('header')

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="/img/2.jpeg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="/img/1.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="/img/3.jpeg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      @yield('content')

      @section('footer')
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a class="to-top" href="#">В начало страницы</a></p>
          <p>&copy; 2017 Финансовая компания Рост &middot; <a href="{{route('vacancies')}}">Вакансии</a> &middot; <a href="{{route('contacts')}}">Контакты</a></p>
        </footer>
      @endsection
      @yield('footer')

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
