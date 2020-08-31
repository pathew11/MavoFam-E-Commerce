@component('mail::message')
    #Comanda a fost procesata

    Multumim pentru incredere!

    Factura dumneavoastra este atasata

    <table class="table">
        <thead>
        <tr>
            <th>Numele produsului</th>
            <th>Cantitate</th>
            <th>Pret</th>
        </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->pivot->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    Total : {{$order->grand_total}}
    @component('mail::button' )
        Button
    @endcomponent

    Thanks,<br>
    {{config('app.name')}}
@endcomponent
