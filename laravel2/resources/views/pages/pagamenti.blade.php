@extends('layout.main-layout')

@section('content')
  <div class="content">
    <h1>PAGAMENTI</h1>
    <ul>
      @foreach ($pagamenti as $pagamento)
        
          @if ($loop->even)
            <li class="red">
          @else
            <li class="green">
          @endif

          {{ $pagamento['id']}}
          {{ $pagamento['status']}}
          {{ $pagamento['price']}}
          {{ $pagamento['prenotazione_id']}}
          {{ $pagamento['pagante_id']}}
          {{ $pagamento['created_at']}}
          {{ $pagamento['updated_at']}}
          </li>
      @endforeach
    </ul>
  </div>
@endsection
