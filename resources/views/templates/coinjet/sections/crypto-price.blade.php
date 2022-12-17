<section class="flat-price-coin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>PRICES</h2>
                    <p></p>
                </div>
                <div class="table-price">
                    <table>
                        <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Name</th>
                                <th>USD</th>
                                <th>Change 24h</th>
                                <th>Change 7d</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cryptos as $crypto)
                                <tr>
                                    <td>{{$crypto->symbol}}</td>
                                    <td>{{$crypto->name}}</td>
                                    <td>{{$crypto->usd}}</td>
                                    <td class="color-green">{{$crypto->change_24_hr}}</td>
                                    <td class="color-green">{{$crypto->change_7_day}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.table-price -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-price-coin -->