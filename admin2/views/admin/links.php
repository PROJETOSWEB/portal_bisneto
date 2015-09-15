<?php
include '../../conection/conexao.php';
?>

<div class="page page-table" data-ng-controller="ListaComprasController">
    <br/><br/>
    <a href="#/links_adc"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
            </span> LINKS</button>
    </a>
    <div class="divider"></div>
    <div class="divider"></div>

    <section class="panel panel-default table-dynamic">

        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> LINKS ÚTEIS</strong></div>

        <div class="table-filters">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <form>
                        <input type="text"
                               placeholder="procurando pela edição..."
                               class="form-control"
                               data-ng-model="searchKeywords"
                               data-ng-keyup="search()">
                    </form>
                </div>
                <div class="col-sm-3 col-xs-6 filter-result-info">
                    <span>
                        exibindo {{filteredStores.length}} links de {{stores.length}} encontrados
                    </span>              
                </div>
            </div>
        </div>

        <table  class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th><div class="th">
                NOME DO LINK
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

            <tbody  data-ng-controller="ModalDemoCtrl" >

                <tr data-ng-repeat="store in currentPageStores">
                    <td><a href="#">{{store.name}}</a></td>
                    <td style="text-align: center;">{{store.responsavel}}</td>
                    <td style="text-align: center;"><a href="#"><img src="images/editar.png" alt="" /></a></td>
                    <td style="text-align: center;"><a href="" ng-click="open(store.id)"><img src="images/excluir.png" alt="" /></a></td>
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
                        links por página
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
    function ListaComprasController($scope, $filter) {
        $scope.stores = [
<?php
$sql_links = "SELECT links_id,links.nome as link, usuario.nome as usuario FROM links INNER JOIN
                            usuario ON links.usuario_id = usuario.usuario_id";
$executa_sql_links = mysql_query($sql_links)or die(mysql_error());

while ($array_link = mysql_fetch_array($executa_sql_links)) {

    echo "{name:" . "'" . $array_link['link'] . "', responsavel:" . "'" . $array_link['usuario'] . "', id:" . "'" . $array_link['links_id'] . "'},";
}
?>

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



<div class="panel-body" data-ng-controller="ModalDemoCtrl">
    
    <script type="text/ng-template" id="myModalContent.html">

        <div class="modal-header">
        <h3>Excluir Link</h3>
        </div>
        <div class="modal-body">
        Tem certeza que deseja excluir este link?
        </div>
        <div class="modal-footer">
        <a href="#/excluir_links?"> <button class="btn btn-primary">OK</button></a>
        <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
        </div>

    </script>

    <!--<button class="btn btn-primary" ng-click="open()">Open me!</button>-->
    
    <div class="divider"></div>

    <div class="callout callout-info" ng-show="selected">
        <p>Selection from a modal: {{ selected}}</p>
    </div>
    
</div>



