{{-- @dd($sales) --}}

@foreach ($sales as $sale)
    
   {{-- {{$sale->customers->where($sale->customer_id ,'=' , 'id')}} --}}
    {{($array) $sale->customers}}

@endforeach