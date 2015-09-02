<div class="page">
    <div class="row">
        <div class="col-md-6">
            <section class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO de INFORMATIVOS</strong></div>
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
			            	
                    
                    	<div class="col-sm-4">
                    		<label for="exampleInputEmail1">Nº da EDIÇÃO</label>
                    	    <input tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                    	</div>
                    	
                    	<div class="divider"></div>
                    	<br/>
                    	<div class="divider"></div>
                    	<br/>
                    	<hr/>
                    	<div class="row ">
                    	
                    		<div class="form-group col-sm-5">
                    			<label for="exampleInputEmail1">USAR IMAGENS COM TAM. PADRÃO 500x700px</label>
                    			<img style="border-radius: 5px; width: 90%; margin-bottom: 15px;" src="images/capa-informativo.jpg" alt="" />
                    			<input type="file" title="SELECIONE A CAPA • JPG" data-ui-file-upload class="btn-reverse">
                    		</div>
                    	</div>
                    	
                    	<div class="divider"></div>
                    	<hr/>
                    	<div class="divider"></div>
                    	
                    	<div class="row ">
                    		<div class="form-group col-sm-4">
                    			<input type="file" title="SELECIONE O AQRQUIVO • PDF" data-ui-file-upload class="btn-reverse">
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