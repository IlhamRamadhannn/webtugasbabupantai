@extends('layout.master')

@section('content')
<div class="container pt-5" style="min-height: calc(100vh - 88px); padding-top: 120px;">
    <div class="row">
        <div class="col-8 offset-2">
            <h5 class="text-center text-white fw-bold mb-4" 
                style="text-shadow: 4px 4px 20px rgba(0, 0, 0, 0.3); font-size: 2.5rem; margin-top: 100px;">
                {{ __('transaksi.donation_transaction') }}
            </h5>

            <form method="post" action="{{ route('transaksi.store') }}" 
                  style="background-color: rgba(0, 0, 0, 0.4); padding: 30px; border-radius: 10px; margin-bottom: 20px;">
                @csrf
                
                <div class="mb-4">
                    <label class="text-white fw-bold" style="font-size: 1.2rem;" for="amount">{{ __('transaksi.donation_amount') }}</label>
                    <input type="number" name="amount" id="amount" class="form-control" 
                           placeholder="{{ __('transaksi.enter_amount') }}" onkeyup="formatRupiah(this)" required>
                </div>

                <div class="mb-4">
                    <label class="text-white fw-bold" style="font-size: 1.2rem;">{{ __('transaksi.payment_method') }}</label>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" value="ovo" id="ovo">
                            <label class="form-check-label text-white fw-bold" for="ovo">OVO</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" value="gopay" id="gopay">
                            <label class="form-check-label text-white fw-bold" for="gopay">Gopay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" value="shopeePay" id="shopeepay">
                            <label class="form-check-label text-white fw-bold" for="shopeepay">ShopeePay</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" value="dana" id="dana">
                            <label class="form-check-label text-white fw-bold" for="dana">DANA</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success btn-lg text-center rounded-pill py-3 px-5" type="submit">
                    {{ __('transaksi.submit_donation') }}
                </button>
            </form>
            <!-- <div class="d-flex gap-2">
                 <a href="{{ route('change.language', 'en') }}" class="btn btn-secondary">English</a>
                 <a href="{{ route('change.language', 'id') }}" class="btn btn-secondary">Indonesia</a>
             </div> -->
        </div>
    </div>
</div>
@endsection
