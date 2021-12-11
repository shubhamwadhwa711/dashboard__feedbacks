@extends('app')
@section('title', $title)
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
    <div class="col-lg-9">
        <!-- Content Column -->
        <div class="row display-flex">
            
            <div class="col-lg-4 mb-2">

                <div class="card shadow mb-1 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">User Bio</h6>
                    </div>
                    <div class="card-body">
                        <p class="mb-1"><i class="fas fa-user text-dark"></i> <span id="name">Avinash Kumar Singh</span></p>
                        <p class="mb-1"><i class="fas fa-mobile text-dark"></i> <span id="mobile">+91 7002312511</span></p>
                        <p class="mb-1"><i class="fas fa-envelope text-dark"></i> <span id="email">avinashks.me@gmail.com</span></p>
                        <p class="mb-1"><i class="fas fa-home text-dark"></i> <span id="address">Bangalore, Karnataka, 560102</span></p>
                        <p class="mb-1"><i class="fas fa-address-card text-dark"></i> GST - <span id="gst">ABCD1234</span> <button class="btn btn-primary sm-btn" data-toggle="modal" data-target="#editGST">Enter/Edit GST</button></p>
                        <ul class="d-flex align-items-center justify-content-between mt-3 mb-0">
                            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editAccountDetails">Account Details</button></li>
                            <li><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editBioDetails">Edit</button></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-2">

                <div class="card shadow mb-1 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Wallet</h6>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="vip__wallet-box">
                                <div class="vip__total-balance text-center d-flex align-items-center justify-content-between">
                                    <h4><i class="fa fa-university"></i> Total Wallet Balance</h4>
                                    <p>₹<span id="wallet_balance">5000.00</span></p>
                                </div>
                                <div class="vip__balance-table">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>On Hold</td>
                                                <td>₹<span id="hold_balance">500.00</td>
                                            </tr>
                                            <tr>
                                                <td>Withdrawn</td>
                                                <td>₹<span id="withdrawn_balance">3500.00</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <ul class="d-flex align-items-center justify-content-between mt-1 mb-0">
                                <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#walletStatement">Statement</button></li>
                                <li><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addWalletTransaction">Add</button></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 mb-2">

                <div class="card shadow mb-1 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Search</h6>
                    </div>
                    <div class="card-body">
                        <a href="#nav-search" class="btn btn-primary mb-2" data-toggle="modal" data-target="#searchModal">Search</a><br/>
                        <a href="#nav-advancesearch" class="btn btn-primary mb-2" data-toggle="modal" data-target="#searchModal">Advance Search</a><br/>
                        <a href="#nav-placementsearch" class="btn btn-primary mb-2" data-toggle="modal" data-target="#searchModal">Exact Placement Search</a><br/>
                        <a href="#nav-bulksearch" class="btn btn-primary mb-2" data-toggle="modal" data-target="#searchModal">Bulk Search</a><br/>
                        <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#searchModal">Category</a><br/>
                        <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#searchModal">Sub Category</a>
                        <form>
                          <div class="d-flex align-items-center justify-content-between mx-4">
                            <div class="form-group mb-0">
                                <input type="checkbox" class="form-check-input" id="whatsapp">
                                <label class="form-check-label" for="whatsapp">Whatsapp</label>
                            </div>
                            <div class="form-group mb-0">
                                <input type="checkbox" class="form-check-input" id="email">
                                <label class="form-check-label" for="email">Email</label>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="row display-flex">
            
            <div class="col-lg-4 mb-2">

                <div class="card shadow mb-2 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Whatsapp</h6>
                    </div>
                    <div class="card-body">
                        <div class="vip__btn-box">
                            <button type="button" class="btn btn-info">85</button>
                            <button type="button" class="btn btn-info">70</button>
                            <button type="button" class="btn btn-info">80</button>
                            <button type="button" class="btn btn-info">Hello</button>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between mt-5 mb-0">
                            <li><button type="button" class="btn btn-primary">Manage</button></li>
                            <li><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#whatsappButtonAdd">Add New Button</button></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-2">

                <div class="card shadow mb-2 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                    </div>
                    <div class="card-body">
                        <div class="vip__btn-box">
                            <button type="button" class="btn btn-info">Invoice</button>
                            <button type="button" class="btn btn-info">NOC</button>
                            <button type="button" class="btn btn-info">Regd. Docs</button>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between mt-5 mb-0">
                            <li><button type="button" class="btn btn-primary">Manage</button></li>
                            <li><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#emailButtonAdd">Add New</button></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 mb-2">

                <div class="card shadow mb-2">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Toggles</h6>
                    </div>
                    <div class="card-body">
                        <div class="vip__toggles-box">
                            <!-- Custom switch -->
                            <p class="custom-control custom-switch custom-switch-lg">
                                <input class="custom-control-input" id="customSwitch1" type="checkbox" checked>
                                <label class="custom-control-label font-italic" for="customSwitch1">No Reference Please</label>
                            </p>
                            <p class="custom-control custom-switch custom-switch-lg">
                                <input class="custom-control-input" id="customSwitch2" type="checkbox" checked>
                                <label class="custom-control-label font-italic" for="customSwitch2">Friend Zone Access</label>
                            </p>
                            <p class="custom-control custom-switch custom-switch-lg">
                                <input class="custom-control-input" id="customSwitch3" type="checkbox" checked>
                                <label class="custom-control-label font-italic" for="customSwitch3">Send Reference</label>
                            </p>
                        </div>
                        <ul class="d-flex align-items-center justify-content-between mt-3 mb-0">
                            <li>
                                <a href="https://google.com" target="_blank" class="btn btn-primary">ASANA URL - google.com</a>
                                <button type="button" class="btn btn-danger sm-btn ml-2" data-toggle="modal" data-target="#editASANA">Add/Edit URL</button></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="row display-flex">
            <div class="col-lg-8 mb-2">
                <div class="card shadow mb-2 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Reg Number</th>
                                        <th>Amount</th>
                                        <th>OG Amount</th>
                                        <th>Order Status</th>
                                        <th>Pending State</th>
                                        <th>Order Status 2</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td>Completed</td>
                                        <td>State</td>
                                        <td>Status 2</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td>Completed</td>
                                        <td>State</td>
                                        <td>Status 2</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td>Completed</td>
                                        <td>State</td>
                                        <td>Status 2</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td>Completed</td>
                                        <td>State</td>
                                        <td>Status 2</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="mt-4">Place Order/Add to Wishlist</h6>
                                <form
                                    class="d-none d-sm-inline-block form-inline mb-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Enter Number..."
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-bg" type="button">
                                                <i class="fas fa-search fa-sm"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ml-4 mt-2">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>OG Amount</th>
                                                <th>Amount</th>
                                                <th>Total Sum</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2000.00</td>
                                                <td><p contenteditable="true">5000.00</p></td>
                                                <td>7000.00</td>
                                                <td class="text-center"><button class="btn btn-primary">Place Order</button></td>
                                                <td class="text-center"><button class="btn btn-primary">Add to Wishlist</button></td>
                                                <td class="vip-sticky__action">
                                                    <div class="btn-group">
                                                      <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                      </button>
                                                      <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="card shadow mb-2 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Old Orders</h6>
                    </div>
                    <div class="card-body">
                        <ul class="vip__old-orders">
                            <li><p><i class="fas fa-check-circle"></i> - <span>22</span></p></li>
                            <li><p><i class="fas fa-university"></i> - <span>22</span></p></li>
                            <li><p><i class="fas fa-exclamation"></i> - <span>22</span></p></li>
                        </ul>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Order Status</th>
                                        <th>Amount</th>
                                        <th>OG Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Completed</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Completed</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Completed</td>
                                        <td>2000.00</td>
                                        <td>1500.00</td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row display-flex">
            <div class="col-lg-8 mb-2">
                <div class="card shadow mb-2 h-100">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">Wishlist</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Reg Number</th>
                                        <th>OG Amount</th>
                                        <th>Seller Type</th>
                                        <th>Total Sum</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>Seller</td>
                                        <td>20000.00</td>
                                        <td></td>
                                        <td></td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Place Order</a>
                                                <a class="dropdown-item" href="#">Remove From Wishlist</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>Seller</td>
                                        <td>20000.00</td>
                                        <td></td>
                                        <td></td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Place Order</a>
                                                <a class="dropdown-item" href="#">Remove From Wishlist</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>Seller</td>
                                        <td>20000.00</td>
                                        <td></td>
                                        <td></td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Place Order</a>
                                                <a class="dropdown-item" href="#">Remove From Wishlist</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2000.00</td>
                                        <td>Seller</td>
                                        <td>20000.00</td>
                                        <td></td>
                                        <td></td>
                                        <td class="vip-sticky__action">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Place Order</a>
                                                <a class="dropdown-item" href="#">Remove From Wishlist</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="card shadow mb-2 h-100">
                    <div class="card-header py-2 d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Referred to</h6>
                        <button class="btn btn-primary">Add Now</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>01/02/2021</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>01/02/2021</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>01/02/2021</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">

        <!-- Notepad -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notepad</h6>
            </div>
            <div class="card-body">
                <textarea class="form-control" placeholder="Enter Notes" rows="3"></textarea>
                <button class="btn btn-primary mt-2">Save for next time</button>
            </div>
        </div>
        <!-- Updates Box -->
        <div class="card shadow mb-4 vip__updates-box">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Updates & Comments</h6>
            </div>
            <div class="card-body">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-updates-comments" role="tab" aria-controls="nav-updates-comments" aria-selected="true">Updates &amp; Comments</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-updates" role="tab" aria-controls="nav-updates" aria-selected="false">Updates</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-comments" role="tab" aria-controls="nav-comments" aria-selected="false">Comments</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-updates-comments" role="tabpanel" aria-labelledby="nav-updates-comments-tab">
                        <div class="vip__update-item update">
                            <p>This is an update</p>
                        </div>
                        <div class="vip__update-item comment">
                            <p>This is an comment</p>
                        </div>
                        <div class="vip__update-item comment">
                            <p>This is an comment</p>
                        </div>
                        <div class="vip__update-item update">
                            <p>This is an update</p>
                        </div>
                    </div>
                  <div class="tab-pane fade" id="nav-updates" role="tabpanel" aria-labelledby="nav-updates-tab">
                      <div class="vip__update-item update">
                            <p>This is an update</p>
                        </div>
                        <div class="vip__update-item update">
                            <p>This is an update</p>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="nav-comments" role="tabpanel" aria-labelledby="nav-comments-tab">
                        <div class="vip__update-item comment">
                            <p>This is an comment</p>
                        </div>
                        <div class="vip__update-item comment">
                            <p>This is an comment</p>
                        </div>
                  </div>
                </div>
                <hr>
                <form class="w-100">
                  <div class="form-row align-items-center w-100 d-flex align-items-center justify-content-between">
                    <div class="col-auto">
                      <textarea class="form-control" placeholder="Enter Update/Comment" rows="3"></textarea>
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-2">Send</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection


