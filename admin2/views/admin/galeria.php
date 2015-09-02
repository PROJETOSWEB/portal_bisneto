

<div class="page page-table" data-ng-controller="ListaComprasController">
	
    <h1 style="font-weight: 900;"><span class="glyphicon glyphicon-th"></span> GALERIAS</h1>
    <hr/ style="border: 1px solid #333;">
    <div class="divider"></div>
    <div class="divider"></div>

    <section class="panel panel-default table-dynamic">

        <div class="panel-heading">
        
        
        <a href="#/fotos_adc"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                </span> FOTOS</button>
        </a>
        
        </div>

        <div class="table-filters">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <form>
                        <input type="text"
                               placeholder="procure a foto aqui"
                               class="form-control"
                               data-ng-model="searchKeywords"
                               data-ng-keyup="search()">
                    </form>
                </div>
                <div class="col-sm-3 col-xs-6 filter-result-info">
                    <span>
                        exibindo <b>{{filteredStores.length}}</b> fotos de <b>{{stores.length}}</b> encontradas
                    </span>              
                </div>
            </div>
        </div>

        <table  class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th><div class="th">
                LENGENDA DA FOTO
                <span class="fa fa-angle-up"
                      data-ng-click=" order('name')"
                      data-ng-class="{
                                  active: row == 'name'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-name')"
                      data-ng-class="{
                                  active: row == '-name'
                              }"></span>
            </div></th>
            <th><div class="th" style="text-align: center;">
                DATA
                <span class="fa fa-angle-up"
                      data-ng-click=" order('price')"
                      data-ng-class="{
                                  active: row == 'price'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-price')"
                      data-ng-class="{
                                  active: row == '-price'
                              }"></span>
            </div></th>
            <th><div class="th" style="text-align: center;">
                POSTADO POR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('sales')"
                      data-ng-class="{
                                  active: row == 'sales'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-sales')"
                      data-ng-class="{
                                  active: row == '-sales'
                              }"></span>
            </div></th>
            
            
            <th><div class="th" style="text-align: center;">
                EDITAR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            
            <th><div class="th" style="text-align: center;">
                EXCLUIR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            </tr>
            </thead>

            <tbody>
                <tr data-ng-repeat="store in currentPageStores">
                    <td><a href="#">{{store.name}}</a></td>
                    <td style="text-align: center;">AHDUAD</td>
                    <td style="text-align: center;">{{store.rating}}</td>
                    <td style="text-align: center;"><a href="#"><img src="images/editar.png" alt="" /></a></td>
                    <td style="text-align: center;"><a href="#"><img src="images/excluir.png" alt="" /></a></td>
                </tr>
            </tbody>



        </table>

        <footer class="table-footer">
            <div class="row">
                <div class="col-md-6 page-num-info">
                    <span>
                        exibindo
                        <select data-ng-model="numPerPage"
                                data-ng-options="num for num in numPerPageOpt"
                                data-ng-change="onNumPerPageChange()">
                        </select> 
                        fotos por página
                    </span>
                </div>
                <div class="col-md-6 text-right pagination-container">
                    <pagination class="pagination-sm"
                                ng-model="currentPage"
                                total-items="filteredStores.length"
                                max-size="4"
                                ng-change="select(currentPage)"
                                items-per-page="numPerPage"
                                rotate="false"
                                previous-text="&lsaquo;" next-text="&rsaquo;"
                                boundary-links="true">

                    </pagination>
                </div>
            </div>
        </footer>
    </section>
</div>


<!-- •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••• -->
<hr/>

