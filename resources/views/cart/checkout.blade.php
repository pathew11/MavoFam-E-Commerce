@extends('layouts.app')

@section('content')
        <h2>Finalizare comanda</h2>

        <h3>Informatii Livrare</h3>

        <form action="{{route('orders.store')}}" method="post">
            @csrf


            <div class="form-group">
                <label for="">Nume si Prenume</label>
                <input type="text" name="shipping_fullname" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Juder</label>
                <input type="text" name="shipping_state" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Oras</label>
                <input type="text" name="shipping_city" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Cod Postal</label>
                <input type="number" name="shipping_zipcode" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Adresa</label>
                <input type="text" name="shipping_address" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Telefon</label>
                <input type="text" name="shipping_phone" id="" class="form-control">
            </div>

            <h4>Optiuni de plata</h4>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                    Ramburs
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                    Paypal

                </label>

            </div>


            <button type="submit" class="btn btn-primary mt-3">Place Order</button>


        </form>
@endsection
