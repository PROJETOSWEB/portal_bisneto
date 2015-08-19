<?php include 'application/views/includes.php'; ?>
<?php include 'application/views/header.php'; ?>    

<section  class="panel" id='sectionp'>
    <header class="panel-heading">
        <i class="fa fa-pencil"></i>
        CADASTRO DE CÉLULA
    </header>

    <div  class="panel-body">
        <?php echo form_open('celula/celulas/create', array('class' => 'form-horizontal validatable', 'target' => '_top', 'enctype' => 'multipart/form-data')); ?>
        <form method="post" action="<?php echo base_url(); ?>index.php?celula/celulas/create/" class="form-horizontal validatable" enctype="multipart/form-data">

            <div  id='div_separa' style="margin-left: 20px;">

                <div class="form-group">
                    <label id="label_form" >Tipo de Celula</label>

                    <select required="tipo_celula" class="form-control" id="input_form" name="tipo_celula">
                        <option value="">SELECIONE O TIPO DE CÉLULA</option>
                        <option value="1">M12</option>
                        <option value="2">CONSOLIDAÇÃO</option>
                        <option value="3">EVANGELISTA</option>
                    </select>
                </div>


                <div class="form-group">
                    <label id="label_form">Nome</label>
                    <input type="text" class="form-control" required="nome" name="nome" id="input_form" >
                </div>


                <div class="form-group">
                    <label id="label_form">Endereço</label>
                    <input type="text" class="form-control" required="endereco" name="endereco" id="input_form">
                </div>


                <div class="form-group">
                    <label id="label_form">Bairro</label>

                    <select  class="form-control" id="input_form" required="bairro" name="bairro">
                        <option value="">SELECIONE O BAIRRO</option>

                        <?php
                        $celula = $this->db->get('bairros')->result_array();

                        foreach ($celula as $row):
                            ?>
                            <option value="<?php echo $row['bairro_id']; ?>"><?php echo $row['nome'] ?></option>
                            <?php
                        endforeach;
                        ?>
                    </select>

                </div>

                <div class="form-group">
                    <label id="label_form">Latitude</label>
                    <input type="text" class="form-control" name="latitude" id="input_form" >
                </div>
            </div>



            <div id='div_separa'>

                <div class="form-group">
                    <label id="label_form">Longitude</label>
                    <input type="text" class="form-control" name="longitude" id="input_form" >
                </div>


                <div class="form-group">
                    <label id="label_form">Horario</label>
                    <input type="text" class="form-control" required="horario" name="horario" id="input_form" >
                </div>

                <div class="form-group">
                    <label id='label_form'>N° de discípulos</label>
                    <input type="text" class="form-control" id="input_form" required="discipulos" name="discipulos" >
                </div>


                <div class="form-group">
                    <label id='label_form'>Genero</label>
                    <select  class="form-control" id="input_form" required="genero" name=genero"">
                        <option value="">SELECIONE O GENERO</option>
                        <option value="1">MASCULINO</option>
                        <option value="2">FEMININO</option>
                        <option value="3">MISTO</option>
                    </select>
                </div>


                <div class="form-group">
                    <label id='label_form'>Dias de reuniões</label>
                </div>


                <div class="form-group">

                    <label id='label_form'>Domingo</label>
                    <input id='checkinput' type='checkbox' value='1' name='dias[]'>

                    <label id='label_form'>Segunda</label>
                    <input id='checkinput' type='checkbox' value='2' name='dias[]'>

                    <label id='label_form'>Terça</label>
                    <input id='checkinput' type='checkbox' value='3' name='dias[]'>

                    <label id='label_form'>Quarta</label>
                    <input id='checkinput' type='checkbox'  value='4' name='dias[]'>


                    <label id='label_form'>Quinta</label>
                    <input id='checkinput' type='checkbox' value='5' name='dias[]'>

                    <label id='label_form'>Sexta</label>
                    <input id='checkinput' type='checkbox' value='6' name='dias[]'>

                    <label id='label_form'>Sábado</label>
                    <input id='checkinput' type='checkbox' value='7' name='dias[]'>
                </div>

            </div>

    </div>

</section>

<div id='barra_btn'>
    <button type="submit" class="btn bg-primary"><i class="fa fa-check-square"></i> Cadastrar Célula</button>
</div>
</form>