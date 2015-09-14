<div class="page">
    <div class="row">
        <div class="col-md-6">
            <section class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO de ARQUIVOS</strong></div>
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
			            	
                    
                    	<div class="col-sm-7">
                    		<label for="exampleInputEmail1">NOME DO ARQUIVO</label>
                    	    <input tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                    	</div>
                    	
                    	<div class="panel-body">
                    	    <span class="ui-select">
                    	        <select>
                    	            <option>TIPO DE ARQUIVO</option>
                    	            <option>•••••••••••••••</option>
                    	            <option>PDF</option>
                    	            <option>JPG</option>
                    	            <option>PNG</option>
                    	            <option>TIF</option>
                    	            <option>DOC</option>
                    	            <option>XLS</option>
                    	        </select>
                    	    </span>
                    	</div>
                    
                    	<div class="col-sm-5">
                    	    <div class="space"></div>
                    	    <input type="file" title="carregar arquivo" data-ui-file-upload>
                    	 </div>
                    	 
                    	 <br/>
                    	 <br/>
                    	<div class="divider"></div>
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