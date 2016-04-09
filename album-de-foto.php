<?php 
    $fotos = array(
        '1.jpg',
        '20130127_165715.jpg',
        'DSC02055.JPG',        
        'G0250336.JPG',        
        'G0331242.JPG',        
        'G0441452.JPG',        
        'G0561616.JPG',
        'G0620836.JPG',
        "G0710963.JPG",
        "GOPR1856.JPG",
        "IMG-20130629-WA0000.jpg",
        "IMG_0059.JPG",
        "IMG_0072.JPG",
        "IMG_0230.JPG",
        "IMG_0231.JPG",
        "IMG_0233.JPG",
        "IMG_0236.JPG",
        "IMG_0333.JPG",
        "IMG_0337.JPG",
        "IMG_0441.JPG",
        "IMG_0515.JPG",
        "IMG_0631.JPG",
        "IMG_1533.JPG",
        "IMG_1744.JPG",
        "IMG_1841.JPG",
        "IMG_4014.JPG",
        "aniver.jpg",
        
    );
?>

<div id="album"class="sessao">

    <div class="row">
        <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 ">
            <div class="rococo">
                <img src="image/png/rococo-passarinho-coracao-2.png">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 ">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                   <?php foreach ($fotos as $i=>$foto): ?>
                    <div class="item <?php echo ($i == 0) ? 'active' : '' ;?>">
                        <img src="image/casal/<?php echo $foto; ?>" alt="">
                    </div>                                       
                   <?php endforeach;?>
                   
                </div>
                    
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>


</div><!-- album -->