<div class="page page-table" data-ng-controller="ListaComprasController">
	
    <section class="panel panel-default table-dynamic">

        <div class="panel-heading">
        
        
        <a href="#/videos_adc"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                </span> VÍDEOS</button>
        </a>
        
        </div>

        <div class="table-filters">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <form>
                        <input type="text"
                               placeholder="procure o vídeo aqui"
                               class="form-control"
                               data-ng-model="searchKeywords"
                               data-ng-keyup="search()">
                    </form>
                </div>
                <div class="col-sm-3 col-xs-6 filter-result-info">
                    <span>
                        exibindo <b>{{filteredStores.length}}</b> fotos de <b>{{stores.length}}</b> encontradas
                    </span>              
                </div>
            </div>
        </div>

        <table  class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th><div class="th">
                LENGENDA DA VÍDEO
                <span class="fa fa-angle-up"
                      data-ng-click=" order('name')"
                      data-ng-class="{
                                  active: row == 'name'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-name')"
                      data-ng-class="{
                                  active: row == '-name'
                              }"></span>
            </div></th>
            <th><div class="th" style="text-align: center;">
                DATA
                <span class="fa fa-angle-up"
                      data-ng-click=" order('price')"
                      data-ng-class="{
                                  active: row == 'price'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-price')"
                      data-ng-class="{
                                  active: row == '-price'
                              }"></span>
            </div></th>
            <th><div class="th" style="text-align: center;">
                POSTADO POR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('sales')"
                      data-ng-class="{
                                  active: row == 'sales'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-sales')"
                      data-ng-class="{
                                  active: row == '-sales'
                              }"></span>
            </div></th>
            
            
            <th><div class="th" style="text-align: center;">
                EDITAR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            
            <th><div class="th" style="text-align: center;">
                EXCLUIR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            </tr>
            </thead>

            <tbody>
                <tr data-ng-repeat="store in currentPageStores">
                    <td><a href="#">{{store.name}}</a></td>
                    <td style="text-align: center;">AHDUAD</td>
                    <td style="text-align: center;">{{store.rating}}</td>
                    <td style="text-align: center;"><a href="#"><img src="images/editar.png" alt="" /></a></td>
                    <td style="text-align: center;"><a href="#"><img src="images/excluir.png" alt="" /></a></td>
                </tr>
            </tbody>



        </table>

        <footer class="table-footer">
            <div class="row">
                <div class="col-md-6 page-num-info">
                    <span>
                        exibindo
                        <select data-ng-model="numPerPage"
                                data-ng-options="num for num in numPerPageOpt"
                                data-ng-change="onNumPerPageChange()">
                        </select> 
                        vídeos por página
                    </span>
                </div>
                <div class="col-md-6 text-right pagination-container">
                    <pagination class="pagination-sm"
                                ng-model="currentPage"
                                total-items="filteredStores.length"
                                max-size="4"
                                ng-change="select(currentPage)"
                                items-per-page="numPerPage"
                                rotate="false"
                                previous-text="&lsaquo;" next-text="&rsaquo;"
                                boundary-links="true">

                    </pagination>
                </div>
            </div>
        </footer>
    </section>
</div>


<!-- •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••• -->
<hr/>

