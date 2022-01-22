<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
	<link rel="apple-touch-icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- FontAwesome JS-->
    <script defer src="{{asset('plugins/fontawesome/js/all.min.js')}}"></script>

    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('/css/portal.css')}}">

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
					        <a class="nav-link" href="{{URL::to('dashboard')}}">
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
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('/product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Category</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="account.html"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> Create Category</a></li>
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
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('/product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Category</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="account.html"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> Create Category</a></li>
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
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('/product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View Product</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="account.html"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> Create Product</a></li>
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
							        <li class="submenu-item"><a class="submenu-link" href="{{URL::to('/product')}}"><img src="{{asset('images/icons/icons8-geometric-circle-dot-shape-with-ring-pattern-24.png')}}"  style="width:10px;height:10px" alt=""> View User</a></li>
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

