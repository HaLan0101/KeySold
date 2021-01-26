<!DOCTYPE html>
<html lang="en">

<head>

    @include('ClientPart.Partials.index.head')

</head>

<body>
    <!-- Navigation -->
     @include('ClientPart.Partials.index.nav')

    <div class="col-lg-6 text-center mb-5">

    <!-- Jumbotron Header -->
    <div class="jumbotron my-4">
        <h2 class="display-4">Mon Panier</h2>
    </div>
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
            </thead>
            {{-- <tbody>
            <tr v-for="item in items">
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.quantity }}</td>
                <td>{{ item.price }}</td>
                <td>
                    <button v-on:click="removeItem(item.id)" class="btn btn-sm btn-danger">remove</button>
                </td>
            </tr>
            </tbody> --}}
        </table>
        {{-- <table class="table">
            <tr>
                <td>Items on Cart:</td>
                <td>{{itemCount}}</td>
            </tr>
            <tr>
                <td>Total Qty:</td>
                <td>{{ details.total_quantity }}</td>
            </tr>
            <tr>
                <td>Sub Total:</td>
                <td>{{ '$' + details.sub_total.toFixed(2) }} ({{details.cart_sub_total_conditions_count}} conditions applied)</td>
            </tr>
            <tr>
                <td>Total:</td>
                <td>{{ '$' + details.total.toFixed(2) }} ({{details.cart_total_conditions_count}} conditions applied)</td>
            </tr>
        </table> --}}
    </div>

  <!-- Footer -->
  @include('ClientPart.Partials.index.footer')

  <!-- Bootstrap core JavaScript -->
  @include('ClientPart.Partials.index.footer-script')

</body>

</html>

