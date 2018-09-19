<?php 
// This line add my private CSS and JS to the Module 
\humhub\modules\elearning\assets\ElearningAsset::register($this);


?>

<div class="container-fluid">
	<div class="row">
	
	
	
	
		<div class="col-md-9">
		
			<nav class="navbar navbar-default ">
  <div class="container-fluid ">
     
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="#">ALL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Videos <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Training Docs</a></li>
        <li><a href="#">Communications</a></li>
        <li><a href="#">Images</a></li>
        <li><a href="#">Connect contenent</a></li>

       <!-- -- MENU WITH DROP DOWN IF WE NEED IT NEXT TIME JUST UNCOMMENT 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        -->
        
        
      </ul>
     
    
    </div><!-- /.navbar-collapse -->
    
    
    
  </div><!-- /.container-fluid -->
</nav>

<div class="panel panel-default">
    <div class="panel-heading">
        <?= $content ?>	
 
        
        <!-- PAGNINATION -->	
<div class="text-center">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#">Previous</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
		
		</div>
	
		</div>	
	<!-- END -->	
    </div>
			
</div>			




	
			
			
			
	
		<!-- RIGHT MENU -->
		<div class="col-md-3">
        	<div class="panel panel-info">
              <div class="panel-heading">CATEGORIES</div>
              <div class="panel-body">Modem</div>
              <div class="panel-body">Process</div>
              <div class="panel-body">BleuPrint</div>
              <div class="panel-body">Wireless</div>
            </div>
		</div>
		<!--END -->
		<!-- RIGHT ADVERTISEMENT -->
		<div class="col-md-3">
        	<div class="panel panel-info">
              <div class="panel-heading">News</div>
              
              
              
              
            </div>
		</div>
		<!--END -->
		
		
	</div>
	
	
	<!-- ALERT MESSAGE -->			
			<div class="alert alert-dismissable alert-danger">
				 
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					×
				</button>
				 <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
			</div>
<!-- END -->
	
	
	<div class="row">
			<div class="col-md-4">
		<div class="panel panel-default">
                  <div class="panel-body">
			<div class="row">
				<div class="col-md-6">
				
                    Basic panel example
                    h3. Lorem ipsum dolor sit amet.
                  
					<h3>
						
					</h3>
				</div>
				<div class="col-md-6">
					
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
					
				</div>
			</div>
				</div>
		</div>
		</div>
			<div class="col-md-4">
		<div class="panel panel-default">
                  <div class="panel-body">
			<div class="row">
				<div class="col-md-6">
				
                    Basic panel example
                    h3. Lorem ipsum dolor sit amet.
                  
					<h3>
						
					</h3>
				</div>
				<div class="col-md-6">
					
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
					
				</div>
			</div>
				</div>
		</div>
		</div>
		<div class="col-md-4">
		<div class="panel panel-default">
                  <div class="panel-body">
			<div class="row">
				<div class="col-md-6">
				
                    Basic panel example
                    h3. Lorem ipsum dolor sit amet.
                  
					<h3>
						
					</h3>
				</div>
				<div class="col-md-6">
					
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
					
				</div>
			</div>
				</div>
		</div>
		</div>
	</div>
</div>