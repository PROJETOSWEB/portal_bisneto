<div class="page">
    <div class="row">
        <div class="col-md-6">
            <section class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO de FOTOS</strong></div>
                <div class="panel-body">
                    <form role="form">
                    
			        <div class="panel-body" data-ng-controller="DatepickerDemoCtrl" style="margin-bottom: 30px;">
			            <div class="row">
			                <div class="col-sm-7">
			
			                    <div class="input-group ui-datepicker">
			                        <input type="text" 
			                               class="form-control"
			                               datepicker-popup="{{format}}"
			                               ng-model="dt"
			                               is-open="opened"
			                               min="minDate"
			                               max="'2015-06-22'"
			                               datepicker-options="dateOptions" 
			                               ng-required="true" 
			                               close-text="Close">
			                        <span class="input-group-addon" ng-click="open($event)"><i class="fa fa-calendar"></i></span>
			                    </div>
			                </div>
			
			            </div>
			        </div>                    	
			            	
                    
                    	<div class="form-group">
                    		<label for="exampleInputEmail1">LEGENDA DA FOTO</label>
                    	    <input tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                    	</div>
                    
                    	<div class="divider"></div>
                    		<hr/>	
						<div class="row ">
							<div class="form-group col-sm-6">
								<label for="exampleInputEmail1">USAR IMAGENS COM TAM. PADRÃO 800x430px</label>
								<img style="border-radius: 5px; width: 90%; margin-bottom: 15px;" src="images/banner-footer.jpg" alt="" />
								<input type="file" title="SELECIONE A IMAGEM" data-ui-file-upload class="btn-reverse">
							</div>
                        </div>

                        <div class="divider"></div>
                        <hr/>
                        <div class="divider"></div>
                        

                        <button type="submit" class="btn btn-primary">SALVAR </button>
                    </form>      
                </div>
            </section>
        </div>
    </div>

</div>