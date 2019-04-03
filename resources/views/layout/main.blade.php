<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="/css/material-dashboard.css" rel="stylesheet" />
    <script src="https://unpkg.com/vue"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">


        <style>
            @if(Request::route()->uri() == 'bill-items')
            .sidebar {
                width: 45%;
            }
            .main-panel {
                width: 55%;
            }
            .sidebar .sidebar-wrapper {
                width: 488px;
            }
            @endif
        </style>
</head>

<body>
<div class="wrapper" @if(Request::route()->uri() == 'bill-items')id="billing"@elseif(Request::route()->uri() == 'customers')id="customer"@endif>
    <div class="sidebar" data-color="purple" data-background-color="white">
        @if(Request::route()->uri() != 'bill-items')
            @include('layout.sidebar')
        @else
            @include('layout.form')
        @endif
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
              <span class="bmd-form-group"><div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                <div class="ripple-container"></div></button>
              </div></span>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <!-- your content here -->
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                    </ul>
                </nav>
            {{--<div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
            </div>--}}
            <!-- your footer here -->
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap-material-design.min.js"></script>
<script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chartist JS -->
<script src="js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/material-dashboard.min.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="demo/demo.js"></script>
@yield('extra-scripts')
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<!-- Sharrre libray -->
{{--<script src="demo/jquery.sharrre.js"></script>--}}

<script type="text/javascript">
    $( document ).ready(function() {
    });

</script>

<script>
    new Vue({
        el: '#billing',
        data() {
            return {
                billItems: [],
                isSubmitDisabled: true
            }
        },
        methods: {
            addItemToBill: function (id, name, price, discount_percentage, after_discount_price) {

                var data = {
                    "id": id,
                    "name": name,
                    "price": price,
                    "amount": price,
                    "discount_percentage": discount_percentage,
                    "after_discount_price": after_discount_price
                };

                if(this.billItems.length) {
                    var insert = true;
                    var that = this;
                    this.billItems.forEach(function(element) {
                        if(element.id == id) {
                            that.increaseQuantity(id);
                            insert = false;
                        }
                    });
                    if(insert) {
                        data.quantity = 1;
                        this.billItems.push(data);
                    }
                } else {
                    data.quantity = 1;
                    this.billItems.push(data);
                }

                this.isSubmitDisabled = false;
            },
            reduceQuantity: function (id) {
                if(this.billItems.length) {
                    var that = this;
                    this.billItems.forEach(function(element) {
                        if(element.id == id) {
                            if(element.quantity > 1) {
                                element.quantity = element.quantity - 1;
                                element.amount = element.quantity * element.price;
                            } else {
                                that.removeItem(id, element.name)
                            }

                        }
                    });
                } else {
                    this.isSubmitDisabled = true;
                }
            },
            increaseQuantity: function (id) {
                if(this.billItems.length) {
                    this.billItems.forEach(function(element) {
                        if(element.id == id) {
                            element.quantity = element.quantity + 1;
                            element.amount = element.quantity * element.price;

                        }
                    });
                }
            },
            removeItem: function (id, name) {
                if(confirm("Would you really like to remove "+name+"?")) {
                    var that = this;
                    this.billItems.forEach(function(element,index) {
                        if(element.id == id) {
                            that.billItems.splice(index,1);
                        }
                    });
                    if(!this.billItems.length) {
                        this.isSubmitDisabled = false;
                    }
                }
            },
            activateSubmitButton: function() {
                if(this.billItems.length) {
                    this.isSubmitDisabled = false;
                }
            },
            calculateAmount: function(element) {

            },
            submitBill: function () {
                if(this.billItems.length) {
                    var data = {"billItems" : this.billItems};
                    console.log(data);
                    $.ajax({
                        "method": "POST",
                        "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        "url": "{{URL::to('/bill/create')}}",
                        "data": data,
                        "success": function(res) {
                            console.log("here");
                            console.log(res);
                        }
                    });
                } else {
                    alert("Please add some item to proceed");
                }

            }
        }
    });

    new Vue({
        el: '#customer',
        data() {
            return {
                customer: {
                    phone: null,
                    email: null,
                    firstName: null,
                    lastName: null,
                    address: null,
                    city: "Silchar",
                    country: "India",
                    pinCode: null,
                    note: null
                },
                isSubmitDisabled: true,
                isSearchDisabled: true
            }
        },
        methods: {
            addCustomer: function () {

            },
            searchCustomer: function () {
                if(this.validatePhone()){
                    //search user
                    this.showNotification('primary','Phone number cannot be found in the database, please add the user and continue');
                    return false;
                }

            },
            validatePhone: function () {
                if (this.customer.phone == null) {
                    this.showNotification('danger','Phone number cannot be empty');
                    return false;
                }
                return true;
            },
            validateOtherDetails: function () {
                var validator = false;
                if (this.customer.email == null) {
                    this.showNotification('danger','Email cannot be empty');
                    validator = true;
                } else if (this.validateEmail(this.customer.email)) {
                    this.showNotification('danger','Email is wrong');
                    validator = true;
                }
                if (this.customer.firstName == null) {
                    this.showNotification('danger','First Name cannot be empty');
                    validator = true;
                }
                if (this.customer.lastName == null) {
                    this.showNotification('danger','Last Name cannot be empty');
                    validator = true;
                }
                if (this.customer.address == null) {
                    this.showNotification('danger','Address cannot be empty');
                    validator = true;
                }
                if (this.customer.city == null) {
                    this.showNotification('danger','City cannot be empty');
                    validator = true;
                }
                if (this.customer.country == null) {
                    this.showNotification('danger','Country cannot be empty');
                    validator = true;
                }
                if (this.customer.pinCode == null) {
                    this.showNotification('danger','Pin Code cannot be empty');
                    validator = true;
                }
                return !validator;
            },
            validateEmail: function(email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return !re.test(String(email).toLowerCase());
            },
            goToBilling: function () {

            },
            submitCustomerData: function() {
                this.validatePhone();
                this.validateOtherDetails() ;
            },
            showNotification: function (type, message) {
                //var type = ['', 'info', 'danger', 'success', 'warning', 'rose', 'primary'];

                $.notify({
                    icon: "add_alert",
                    message: message

                }, {
                    type: type,
                    timer: 3000,
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });
            }
        }
    });
</script>
</html>