@section('popupModal')
<!-- Modals Start-->
    <!-- GST Enter/Edit Modal -->
    <div class="modal fade" id="editGST" tabindex="-1" aria-labelledby="gstModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add/Edit GST</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="editGST-form">
              <div class="form-group">
                <input type="input" class="form-control" name="GST_no" placeholder="Enter/Edit GST...">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submit-btn-form" data-form-id="editGST-form">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ASANA URL Enter/Edit Modal -->
    <div class="modal fade" id="editASANA" tabindex="-1" aria-labelledby="ASANAModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add/Edit ASANA URL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editASANA-form" method="POST">
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Enter/ASANA URL...">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Account Details Edit Modal -->
    <div class="modal fade" id="editAccountDetails" tabindex="-1" aria-labelledby="accountEditModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Account Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editAccountDetails-form" method="PUT">
              <div class="form-group">
                <input type="input" class="form-control" name="phone" placeholder="Enter Phonepe...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" name="googlepay" placeholder="Enter Google Pay...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" name="account_no" placeholder="Enter Bank Account Number...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" name="upi_no" placeholder="Enter UPI...">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary submit-btn-form" data-form-id="editAccountDetails-form">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- BIO Details Edit Modal -->
    <div class="modal fade" id="editBioDetails" tabindex="-1" aria-labelledby="bioEditModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Bio Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Edit Name...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="+91 7002312511" disabled>
              </div>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Edit Email...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Edit City...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Edit State...">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Edit Pin code...">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Wallet Record Adder Modal -->
    <div class="modal fade" id="addWalletTransaction" tabindex="-1" aria-labelledby="walletRecordModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Wallet Transaction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Add Transactiont type...">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Add date">
              </div>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Enter Amount...">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Wallet Statement Modal -->
    <div class="modal fade" id="walletStatement" tabindex="-1" aria-labelledby="walletStatementModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Wallet Statement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="vip__balance-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>On Hold</td>
                            <td>₹500.00</td>
                        </tr>
                        <tr>
                            <td>Withdrawn</td>
                            <td>₹3500.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Whatsapp Add Button Modal -->
    <div class="modal fade" id="whatsappButtonAdd" tabindex="-1" aria-labelledby="whatsappModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Whatsapp Add Button</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Name of Button...">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Enter SMS Content" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Create Button</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Email Add Button Modal -->
    <div class="modal fade" id="emailButtonAdd" tabindex="-1" aria-labelledby="emailModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Email Add Button</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="input" class="form-control" placeholder="Name of Button...">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Enter Email Content" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Create Button</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal -->
    <div class="modal fade vps__search-dialog" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered searchModalBot">
            <div class="modal-content">
                <div class="modal-header">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active show" id="nav-search-tab" data-toggle="tab" href="#nav-search" role="tab" aria-controls="nav-search" aria-selected="true">Search</a>
                            <a class="nav-item nav-link" id="nav-advancesearch-tab" data-toggle="tab" href="#nav-advancesearch" role="tab" aria-controls="nav-advancesearch" aria-selected="false">Advance Search</a>
                            <a class="nav-item nav-link" id="nav-placementsearch-tab" data-toggle="tab" href="#nav-placementsearch" role="tab" aria-controls="nav-placementsearch" aria-selected="false">Exact Placement Search <span>Coming Soon</span></a>
                            <a class="nav-item nav-link" id="nav-bulksearch-tab" data-toggle="tab" href="#nav-bulksearch" role="tab" aria-controls="nav-bulksearch" aria-selected="false">Bulk/Bunch Search <span>Coming Soon</span></a>
                        </div>
                    </nav>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-search" role="tabpanel" aria-labelledby="nav-search-tab">
                            <!-- Simple Search -->
                            <h3 class="vps__modal-title">Simple Search</h3>
                            <div class="vps__simple-search">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="/search/" method="get">
                                            <input style="width:100%;" autocomplete="off" type="search" class="form-control inputSearchMdl" name="search" id="inputSearchMdl" placeholder="Enter Number" required="" value="" autofocus="">
                                            <input hidden="" name="rtp" value="false">
                                            <input required="" type="radio" name="placement" id="s_start_with" value="1"> <label for="s_start_with">Start With</label>
                                            <input required="" type="radio" name="placement" id="s_anywhere" value="2" checked="checked"> <label for="s_anywhere">Anywhere</label>
                                            <input required="" type="radio" name="placement" value="3" id="s_end_with">
                                            <label for="s_end_with">End With</label>

                                            <br><br>
                                            <div class="d-flex align-items-center">
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Sort Filters
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Sort Numbers</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (High To Low)</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (Low To High)</a>
                                                    <a class="dropdown-item" href="#">Sort By Likes</a>
                                                    <a class="dropdown-item" href="#">Sort By Popularity</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (ascending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (descending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Similarity</a>
                                                  </div>
                                                </div>
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Price Filter
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <form class="form-inline">
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMin" class="sr-only">Min.</label>
                                                        <input type="input" class="form-control" id="priceMin" placeholder="Min.">
                                                      </div>
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMax" class="sr-only">Max.</label>
                                                        <input type="input" class="form-control" id="priceMax" placeholder="Max.">
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                                <div class="btn-group">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Filter
                                                  </button>
                                                  <div class="dropdown-menu p-4">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="basicSeller">
                                                        <label class="form-check-label" for="basicSeller">Basic Seller</label>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="comingSoon">
                                                        <label class="form-check-label" for="comingSoon">Coming Soon</label>
                                                    </div>
                                                    <div class="form-group form-check mb-0">
                                                        <input type="checkbox" class="form-check-input" id="cod">
                                                        <label class="form-check-label" for="cod">COD</label>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" value="Search" class="btn btn-primary btn-bg py-2">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Simple Search End -->
                        </div>
                        <div class="tab-pane fade" id="nav-advancesearch" role="tabpanel" aria-labelledby="nav-advancesearch-tab">

                            <!-- Advance Search -->
                            <h3 class="vps__modal-title">Advance Search</h3>
                            <div class="vps__advance-search">
                                <form class="Advanceformwcs" action="/search/">
                                    <div class="row">
                                        <div class="col-md-12 text-center px-sm-4">
                                            <div class="row p-3 p-relative border-radius border-show mb-3">
                                                <div class="col-12 AdvanceHeadwcs text-left">
                                                    <h4 class="mb-0">Number Placement</h4>
                                                </div>
                                                <div class="form-field col-md-4">
                                                    <input type="search" class="form-control input-text" name="start_with" placeholder="Start With e.g.(+91 9855)">
                                                </div>
                                                <div class="form-field col-md-4">
                                                    <input type="search" class="form-control input-text" name="anywhere" placeholder="Anywhere">
                                                </div>
                                                <div class="form-field col-md-4">
                                                    <input type="search" class="form-control input-text" name="end_with" placeholder="End With">
                                                </div>
                                            </div>
                                            <div class="row p-3 p-relative border-radius border-show mb-3">
                                                <div class="col-12 AdvanceHeadwcs text-left">
                                                    <h4 class="mb-0"> Others (For multiple values use comma (s)
                                                        e.g. 14,18)
                                                    </h4>
                                                </div>
                                                <div class="form-field col-md-4">
                                                    <input type="search" class="form-control input-text" name="must_contains" placeholder="Must Conatain">
                                                </div>
                                                <div class="form-field col-md-4">
                                                    <input type="search" class="form-control input-text" name="not_contains" placeholder="Not Contain">
                                                </div>
                                                <div class="form-field col-md-4">
                                                    <input type="search" class="form-control input-text" name="most_contains" placeholder="Most Contain"></div>
                                            </div>
                                            <div class="row p-3 p-relative border-radius border-show">
                                                <div class="col-12 AdvanceHeadwcs text-left">
                                                    <h4 class="mb-0">Total/Sum</h4>
                                                </div>
                                                <div class="form-field col-md-6">
                                                    <input type="search" class="form-control input-text" name="total" placeholder="Number Total">
                                                </div>

                                                <div class="form-field col-md-6">
                                                    <input type="search" class="form-control input-text" name="sum" placeholder="Number Sum"></div>
                                            </div>
                                            <input type="hidden" name="advance" value="true">
                                            <input type="hidden" name="rtp" value="false">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br/>
                                            <div class="d-flex align-items-center">
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Sort Filters
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Sort Numbers</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (High To Low)</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (Low To High)</a>
                                                    <a class="dropdown-item" href="#">Sort By Likes</a>
                                                    <a class="dropdown-item" href="#">Sort By Popularity</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (ascending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (descending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Similarity</a>
                                                  </div>
                                                </div>
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Price Filter
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <form class="form-inline">
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMin" class="sr-only">Min.</label>
                                                        <input type="input" class="form-control" id="priceMin" placeholder="Min.">
                                                      </div>
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMax" class="sr-only">Max.</label>
                                                        <input type="input" class="form-control" id="priceMax" placeholder="Max.">
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                                <div class="btn-group">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Filter
                                                  </button>
                                                  <div class="dropdown-menu p-4">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="basicSeller">
                                                        <label class="form-check-label" for="basicSeller">Basic Seller</label>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="comingSoon">
                                                        <label class="form-check-label" for="comingSoon">Coming Soon</label>
                                                    </div>
                                                    <div class="form-group form-check mb-0">
                                                        <input type="checkbox" class="form-check-input" id="cod">
                                                        <label class="form-check-label" for="cod">COD</label>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" value="Search" class="btn btn-primary btn-bg py-2">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Advance Search End -->
                        </div>
                        <div class="tab-pane fade" id="nav-bulksearch" role="tabpanel" aria-labelledby="nav-bulksearch-tab">
                            <h3 class="vps__modal-title">Bulk/Branch Search <span>How many Similar Numbers you want to buy?</span>
                            </h3>
                            <!-- Bulk/Branch Search -->
                            <div class="vps__bulk-search">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="cmxform" id="bulkForm" method="get" action="">
                                            <ul class="vps__bulk-searchbox">
                                                <li>I want</li>
                                                <li>
                                                    <input autocomplete="off" maxlength="2" class="form-control inputSearchMdl" id="bulkSearch" name="bulkSearch" type="text" value="" autofocus="">
                                                </li>
                                                <li>Similar Numbers</li>
                                            </ul>
                                            <br><br>
                                            <div class="d-flex align-items-center">
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Sort Filters
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Sort Numbers</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (High To Low)</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (Low To High)</a>
                                                    <a class="dropdown-item" href="#">Sort By Likes</a>
                                                    <a class="dropdown-item" href="#">Sort By Popularity</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (ascending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (descending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Similarity</a>
                                                  </div>
                                                </div>
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Price Filter
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <form class="form-inline">
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMin" class="sr-only">Min.</label>
                                                        <input type="input" class="form-control" id="priceMin" placeholder="Min.">
                                                      </div>
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMax" class="sr-only">Max.</label>
                                                        <input type="input" class="form-control" id="priceMax" placeholder="Max.">
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                                <div class="btn-group">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Filter
                                                  </button>
                                                  <div class="dropdown-menu p-4">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="basicSeller">
                                                        <label class="form-check-label" for="basicSeller">Basic Seller</label>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="comingSoon">
                                                        <label class="form-check-label" for="comingSoon">Coming Soon</label>
                                                    </div>
                                                    <div class="form-group form-check mb-0">
                                                        <input type="checkbox" class="form-check-input" id="cod">
                                                        <label class="form-check-label" for="cod">COD</label>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" value="Search" class="btn btn-primary btn-bg py-2">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Bulk/Branch Search End -->
                        </div>
                        <div class="tab-pane fade" id="nav-placementsearch" role="tabpanel" aria-labelledby="nav-placementsearch-tab">
                            <h3 class="vps__modal-title">Exact Placement Search</h3>
                            <!-- Exact Placement Search -->
                            <div class="vps__placement-search">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="cmxform" id="placementForm" method="get" action="/search/">
                                            <ul>
                                                <li><p>1</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch1" name="search1" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>2</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch2" name="search2" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>3</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch3" name="search3" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>4</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch4" name="search4" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>5</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch5" name="search5" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>6</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch6" name="search6" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>7</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch7" name="search7" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>8</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch8" name="search8" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>9</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch9" name="search9" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                                <li><p>10</p><input autocomplete="off" class="form-control inputSearchMdl" id="placementSearch10" name="search10" maxlength="1" type="text" placeholder="*" value="*" autofocus=""></li>
                                            </ul>
                                            <input type="hidden" name="placement" value="2">
                                            <input type="hidden" id="placementSearch" name="search" value="">
                                            <button type="reset" id="placementClear" class="btn vps__clear-btn">Clear
                                            </button>
                                            <br>
                                            <div class="d-flex align-items-center">
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Sort Filters
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Sort Numbers</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (High To Low)</a>
                                                    <a class="dropdown-item" href="#">Sort By Price (Low To High)</a>
                                                    <a class="dropdown-item" href="#">Sort By Likes</a>
                                                    <a class="dropdown-item" href="#">Sort By Popularity</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (ascending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Numbers (descending)</a>
                                                    <a class="dropdown-item" href="#">Sort By Similarity</a>
                                                  </div>
                                                </div>
                                                <div class="btn-group mr-2">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Price Filter
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <form class="form-inline">
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMin" class="sr-only">Min.</label>
                                                        <input type="input" class="form-control" id="priceMin" placeholder="Min.">
                                                      </div>
                                                      <div class="form-group mx-sm-3 mb-2">
                                                        <label for="priceMax" class="sr-only">Max.</label>
                                                        <input type="input" class="form-control" id="priceMax" placeholder="Max.">
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                                <div class="btn-group">
                                                  <button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Filter
                                                  </button>
                                                  <div class="dropdown-menu p-4">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="basicSeller">
                                                        <label class="form-check-label" for="basicSeller">Basic Seller</label>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="comingSoon">
                                                        <label class="form-check-label" for="comingSoon">Coming Soon</label>
                                                    </div>
                                                    <div class="form-group form-check mb-0">
                                                        <input type="checkbox" class="form-check-input" id="cod">
                                                        <label class="form-check-label" for="cod">COD</label>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" value="Search" class="btn btn-primary btn-bg py-2">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Exact Placement Search End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modals End-->
@endsection