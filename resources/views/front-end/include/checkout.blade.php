@extends('front-end.layout.paymentapp')
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content container ">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item ">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details" style="padding: 30px ;border-radius: 11px;">
                        <h2>Nusa Dua</h2>
                        <p>
                            Bali
                        </p>

                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nasionality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="https://picsum.photos/200" alt="" height="60"></td>
                                        <td class="align-middle">Baharma</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <img src="https://cdn3.iconfinder.com/data/icons/faticons/32/remove-01-512.png"
                                                alt="" width="30">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://picsum.photos/200" alt="" height="60"></td>
                                        <td class="align-middle">Baharma</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <img src="https://cdn3.iconfinder.com/data/icons/faticons/32/remove-01-512.png"
                                                alt="" width="30">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline " method="post" action="">
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="username" class="sr-only">Name</label>
                                        <input type="text" name="username" class="form-control " id="inputUsername"
                                            placeholder="Username" />
                                    </div>
                                    <div class="col">
                                        <label for="nationality" class="sr-only">Name</label>
                                        <input type="text" name="nationality" class="form-control mb-2 mr-sm-2"
                                            id="inputNationality" placeholder="Nationality" />
                                    </div>
                                    <div class="col">
                                        <select id="inputState" class="form-select">
                                            <option value="" selected>VISA</option>
                                            <option value="1">30 Days</option>
                                            <option value="0">N/A</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="doePassport" class="sr-only">DOE Passport</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" name="doe_passport" class="form-control datepicker"
                                                id="doePassport" placeholder="DOE Passport" />
                                        </div>
                                    </div>
                                    <button type="submit" class="col btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </div>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">You will be redirected to another page to pay using GO-PAY
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-detail card-right" style="padding: 20px;">
                        <h2>Member Are going</h2>
                        <div class="members my-2">

                        </div>
                        <hr>
                        <h2>Trip informasi</h2>
                        <table class="trip-information" >
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    2 person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">
                                    $ 190,00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    $ 280,00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right">
                                    <span class="text-blue">$ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instraksion</h2>
                        <p class="payment-instruction">
                            please complate your payment int
                        </p>
                        <div class="bank row">
                            <div class="bank-item pb-3 col">
                                <div class="description">
                                    <img src="{{asset('nomads-desaint-main/img/credit-card-icon-png-4401.png')}}" alt="" class="bank-image" width="50">
                                    <h3>PT Nomads</h3>
                                    <p>
                                        0124 5855 554
                                        <br>
                                        Bank Central
                                    </p>
                                </div>
                                
                            </div>
                            <div class="bank-item pb-3 col">
                                <div class="description">
                                    <img src="{{('nomads-desaint-main/img/credit-card-icon-png-4401.png')}}" alt="" class="bank-image" width="50">
                                    <h3>PT Nomads</h3>
                                    <p>
                                        0124 5855 554
                                        <br>
                                        Bank Central
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container d-grid gap-2">
                        <a href="#" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" >
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.xzoom,.xzoom-gallery').xzoom({
            zoomWidth: 500,

            title: false,
            tint: '#333',
            Xoffset: 15
        });

        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd',
            icons: {
                rightIcon: '<img src="nomads-desaint-main/img/calendar-icon-black_318-9776.jpg" style="width:30px; margin-bottom:22px; height:40px;"/>'
            }
        })
    });
</script>
@endpush