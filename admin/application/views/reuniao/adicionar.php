<?php include 'application/views/includes.php'; ?>
<?php include 'application/views/header.php'; ?>    

<section class="panel" style='margin-left: 15px; margin-top: 15px; margin-right: 15px;'>
    <header class="panel-heading">
        CADASTRO DE REUNIÃO
    </header>
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</section>
