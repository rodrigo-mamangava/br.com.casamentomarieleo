<?php 
    $menu = array();
    
    $menu[] = array('sobre-nos', 'Sobre os Noivos');
    $menu[] = array('cerimonia', 'Cerimônia');
    $menu[] = array('recepcao', 'Recepção');
    $menu[] = array('nossos-pais', 'Nossos pais');
    $menu[] = array('padrinhos', 'Padrinhos');
    $menu[] = array('daminhas', 'Daminhas e pajem');
    $menu[] = array('lista', 'Lista de Presentes');
    $menu[] = array('hospedagem', 'Hospedagem');
    $menu[] = array('mensagens', 'Mensagens');
    $menu[] = array('musica', 'Músicas');
    $menu[] = array('rsvp', 'Confirmar presença');
    $menu[] = array('album', 'Álbum de fotos');
    
?>

<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-site" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-site" >
        <ul class="nav navbar-nav">
            <?php foreach ($menu as $item):?>
                <li><a class="menu" href="#<?php echo $item[0]?>"><?php echo $item[1]?></a></li>
            <?php endforeach;?>
            
<!--            <li><a class="menu" href="#nossos-pais">    Nossos pais</a></li>
            <li><a class="menu" href="#padrinhos">      Padrinhos</a></li>
            <li><a class="menu" href="#daminhas">       Daminhas e pajem</a></li>
            <li><a class="menu" href="#lista">          Lista de Presentes</a></li>
            <li><a class="menu" href="#mensagens">      Mensagens</a></li>
            <li><a class="menu" href="#musica">         Mísicas</a></li>
            <li><a class="menu" href="#rsvp">           Confirmar presença</a></li>
            <li><a class="menu" href="#album">          Álbum de fotos</a></li>-->
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->

