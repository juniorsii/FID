<?php 
include 'menu.php'
?>   
<!DOCTYPE html>
<header>

<title>Pesquisa | FID - Faculdade Internacional do Delta</title>   
<div class="detail-header detail-header-blog-category">
            <div class="container">
                <h1 style="padding-right: 50px;"><i class="far fa-frown"></i></i></h1>
            </div>
            <div class="background"></div>
        </div>

    </header>    
    <!-- end of banner header -->
    <main>    
        <div class="container">
            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogs-search">


                <div class="nothing-found-big">
                    <span>Desculpe</span>
                    <div class="nothing">Nada encontrado</div>
                    <div class="bottom">Nada corresponde aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.</div>
                </div>

                <div class="row">
                    <div class="widget-search col-lg-4  col-md-4  col-sm-4  col-xs-12">
                        <form data-toggle="validator" action="blog-search.html" method="GET"> 
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pesquisar agora" id="txtSearch">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">
                                        Ir
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </article>


        </div>

    </main>

</html>

<?php 
include 'footer.php'
?>  