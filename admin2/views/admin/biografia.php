<div class="page page-table" data-ng-controller="ListaComprasController">

    <a href="#/biografia_adc"><button class="btn btn-success"><span class="glyphicon glyphicon-plus">
            </span> ADICIONAR BIOGRAFIA</button>
    </a>
    <div class="divider"></div>
    <div class="divider"></div>

    <section class="panel panel-default table-dynamic">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> BIOGRAFIA</strong></div>

        <div class="table-filters">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <form>
                        <input type="text"
                               placeholder="Search..."
                               class="form-control"
                               data-ng-model="searchKeywords"
                               data-ng-keyup="search()">
                    </form>
                </div>
                <div class="col-sm-3 col-xs-6 filter-result-info">
                    <span>
                        Showing {{filteredStores.length}}/{{stores.length}} entries
                    </span>              
                </div>
            </div>
        </div>

        <table  class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th><div class="th">
                Texto
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
            <th><div class="th">
                Imagem
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
            <th><div class="th">
                Legenda
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
            <th><div class="th">
                AÇÕES
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
                    <td>{{store.name}}</td>
                    <td>AHDUAD</td>
                    <td>DUSAD</td>
                    <td>{{store.rating}}</td>
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
                        itens por página
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