<h1>Informations de l'utilisateur</h1>
<table>
    <tr>
        <td>nom et prénom : </td>
        <td>{{$order->name}}</td>
    </tr>
    <tr>
        <td>adresse : </td>
        <td>{{$order->address}}</td>
    </tr>
    <tr>
        <td>numéro de téléphone : </td>
        <td>{{$order->phoneNumber}}</td>
    </tr>
</table>

<h1>Informations sur la commande</h1>
@foreach ($order->products as $product)
<table>
    <tr>
        <td><img src="{{'https://ik.imagekit.io/cjvyejrxtm'.$product->photo.'?tr=h-150,w-150'}}" /></td>
        <td>
            <table>
                <tr>
                    <td>référence du produit: </td>
                    <td>{{$product->id}}</td>
                </tr>
                <tr>
                    <td>nom du produit: </td>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <td>quantité : </td>
                    <td><strong>{{$product->pivot->product_count}}</strong></td>
                </tr>
                <tr>
                    <td>prix unitaire aprés remise : </td>
                    <td>{{number_format($product->pivot->product_price, 3, '.', '')}}TND</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<hr>
@endforeach

<h2> Montant total avant livraison: {{$total_price_before_delivery}} </h2>
<h2> Frais de livraison: {{$delivery_price}} </h2>
<h1> Montant total: {{$total_price}} </h2>