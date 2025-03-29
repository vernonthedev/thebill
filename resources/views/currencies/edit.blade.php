<div class="container">
    <h2>Edit currency</h2>
    <form action="{{ route('currencies.update', $currency->id) }}" method="POST">
        @csrf
        @method("PATCH")
        <div class="mb-3">
            <label for="currency_name" class="form-label">currency_name</label>
            <input type="text" class="form-control" name="currency_name" value="{{old("currency_name", $currency["currency_name"])}}">
            @error("currency_name")
                <p>{{$message}}</p>
            @enderror
        </div>
<div class="mb-3">
            <label for="market_cap" class="form-label">market_cap</label>
            <input type="text" class="form-control" name="market_cap" value="{{old("market_cap", $currency["market_cap"])}}">
            @error("market_cap")
                <p>{{$message}}</p>
            @enderror
        </div>
<div class="mb-3">
            <label for="duration" class="form-label">duration</label>
            <input type="text" class="form-control" name="duration" value="{{old("duration", $currency["duration"])}}">
            @error("duration")
                <p>{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>