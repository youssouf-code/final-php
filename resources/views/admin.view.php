<?php require "partials/header.php" ?>


    <h1 class="redh1">Im The Admin</h1>


	<div class="dropdown"> 
				    <button type="button" class="btn btn-secondary btn-lg btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADD NEW USER
				    </button>
		<div  class="container">    
            <!-- FOR THE DROPDOWN BUTTON TO WORK --replace--
            	class="container" with class="dropdown-menu"
             ////////////   in the upper div** ////////////
             **px-4 py-3  the origenal class for the next form** 
         	-->
            	<form class="px-4 py-3">
		           	<div class="form-group">	               
				                <div class="form-group">
				                    <label for="formGroupExampleInput">First Name</label>
				                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
				                </div>
				                <div class="form-group">
				                    <label for="formGroupExampleInput">Last Name</label>
				                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name">
				                </div>
				                <div class="form-group">
				                    <label for="exampleDropdownFormEmail1">Email address</label>
				                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
				                </div>
				                    <div class="form-group">
				                        <label for="formGroupExampleInput2">Phone Number</label>
				                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number">
				                    </div>
				                <div class="form-group">
				                    <label for="exampleDropdownFormPassword1">Password</label>
				                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
				                </div>
				                <div class="form-group">
				                	<label for="gender">Gender :</label>
					                	<select>
										    <option value="" selected disabled>select your gender</option>
										    <option value="Male">Male</option>
										    <option value="Female">Female</option>
										    <option value="Other">Other</option>						    
										</select>
										

				                </div>
				    			<div class="form-group">
					                <label for="age">Age</label>                
					                <input type="Number" class="form-control" maxlength="2" min="1" max="99" id="age"> <!-- maxlength works only with type="Number" --> 
					            </div>	
								<div class="form-group">
									<label for="Reset progress">Reset progress</label>
									<input type="checkbox" checked data-toggle="toggle">
									 <!--  toggle to be Installed      http://www.bootstraptoggle.com/  -->
									<div class="progress">	
									    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
									    </div>
									</div>
								</div>
					</div>		
           		</form>	
				            <div class="dropdown-divider"></div>
				          	  <button type="button" class="btn btn-success btn-lg btn-block">SAVE</button>
				        	</div>
   				   				
	</div>
</div>	


<hr>
<!-- /////////////////////////// to edit users ///////////////////// -------->

<h1 class="redh1">Existing Users</h1>

<div class="dropdown">
<div class="input-group">
    <input type="text" class="form-control" placeholder="User Name" aria-label="Text input with dropdown button">
    <div class="input-group-append">
    	<button type="button" class="btn btn-danger">Delete</button>
        <button class="btn btn-info dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</button>
        
			    <div id="dropdown-users" class="dropdown-menu">
			            <form class="px-4 py-3">
			                <div class="form-group">
				                <div class="form-group">
				                    <label for="formGroupExampleInput">User Name</label>
				                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="User Name">
				                </div>
				                <div class="form-group">
				                    <label for="exampleDropdownFormEmail1">Email address</label>
				                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
				                </div>
				                    <div class="form-group">
				                        <label for="formGroupExampleInput2">Phone Number</label>
				                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number">
				                    </div>
				                <div class="form-group">
				                    <label for="exampleDropdownFormPassword1">Password</label>
				                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
				                </div>
				                <div class="form-group">
				                	<label for="gender">Gender :</label>
				                	<select>
									    <option value="" selected disabled>select your gender</option>
									    <option value="Male">Male</option>
									    <option value="Female">Female</option>
									    <option value="Other">Other</option>						    
									</select>
				                </div>
				    			<div class="form-group">
					                <label for="age">Age</label>                
					                <input type="Number" class="form-control" maxlength="2" min="1" max="99" id="age"> <!-- maxlength works only with type="Number" --> 
					            </div>					
								<div class="form-group">
									<label for="Reset progress">Reset progress</label>
									<input type="checkbox" checked data-toggle="toggle">
									 <!--  toggle to be Installed      http://www.bootstraptoggle.com/  -->
									<div class="progress">	
									    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
									</div>

							</div>	

			            </form>
</div>			            
					    <div class="dropdown-divider"></div>
		           					<button type="button" class="btn btn-success btn-lg btn-block">SAVE</button>
		        		</div>
    </div>
</div>


<hr>
<div>
	<p>
		
	</p>
	<p>
		
	</p>
</div>

<!--<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>


    </tr>

    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>

        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
-->
<?php require "partials/footer.php" ?>
