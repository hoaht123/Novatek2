<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Novatek</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="favicon.ico"> 
	<link rel="apple-touch-icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- FontAwesome JS-->
    <script defer src="{{asset('plugins/fontawesome/js/all.min.js')}}"></script>
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('/css/portal.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
	</style>
</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <div class="search-mobile-trigger d-sm-none col">
			            <i class="search-mobile-trigger-icon fas fa-search"></i>
			        </div><!--//col-->
		            <div class="app-utilities col-auto">
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{asset('/images/user.png')}}" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="login.html">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{asset('/images/app-logo.svg')}}" alt="logo"><span class="logo-text">Novatek</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="{{URL::to('admin/')}}">
						        <span class="nav-icon"><img src="{{asset('images/icons/icons8-home-64.png')}}" style="width:30px;height:30px" alt="">
						         </span>
		                         <span class="nav-link-text">Overview</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
						<li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon"><img src="{{asset('images/icons/icons8-category-100.png')}}" style="width:30px;height:30px" alt="">
						         </span>
		                         <span class="nav-link-text">Categories</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/create_category')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> Create Category</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/view_category')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Category</a></li>
						        </ul>
					        </div>
							
					    </li><!--//nav-item-->	
						<li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon"><img src="{{asset('images/icons/icons8-brand-64.png')}}" style="width:30px;height:30px" alt="">
						         </span>
		                         <span class="nav-link-text">Brands</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/create_brand')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> Create Brand</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/view_brand')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Brand</a></li>
								</ul>
					        </div>
							
					    </li><!--//nav-item-->	
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-3" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon"><img src="{{asset('images/icons/icons8-product-64.png')}}" style="width:30px;height:30px" alt="">
						         </span>
		                         <span class="nav-link-text">Products</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/create_product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> Create Products</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/view_product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Product</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->			
						<li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-4" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon"><img src="{{asset('images/icons/icons8-user-80.png')}}" style="width:30px;height:30px" alt="">
						         </span>
		                         <span class="nav-link-text">Users</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-4" class="collapse submenu submenu-4" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('admin/view_user')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View User</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->		
						<li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-5" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon"><img src="{{asset('images/icons/icons8-order-256.png')}}" style="width:30px;height:30px" alt="">
						         </span>
		                         <span class="nav-link-text">Orders</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-5" class="collapse submenu submenu-5" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('/product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Order</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->		
							
					
						
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav--> 
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
               @yield('admin-content')
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->  
    </div><!--//app-wrapper-->    					

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Javascript -->          
    <script src="{{asset('plugins/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>  
    <!-- Charts JS -->
    {{-- <script src="{{asset('plugins/chart.js/chart.min.js')}}"></script> 
    <script src="{{asset('js/index-charts.js')}}"></script>  --}}
    <!-- Page Specific JS -->
    <script src="{{asset('js/app.js')}}"></script> 
	
</body>
</html> 

