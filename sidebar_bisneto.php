                    <div class="col-lg-3 col-md-3 col-sm-4 sidebar">                            <?php include './menu_lateral_bisneto.php'; ?>                            <hr style="border-bottom: 1px solid #EDEDED;">                            <?php                            $select_video = "select * from videos order by videos_id DESC LIMIT 0,1";                            $executa_select_video = mysql_query($select_video)or die(mysql_error());                            $dados_video = mysql_fetch_array($executa_select_video);                            ?>                            <!-- Featured Video -->                            <div class="sidebar-box featured-video animate-onscroll fundo-listra">                                <h3><strong>VÍDEO</strong></h3>                                <iframe src="https://www.youtube.com/embed/<?php echo $dados_video['video']; ?>?wmode=transparent" allowfullscreen="" height="315" width="560"></iframe>                                <a href="videos.php" class="button transparent button-arrow">todos os videos</a>                            </div>                            <!-- /Featured Video -->                            <hr style="border-bottom: 1px solid #EDEDED;">                                                        <?php                            $seleciona_informativo = "SELECT * FROM informativo order by informativo_id DESC LIMIT 0,1";                            $executa_seleciona_informativo = mysql_query($seleciona_informativo)or die(mysql_error());                            $dados_informativo = mysql_fetch_array($executa_seleciona_informativo);                            ?>                            <!-- Informativo -->                            <div class="sidebar-box image-banner animate-onscroll">                                <a href="admin/imagens/informativo/arquivo/<?php echo $dados_informativo['pdf']; ?>" target="_blank">                                    <img src="admin/imagens/informativo/<?php echo $dados_informativo['img']; ?>" alt="">                                    <h3>INFORMATIVO EDIÇÃO <?php echo $dados_informativo['edicao']; ?></h3>                                </a>                                <a href="lista-informativos.php" class="button  button-arrow">VER TODOS</span></a>                            </div>                            <!-- /informativo -->                                                        <hr style="border-bottom: 1px solid #EDEDED;">                                                        <!-- Instagram Photos -->                            <div class="sidebar-box white flickr-photos animate-onscroll">                                <h3>Nosso Instagram</h3>                                <ul id="instagram-feed">                                </ul>                            </div>                            <!-- /Instagram Photos -->	                            <hr style="border-bottom: 1px solid #EDEDED;">		                           <!-- SoundCloud -->                               <iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/48918610&amp;color=0066cc&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>                           <!-- /SoundCloud -->	                                                       <hr style="border-bottom: 1px solid #EDEDED;">                        </div>