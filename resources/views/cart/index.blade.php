@extends('layouts.app')
@section('content')

    <h2>Cosul tau</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Nume</th>
            <th>Pret</th>
            <th>Cantitate</th>
            <th>Actiune</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>
                    {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                </td>
                <td>
                    <form action="{{route('cart.update', $item->id)}}">
                        <input name="quantity" type="number" value="{{$item->quantity}}">
                        <input type="submit" value="Modifica">
                    </form>
                </td>
                <td>
                    <a href="{{route('cart.destroy', $item->id)}}">Sterge</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3>
        Total: {{\Cart::session(auth()->id())->getTotal()}} Lei
    </h3>
    <a href="{{route('cart.checkout')}}" class="btn btn-primary" role="button" >Continua</a>
@endsection
