@extends('front.layout')

@section('main')
<!-- Content
  ============================================= -->
<div id="content" class="py-4">
    <div class="container">
        <div class="row">

            <!-- Left Panel
            ============================================= -->
            <aside class="col-lg-3">

                <!-- Profile Details
                =============================== -->
                <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                    <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="images/profile-thumb.jpg" alt="">
                        <div class="profile-thumb-edit custom-file bg-primary text-white" data-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                            <input type="file" class="custom-file-input" id="customFile">
                        </div>
                    </div>
                    <p class="text-3 font-weight-500 mb-2">Hello, Smith Rhodes</p>
                    <p class="mb-2"><a href="profile.html" class="text-5 text-light" data-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
                </div>
                <!-- Profile Details End -->

                <!-- Available Balance
                =============================== -->
                <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                    <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                    <h3 class="text-9 font-weight-400">$2956.00</h3>
                    <p class="mb-2 text-muted opacity-8">Available Balance</p>
                    <hr class="mx-n3">
                    <div class="d-flex"><a href="#" class="btn-link mr-auto">Withdraw</a> <a href="#" class="btn-link ml-auto">Deposit</a></div>
                </div>
                <!-- Available Balance End -->

                <!-- Need Help?
                =============================== -->
                <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                    <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
                    <h3 class="text-5 font-weight-400 my-4">Need Help?</h3>
                    <p class="text-muted opacity-8 mb-4">Have questions or concerns regrading your account?<br>
                        Our experts are here to help!.</p>
                    <a href="#" class="btn btn-primary btn-block">Chate with Us</a> </div>
                <!-- Need Help? End -->

            </aside>
            <!-- Left Panel End -->

            <!-- Middle Panel
            ============================================= -->
            <div class="col-lg-9">
                <h2 class="font-weight-400 mb-3">Transactions</h2>

                <!-- Filter
                ============================================= -->
                <div class="row">
                    <div class="col mb-2">
                        <form id="filterTransactions" method="post">
                            <div class="form-row">
                                <!-- Date Range
                                ========================= -->
                                <div class="col-sm-6 col-md-5 form-group">
                                    <input id="dateRange" type="text" class="form-control" placeholder="Date Range">
                                    <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span> </div>
                                <!-- All Filters Link
                                ========================= -->
                                <div class="col-auto d-flex align-items-center mr-auto form-group" data-toggle="collapse"> <a class="btn-link" data-toggle="collapse" href="#allFilters" aria-expanded="false" aria-controls="allFilters">All Filters<i class="fas fa-sliders-h text-3 ml-1"></i></a> </div>
                                <!-- Statements Link
                                ========================= -->
                                <div class="col-auto d-flex align-items-center ml-auto form-group">
                                    <div class="dropdown"> <a class="text-muted btn-link" href="#" role="button" id="statements" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-download text-3 mr-1"></i>Statements</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="statements"> <a class="dropdown-item" href="#">CSV</a> <a class="dropdown-item" href="#">PDF</a> </div>
                                    </div>
                                </div>

                                <!-- All Filters collapse
                                ================================ -->
                                <div class="col-12 collapse mb-3" id="allFilters">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="allTransactions" name="allFilters" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="allTransactions">All Transactions</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="paymentsSend" name="allFilters" class="custom-control-input">
                                        <label class="custom-control-label" for="paymentsSend">Payments Send</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="paymentsReceived" name="allFilters" class="custom-control-input">
                                        <label class="custom-control-label" for="paymentsReceived">Payments Received</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="refunds" name="allFilters" class="custom-control-input">
                                        <label class="custom-control-label" for="refunds">Refunds</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="withdrawal" name="allFilters" class="custom-control-input">
                                        <label class="custom-control-label" for="withdrawal">Withdrawal</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="deposit" name="allFilters" class="custom-control-input">
                                        <label class="custom-control-label" for="deposit">Deposit</label>
                                    </div>
                                </div>
                                <!-- All Filters collapse End -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Filter End -->

                <!-- All Transactions
                ============================================= -->
                <div class="bg-white shadow-sm rounded py-4 mb-4">
                    <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-4">All Transactions</h3>
                    <!-- Title
                    =============================== -->
                    <div class="transaction-title py-2 px-4">
                        <div class="row">
                            <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
                            <div class="col col-sm-7">Description</div>
                            <div class="col-auto col-sm-2 d-none d-sm-block text-center">Status</div>
                            <div class="col-3 col-sm-2 text-right">Amount</div>
                        </div>
                    </div>
                    <!-- Title End -->

                    <!-- Transaction List
                    =============================== -->
                    <div class="transaction-list">
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-toggle="tooltip" data-original-title="In Progress"><i class="fas fa-ellipsis-h"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">15</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">04</span> <span class="d-block text-1 font-weight-300 text-uppercase">APR</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $106</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Refund</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">28</span> <span class="d-block text-1 font-weight-300 text-uppercase">MAR</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Payment Sent</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-danger" data-toggle="tooltip" data-original-title="Cancelled"><i class="fas fa-times-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">16</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                        <div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
                            <div class="row align-items-center flex-row">
                                <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">15</span> <span class="d-block text-1 font-weight-300 text-uppercase">FEB</span> </div>
                                <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">+ $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Transaction List End -->

                    <!-- Transaction Item Details Modal
                    =========================================== -->
                    <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row no-gutters">
                                        <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                                            <div class="my-auto text-center">
                                                <div class="text-17 text-white my-3"><i class="fas fa-building"></i></div>
                                                <h3 class="text-4 text-white font-weight-400 my-3">Envato Pty Ltd</h3>
                                                <div class="text-8 font-weight-500 text-white my-4">$557.20</div>
                                                <p class="text-white">15 March 2020</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h5 class="text-5 font-weight-400 m-3">Transaction Details
                                                <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            </h5>
                                            <hr>
                                            <div class="px-3">
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">Payment Amount <span class="float-right text-3">$562.00</span></li>
                                                    <li class="mb-2">Fee <span class="float-right text-3">-$4.80</span></li>
                                                </ul>
                                                <hr class="mb-2">
                                                <p class="d-flex align-items-center font-weight-500 mb-4">Total Amount <span class="text-3 ml-auto">$557.20</span></p>
                                                <ul class="list-unstyled">
                                                    <li class="font-weight-500">Paid By:</li>
                                                    <li class="text-muted">Envato Pty Ltd</li>
                                                </ul>
                                                <ul class="list-unstyled">
                                                    <li class="font-weight-500">Transaction ID:</li>
                                                    <li class="text-muted">26566689645685976589</li>
                                                </ul>
                                                <ul class="list-unstyled">
                                                    <li class="font-weight-500">Description:</li>
                                                    <li class="text-muted">Envato March 2020 Member Payment</li>
                                                </ul>
                                                <ul class="list-unstyled">
                                                    <li class="font-weight-500">Status:</li>
                                                    <li class="text-muted">Completed<span class="text-success text-3 ml-1"><i class="fas fa-check-circle"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Transaction Item Details Modal End -->

                    <!-- Pagination
                    ============================================= -->
                    <ul class="pagination justify-content-center mt-4 mb-0">
                        <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"> <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a> </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
                    </ul>
                    <!-- Paginations end -->

                </div>
                <!-- All Transactions End -->
            </div>
            <!-- Middle End -->
        </div>
    </div>
</div>
<!-- Content end -->

@endsection
