@extends('layouts.app')





@section('content')
<div class="container">
  <div class ="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Books
          <a href="{{route('admin.reservations.create')}}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
          @if (count($reservations) === 0 )
          <p> There are no Reservations</p>
          @else
          <table id="table-books" class="table table-hover">
            <thead>
              <th>Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Party Size</th>
            </thead>
            <tbody>
              @foreach ($books as $book)
              <tr data-id="{{ $book->id }}">
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->date }}</td>
                <td>{{ $reservation->time }}</td>
                <td>{{ $reservation->party_size }}</td>
                <td>
                  <a href="{{ route('admin.reservation.show',$reservation->id) }}" class="btn btn-default">View</a>
                  <a href="{{ route('admin.reservation.edit',$reservation->id) }}" class="btn btn-warning">Edit</a>
                  <form style="display:inline-block" method="POST" action="{{route('admin.reservation.destroy', $reservation->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Delete</a>
                  </form>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