<div class="page page-table" data-ng-controller="ListaComprasController">
	

    <section class="panel panel-default table-dynamic">

        <div class="panel-heading">
        
        
        <a href="#/banner_adc"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                </span> BANNER</button>
        </a>
        
        </div>

        <div class="table-filters">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <form>
                        <input type="text"
                               placeholder="procure o banner aqui"
                               class="form-control"
                               data-ng-model="searchKeywords"
                               data-ng-keyup="search()">
                    </form>
                </div>
                <div class="col-sm-3 col-xs-6 filter-result-info">
                    <span>
                        exibindo <b>{{filteredStores.length}}</b> banners de <b>{{stores.length}}</b> encontrados
                    </span>              
                </div>
            </div>
        </div>

        <table  class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th><div class="th">
                TÍTULO DO BANNER
                <span class="fa fa-angle-up"
                      data-ng-click=" order('name')"
                      data-ng-class="{
                                  active: row == 'name'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-name')"
                      data-ng-class="{
                                  active: row == '-name'
                              }"></span>
            </div></th>
            <th><div class="th" style="text-align: center;">
                DATA
                <span class="fa fa-angle-up"
                      data-ng-click=" order('price')"
                      data-ng-class="{
                                  active: row == 'price'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-price')"
                      data-ng-class="{
                                  active: row == '-price'
                              }"></span>
            </div></th>
            <th><div class="th" style="text-align: center;">
                POSTADO POR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('sales')"
                      data-ng-class="{
                                  active: row == 'sales'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-sales')"
                      data-ng-class="{
                                  active: row == '-sales'
                              }"></span>
            </div></th>
            
            <th><div class="th" style="text-align: center;">
                PUBLICADO?
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            
            <th><div class="th" style="text-align: center;">
                EDITAR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            
            <th><div class="th" style="text-align: center;">
                EXCLUIR
                <span class="fa fa-angle-up"
                      data-ng-click=" order('rating')"
                      data-ng-class="{
                                  active: row == 'rating'
                              }"></span>
                <span class="fa fa-angle-down"
                      data-ng-click=" order('-rating')"
                      data-ng-class="{
                                  active: row == '-rating'
                              }"></span>
            </div></th>
            </tr>
            </thead>

            <tbody>
                <tr data-ng-repeat="store in currentPageStores">
                    <td><a href="#">{{store.name}}</a></td>
                    <td style="text-align: center;">AHDUAD</td>
                    <td style="text-align: center;">{{store.rating}}</td>
                    <td style="text-align: center;"><a href="#"><img src="images/sim.png" alt="" /></a></td> <!-- aqui é só trocar o SIM pelo NAO, QUE MUDA O STATUS-->
                    <td style="text-align: center;"><a href="#"><img src="images/editar.png" alt="" /></a></td>
                    <td style="text-align: center;"><a href="#"><img src="images/excluir.png" alt="" /></a></td>
                </tr>
            </tbody>



        </table>

        <footer class="table-footer">
            <div class="row">
                <div class="col-md-6 page-num-info">
                    <span>
                        exibindo
                        <select data-ng-model="numPerPage"
                                data-ng-options="num for num in numPerPageOpt"
                                data-ng-change="onNumPerPageChange()">
                        </select> 
                        banners por página
                    </span>
                </div>
                <div class="col-md-6 text-right pagination-container">
                    <pagination class="pagination-sm"
                                ng-model="currentPage"
                                total-items="filteredStores.length"
                                max-size="4"
                                ng-change="select(currentPage)"
                                items-per-page="numPerPage"
                                rotate="false"
                                previous-text="&lsaquo;" next-text="&rsaquo;"
                                boundary-links="true">

                    </pagination>
                </div>
            </div>
        </footer>
    </section>
</div>

<script>
    function ListaComprasController($scope,$filter) {
         $scope.stores = [
                {name: "Nijiya Market", price: "$$", sales: 292, rating: 4},
              
            ], $scope.searchKeywords = "", $scope.filteredStores = [], $scope.row = "", $scope.select = function (page) {
                var end, start;
                
                return start = (page - 1) * $scope.numPerPage, end = start + $scope.numPerPage, $scope.currentPageStores = $scope.filteredStores.slice(start, end)
            }, $scope.onFilterChange = function () {
                return $scope.select(1), $scope.currentPage = 1, $scope.row = ""
            }, $scope.onNumPerPageChange = function () {
                return $scope.select(1), $scope.currentPage = 1
            }, $scope.onOrderChange = function () {
                return $scope.select(1), $scope.currentPage = 1
            }, $scope.search = function () {
                return $scope.filteredStores = $filter("filter")($scope.stores, $scope.searchKeywords), $scope.onFilterChange()
            }, $scope.order = function (rowName) {
                return $scope.row !== rowName ? ($scope.row = rowName, $scope.filteredStores = $filter("orderBy")($scope.stores, rowName), $scope.onOrderChange()) : void 0
            }, $scope.numPerPageOpt = [3, 5, 10, 20], $scope.numPerPage = $scope.numPerPageOpt[2], $scope.currentPage = 1, $scope.currentPageStores = [], (init = function () {
                return $scope.search(), $scope.select($scope.currentPage)
            })()
        
        
    }
</script>

<!--<div ng-controller="ListaComprasController">
    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="item in itens">
                <td><strong>{{ item.produto}}</strong></td>
                <td>{{ item.quantidade}}</td>
            </tr>
        </tbody>
    </table>
</div>-->