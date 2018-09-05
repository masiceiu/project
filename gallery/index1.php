<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>PhoneBook App</title>
</head>

<body ng-app="phonebookApp" ng-controller="appController">
<div class="container">
	  <div class="row">
	  	<div class="col-sm-3">
	  		<div class="col-sm-12 left-box">
	  			<h3>Contact Groups</h3><hr/>
	  			<ul>
	  				<li><label><input type="radio" name='group' ng-model="filters.group" value="0"> All </label></li>
	  				<li ng-repeat="group in groups" >
	  					<label><input type="radio" name='group' ng-model="filters.group" value="{{group.id}}"> {{group.name}}</label>
	  				</li>
	  			</ul>
	  		</div>
	  		<div class="clearfix"></div>
	  	</div>
		<div class="col-sm-9">
				<div class="row section-head">Contact Info</div>
				<div class="row user-info">
					<div class="form-group">
					    Search: <input type="text" class="form-control" placeholder="Start Typing" ng-model='search'/>
					  </div>
					  <table class="table table-striped">
					  	<thead>
					  		<tr><th>#</th><th>Name</th><th>Phone</th></tr>
					  	</thead>
					  	<tbody ng-repeat="x in persons | filter:search " ng-show="x.Group==filters.group || filters.group==0">
					  		<tr>
					  			<td>{{x.Id}}</td><td> {{x.Name}} </td><td>{{x.Phone}}</td>
					  		</tr>
					  	</tbody>
					  </table>
				</div>
		</div>
	</div>
</div>
<footer>
	<div class="top-bar bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <span>Code By: <a href='http://www.iucoder.com'>Asaduz Zaman</a></span>
                    </div>
                    
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
</footer> 
        
	<script src="js/angular.min.js"></script>
	<script src="js/appController.js"></script>

</body>
</html>
