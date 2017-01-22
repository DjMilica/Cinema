<header >
    <nav class="navbar navbar-default ">
        <div class="container-fluid our">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav">

                    <li><a href="{{ route('aboutUs') }}">O nama</a></li>
                    <li><a href="{{ route('movies') }}">Filmovi</a></li>
                    <li><a href="<?php echo url('dashboard/repertoar'); ?>">Repertoar</a></li>
                    <li><a href="{{ route('rating') }}">Ocenjivanje</a></li>
                    <li><a href="{{ route('contact') }}">Kontakt</a></li>


                </ul>


                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{ route('logout') }}">Odjavite se</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>