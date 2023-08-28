<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/orderConfirm.css')}}">

    <!--  Icons  -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

     
    <title>HungryCampus-Admin</title>
</head>
<body>

    <div class="main-content" >

        <div class="main1">

            <div class="recent-grid">

                <div class="projects">

                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">

                                <table width="100%">

                                <form action="{{ route('orderConfirm') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="code" value="{{ $code }}">
                                    <input type="hidden" name="productid" id="productid" value="{{ $productid}}">
                                    
                                    <div class="code-header">
                                        <h2>Order Confirmation Page</h2>
                                    </div>

                                    <div class="code-header2">
                                        <div id="orderDetails">
                                        </div>
                                    </div>

                                    <div class="code-header3">
                                        <h3 id="tag2">Accept the Order</h3>
                                        <div id="form2">
                                            <div class="code-button2">
                                                <button class="btn btn-primary btn-embossed" name="action" value="no" id="bu">NO</button>
                                            </div>
                                            <div class="code-button3">
                                                <button class="btn btn-primary btn-embossed" name="action" value="yes" id="bu">Yes</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>


                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="{{asset('js/orderConfirm.js')}}"></script>
</body>
</html>